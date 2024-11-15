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

    <p class="text-sm sm:text-base text-red font-bold text-center max-w-screen-md">PERHATIAN !! kuota harian hanya 60 orang</p>

    <div class="grid gap-y-4 sm:gap-y-5 w-full sm:grid-cols-1 md:grid-cols-2 gap-x-5 my-5 sm:my-[64px] max-w-[968px]">
        <div class="hover:cursor-pointer group flex gap-x-4 px-4 py-3 w-full bg-white transform hover:scale-105 transition duration-300 hover:shadow-custom hover:bg-gradient-to-r from-white to-secondary border-primary hover:border-secondary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">1</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">JAM LAYANAN</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Jam Layanan Senin - Kamis pukul 08.00 s.d 14.00 (Pukul 12.00 s.d 13.00 ISHOMA) sedangkan Hari Jumat pukul 08.00 s.d 14.00 (Pukul 11.00 s.d 13.00 ISHOMA)</p>
            </div>
        </div>
        <div class="hover:cursor-pointer group flex gap-x-4 px-4 py-3 w-full bg-white transform hover:scale-105 transition duration-300 hover:shadow-custom hover:bg-gradient-to-r from-white to-secondary border-primary hover:border-secondary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">2</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">REGISTRASI</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Pelapor yang akan mendapatkan pelayanan pengaduan adalah yang telah melakukan registrasi dan mendapatkan nomor antrian pengaduan secara daring. Kuota 60/hari.</p>
            </div>
        </div>
        <div class="hover:cursor-pointer group flex gap-x-4 px-4 py-3 w-full bg-white transform hover:scale-105 transition duration-300 hover:shadow-custom hover:bg-gradient-to-r from-white to-secondary border-primary hover:border-secondary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">3</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">PAKAIAN</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Pelapor Berpakaian Bebas Rapi, Menggunakan Alas Kaki Tertutup.</p>
            </div>
        </div>
        <div class="hover:cursor-pointer group flex gap-x-4 px-4 py-3 w-full bg-white transform hover:scale-105 transition duration-300 hover:shadow-custom hover:bg-gradient-to-r from-white to-secondary border-primary hover:border-secondary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">4</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">PELAPOR</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Pelapor yang akan mendapatkan pelayanan pengaduan adalah yang telah melakukan registrasi dan mendapatkan nomor antrian pengaduan secara daring.</p>
            </div>
        </div>
        <div class="hover:cursor-pointer group flex gap-x-4 px-4 py-3 w-full bg-white transform hover:scale-105 transition duration-300 hover:shadow-custom hover:bg-gradient-to-r from-white to-secondary border-primary hover:border-secondary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">5</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">BERKAS WAJIB</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Pelapor Membawa KTP/SIM Asli dan Merupakan Orang yang Langsung Mengalami Kejadian yang Diadukan. Apabila karena Alasan Keterbatasan Pengadu bukan yang Mengalami Kejadian Langsung, Maka Harus Disertai dengan Surat Kuasa Bermaterai.</p>
            </div>
        </div>
        <div class="hover:cursor-pointer group flex gap-x-4 px-4 py-3 w-full bg-white transform hover:scale-105 transition duration-300 hover:shadow-custom hover:bg-gradient-to-r from-white to-secondary border-primary hover:border-secondary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">6</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">BERKAS BUKTI</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Pelapor Membawa Bukti Permulaan dan/atau Bukti Pendukung yang Relevan.</p>
            </div>
        </div>
        <div class="hover:cursor-pointer group flex gap-x-4 px-4 py-3 w-full bg-white transform hover:scale-105 transition duration-300 hover:shadow-custom hover:bg-gradient-to-r from-white to-secondary border-primary hover:border-secondary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">7</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">OBJEK</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Substansi Aduan Tidak Sedang atau Telah menjadi Objek Peradilan.</p>
            </div>
        </div>
        <div class="hover:cursor-pointer group flex gap-x-4 px-4 py-3 w-full bg-white transform hover:scale-105 transition duration-300 hover:shadow-custom hover:bg-gradient-to-r from-white to-secondary border-primary hover:border-secondary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">8</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">BELUM PERNAH</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Substansi aduan belum pernah disampaikan oleh pelapor kepada Wakil Presiden.</p>
            </div>
        </div>
        <div class="hover:cursor-pointer group flex gap-x-4 px-4 py-3 w-full bg-white transform hover:scale-105 transition duration-300 hover:shadow-custom hover:bg-gradient-to-r from-white to-secondary border-primary hover:border-secondary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">9</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">VERIFIKASI DOKUMEN</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Petugas akan memverifikasi dokumen. Apabila dokumen tidak lengkap, petugas akan meminta pelapor untuk mengirimkan kelengkapan dokumen melalui email dalam kurun waktu 10 hari. Pelaporan tidak diproses apabila pelapor tidak melengkapi dokumen tersebut dalam 10 hari.</p>
            </div>
        </div>
        <div class="hover:cursor-pointer group flex gap-x-4 px-4 py-3 w-full bg-white transform hover:scale-105 transition duration-300 hover:shadow-custom hover:bg-gradient-to-r from-white to-secondary border-primary hover:border-secondary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">10</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">KONTAK</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Pelapor wajib menyampaikan nomor kontak atau e-mail yang dapat dihubungi.</p>
            </div>
        </div>
        <div class="hover:cursor-pointer group flex gap-x-4 px-4 py-3 w-full bg-white transform hover:scale-105 transition duration-300 hover:shadow-custom hover:bg-gradient-to-r from-white to-secondary border-primary hover:border-secondary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">11</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">ETIKA</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Pelapor Wajib mentaati dan menghormati tata tertib yang berlaku, menjaga etika dan kesopanan selama berada di lingkungan Kementerian Sekretariat Negara.</p>
            </div>
        </div>
        <div class="hover:cursor-pointer group flex gap-x-4 px-4 py-3 w-full bg-white transform hover:scale-105 transition duration-300 hover:shadow-custom hover:bg-gradient-to-r from-white to-secondary border-primary hover:border-secondary border rounded-lg items-center">
            <div class="flex items-center justify-center w-[32px] h-[28px] rounded-full bg-secondary text-primary font-bold text-base">12</div>
            <div class="flex flex-col w-full">
                <p class="font-bold text-sm sm:text-base text-primary">PENTING</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Pelapor dilarang mengambil gambar/video dan membuat konten selama proses pelaporan.</p>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    
@endsection