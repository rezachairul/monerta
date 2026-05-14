<!-- Navbar -->
<nav class="w-full relative z-50">

    <!-- Glow effect -->
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[400px] h-[200px] 
        bg-gradient-to-r from-teal-400/20 to-blue-500/20 blur-3xl opacity-30">
    </div>

    <div class="
        backdrop-blur-xl 
        bg-white/70 dark:bg-white/5 
        border-b border-gray-200 dark:border-white/10 
        shadow-lg 
        px-6 py-3
        flex items-center justify-between
    ">

        <!-- Mobile Menu Button -->
        <button id="sidebar-toggle"
            class="lg:hidden p-2 rounded-lg
            hover:bg-gray-100 dark:hover:bg-white/10
            transition-all duration-300">

            <!-- Hamburger -->
            <svg id="menu-icon"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="size-6 transition-all duration-300">

                <path stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>

        </button>

        <!-- Left: Logo + Nama -->
        <div class="flex items-center gap-2">
            <div class="w-8 h-8 flex items-center justify-center text-white font-bold">
                <img src="{{ asset('assets/img/favicon/web-app-manifest-512x512.png') }}" alt="Monetra Logo" class="w-5 h-5">
            </div>

            <span class="font-semibold text-lg 
                bg-gradient-to-r from-teal-500 to-blue-600 
                bg-clip-text text-transparent">
                Monetra
            </span>
        </div>

        <!-- Right: Search + Theme -->
        <div class="flex items-center gap-3">

            <!-- Search -->
            <div class="hidden sm:flex items-center">
                <input type="text" placeholder="Search..."
                    class="px-3 py-1.5 rounded-lg text-sm
                    bg-white/70 dark:bg-white/10
                    border border-gray-200 dark:border-white/10
                    focus:outline-none focus:ring-2 focus:ring-teal-400
                    text-gray-700 dark:text-gray-200
                    placeholder-gray-400">
            </div>

            <!-- Theme Toggle -->
            <button id="theme-toggle"
                class="p-2 rounded-lg
                bg-white/70 dark:bg-white/10
                border border-gray-200 dark:border-white/10
                hover:bg-gradient-to-r hover:from-teal-400 hover:to-blue-500
                hover:text-white
                transition-all duration-300
                transform">
                
                <!-- Icon Light Mode -->
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 hidden dark:block">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
                </svg>

                <!-- Icon Dark Mode -->
                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 dark:hidden">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
                </svg>
            </button>

        </div>
    </div>
</nav>

<!-- Spacer biar konten ga ketutup navbar -->

<script>
    const toggleBtn = document.getElementById('theme-toggle');
    const html = document.documentElement;

    // 🔥 Set default dari localStorage atau default DARK
    if (localStorage.getItem('theme') === 'light') {
        html.classList.remove('dark');
    } else {
        html.classList.add('dark'); // default dark
    }

    toggleBtn.addEventListener('click', () => {
        // animasi
        toggleBtn.classList.add('rotate-180');

        setTimeout(() => {
            toggleBtn.classList.remove('rotate-180');
        }, 300);

        // toggle theme
        if (html.classList.contains('dark')) {
            html.classList.remove('dark');
            localStorage.setItem('theme', 'light');
        } else {
            html.classList.add('dark');
            localStorage.setItem('theme', 'dark');
        }
    });
</script>