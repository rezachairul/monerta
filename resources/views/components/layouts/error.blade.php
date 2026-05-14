<!-- Layouts.error -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Monetra | {{ $title ?? 'Errors' }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Favicon -->
        <link id="favicon" rel="shortcut icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" type="image/x-icon">        

    </head>
    
    <body class="min-h-screen overflow-hidden bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-white flex items-center justify-center relative transition-colors duration-500">

        <!-- Glow Background -->
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[700px] h-[700px] bg-gradient-to-r from-teal-400/20 to-blue-500/20 blur-3xl opacity-30">
        </div>

        <!-- Content -->
        <main class="relative z-10 w-full max-w-lg px-6">
            {{ $slot }}
        </main>

    </body>
</html>
