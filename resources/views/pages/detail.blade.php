@extends('layouts.panel')

@section('head')
    <title>Lapor Mas Wapres! - Detail Pengaduan Tatap Muka</title>
    <meta property="og:title" content="Lapor Mas Wapres! - Detail Pengaduan Tatap Muka">
@endsection

@section('pages')
<!-- Content -->
<div class="flex flex-col justify-center items-center gap-y-5">
    <div class="flex flex-col gap-y-1 items-center justify-center text-center sm:mt-10">
        <h2 class="font-bold text-xl sm:text-2xl text-primary">Alur Pengaduan Tatap Muka</h2>
        <p class="font-normal italic text-base text-quote">Panduan Langkah Demi Langkah untuk Pengaduan Tatap Muka</p>
    </div>

    <p class="text-sm sm:text-base text-red font-bold text-center max-w-screen-md">PERHATIAN !! kuota harian hanya 60 orang</p>

    <div class="grid gap-y-4 sm:gap-y-5 w-full sm:grid-cols-1 md:grid-cols-2 gap-x-5 my-5 sm:mt-[64px] max-w-[968px]">
        <!-- Langkah 1: Registrasi Online -->
        <a href="https://form.jotform.com/243188226197060" target="_blank" class="hover:cursor-pointer group flex gap-x-4 px-4 py-3 w-full bg-white transform hover:scale-105 transition duration-300 hover:shadow-custom hover:bg-gradient-to-r from-white to-secondary border-primary hover:border-secondary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">1</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">Registrasi Online</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Pelapor melakukan registrasi online sebelum datang ke lokasi. klik disini untuk melakukan registrasi</p>
            </div>
        </a>

        <!-- Langkah 2: Datang -->
        <div class="hover:cursor-pointer group flex gap-x-4 px-4 py-3 w-full bg-white transform hover:scale-105 transition duration-300 hover:shadow-custom hover:bg-gradient-to-r from-white to-secondary border-primary hover:border-secondary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">2</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">Pelapor Datang</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Pelapor datang ke lokasi pengaduan di Kantor Sekretariat Wakil Presiden yang beralamat di Jl. Kebon Sirih No.14, Jakarta Pusat</p>
            </div>
        </div>

        <!-- Langkah 3: Pengecekan Bukti Registrasi Online -->
        <div class="hover:cursor-pointer group flex gap-x-4 px-4 py-3 w-full bg-white transform hover:scale-105 transition duration-300 hover:shadow-custom hover:bg-gradient-to-r from-white to-secondary border-primary hover:border-secondary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">3</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">Pengecekan Bukti Registrasi Online</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Petugas melakukan pengecekan bukti registrasi online pelapor.</p>
            </div>
        </div>

        <!-- Langkah 4: Tukar KTP -->
        <div class="hover:cursor-pointer group flex gap-x-4 px-4 py-3 w-full bg-white transform hover:scale-105 transition duration-300 hover:shadow-custom hover:bg-gradient-to-r from-white to-secondary border-primary hover:border-secondary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">4</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">Penukaran ID</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Pelapor menukarkan KTP/SIM untuk mendapatkan ID Tamu.</p>
            </div>
        </div>

        <!-- Langkah 5: Mengambil Antrian -->
        <div class="hover:cursor-pointer group flex gap-x-4 px-4 py-3 w-full bg-white transform hover:scale-105 transition duration-300 hover:shadow-custom hover:bg-gradient-to-r from-white to-secondary border-primary hover:border-secondary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">5</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">Mengambil Antrian</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Pelapor mengambil nomor antrian di mesin antrian.</p>
            </div>
        </div>

        <!-- Langkah 6: Meja Registrasi -->
        <div class="hover:cursor-pointer group flex gap-x-4 px-4 py-3 w-full bg-white transform hover:scale-105 transition duration-300 hover:shadow-custom hover:bg-gradient-to-r from-white to-secondary border-primary hover:border-secondary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">6</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">Meja Registrasi</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Pelapor menuju meja registrasi untuk verifikasi data.</p>
            </div>
        </div>

        <!-- Langkah 7: Menunggu Giliran Dipanggil -->
        <div class="hover:cursor-pointer group flex gap-x-4 px-4 py-3 w-full bg-white transform hover:scale-105 transition duration-300 hover:shadow-custom hover:bg-gradient-to-r from-white to-secondary border-primary hover:border-secondary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">7</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">Menunggu Antrian</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Pelapor menunggu di ruang tunggu hingga nomor antriannya dipanggil.</p>
            </div>
        </div>

        <!-- Langkah 8: Ruang Dumas -->
        <div class="hover:cursor-pointer group flex gap-x-4 px-4 py-3 w-full bg-white transform hover:scale-105 transition duration-300 hover:shadow-custom hover:bg-gradient-to-r from-white to-secondary border-primary hover:border-secondary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">8</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">Ruang Pengaduan</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Pelapor dipersilakan masuk ke Ruang Pengaduan sesuai nomor panggilan.</p>
            </div>
        </div>

        <!-- Langkah 9: Ke Loket Sesuai Panggilan -->
        <div class="hover:cursor-pointer group flex gap-x-4 px-4 py-3 w-full bg-white transform hover:scale-105 transition duration-300 hover:shadow-custom hover:bg-gradient-to-r from-white to-secondary border-primary hover:border-secondary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">9</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">Menuju Loket sesuai Nomor Antrian</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Pelapor dipersilakan menuju loket yang sesuai dengan nomor panggilan di layar.</p>
            </div>
        </div>

        <!-- Langkah 10: Petugas Memasukkan Laporan -->
        <div class="hover:cursor-pointer group flex gap-x-4 px-4 py-3 w-full bg-white transform hover:scale-105 transition duration-300 hover:shadow-custom hover:bg-gradient-to-r from-white to-secondary border-primary hover:border-secondary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">10</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">Petugas Memasukkan Laporan</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Petugas mencatat laporan pelapor pada sistem.</p>
            </div>
        </div>

        <!-- Langkah 11: Cetak Bukti Laporan -->
        <div class="hover:cursor-pointer group flex gap-x-4 px-4 py-3 w-full bg-white transform hover:scale-105 transition duration-300 hover:shadow-custom hover:bg-gradient-to-r from-white to-secondary border-primary hover:border-secondary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">11</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">Cetak Bukti Laporan</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Petugas memberikan bukti laporan kepada pelapor.</p>
            </div>
        </div>

        <!-- Langkah 12: Meninggalkan Ruangan -->
        <div class="hover:cursor-pointer group flex gap-x-4 px-4 py-3 w-full bg-white transform hover:scale-105 transition duration-300 hover:shadow-custom hover:bg-gradient-to-r from-white to-secondary border-primary hover:border-secondary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">12</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">Meninggalkan Ruangan</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Pelapor meninggalkan ruangan dan mengambil kembali KTP di lobi dengan menukarkan ID Tamu.</p>
            </div>
        </div>
    </div>

    <a onclick="openModal()" class="w-full bg-gradient-to-r from-primary to-secondary text-white text-center font-semibold text-sm py-3 rounded-lg transform hover:scale-105 transition duration-300 hover:shadow-custom cursor-pointer">
        <p class="font-bold text-sm sm:text-sm text-white text-center">Registrasi Online Disini <br> (kuota online 60 orang / hari)</p>
    </a>
</div>
<!-- Modal untuk Syarat dan Ketentuan -->
<div id="modal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden z-50">
    <div class="bg-white p-6 rounded-lg w-full max-w-md max-h-[90vh] overflow-y-auto">
        <h2 class="text-xl font-bold mb-4 text-center">Syarat dan Ketentuan</h2>
        <p class="text-sm text-gray-700 mb-4">
            <!-- Teks syarat dan ketentuan di sini -->
            1. Jam Layanan Senin - Kamis pukul 08.00 s.d 14.00 (Pukul 12.00 s.d 13.00 ISHOMA) sedangkan Hari Jumat pukul 08.00 s.d 14.00 (Pukul 11.00 s.d 13.00 ISHOMA) <br><br>
            2. Pelapor yang akan mendapatkan pelayanan pengaduan adalah yang telah melakukan registrasi dan mendapatkan nomor antrian pengaduan secara daring. Kuota 60/hari. <br><br>
            3. Pelapor Berpakaian Bebas Rapi, Menggunakan Alas Kaki Tertutup. <br><br>
            4. Pelapor yang akan mendapatkan pelayanan pengaduan adalah yang telah melakukan registrasi dan mendapatkan nomor antrian pengaduan secara daring. <br><br>
            5. Pelapor Membawa KTP/SIM Asli dan Merupakan Orang yang Langsung Mengalami Kejadian yang Diadukan. Apabila karena Alasan Keterbatasan Pengadu bukan yang Mengalami Kejadian Langsung, Maka Harus Disertai dengan Surat Kuasa Bermaterai. <br><br>
            6. Pelapor Membawa Bukti Permulaan dan/atau Bukti Pendukung yang Relevan. <br><br>
            7. Substansi Aduan Tidak Sedang atau Telah menjadi Objek Peradilan. <br><br>
            8. Substansi aduan belum pernah disampaikan oleh pelapor kepada Wakil Presiden. <br><br>
            9. Petugas akan memverifikasi dokumen. Apabila dokumen tidak lengkap, petugas akan meminta pelapor untuk mengirimkan kelengkapan dokumen melalui email dalam kurun waktu 10 hari. Pelaporan tidak diproses apabila pelapor tidak melengkapi dokumen tersebut dalam 10 hari. <br><br>
            10. Pelapor wajib menyampaikan nomor kontak atau e-mail yang dapat dihubungi. <br><br>
            11. Pelapor Wajib mentaati dan menghormati tata tertib yang berlaku, menjaga etika dan kesopanan selama berada di lingkungan Kementerian Sekretariat Negara. <br><br>
            12. Pelapor dilarang mengambil gambar/video dan membuat konten selama proses pelaporan. <br><br>
            <br>
            Pastikan Anda sudah melakukan registrasi online dan membawa bukti registrasi saat datang.
        </p>

        <!-- Checkbox untuk persetujuan syarat dan ketentuan -->
        <div class="flex items-center mb-4">
            <input type="checkbox" id="agreeCheckbox" class="mr-2" onchange="toggleRegisterButton()">
            <label for="agreeCheckbox" class="text-sm">Saya telah membaca Syarat dan Ketentuan yang berlaku</label>
        </div>

        <!-- Tombol Registrasi Sekarang -->
        <a id="registerButton" href="{{ route('reservasi') }}" class="bg-primary text-white py-2 px-4 rounded-lg text-center w-full block cursor-not-allowed opacity-50 pointer-events-none">
            Registrasi Sekarang
        </a>

        <!-- Tombol Tutup Modal -->
        <button onclick="closeModal()" class="mt-4 text-primary font-semibold text-sm underline w-full text-center">Tutup</button>
    </div>
</div>
@endsection

@section('script')
<script>
    // Fungsi untuk membuka modal
    function openModal() {
        document.getElementById('modal').classList.remove('hidden');
    }

    // Fungsi untuk menutup modal
    function closeModal() {
        document.getElementById('modal').classList.add('hidden');
    }

    // Fungsi untuk mengaktifkan/menonaktifkan tombol registrasi
    function toggleRegisterButton() {
        const checkbox = document.getElementById('agreeCheckbox');
        const registerButton = document.getElementById('registerButton');
        
        if (checkbox.checked) {
            registerButton.classList.remove('cursor-not-allowed', 'opacity-50', 'pointer-events-none');
        } else {
            registerButton.classList.add('cursor-not-allowed', 'opacity-50', 'pointer-events-none');
        }
    }
</script>
@endsection