<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Nongki')</title>
    @vite('resources/css/app.css')
</head>
<body class="font-sans bg-cream text-coffee antialiased">

    {{-- NAVBAR --}}
    <nav x-data="{ mobileOpen: false }" class="fixed top-0 left-0 right-0 z-50 bg-cream/70 backdrop-blur-xl border-b border-latte-light/30">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16 lg:h-18">

                <a href="{{ route('home') }}" class="flex items-center gap-2.5 group">
                    <div class="w-9 h-9 rounded-xl bg-coffee flex items-center justify-center shadow-md group-hover:shadow-lg transition-all group-hover:scale-105">
                        <svg class="w-5 h-5 text-latte" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M18 8h1a4 4 0 010 8h-1M2 8h16v9a4 4 0 01-4 4H6a4 4 0 01-4-4V8zM6 1v3M10 1v3M14 1v3"/></svg>
                    </div>
                    <span class="text-xl font-bold font-bold text-coffee tracking-tight">Nongki</span>
                </a>

                <div class="hidden md:flex items-center gap-1">
                    <a href="{{ route('home') }}" class="px-5 py-2 rounded-full text-sm font-medium transition-all {{ request()->routeIs('home') ? 'bg-coffee text-cream' : 'text-coffee-light hover:bg-latte-light/40' }}">Home</a>
                    <a href="{{ route('about') }}" class="px-5 py-2 rounded-full text-sm font-medium transition-all {{ request()->routeIs('about') ? 'bg-coffee text-cream' : 'text-coffee-light hover:bg-latte-light/40' }}">About</a>
                    <a href="{{ route('menu') }}" class="px-5 py-2 rounded-full text-sm font-medium transition-all {{ request()->routeIs('menu*') ? 'bg-coffee text-cream' : 'text-coffee-light hover:bg-latte-light/40' }}">Menu</a>
                </div>

                <div class="hidden md:flex items-center gap-3">
                    <a href="#" class="px-4 py-2 text-sm font-medium text-coffee-light hover:text-coffee transition-colors">Sign In</a>
                    <a href="#" class="px-5 py-2 bg-coffee text-cream text-sm font-semibold rounded-full shadow-md hover:bg-coffee-light hover:shadow-lg transition-all">Sign Up</a>

                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = !open" @keydown.escape="open = false" class="w-9 h-9 rounded-full bg-latte/40 border-2 border-latte flex items-center justify-center hover:border-mocha transition-all">
                            <svg class="w-4.5 h-4.5 text-coffee" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" @click.away="open = false" x-cloak class="absolute right-0 mt-2 w-52 bg-warm-white rounded-2xl shadow-xl shadow-coffee/5 border border-latte-light/30 py-2 overflow-hidden">
                            <div class="px-4 py-3 border-b border-cream-dark">
                                <p class="text-sm font-semibold text-coffee">Guest User</p>
                                <p class="text-xs text-mocha">guest@nongki.com</p>
                            </div>
                            <a href="#" class="flex items-center gap-2.5 px-4 py-2.5 text-sm text-coffee-light hover:bg-cream transition-colors">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                                My Profile
                            </a>
                            <a href="#" class="flex items-center gap-2.5 px-4 py-2.5 text-sm text-coffee-light hover:bg-cream transition-colors">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.066 2.573c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.066-2.573c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                Settings
                            </a>
                            <hr class="my-1 border-cream-dark">
                            <a href="#" class="flex items-center gap-2.5 px-4 py-2.5 text-sm text-terracotta hover:bg-red-50 transition-colors">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                                Sign Out
                            </a>
                        </div>
                    </div>
                </div>

                <button @click="mobileOpen = !mobileOpen" class="md:hidden w-10 h-10 flex items-center justify-center rounded-xl hover:bg-latte-light/30 transition-colors">
                    <svg x-show="!mobileOpen" class="w-5 h-5 text-coffee" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/></svg>
                    <svg x-show="mobileOpen" class="w-5 h-5 text-coffee" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" x-cloak><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
        </div>

        <div x-show="mobileOpen" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-2" x-cloak class="md:hidden border-t border-latte-light/30 bg-cream/95 backdrop-blur-xl">
            <div class="px-4 py-4 space-y-1">
                <a href="{{ route('home') }}" class="block px-4 py-2.5 rounded-full text-sm font-medium {{ request()->routeIs('home') ? 'bg-coffee text-cream' : 'text-coffee-light hover:bg-latte-light/30' }}">Home</a>
                <a href="{{ route('about') }}" class="block px-4 py-2.5 rounded-full text-sm font-medium {{ request()->routeIs('about') ? 'bg-coffee text-cream' : 'text-coffee-light hover:bg-latte-light/30' }}">About</a>
                <a href="{{ route('menu') }}" class="block px-4 py-2.5 rounded-full text-sm font-medium {{ request()->routeIs('menu*') ? 'bg-coffee text-cream' : 'text-coffee-light hover:bg-latte-light/30' }}">Menu</a>
            </div>
            <div class="px-4 pb-4 border-t border-latte-light/30 pt-4 space-y-2">
                <div class="flex items-center gap-3 px-4 mb-3">
                    <div class="w-10 h-10 rounded-full bg-latte/40 border-2 border-latte flex items-center justify-center">
                        <svg class="w-4 h-4 text-coffee" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                    </div>
                    <div>
                        <p class="text-sm font-semibold text-coffee">Guest User</p>
                        <p class="text-xs text-mocha">guest@nongki.com</p>
                    </div>
                </div>
                <a href="#" class="block px-4 py-2.5 text-sm font-medium text-coffee-light hover:bg-latte-light/30 rounded-xl text-center">Sign In</a>
                <a href="#" class="block text-center px-4 py-2.5 bg-coffee text-cream text-sm font-semibold rounded-full shadow-md">Sign Up</a>
            </div>
        </div>
    </nav>

    <main class="pt-16 lg:pt-18">
        @yield('content')
    </main>

    {{-- FOOTER --}}
    <footer class="bg-coffee text-latte-light/80 mt-20">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-14">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10">

                <div class="md:col-span-1">
                    <div class="flex items-center gap-2.5 mb-4">
                        <div class="w-9 h-9 rounded-xl bg-latte/20 flex items-center justify-center">
                            <svg class="w-5 h-5 text-latte" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M18 8h1a4 4 0 010 8h-1M2 8h16v9a4 4 0 01-4 4H6a4 4 0 01-4-4V8zM6 1v3M10 1v3M14 1v3"/></svg>
                        </div>
                        <span class="text-xl font-bold font-bold text-cream">Nongki</span>
                    </div>
                    <p class="text-sm leading-relaxed">Tempat nongkrong favorit anak muda. Nikmati kopi dan momen berharga bersama kami.</p>
                </div>

                <div>
                    <h4 class="text-cream font-semibold mb-4 text-sm uppercase tracking-wider">Navigasi</h4>
                    <ul class="space-y-2.5 text-sm">
                        <li><a href="{{ route('home') }}" class="hover:text-cream transition-colors">Home</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-cream transition-colors">About</a></li>
                        <li><a href="{{ route('menu') }}" class="hover:text-cream transition-colors">Menu</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-cream font-semibold mb-4 text-sm uppercase tracking-wider">Layanan</h4>
                    <ul class="space-y-2.5 text-sm">
                        <li><a href="#" class="hover:text-cream transition-colors">Jelajahi Menu</a></li>
                        <li><a href="#" class="hover:text-cream transition-colors">Pesan Sekarang</a></li>
                        <li><a href="#" class="hover:text-cream transition-colors">Promo Hari Ini</a></li>
                        <li><a href="#" class="hover:text-cream transition-colors">Favorit Saya</a></li>
                        <li><a href="#" class="hover:text-cream transition-colors">Riwayat Pesanan</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-cream font-semibold mb-4 text-sm uppercase tracking-wider">Kontak</h4>
                    <ul class="space-y-3 text-sm">
                        <li class="flex items-start gap-2.5">
                            <svg class="w-4 h-4 mt-0.5 shrink-0 text-mocha-light" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            <span>Jl. Sunset Road No. 88, Bali</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <svg class="w-4 h-4 mt-0.5 shrink-0 text-mocha-light" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            <span>hello@nongki.com</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <svg class="w-4 h-4 mt-0.5 shrink-0 text-mocha-light" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            <span>+62 812 3456 7890</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-coffee-light/30 mt-10 pt-8 flex flex-col sm:flex-row items-center justify-between gap-4">
                <p class="text-sm text-mocha">&copy; {{ date('Y') }} Nongki. Dibuat dengan kopi dan cinta.</p>
                <div class="flex items-center gap-3">
                    <a href="#" class="w-9 h-9 rounded-full bg-coffee-light/40 flex items-center justify-center hover:bg-latte/30 transition-colors">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                    </a>
                    <a href="#" class="w-9 h-9 rounded-full bg-coffee-light/40 flex items-center justify-center hover:bg-latte/30 transition-colors">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </a>
                    <a href="#" class="w-9 h-9 rounded-full bg-coffee-light/40 flex items-center justify-center hover:bg-latte/30 transition-colors">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>
