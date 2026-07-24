<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard') - Nongki</title>
    @vite('resources/css/app.css')
</head>

<body class="font-Poppins bg-stone-50 min-h-screen">

    <!-- Sidebar -->
    <aside id="sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen bg-amber-950 transition-transform duration-300 -translate-x-full lg:translate-x-0">
        <div class="h-full flex flex-col">

            <!-- Brand -->
            <div class="flex items-center gap-3 px-6 h-16 border-b border-amber-900/50">
                <a href="/" class="text-amber-200 text-xl font-bold tracking-wide">☕ Nongki</a>
                <span class="text-amber-500 text-xs font-semibold bg-amber-900/50 px-2 py-0.5 rounded-full">Admin</span>
            </div>

            <!-- Navigation -->
            <nav class="flex-1 px-4 py-6 space-y-1 overflow-y-auto">
                <a href="/admin/dashboard"
                    class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium transition {{ request()->is('admin/dashboard') ? 'bg-amber-800/50 text-amber-200' : 'text-amber-200/60 hover:bg-amber-900/50 hover:text-amber-200' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    Dashboard
                </a>

                <div class="pt-4 pb-2">
                    <p class="px-3 text-xs font-semibold text-amber-500/60 uppercase tracking-wider">Kelola</p>
                </div>

                <a href="/admin/menu"
                    class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium transition {{ request()->is('admin/menu*') ? 'bg-amber-800/50 text-amber-200' : 'text-amber-200/60 hover:bg-amber-900/50 hover:text-amber-200' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                    </svg>
                    Menu
                </a>

                <a href="/admin/categories"
                    class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium transition {{ request()->is('admin/categories*') ? 'bg-amber-800/50 text-amber-200' : 'text-amber-200/60 hover:bg-amber-900/50 hover:text-amber-200' }}">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A2 2 0 013 12V7a4 4 0 014-4z" />
                    </svg>
                    Kategori
                </a>

                <div class="pt-4 pb-2">
                    <p class="px-3 text-xs font-semibold text-amber-500/60 uppercase tracking-wider">Lainnya</p>
                </div>

                <a href="/"
                    class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium text-amber-200/60 hover:bg-amber-900/50 hover:text-amber-200 transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                    </svg>
                    Lihat Website
                </a>
            </nav>

            <!-- Footer -->
            <div class="px-6 py-4 border-t border-amber-900/50">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 bg-amber-700 rounded-full flex items-center justify-center">
                        <svg class="w-4 h-4 text-amber-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm font-semibold text-amber-200">Admin</p>
                        <p class="text-xs text-amber-500/60">admin@nongki.com</p>
                    </div>
                </div>
            </div>
        </div>
    </aside>

    <!-- Mobile sidebar overlay -->
    <div id="sidebar-overlay" class="fixed inset-0 z-30 bg-black/50 hidden lg:hidden" onclick="toggleSidebar()"></div>

    <!-- Main Content -->
    <div class="lg:ml-64 min-h-screen">

        <!-- Top Bar (mobile) -->
        <div class="sticky top-0 z-20 bg-white/80 backdrop-blur-sm border-b border-stone-200 lg:hidden">
            <div class="flex items-center justify-between h-14 px-4">
                <button onclick="toggleSidebar()" class="text-stone-600 hover:text-stone-800">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
                <span class="text-sm font-semibold text-stone-800">Admin Dashboard</span>
                <div class="w-6"></div>
            </div>
        </div>

        <!-- Page Content -->
        <main class="p-4 sm:p-6 lg:p-8">
            @yield('content')
        </main>
    </div>

    <!-- Alert Toast -->
    @if (session('success') || session('error'))
        <div id="alert-toast"
            class="fixed top-4 right-4 z-50 max-w-sm w-full {{ session('success') ? 'bg-green-50 border border-green-200 text-green-700' : 'bg-red-50 border border-red-200 text-red-700' }} rounded-xl shadow-lg overflow-hidden transition-all duration-500 ease-in-out"
            style="transform: translateX(120%); opacity: 0;">
            <div class="relative p-4">
                <div class="flex items-center gap-3">
                    <div class="flex-shrink-0">
                        @if (session('success'))
                            <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        @else
                            <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        @endif
                    </div>
                    <p class="text-sm font-medium flex-1">{{ session('success') ?: session('error') }}</p>
                    <button onclick="closeAlert()"
                        class="flex-shrink-0 {{ session('success') ? 'text-green-400 hover:text-green-600' : 'text-red-400 hover:text-red-600' }} transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="absolute bottom-0 left-0 h-1 {{ session('success') ? 'bg-green-200' : 'bg-red-200' }} w-full">
                    <div id="alert-progress"
                        class="h-full {{ session('success') ? 'bg-green-500' : 'bg-red-500' }} rounded-full"
                        style="width: 100%; transition: width 3.5s linear;"></div>
                </div>
            </div>
        </div>
    @endif

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('sidebar-overlay');
            sidebar.classList.toggle('-translate-x-full');
            overlay.classList.toggle('hidden');
        }

        @if (session('success') || session('error'))
            (function () {
                const alert = document.getElementById('alert-toast');
                const progress = document.getElementById('alert-progress');
                if (!alert || !progress) return;

                requestAnimationFrame(() => {
                    requestAnimationFrame(() => {
                        alert.style.transform = 'translateX(0)';
                        alert.style.opacity = '1';
                        progress.style.width = '0%';
                    });
                });

                const timer = setTimeout(() => closeAlert(), 3700);

                window.closeAlert = function () {
                    clearTimeout(timer);
                    alert.style.transform = 'translateX(120%)';
                    alert.style.opacity = '0';
                    setTimeout(() => alert.remove(), 500);
                };
            })();
        @endif
    </script>

    @yield('scripts')

</body>

</html>
