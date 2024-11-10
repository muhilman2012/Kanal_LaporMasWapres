@extends('layouts.panel')

@section('head')
    <title>Lapor Mas Wapres! - Syarat dan Ketentuan Pengaduan Tatap Muka</title>
    <meta property="og:title" content="Lapor Mas Wapres! - Syarat dan Ketentuan Pengaduan Tatap Muka">
@endsection

@section('pages')
<!-- Content -->
<div class="flex flex-col justify-center items-center gap-y-5">
    <div class="flex flex-col gap-y-1 items-center justify-center text-center sm:mt-10">
        <h2 class="font-bold text-xl sm:text-2xl text-primary">Syarat dan Ketentuan Pengaduan Tatap Muka</h2>
    </div>

    <p class="text-sm sm:text-base text-red font-bold text-center max-w-screen-md">PERHATIAN !! kuota harian hanya 50 orang</p>

    <div class="grid gap-y-4 sm:gap-y-5 w-full sm:grid-cols-1 md:grid-cols-2 gap-x-5 my-5 sm:my-[64px] max-w-[968px]">
        <div class="hover:cursor-pointer group flex gap-x-4 px-4 py-3 w-full bg-white transform hover:scale-105 transition duration-300 hover:shadow-custom hover:bg-gradient-to-r from-white to-secondary border-primary hover:border-secondary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">1</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">JAM LAYANAN</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Jam Layanan Mulai Pukul 08.00 s.d 14.00 (Pukul 12.00 s.d 13.00 ISHOMA) dan Jumlah Pengadu yang Dilayani per Hari hanya 50 Orang.</p>
            </div>
        </div>
        <div class="hover:cursor-pointer group flex gap-x-4 px-4 py-3 w-full bg-white transform hover:scale-105 transition duration-300 hover:shadow-custom hover:bg-gradient-to-r from-white to-secondary border-primary hover:border-secondary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">2</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">PAKAIAN</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Pengadu Berpakaian Bebas Rapi dan Hanya 1 Orang yang Diperkenankan Masuk ke dalam Ruang Pengaduan Masyarakat "LAPOR MAS WAPRES!".</p>
            </div>
        </div>
        <div class="hover:cursor-pointer group flex gap-x-4 px-4 py-3 w-full bg-white transform hover:scale-105 transition duration-300 hover:shadow-custom hover:bg-gradient-to-r from-white to-secondary border-primary hover:border-secondary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">3</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">BERKAS WAJIB</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Pengadu Membawa KTP Asli dan Merupakan Orang yang Langsung Mengalami Kejadian yang Diadukan. Apabila karena Alasan Keterbatasan Pengadu bukan yang Mengalami Kejadian Langsung, Maka Harus Disertai dengan Surat Kuasa Bermaterai.</p>
            </div>
        </div>
        <div class="hover:cursor-pointer group flex gap-x-4 px-4 py-3 w-full bg-white transform hover:scale-105 transition duration-300 hover:shadow-custom hover:bg-gradient-to-r from-white to-secondary border-primary hover:border-secondary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">4</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">BERKAS BUKTI</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Pengadu Membawa Bukti Permulaan dan/atau Bukti Pendukung yang Relevan.</p>
            </div>
        </div>
        <div class="hover:cursor-pointer group flex gap-x-4 px-4 py-3 w-full bg-white transform hover:scale-105 transition duration-300 hover:shadow-custom hover:bg-gradient-to-r from-white to-secondary border-primary hover:border-secondary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">5</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">OBJEK</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Substansi Aduan Tidak Sedang atau Telah menjadi Objek Peradilan.</p>
            </div>
        </div>
        <div class="hover:cursor-pointer group flex gap-x-4 px-4 py-3 w-full bg-white transform hover:scale-105 transition duration-300 hover:shadow-custom hover:bg-gradient-to-r from-white to-secondary border-primary hover:border-secondary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">6</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">PENTING</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Dilarang Mengambil Foto dan/atau Video selama di Ruang Pengaduan dan Istana Wakil Presiden.</p>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    
@endsection