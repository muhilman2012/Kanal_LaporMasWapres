<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=devide-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.24/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta name="description" content="Lapor Mas Wapres adalah kanal pengaduan masyarakat untuk menyampaikan aspirasi, keluhan, dan saran. Anda bisa menghubungi kami melalui tatap muka, SP4N Lapor, surat korespondensi, dan WhatsApp.">
    <meta name="keywords" content="Lapor Mas Wapres, pengaduan masyarakat, kanal pengaduan, SP4N Lapor, tatap muka, korespondensi, WhatsApp, lapor wapres">
    <meta name="author" content="IT SETWAPRES">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< Updated upstream
    <link rel="icon" href="{{asset('/assets/LaporMasWapres.webp')}}" type="image/svg">
=======
    <link rel="icon" href="{{ asset('/assets/LaporMasWapres.png')}}" type="image/png">
    <link rel="apple-touch-icon" href="{{ asset('/assets/LaporMasWapres.png')}}" type="image/png">
    <link rel="shortcut icon" href="{{ asset('/assets/LaporMasWapres.png')}}" type="image/png">
    <link href="{{ asset('/assets/css/tailwind.css') }}" rel="stylesheet" type="text/css">

   
>>>>>>> Stashed changes
    @yield('head')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Open Graph Meta Tags -->
    <meta property="og:description" content="Lapor Mas Wapres! adalah kanal pengaduan masyarakat untuk menyampaikan aspirasi, keluhan, dan saran melalui tatap muka, SP4N Lapor, surat korespondensi, dan WhatsApp.">
    <meta property="og:image" content="https://lapormaswapres.id/assets/LaporMasWapres.webp">
    <meta property="og:url" content="https://lapormaswapres.id/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Lapor Mas Wapres!">

    <style>
        :root {
            font-family: 'Poppins', sans-serif;
            background-color: #FAFCFF;
        }

       
    </style>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#001A3B',
                        secondary: '#9BDCFC',
                        quote: '#607680',
                        text: '#001A3B',
                        red: '#D64045',
                    },
                    boxShadow: {
                        'custom': '0px 0px 31.5px 4.2px rgba(155, 220, 252, 0.7)',
                    },
                }
            }
        }
    </script>
</head>

<body class="bg-gray-50 text-gray-900">
    <!-- Preloader -->
    <div id="preloader" role="status"
        class="flex z-30 h-screen w-full bg-white-25 items-center justify-center animate-pulse">
        <img class="h-[36px] sm:h-[64px]" src="{{asset('/assets/LaporMasWapres.webp')}}" alt="Logo Lapor Mas Wapres!" srcset="Logo Lapor Mas Wapres!">
        <span class="sr-only">Memuat Halaman</span>
    </div>

    <!-- TODO Wrapper: Setinggan breakpoint untuk responsive -->
    <div id="content" class="flex flex-col h-full max-w-sm p-6 gap-y-7 sm:max-w-2xl lg:max-w-5xl xl:max-w-7xl mx-auto bg-[url('/assets/LaporMasWapres-opacity.webp')] bg-no-repeat bg-center bg-contain bg-fixed sm:bg-[length:600px] items-center">
        <!-- Navbar -->
        <div class="flex flex-row justify-center items-center">
            <!-- Logo -->
            <a href="{{ route ('index') }}"><img class="h-[60px] sm:h-[72px]" src="{{asset('/assets/LaporMasWapres.webp')}}" alt="Logo Lapor Mas Wapres!" srcset="Logo Lapor Mas Wapres!"></a>
        </div>

        @yield('pages')

        <!-- Footer -->
        <div class="flex flex-col gap-1 w-full max-w-[440px] items-center pb-7">
            <div class="flex flex-col py-2 w-full items-center">
                <h3 class="font-bold text-sm sm:text-base text-primary text-center">Butuh Bantuan?</h3>
            </div>
            <a href="https://wa.me/6281117042207/?text=Halo" target="_blank" class="w-full bg-gradient-to-r from-primary to-secondary text-white text-center font-semibold text-sm py-3 rounded-lg transform hover:scale-105 transition duration-300 hover:shadow-custom">Hubungi Layanan Pelanggan</a>
            <div class="flex gap-x-4 my-3">
                <a href="https://wapresri.go.id/" target="_blank" alt="Website Setwapres">
                    <svg class="hover:text-primary text-secondary transform transition duration-300" width="32" height="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" >
                        <path d="M21.721 12.752a9.711 9.711 0 0 0-.945-5.003 12.754 12.754 0 0 1-4.339 2.708 18.991 18.991 0 0 1-.214 4.772 17.165 17.165 0 0 0 5.498-2.477ZM14.634 15.55a17.324 17.324 0 0 0 .332-4.647c-.952.227-1.945.347-2.966.347-1.021 0-2.014-.12-2.966-.347a17.515 17.515 0 0 0 .332 4.647 17.385 17.385 0 0 0 5.268 0ZM9.772 17.119a18.963 18.963 0 0 0 4.456 0A17.182 17.182 0 0 1 12 21.724a17.18 17.18 0 0 1-2.228-4.605ZM7.777 15.23a18.87 18.87 0 0 1-.214-4.774 12.753 12.753 0 0 1-4.34-2.708 9.711 9.711 0 0 0-.944 5.004 17.165 17.165 0 0 0 5.498 2.477ZM21.356 14.752a9.765 9.765 0 0 1-7.478 6.817 18.64 18.64 0 0 0 1.988-4.718 18.627 18.627 0 0 0 5.49-2.098ZM2.644 14.752c1.682.971 3.53 1.688 5.49 2.099a18.64 18.64 0 0 0 1.988 4.718 9.765 9.765 0 0 1-7.478-6.816ZM13.878 2.43a9.755 9.755 0 0 1 6.116 3.986 11.267 11.267 0 0 1-3.746 2.504 18.63 18.63 0 0 0-2.37-6.49ZM12 2.276a17.152 17.152 0 0 1 2.805 7.121c-.897.23-1.837.353-2.805.353-.968 0-1.908-.122-2.805-.353A17.151 17.151 0 0 1 12 2.276ZM10.122 2.43a18.629 18.629 0 0 0-2.37 6.49 11.266 11.266 0 0 1-3.746-2.504 9.754 9.754 0 0 1 6.116-3.985Z" fill="currentColor" />
                    </svg>

                </a>
                <a href="https://www.facebook.com/wapresri.go.id" target="_blank" alt="Facebook Setwapres">
                    <svg class="hover:text-primary text-secondary transform transition duration-300" width="32" height="32" viewBox="0 0 40 40" fill="currentColor" xmlns="#www.w3.org/2000/svg" alt="Logo Facebook">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M37.5 20.1055C37.5 10.4414 29.6641 2.60547 20 2.60547C10.3359 2.60547 2.5 10.4414 2.5 20.1055C2.5 28.8398 8.89844 36.0797 17.2656 37.3937V25.1656H12.8211V20.1055H17.2656V16.25C17.2656 11.8648 19.8789 9.44062 23.8758 9.44062C25.7906 9.44062 27.7938 9.78281 27.7938 9.78281V14.0898H25.5859C23.4133 14.0898 22.7336 15.4383 22.7336 16.8242V20.1055H27.5867L26.8117 25.1656H22.7344V37.3953C31.1016 36.082 37.5 28.8422 37.5 20.1055Z" fill="currentColor" />
                    </svg>
                </a>
                <a href="https://www.instagram.com/setwapres.ri/" target="_blank" alt="Instagram Setwapres">
                    <svg class="hover:text-primary text-secondary transform transition duration-300" width="32" height="32" viewBox="0 0 40 40" fill="currentColor" xmlns="#www.w3.org/2000/svg" alt="Logo Instagram">
                        <path d="M27.2914 5.41641C29.2236 5.42218 31.0751 6.19231 32.4414 7.55861C33.8077 8.92491 34.5778 10.7764 34.5836 12.7086V27.2914C34.5778 29.2236 33.8077 31.0751 32.4414 32.4414C31.0751 33.8077 29.2236 34.5778 27.2914 34.5836H12.7086C10.7764 34.5778 8.92491 33.8077 7.55861 32.4414C6.19231 31.0751 5.42218 29.2236 5.41641 27.2914V12.7086C5.42218 10.7764 6.19231 8.92491 7.55861 7.55861C8.92491 6.19231 10.7764 5.42218 12.7086 5.41641H27.2914ZM27.2914 2.5H12.7086C7.09375 2.5 2.5 7.09375 2.5 12.7086V27.2914C2.5 32.9062 7.09375 37.5 12.7086 37.5H27.2914C32.9062 37.5 37.5 32.9062 37.5 27.2914V12.7086C37.5 7.09375 32.9062 2.5 27.2914 2.5Z" fill="currentColor" />
                        <path d="M29.4789 12.7086C29.0463 12.7086 28.6233 12.5803 28.2636 12.3399C27.9039 12.0996 27.6235 11.7579 27.4579 11.3582C27.2924 10.9585 27.249 10.5187 27.3334 10.0943C27.4178 9.67 27.6262 9.28023 27.9321 8.9743C28.238 8.66837 28.6278 8.46003 29.0522 8.37563C29.4765 8.29122 29.9163 8.33454 30.316 8.50011C30.7157 8.66568 31.0574 8.94605 31.2978 9.30579C31.5381 9.66552 31.6664 10.0884 31.6664 10.5211C31.667 10.8085 31.6109 11.0933 31.5012 11.3589C31.3914 11.6246 31.2303 11.866 31.0271 12.0693C30.8238 12.2725 30.5824 12.4336 30.3168 12.5433C30.0511 12.6531 29.7663 12.7092 29.4789 12.7086ZM20 14.1664C21.1538 14.1664 22.2816 14.5085 23.241 15.1495C24.2003 15.7906 24.948 16.7016 25.3895 17.7676C25.8311 18.8335 25.9466 20.0065 25.7215 21.1381C25.4964 22.2697 24.9408 23.3091 24.125 24.125C23.3091 24.9408 22.2697 25.4964 21.1381 25.7215C20.0065 25.9466 18.8335 25.8311 17.7676 25.3895C16.7016 24.948 15.7906 24.2003 15.1495 23.241C14.5085 22.2816 14.1664 21.1538 14.1664 20C14.1681 18.4533 14.7832 16.9705 15.8769 15.8769C16.9705 14.7832 18.4533 14.1681 20 14.1664ZM20 11.25C18.2694 11.25 16.5777 11.7632 15.1388 12.7246C13.6998 13.6861 12.5783 15.0527 11.9161 16.6515C11.2538 18.2504 11.0805 20.0097 11.4181 21.707C11.7558 23.4044 12.5891 24.9635 13.8128 26.1872C15.0365 27.4109 16.5956 28.2443 18.293 28.5819C19.9903 28.9195 21.7496 28.7462 23.3485 28.0839C24.9473 27.4217 26.3139 26.3002 27.2754 24.8612C28.2368 23.4223 28.75 21.7306 28.75 20C28.75 17.6794 27.8281 15.4538 26.1872 13.8128C24.5462 12.1719 22.3206 11.25 20 11.25Z" fill="currentColor" />
                    </svg>
                </a>
                <a href="https://www.youtube.com/@Setwapres" target="_blank" alt="YouTube Setwapres">
                    <svg class="hover:text-primary text-secondary transform transition duration-300" width="32" height="32" viewBox="0 0 40 40" fill="currentColor" xmlns="#www.w3.org/2000/svg" alt="Logo Youtube">
                        <g clip-path="url(#clip0_11_21)">
                            <path d="M39.7375 11.6242C39.7375 8.10859 37.1515 5.28047 33.9562 5.28047C29.6281 5.07812 25.214 5 20.7031 5H19.2969C14.7969 5 10.375 5.07812 6.04686 5.28125C2.85936 5.28125 0.273424 8.125 0.273424 11.6406C0.0781118 14.4211 -0.0047007 17.2023 -1.31969e-05 19.9836C-0.0078257 22.7648 0.080716 25.5487 0.265612 28.3352C0.265612 31.8508 2.85155 34.7023 6.03905 34.7023C10.5859 34.9133 15.25 35.007 19.9922 34.9992C24.7422 35.0148 29.3932 34.9159 33.9453 34.7023C37.1406 34.7023 39.7265 31.8508 39.7265 28.3352C39.914 25.5461 40 22.7648 39.9922 19.9758C40.0099 17.1945 39.925 14.4107 39.7375 11.6242ZM16.1719 27.6477V12.2961L27.5 19.968L16.1719 27.6477Z" fill="currentColor" />
                        </g>
                        <defs>
                            <clipPath id="clip0_11_21">
                                <rect width="40" height="40" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </a>
            </div>
            <span class="text-xs sm:text-sm text-quote text-center lg:text-left">Copyright &copy; <span id="currentYear"></span> IT Setwapres | All Rights Reserved.</span>
        </div>

        <script src="{{asset('/assets/js/fslightbox.js')}}"></script>
        <script>
            window.addEventListener('load', function () {
                var preloader = document.getElementById('preloader');
                var content = document.getElementById('content');
                content.style.display = 'none';

                // Sembunyikan preloader dan tampilkan konten halaman
                // Menambahkan delay 1000 milidetik (1 detik) sebelum menyembunyikan preloader
                setTimeout(function () {
                    // Sembunyikan preloader dan tampilkan konten halaman
                    preloader.style.display = 'none';
                    content.style.display = 'flex';
                }, 1000);
            });
        </script>
        <script>
            document.getElementById("currentYear").textContent = new Date().getFullYear();
        </script>
</body>

</html>