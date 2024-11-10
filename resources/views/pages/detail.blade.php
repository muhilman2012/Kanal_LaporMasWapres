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

    <p class="text-sm sm:text-base text-red font-bold text-center max-w-screen-md">PERHATIAN !! kuota harian hanya 50 orang</p>

    <div class="grid gap-y-4 sm:gap-y-5 w-full sm:grid-cols-1 md:grid-cols-2 gap-x-5 my-5 sm:mt-[64px] max-w-[968px]">
        <div class="hover:cursor-pointer group flex gap-x-4 px-4 py-3 w-full bg-white transform hover:scale-105 transition duration-300 hover:shadow-custom hover:bg-gradient-to-r from-white to-secondary border-primary hover:border-secondary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">1</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">Pengadu datang</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Pengadu datang, lalu dilakukan pengecekan oleh PPP sesuai standar pengamanan di Setwapres</p>
            </div>
        </div>
        <div class="hover:cursor-pointer group flex gap-x-4 px-4 py-3 w-full bg-white transform hover:scale-105 transition duration-300 hover:shadow-custom hover:bg-gradient-to-r from-white to-secondary border-primary hover:border-secondary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">2</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">Pengambilan Antrian</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Pengadu memasuki lobby, diarahkan oleh UKD untuk mengambil no antrian pada mesin kios antrian, lalu menuju meja registrasi yang kosong</p>
            </div>
        </div>
        <div class="hover:cursor-pointer group flex gap-x-4 px-4 py-3 w-full bg-white transform hover:scale-105 transition duration-300 hover:shadow-custom hover:bg-gradient-to-r from-white to-secondary border-primary hover:border-secondary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">3</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">Registrasi</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Pengadu melakukan registrasi dibantu oleh petugas pada meja registrasi. Lalu pengadu diminta untuk menukarkan kartu identitas dengan ID Tamu</p>
            </div>
        </div>
        <div class="hover:cursor-pointer group flex gap-x-4 px-4 py-3 w-full bg-white transform hover:scale-105 transition duration-300 hover:shadow-custom hover:bg-gradient-to-r from-white to-secondary border-primary hover:border-secondary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">4</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">Menuju Ruangan Dumas</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Setelah pengadu melakukan registrasi , UKD akan mengantar pengadu menuju ruangan pengaduan masyarakat dan menunggu antrian panggilan sesuai yang tertera pada layar TV</p>
            </div>
        </div>
        <div class="hover:cursor-pointer group flex gap-x-4 px-4 py-3 w-full bg-white transform hover:scale-105 transition duration-300 hover:shadow-custom hover:bg-gradient-to-r from-white to-secondary border-primary hover:border-secondary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">5</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">Pelayanan oleh Petugas</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Setelah nomor antrian pengadu muncul di layar TV, pengadu menuju meja pengaduan sesuai informasi yang tertera di layar TV</p>
            </div>
        </div>
        <div class="hover:cursor-pointer group flex gap-x-4 px-4 py-3 w-full bg-white transform hover:scale-105 transition duration-300 hover:shadow-custom hover:bg-gradient-to-r from-white to-secondary border-primary hover:border-secondary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">6</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">Petugas Memasukan Data Pengadu</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Petugas akan membantu membuatkan ID Lapor jika pengadu belum memiliki ID, jika sudah petugas akan lanjut membuat laporan pengaduan</p>
            </div>
        </div>
        <div class="hover:cursor-pointer group flex gap-x-4 px-4 py-3 w-full bg-white transform hover:scale-105 transition duration-300 hover:shadow-custom hover:bg-gradient-to-r from-white to-secondary border-primary hover:border-secondary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">7</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">Pencetakan Laporan Aduan</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Setelah selesai membuat laporan, data akan muncul pada menu kelola, lalu petugas layanan akan mencetak laporan aduan untuk diberikan pada pengadu sebagai bukti laporan</p>
            </div>
        </div>
        <div class="hover:cursor-pointer group flex gap-x-4 px-4 py-3 w-full bg-white transform hover:scale-105 transition duration-300 hover:shadow-custom hover:bg-gradient-to-r from-white to-secondary border-primary hover:border-secondary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">8</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">Tahap Akhir Pengadu</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Pengadu dapat meninggalkan ruangan dumas lalu kembali ke lobby untuk menukar ID Tamu dengan kartu identitas, pengadu dapat mengecek status aduan pada akun lapor miliknya sesuai nomor registrasi yang diberi</p>
            </div>
        </div>
    </div>
    <!-- Tambah disini untuk button Syarat dan Ketentuan, lalu isi hrefnya menjadi href={{ route ('syarat') }} -->
    <a href="{{ route ('syarat') }}" class="hover:cursor-pointer group px-4 py-3 mb-[64px] w-full bg-white transform hover:scale-105 transition duration-300 hover:shadow-custom hover:bg-gradient-to-r from-white to-secondary border-primary hover:border-secondary border rounded-lg items-center">
        <p class="font-bold text-sm sm:text-sm text-primary text-center">Lihat Syarat dan Ketentuan</p>
    </a>
</div>
@endsection

@section('script')
    
@endsection