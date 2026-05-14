<x-layouts>
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
        <p class="mt-3 text-sm lg:text-base text-gray-600 dark:text-gray-400 text-center leading-relaxed">
            Monetra helps you manage income, expenses, and financial goals in one simple dashboard — built for clarity, speed, and control.
        </p>

    </div>

</x-layouts>