<!-- Layouts -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Monetra | {{ $title ?? 'Dashboard' }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Favicon -->
        <link id="favicon" rel="shortcut icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" type="image/x-icon">        

    </head>
    
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-white transition-colors duration-500">
        
    <!-- Navbar -->
        <x-navbar />                        

        <!-- Main Content -->
        <div class="flex min-h-[calc(100vh-64px)]">

            <!-- sidebar -->
            <x-sidebar />

            <div class="flex-1 flex flex-col">
                <!-- Content Area -->
                <main class="flex-1 p-6 lg:p-8">

                    <!-- Header -->
                    <div class="mb-8">
                        <x-header>
                            {{ $title ?? 'Dashboard' }}
                        </x-header>
                    </div>

                    <!-- Page Content -->
                    {{ $slot }}

                </main>

                <!-- Footer -->
                <x-footer />
            </div>            

        </div>

        <!-- Script JS -->
        <!-- Sidebar -->
        <script>
            document.addEventListener('DOMContentLoaded', () => {

                const sidebar = document.getElementById('sidebar');
                const overlay = document.getElementById('sidebar-overlay');

                const toggleBtn = document.getElementById('sidebar-toggle');
                const menuIcon = document.getElementById('menu-icon');

                let isOpen = false;

                function setHamburgerIcon() {
                    menuIcon.innerHTML = `
                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    `;
                }

                function setCloseIcon() {
                    menuIcon.innerHTML = `
                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M6 18 18 6M6 6l12 12" />
                    `;
                }

                function openSidebar() {
                    sidebar.classList.remove('-translate-x-full');
                    overlay.classList.remove('hidden');

                    menuIcon.classList.add('rotate-180');

                    setTimeout(() => {
                        setCloseIcon();
                        menuIcon.classList.remove('rotate-180');
                    }, 150);

                    isOpen = true;
                }

                function closeSidebar() {
                    sidebar.classList.add('-translate-x-full');
                    overlay.classList.add('hidden');

                    menuIcon.classList.add('rotate-180');

                    setTimeout(() => {
                        setHamburgerIcon();
                        menuIcon.classList.remove('rotate-180');
                    }, 150);

                    isOpen = false;
                }

                toggleBtn.addEventListener('click', () => {
                    if (isOpen) {
                        closeSidebar();
                    } else {
                        openSidebar();
                    }
                });

                overlay.addEventListener('click', closeSidebar);

            });
        </script>
    </body>
</html>
