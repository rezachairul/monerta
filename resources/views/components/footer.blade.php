<!-- Footer -->

<footer class="w-full mt-10 relative">
    
    <!-- Glow effect -->
    <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-[400px] h-[200px] 
        bg-gradient-to-r from-teal-400/20 to-blue-500/20 blur-3xl opacity-30">
    </div>

    <div class="
        backdrop-blur-xl 
        bg-white/70 dark:bg-white/5 
        border-t border-gray-200 dark:border-white/10 
        shadow-lg 
        rounded-r-2xl
        py-5 px-6
        text-center
    ">
        <p class="text-xs text-gray-600 dark:text-gray-400">
            &copy; {{ date('Y') }} 
            <span class="font-semibold bg-gradient-to-r from-teal-500 to-blue-600 bg-clip-text text-transparent">
                Monetra
            </span>. All rights reserved.
        </p>

        <div class="mt-2 text-xs text-gray-500 dark:text-gray-500">
            Maintained by
            <a href="https://cobradev.vercel.app/" target="_blank"
                class="ml-1 font-medium text-gray-700 dark:text-gray-300 
                hover:text-transparent hover:bg-clip-text 
                hover:bg-gradient-to-r hover:from-teal-400 hover:to-blue-500 
                transition duration-300">
                CobraDEV
            </a>
        </div>
    </div>
</footer>