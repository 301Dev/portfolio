<header id="header" class="fixed top-0 left-0 w-full px-4 pt-6 bg-gdark z-50">
    <div class="flex justify-between items-center w-full max-w-5xl mx-auto">
        <a href="/" class="relative text-white text-xl font-semibold">
            301DEV
            <span class="absolute -right-4 bottom-0 text-yellow-300 animate-pulse block transition-all duration-1.5">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                </svg>
            </span>
        </a>
        <nav class="hidden sm:flex gap-8">
            <x-nav-link :href="route('welcome')" :active="request()->routeIs('welcome')">
                {{ __('home') }}
            </x-nav-link>
            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('projects') }}
            </x-nav-link>
            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('about-me') }}
            </x-nav-link>
            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('contact') }}
            </x-nav-link>
        </nav>
        <div id="burger" class="group flex sm:hidden justify-center items-end flex-col w-8 gap-2 cursor-pointer">
            <span class="block w-8 h-0.5 bg-glight"></span>
            <span class="block w-6 h-0.5 bg-glight group-hover:w-8 transition-all duration-1 ease-in-out"></span>
        </div>
    </div>
</header>

{{-- MOBILE NAV --}}
<div id="mobile-nav" class="fixed top-0 left-0 flex sm:hidden justify-between items-start flex-col w-screen min-h-screen bg-gdark px-4 pt-20 z-40">
    <nav class="flex justify-center items-start flex-col gap-8 w-full">
        <x-responsive-nav-link :href="route('welcome')" :active="request()->routeIs('welcome')">
            {{ __('home') }}
        </x-responsive-nav-link>
        <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
            {{ __('projects') }}
        </x-responsive-nav-link>
        <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
            {{ __('about-me') }}
        </x-responsive-nav-link>
        <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
            {{ __('contact') }}
        </x-responsive-nav-link>
    </nav>
    <div class="flex justify-center items-center w-full mb-4">
        <span id="the-line" class="block w-full h-[1px] bg-glight"></span>
        <div class="flex justify-center items-center gap-4 mx-4">
            <a href="#" class="text-glight hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10">
                    <path d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
                    <path d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
                </svg>
            </a>
            <a href="#" class="text-glight hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10">
                    <path d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
                    <path d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
                </svg>
            </a>
            <a href="#" class="text-glight hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10">
                    <path d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
                    <path d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
                </svg>
            </a>
        </div>
        <span id="the-line" class="block w-full h-[1px] bg-glight"></span>
    </div>
</div>

{{-- SOCIAL BAR --}}
<div id="social" class="fixed top-0 left-5 hidden lg:flex justify-center items-center flex-col gap-2 z-50">
    <span id="the-line" class="block w-[1px] h-[33vh] bg-glight"></span>
    <a href="#" class="text-glight hover:text-white">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
            <path d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
            <path d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
        </svg>
    </a>
    <a href="#" class="text-glight hover:text-white">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
            <path d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
            <path d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
        </svg>
    </a>
    <a href="#" class="text-glight hover:text-white">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
            <path d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
            <path d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
        </svg>
    </a>
</div>
