@extends('layouts.panel')

@section('head')
    <title>Lapor Mas Wapres! - 404 Halaman Tidak Ditemukan</title>
    <meta property="og:title" content="Lapor Mas Wapres! - 404 Halaman Tidak Ditemukan">
    <style>
        .error-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            /* height: calc(100vh - 150px); Adjust as needed */
        }

        .error-code {
            font-size: 6rem;
            font-weight: bold;
            /* color: #e74c3c; Example error color */
            margin-bottom: 1rem;
        }

        .error-message {
            font-size: 1.5rem;
            color: #34495e; /* Example text color */
            margin-bottom: 2rem;
        }
    </style>
@endsection

@section('pages')
<div class="flex flex-1 justify-center w-full" style="padding-top: 180px;">
    <div class="relative error-container w-[625px] bg-sky gap-y-5 rounded-3xl">
        <div class="absolute error-code " style="top: -185px;">
            <img src="{{ url ('/assets/404.png') }}" alt="">
        </div>
        <div class="flex flex-col mb-0 gap-y-5 error-message text-center" style="padding-top: 40px;">
            <p class="text-6xl font-bold text-black">Oops<span class="italic">!</span></p>
            <p>Halaman Tidak Ditemukan</p>
            <a href="{{ route('index') }}" class="bg-gradient-to-r from-primary to-secondary text-white text-center font-semibold text-sm border-none py-3 px-4 rounded-lg transform hover:scale-105 transition duration-300 hover:shadow-custom cursor-pointer">Kembali ke Beranda</a>
        </div>

    </div>
</div>


@endsection
