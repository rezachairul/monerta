<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Monetra</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Favicon -->
        <link id="favicon" rel="shortcut icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" type="image/x-icon">
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-white flex items-center justify-center min-h-screen flex-col relative overflow-hidden">

        <!-- Navbar -->
        @include('components.navbar')

        <main class="flex-1 flex items-center justify-center px-6 lg:px-8">

            <!-- Header -->
            @include('components.header')

            <!-- Card Container -->
            <div class="backdrop-blur-xl bg-white/70 dark:bg-white/5 border border-gray-200 dark:border-white/10 shadow-xl rounded-2xl p-8 flex flex-col items-center">

                <!-- Logo -->
                <img 
                    src="{{ asset('assets/img/favicon/web-app-manifest-512x512.png') }}" 
                    alt="Monetra Logo"
                    class="w-20 h-20 mb-4 drop-shadow-md hover:scale-105 transition duration-300"
                >

                <!-- Title -->
                <h1 class="text-2xl lg:text-4xl font-semibold text-center bg-gradient-to-r from-teal-500 to-blue-600 bg-clip-text text-transparent">
                    Track, Understand, and Grow Your Finances
                </h1>

                <!-- Description -->
                <p class="mt-3 text-sm lg:text-base text-gray-600 dark:text-gray-400 text-center max-w-md leading-relaxed">
                    Monetra helps you manage income, expenses, and financial goals in one simple dashboard — built for clarity, speed, and control.
                </p>

            </div>

        </main>

        <!-- Footer -->
        @include('components.footer')

    </body>
</html>
