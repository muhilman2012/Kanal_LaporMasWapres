@extends('layouts.panel')

@section('head')
    <title>Lapor Mas Wapres! - Tata Tertib</title>
    <meta property="og:title" content="Lapor Mas Wapres! - Tata Tertib Pelayanan Porgram LaporMasWapres!">
    <style type="text/tailwindcss">
        @layer utilities {
            .content-auto {
            content-visibility: auto;
            }
            h1 {
            font-size: 2em;
            font-weight: 700;
            margin-bottom: 1.5em;
            }
            h2 {
            font-size: 1.5em;
            font-weight: 700;
            }
            h3 {
            font-size: 1.17em;
            }
            h4 {
            font-size: 1em;
            }
        }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
@endsection

@section('pages')
    <div class="container mx-auto lg:py-16">
      <h1 class="text-center text-lg md:text-2xl lg:text-3xl font-semibold px-4 md:px-6 mb-8">
        Tata Tertib Pelayanan Program <br/> <span class="font-bold">Lapor Mas Wapres!</span>
      </h1>
      <div
        class="w-full bg-blue-200 px-4 py-6 md:p-10 lg:p-16 rounded-md md:rounded-xl mx-auto text-clip text-sm md:text-base"
      >
        <div class="content">
          <h3 class="font-semibold mb-1">A. Ketentuan Umum</h3>
          <div class="list pl-5 mb-6">
            <ol class="list-decimal pl-2 md:pl-4">
              <li>
                Pelayanan program Lapor Mas Wapres! diselenggarakan di Kantor
                Sekretariat Wakil Presiden, Jalan Kebon Sirih No. 14, Jakarta
                Pusat, pada hari kerja:
                <ul class="list-disc list-inside ml-4">
                  <li>
                    Senin s.d. Kamis, pukul 08.00 s.d. 14.00 WIB (istirahat,
                    pukul 12.00 s.d. 13.00 WIB)
                  </li>
                  <li>
                    Jumat, pukul 08.00 s.d. 14.30 WIB (istirahat, pukul 11.00
                    s.d. 13.30 WIB)
                  </li>
                </ul>
              </li>
              <li>Pelapor memakai pakaian bebas rapi.</li>
              <li>
                Pelapor wajib membawa kartu identitas (KTP/SIM/Identitas lain
                yang tercantum NIK).
              </li>
              <li>Pengaduan yang dilayani berjumlah maksimal 50 orang/hari.</li>
            </ol>
          </div>

          <h3 class="font-semibold mb-1">B. Ketentuan Pengaduan</h3>
          <div class="list pl-5 mb-6">
            <ol class="list-decimal pl-2 md:pl-4">
              <li>
                Pelapor adalah orang yang langsung mengalami kejadian. Apabila
                pelapor bukan yang mengalami kejadian langsung, maka pelapor
                harus membawa surat kuasa bermaterai dari pihak yang diwakili.
              </li>
              <li>
                Substansi aduan tidak sedang atau telah menjadi objek peradilan.
              </li>
              <li>
                Substansi aduan belum pernah disampaikan oleh pelapor kepada
                Wakil Presiden.
              </li>
              <li>
                Pelapor wajib membawa dokumen pendukung pengaduan yang lengkap
                dan relevan.
              </li>
              <li>
                Petugas memverifikasi dokumen pengaduan. Apabila dokumen tidak
                lengkap, petugas akan meminta pelapor untuk mengirimkan
                kelengkapan dokumen melalui surel
                <a
                  href="mailto:lapormaswapres@set.wapresri.go.id"
                  class="text-blue-800 italic break-words"
                  >lapormaswapres@set.wapresri.go.id</a
                > <br/>
                Pelaporan tidak diproses apabila pelapor tidak melengkapi
                dokumen tersebut dalam kurun waktu 10 hari.
              </li>
              <li>
                Pelapor wajib menyampaikan nomor kontak atau surel yang dapat
                dihubungi.
              </li>
            </ol>
          </div>

          <h3 class="font-semibold mb-1">C.Registrasi dan Proses Pengaduan</h3>
          <div class="list pl-5 mb-6">
            <ol class="list-decimal pl-2 md:pl-4">
              <li>
                Pelapor melakukan registrasi secara online melalui
                <a href="https://lapormaswapres.id" class="text-blue-800 italic"
                  >https://lapormaswapres.id</a
                >
              </li>
              <li>
                Pelapor yang telah berhasil melakukan registrasi online, harap
                hadir sesuai tanggal yang dipilih.
              </li>
              <li>Pelapor menunggu di ruang tunggu yang telah disediakan.</li>
              <li>
                Petugas memverifikasi dan memberikan nomor antrian pengaduan.
              </li>
              <li>
                Petugas mempersilahkan pelapor ke Ruang Pengaduan berdasarkan
                nomor antrian.
              </li>
            </ol>
          </div>

          <h3 class="font-semibold mb-1">D. Hal-Hal Lain</h3>
          <div class="list pl-5 mb-6">
              <ol class="list-decimal pl-2 md:pl-4">
              <li>
                Pelapor menghormati tata tertib yang berlaku, menjaga etika dan
                kesopanan selama berada di lingkungan Sekretariat Wakil
                Presiden.
              </li>
              <li>
                Pelapor dilarang mengambil gambar/video dan membuat konten
                selama proses pelaporan.
              </li>
              <li>
                Pelapor harus menaati seluruh ketentuan dalam Tata Tertib Lapor
                Mas Wapres! dan ketentuan lain yang ditetapkan di kemudian hari.
              </li>
            </ol>
          </div>

          <input
            type="checkbox"
            id="snk"
            name="snk"
            value=""
            class="form-checkbox"
          />
          <label for="snk"
            >Setuju, Saya telah membaca seluruh Syarat dan Ketentuan yang
            berlaku.</label
          >
        </div>
        <div class="mt-10 flex justify-end">
            <a href="{{ route('index') }}" class="bg-gradient-to-r from-primary to-secondary text-white text-center font-semibold text-sm border-none py-3 px-4 rounded-lg transform hover:scale-105 transition duration-300 hover:shadow-custom cursor-pointer">Selanjutnya</a>
        </div>
      </div>
    </div>
    
@endsection

@section('script')

@endsection