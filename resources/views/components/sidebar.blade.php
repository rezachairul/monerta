<!-- Sidebar -->

<!-- Mobile Overlay -->
<div id="sidebar-overlay"
    class="fixed inset-0 bg-black/50 z-40 hidden lg:hidden">
</div>

<!-- Sidebar -->
<aside id="sidebar"
    class="
    fixed top-16 left-0 z-50
    w-64 lg:w-64
    h-[calc(100vh-4rem)]

    backdrop-blur-xl
    bg-white/70 dark:bg-white/5

    border-r border-gray-200 dark:border-white/10
    shadow-2xl

    transform -translate-x-full
    transition-all duration-300 ease-in-out

    overflow-hidden

    lg:translate-x-0 lg:static lg:z-0
    ">

    <!-- Glow Effect -->
    <div class="absolute top-0 left-1/2 -translate-x-1/2
        w-[300px] h-[300px]
        bg-gradient-to-b from-teal-400/20 to-blue-500/20
        blur-3xl opacity-40 pointer-events-none">
    </div>

    <!-- Sidebar Content -->
    <div class="relative z-10 p-6">

        <!-- Title & logo -->
        <div class="lg:hidden flex items-center gap-3 mb-6">
            <div class="w-8 h-8 flex items-center justify-center text-white font-bold">
                <img src="{{ asset('assets/img/favicon/web-app-manifest-512x512.png') }}" alt="Monetra Logo" class="w-5 h-5">
            </div>
            <h2 class="text-xl font-bold
                bg-gradient-to-r from-teal-500 to-blue-600 
                bg-clip-text text-transparent">
                Monetra
            </h2>
        </div>

        <!-- Menu -->
        <nav class="space-y-2">

            <a href="#"
                class="flex items-center gap-3 px-4 py-3 rounded-xl
                hover:bg-white/20 dark:hover:bg-white/10
                transition-all duration-300">

                Dashboard
            </a>

            <a href="#"
                class="flex items-center gap-3 px-4 py-3 rounded-xl
                hover:bg-white/20 dark:hover:bg-white/10
                transition-all duration-300">

                Income
            </a>

            <a href="#"
                class="flex items-center gap-3 px-4 py-3 rounded-xl
                hover:bg-white/20 dark:hover:bg-white/10
                transition-all duration-300">

                Expense
            </a>

        </nav>

    </div>

</aside>