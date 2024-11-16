@extends('layouts.panel')

@section('head')
    <title>Lapor Mas Wapres! - Kanal Pengaduan Masyarakat</title>
    <meta property="og:title" content="Lapor Mas Wapres! - Kanal Pengaduan Masyarakat">
@endsection

@section('pages')
<!-- Content -->
<div class="flex flex-col justify-center items-center gap-y-5">
    <div class="flex flex-col gap-y-1 items-center justify-center text-center sm:mt-10">
        <h2 class="font-bold text-xl sm:text-2xl text-primary">Sampaikan Keluhan Anda melalui Kanal berikut ini</h2>
        <!-- <p class="font-normal italic text-base text-quote"></p> -->
    </div>

    <div class="grid gap-y-4 sm:gap-y-5 w-full sm:grid-cols-1 md:grid-cols-2 gap-x-5 my-5 sm:my-[64px] max-w-[968px]">
        <a href="{{ route ('detail') }}" class="hover:cursor-pointer group flex gap-x-4 px-4 py-3 w-full bg-white transform hover:scale-105 transition duration-300 hover:shadow-custom hover:bg-gradient-to-r from-white to-secondary border-primary hover:border-secondary border rounded-lg items-center">
            <img class="w-5 h-5 sm:w-6 sm:h-6 group-hover:w-6 group-hover:h-6 sm:group-hover:w-7 sm:group-hover:h-7 transition-all duration-300" src="{{ url ('/assets/emoji.webp') }}" alt="Emoji">
            <div class="flex flex-col">
                <p class="font-bold text-sm sm:text-base text-primary">Tatap Muka (Registrasi Online)</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Sampaikan langsung di Kantor Sekretariat Wakil Presiden Jln. Kebon Sirih No.14, Jakarta Pusat.</p>
            </div>
        </a>

        <a href="https://lapormaswapres.lapor.go.id/" target="_blank" class="hover:cursor-pointer group flex gap-x-4 px-4 py-3 w-full bg-white transform hover:scale-105 transition duration-300 hover:shadow-custom hover:bg-gradient-to-r from-white to-secondary border-primary hover:border-secondary border rounded-lg items-center">
            <img class="w-5 h-5 sm:w-6 sm:h-6 group-hover:w-6 group-hover:h-6 sm:group-hover:w-7 sm:group-hover:h-7 transition-all duration-300" src="{{ url ('/assets/lapor.webp') }}" alt="Logo Lapor!">
            <div class="flex flex-col">
                <p class="font-bold text-sm sm:text-base text-primary">SP4N Lapor!</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Laporkan online melalui lapormaswapres.lapor.go.id.</p>
            </div>
        </a>

        <a href="mailto:persuratan@set.wapresri.go.id" target="_blank" class="hover:cursor-pointer group flex gap-x-4 px-4 py-3 w-full bg-white transform hover:scale-105 transition duration-300 hover:shadow-custom hover:bg-gradient-to-r from-white to-secondary border-primary hover:border-secondary border rounded-lg items-center">
            <img class="w-5 h-5 sm:w-6 sm:h-6 group-hover:w-6 group-hover:h-6 sm:group-hover:w-7 sm:group-hover:h-7 transition-all duration-300" src="{{ url ('/assets/surat.webp') }}" alt="Surat">
            <div class="flex flex-col">
                <p class="font-bold text-sm sm:text-base text-primary">Korespondensi Surat melalui E-mail</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Kirimkan pengaduan surat melalui e-mail</p>
            </div>
        </a>

        <a href="https://wa.me/6281117042204/?text=Halo" target="_blank" class="hover:cursor-pointer group flex gap-x-4 px-4 py-3 w-full bg-white transform hover:scale-105 transition duration-300 hover:shadow-custom hover:bg-gradient-to-r from-white to-secondary border-primary hover:border-secondary border rounded-lg items-center">
            <img class="w-5 h-5 sm:w-6 sm:h-6 group-hover:w-6 group-hover:h-6 sm:group-hover:w-7 sm:group-hover:h-7 transition-all duration-300" src="{{ url ('/assets/whatsapp.webp') }}" alt="Logo WhatsApp">
            <div class="flex flex-col">
                <p class="font-bold text-sm sm:text-base text-primary">WhatsApp</p>
                <p class="font-normal text-xs sm:text-sm text-primary">Hubungi kami via WhatsApp.</p>
            </div>
        </a>
    </div>
</div>
@endsection

@section('script')
    
@endsection