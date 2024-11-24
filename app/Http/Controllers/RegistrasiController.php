<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registrasi;
use PDF; // Untuk generate PDF menggunakan barryvdh/laravel-dompdf
use SimpleSoftwareIO\QrCode\Facades\QrCode; // Untuk QR Code
use Carbon\Carbon;

class RegistrasiController extends Controller
{
    /**
     * Halaman registrasi multi-step (Tata Tertib, Formulir, Sukses)
     */
    public function registrasi(Request $request)
    {
        // Step 1: Tata tertib
        if (!$request->has('step') || $request->input('step') == 1) {
            return view('pages.registrasi.tata-tertib', [
                'step' => 1,
            ]);
        }

        // Step 2: Formulir registrasi
        if ($request->input('step') == 2) {
            return view('pages.registrasi.form-registrasi', [
                'step' => 2,
            ]);
        }

        // Step 3: Proses dan simpan data registrasi
        if ($request->input('step') == 3) {
            // Validasi input
            $validatedData = $request->validate([
                'nama_lengkap' => 'required|string|max:255',
                'no_identitas' => 'required|digits:16|unique:registrasis,no_identitas,NULL,id,created_at,>,' . Carbon::now()->subDays(14),
                'no_hp' => 'required|digits_between:10,15',
                'email' => 'nullable|email|max:255',
                'nama_pendamping' => 'nullable|string|max:255',
                'tanggal_reservasi' => 'required|date|after:today|not_in:'.implode(',', $this->getDisabledDates()),
            ]);

            // Periksa kuota harian
            $quota = Registrasi::where('tanggal_reservasi', $validatedData['tanggal_reservasi'])->count();
            if ($quota >= 50) {
                return redirect()->back()->withErrors(['tanggal_reservasi' => 'Kuota pada tanggal ini sudah penuh. Silakan pilih tanggal lain.']);
            }

            // Buat data registrasi
            $registrasi = Registrasi::create([
                'nama_lengkap' => $validatedData['nama_lengkap'],
                'no_identitas' => $validatedData['no_identitas'],
                'no_hp' => $validatedData['no_hp'],
                'email' => $validatedData['email'],
                'nama_pendamping' => $validatedData['nama_pendamping'],
                'tanggal_reservasi' => $validatedData['tanggal_reservasi'],
                'qr_encrypted' => encrypt(json_encode([
                    'id' => uniqid(),
                    'nama_lengkap' => $validatedData['nama_lengkap'],
                    'tanggal_reservasi' => $validatedData['tanggal_reservasi'],
                ])),
            ]);

            // Redirect ke halaman sukses
            return redirect()->route('registrasi')->with([
                'step' => 3,
                'registrasiData' => $registrasi->toArray(),
            ]);
        }
    }

    /**
     * Generate PDF bukti registrasi
     */
    public function downloadPDF(Request $request)
    {
        $registrasiData = Registrasi::findOrFail($request->id);

        $qrCode = QrCode::size(150)->generate($registrasiData->qr_encrypted);
        $tataTertib = "
        1. Datang tepat waktu sesuai jadwal reservasi. <br>
        2. Wajib membawa KTP/SIM asli. <br>
        3. Menggunakan pakaian rapi dan sopan. <br>
        4. Tidak diizinkan membawa kamera atau ponsel untuk merekam. <br>
        5. Pelaporan harus dilakukan oleh yang bersangkutan. Jika diwakilkan, wajib membawa surat kuasa. <br>
        6. Tata tertib lainnya dapat dilihat di lokasi layanan.";

        $pdf = PDF::loadView('registrasi.pdf-template', [
            'registrasiData' => $registrasiData,
            'qrCode' => $qrCode,
            'tataTertib' => $tataTertib,
        ]);

        return $pdf->download('bukti-registrasi.pdf');
    }

    /**
     * Ambil daftar tanggal yang tidak bisa dipilih
     */
    private function getDisabledDates()
    {
        // Contoh data tanggal yang tidak bisa dipilih
        return [
            '2024-11-25', // Tanggal libur
            '2024-12-01', // Tanggal lainnya
        ];
    }
}
