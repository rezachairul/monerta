<!-- 419 | Page Expired -->

<x-layouts.error title="419 Page Expired">

    <div class="
        backdrop-blur-xl
        bg-white/70 dark:bg-white/5
        border border-gray-200 dark:border-white/10
        shadow-2xl
        rounded-3xl
        p-10
        text-center
    ">

        <!-- Error Code -->
        <h1 class="
            text-7xl lg:text-8xl
            font-black
            bg-gradient-to-r from-teal-400 to-blue-500
            bg-clip-text text-transparent
        ">
            419
        </h1>

        <!-- Title -->
        <h2 class="mt-4 text-2xl font-bold text-gray-800 dark:text-white">
            Page Expired
        </h2>

        <!-- Description -->
        <p class="mt-3 text-gray-600 dark:text-gray-400 leading-relaxed">
            The page you are looking for has expired.
        </p>

        <!-- Logo -->
        <div class="mt-8 flex justify-center">
            <img
                src="{{ asset('assets/img/favicon/web-app-manifest-512x512.png') }}"
                alt="Monetra Logo"
                class="w-20 h-20 drop-shadow-xl"
            >
        </div>

        <!-- Button -->
        <div class="mt-8">
            <a href="{{ url('/monerta') }}"
                class="
                inline-flex items-center gap-2
                px-6 py-3 rounded-xl
                bg-gradient-to-r from-teal-500 to-blue-600
                hover:scale-105
                text-white font-medium
                shadow-lg
                transition-all duration-300
                ">
                Back to Home
            </a>
        </div>

    </div>

</x-layouts.error>