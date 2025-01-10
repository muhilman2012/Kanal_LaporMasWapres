@extends('layouts.panel')

@section('head')
    <title>Lapor Mas Wapres! - Alur Pengaduan Tatap Muka</title>
    <meta property="og:title" content="Lapor Mas Wapres! - Alur Pengaduan Tatap Muka">
    <style>
        ol {
            margin-left: 20px;
        }
        ol li {
            margin-bottom: 8px;
            text-indent: -20px;
            padding-left: 20px;
        }
        ul {
            margin-left: 40px;
        }
        ul li {
            margin-bottom: 5px;
        }
    </style>
@endsection

@section('pages')
<!-- Content -->
<div class="flex flex-col justify-center items-center gap-y-5">
    <div class="flex flex-col gap-y-1 items-center justify-center text-center sm:mt-10">
        <h2 class="font-bold text-xl sm:text-2xl text-primary">Alur Pengaduan Tatap Muka</h2>
        <p class="font-normal italic text-base text-quote">Panduan Langkah Demi Langkah untuk Pengaduan Tatap Muka</p>
    </div>

    <div class="grid gap-y-4 sm:gap-y-5 w-full sm:grid-cols-1 md:grid-cols-2 gap-x-5 my-5 sm:mt-[64px] max-w-[968px]">
        <div class=" group flex gap-x-4 px-4 py-3 w-full bg-white transform border-primary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">1</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">Registrasi <i>Online</i></p>
                <p class="font-normal text-xs sm:text-sm text-primary">Pelapor melakukan registrasi <i>online</i> melalui website <i>https://lapormaswapres.id</i> sebelum datang ke lokasi.</p>
            </div>
        </div>

        <div class=" group flex gap-x-4 px-4 py-3 w-full bg-white transform border-primary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">2</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">Pelapor Datang</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Pelapor datang ke lokasi pengaduan di Kantor Sekretariat Wakil Presiden yang beralamat di Jln. Kebon Sirih No. 14, Jakarta Pusat.</p>
            </div>
        </div>

        <div class=" group flex gap-x-4 px-4 py-3 w-full bg-white transform border-primary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">3</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">Pengecekan Bukti Registrasi <i>Online</i></p>
                <p class="font-normal text-xs sm:text-sm text-primary">Petugas melakukan pengecekan bukti registrasi <i>online</i> pelapor.</p>
            </div>
        </div>

        <div class=" group flex gap-x-4 px-4 py-3 w-full bg-white transform border-primary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">4</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">Penukaran Kartu Identitas</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Pelapor menukarkan kartu identitas (KTP/SIM) untuk mendapatkan kartu ID Tamu.</p>
            </div>
        </div>

        <div class=" group flex gap-x-4 px-4 py-3 w-full bg-white transform border-primary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">5</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">Mengambil Antrian</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Pelapor mengambil nomor antrian di mesin antrian.</p>
            </div>
        </div>

        <div class=" group flex gap-x-4 px-4 py-3 w-full bg-white transform border-primary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">6</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">Meja Registrasi</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Pelapor menuju meja registrasi untuk verifikasi data.</p>
            </div>
        </div>

        <div class=" group flex gap-x-4 px-4 py-3 w-full bg-white transform border-primary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">7</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">Menunggu Antrian</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Pelapor menunggu di ruang tunggu hingga nomor antriannya dipanggil.</p>
            </div>
        </div>

        <div class=" group flex gap-x-4 px-4 py-3 w-full bg-white transform border-primary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">8</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">Ruang Pengaduan</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Pelapor memasuki ke Ruang Pengaduan sesuai nomor panggilan.</p>
            </div>
        </div>

        <div class=" group flex gap-x-4 px-4 py-3 w-full bg-white transform border-primary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">9</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">Menuju Loket sesuai Nomor Antrian</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Pelapor menuju loket yang sesuai dengan nomor panggilan di layar.</p>
            </div>
        </div>

        <div class=" group flex gap-x-4 px-4 py-3 w-full bg-white transform border-primary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">10</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">Proses Pelayanan Pengaduan</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Petugas melakukan layanan pengaduan dan mencatat laporan pada sistem.</p>
            </div>
        </div>

        <div class=" group flex gap-x-4 px-4 py-3 w-full bg-white transform border-primary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">11</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">Cetak Bukti Laporan</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Petugas memberikan lembar bukti laporan kepada pelapor.</p>
            </div>
        </div>

        <div class=" group flex gap-x-4 px-4 py-3 w-full bg-white transform border-primary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">12</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">Meninggalkan Ruang Pengaduan</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Pelapor meninggalkan ruang pengaduan dan mengambil kembali kartu identitas dengan menukarkan kartu ID Tamu.</p>
            </div>
        </div>
    </div>

    <a href="{{ route('reservasi') }}" class="w-full bg-gradient-to-r from-primary to-secondary text-white text-center font-semibold text-sm py-3 rounded-lg transform hover:scale-105 transition duration-300 hover:shadow-custom cursor-pointer">
        <p class="font-bold text-lg sm:text-lg text-white text-center">Registrasi Pendaftaran <i>Online</i> (klik di sini) <br> (kuota <i>online</i> 50 orang/hari)</p>
    </a>

    <!-- <a href="{{ route('tindaklanjut') }}" class="w-full bg-gold text-white text-center font-semibold text-sm py-3 rounded-lg transform hover:scale-105 transition duration-300 hover:shadow-custom cursor-pointer">
        <p class="font-bold text-lg sm:text-lg text-white text-center">Registrasi Tindak Lanjut <br> (klik di sini)</p>
    </a> -->
</div>
@endsection

@section('script')

@endsection