<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu - Nongki</title>
    @vite('resources/css/app.css')
</head>

<body class="font-Poppins bg-stone-50 min-h-screen">

    <!-- Navbar -->
    <nav class="bg-amber-950/95 backdrop-blur-sm shadow-lg sticky top-0 z-30">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <!-- Left: Mobile Menu Button -->
                <button onclick="document.getElementById('mobileMenu').classList.toggle('hidden')" class="md:hidden text-amber-200">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>

                <!-- Center: Logo -->
                <a href="/" class="text-amber-200 text-xl font-bold tracking-wide">☕ Nongki</a>

                <!-- Right: Cart & Profile -->
                <div class="flex items-center gap-3">
                    <button class="relative text-amber-200/70 hover:text-amber-200 transition" title="Keranjang">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <span class="absolute -top-1 -right-1 w-4 h-4 bg-red-500 text-white text-[9px] font-bold rounded-full flex items-center justify-center">0</span>
                    </button>
                    <button class="w-8 h-8 bg-amber-700 rounded-full flex items-center justify-center text-amber-200 hover:bg-amber-600 transition" title="Profil">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Desktop Nav Links -->
        <div class="hidden md:block border-t border-amber-900/50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-center gap-8 h-10">
                    <a href="/" class="text-amber-100/70 hover:text-amber-200 transition text-sm">Home</a>
                    <a href="/menu" class="text-amber-200 font-semibold text-sm">Menu</a>
                    <a href="/about" class="text-amber-100/70 hover:text-amber-200 transition text-sm">About</a>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobileMenu" class="hidden md:hidden border-t border-amber-900/50">
            <div class="px-4 py-3 space-y-2">
                <a href="/" class="block py-2 text-amber-100/70 hover:text-amber-200 transition">Home</a>
                <a href="/menu" class="block py-2 text-amber-200 font-semibold">Menu</a>
                <a href="/about" class="block py-2 text-amber-100/70 hover:text-amber-200 transition">About</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="bg-gradient-to-br from-amber-900 to-amber-800 text-white py-16 sm:py-20 px-4 mb-8">
        <div class="max-w-7xl mx-auto text-center">
            <h1 class="text-3xl sm:text-4xl font-bold mb-2">Menu Kami</h1>
            <p class="text-amber-200 text-sm sm:text-base">Pilihan terbaik untuk menemani harimu</p>
        </div>
    </div>

    <!-- Filter Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-6 mb-8">
        <form action="/menu" method="GET" id="filterForm">
            <div class="bg-white rounded-xl shadow-lg border border-stone-200 p-4 sm:p-6">

                <!-- Category Filter -->
                <div class="mb-4">
                    <label class="block text-sm font-semibold text-stone-700 mb-3">Kategori</label>
                    <div class="flex flex-wrap gap-2">
                        <a href="/menu"
                            class="px-4 py-2 rounded-full text-sm font-medium transition {{ !request('category') ? 'bg-amber-700 text-white' : 'bg-stone-100 text-stone-600 hover:bg-stone-200' }}">
                            Semua
                        </a>
                        @foreach($categories as $category)
                            <a href="/menu?category={{ $category->id }}{{ request('harga_min') ? '&harga_min=' . request('harga_min') : '' }}{{ request('harga_max') ? '&harga_max=' . request('harga_max') : '' }}"
                                class="px-4 py-2 rounded-full text-sm font-medium transition {{ request('category') == $category->id ? 'bg-amber-700 text-white' : 'bg-stone-100 text-stone-600 hover:bg-stone-200' }}">
                                {{ $category->nama }}
                            </a>
                        @endforeach
                    </div>
                </div>

                <!-- Price Filter -->
                <div class="flex flex-col sm:flex-row gap-3 items-end">
                    <div class="flex-1 w-full">
                        <label class="block text-xs font-semibold text-stone-500 mb-1.5">Harga Minimum</label>
                        <div class="relative">
                            <span class="absolute left-3 top-1/2 -translate-y-1/2 text-stone-400 text-sm">Rp</span>
                            <input type="number" name="harga_min" value="{{ request('harga_min') }}" min="0"
                                placeholder="0"
                                class="w-full pl-10 pr-4 py-2.5 border border-stone-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 outline-none transition text-sm">
                        </div>
                    </div>
                    <div class="hidden sm:block text-stone-400 pb-2.5">—</div>
                    <div class="flex-1 w-full">
                        <label class="block text-xs font-semibold text-stone-500 mb-1.5">Harga Maksimum</label>
                        <div class="relative">
                            <span class="absolute left-3 top-1/2 -translate-y-1/2 text-stone-400 text-sm">Rp</span>
                            <input type="number" name="harga_max" value="{{ request('harga_max') }}" min="0"
                                placeholder="∞"
                                class="w-full pl-10 pr-4 py-2.5 border border-stone-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 outline-none transition text-sm">
                        </div>
                    </div>
                    <div class="flex gap-2 w-full sm:w-auto">
                        <button type="submit"
                            class="flex-1 sm:flex-none bg-amber-700 hover:bg-amber-600 text-white font-semibold py-2.5 px-6 rounded-lg transition text-sm">
                            Filter
                        </button>
                        <a href="/menu"
                            class="flex-1 sm:flex-none text-center bg-stone-100 hover:bg-stone-200 text-stone-600 font-semibold py-2.5 px-6 rounded-lg transition text-sm">
                            Reset
                        </a>
                    </div>
                </div>

                @if (request('category') || request('harga_min') || request('harga_max'))
                    <div class="mt-3 pt-3 border-t border-stone-100 flex items-center gap-2 text-xs text-stone-500">
                        <span>Filter aktif:</span>
                        @if (request('category'))
                            @php $cat = $categories->find(request('category')); @endphp
                            <span class="bg-amber-100 text-amber-700 px-2 py-0.5 rounded-full font-medium">{{ $cat->nama ?? 'Unknown' }}</span>
                        @endif
                        @if (request('harga_min'))
                            <span class="bg-amber-100 text-amber-700 px-2 py-0.5 rounded-full font-medium">Min Rp {{ number_format(request('harga_min'), 0, ',', '.') }}</span>
                        @endif
                        @if (request('harga_max'))
                            <span class="bg-amber-100 text-amber-700 px-2 py-0.5 rounded-full font-medium">Max Rp {{ number_format(request('harga_max'), 0, ',', '.') }}</span>
                        @endif
                    </div>
                @endif
            </div>
        </form>
    </div>

    <!-- Menu Grid -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16">

        <!-- Result Count -->
        <div class="mb-6 flex items-center justify-between">
            <p class="text-sm text-stone-500">
                Menampilkan <span class="font-semibold text-stone-700">{{ $menus->count() }}</span> menu
            </p>
        </div>

        @if ($menus->count() > 0)
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-4 sm:gap-5">
                @foreach ($menus as $menu)
                    <div class="bg-white rounded-xl shadow-sm border border-stone-200 overflow-hidden hover:shadow-md transition group">

                        <!-- Image -->
                        <div class="relative aspect-square bg-stone-100 overflow-hidden">
                            @if ($menu->gambar)
                                <img src="{{ asset('storage/' . $menu->gambar) }}" alt="{{ $menu->nama }}"
                                    class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                            @else
                                <div class="w-full h-full flex flex-col items-center justify-center text-stone-400">
                                    <svg class="w-12 h-12 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <span class="text-xs">No Image</span>
                                </div>
                            @endif

                            <!-- Category Badge -->
                            @if ($menu->category)
                                <span class="absolute top-2 left-2 bg-amber-900/80 backdrop-blur-sm text-white text-[10px] font-semibold px-2 py-0.5 rounded-full">
                                    {{ $menu->category->nama }}
                                </span>
                            @endif

                            <!-- Promo Badge -->
                            @if ($menu->harga < 25000)
                                <span class="absolute top-2 right-2 bg-red-500 text-white text-[10px] font-bold px-2 py-0.5 rounded-full">
                                    PROMO
                                </span>
                            @endif

                            <!-- Cart Icon -->
                            <button class="absolute bottom-2 right-2 w-8 h-8 bg-white/90 backdrop-blur-sm rounded-full flex items-center justify-center shadow-sm hover:bg-amber-500 hover:text-white transition text-stone-600"
                                title="Tambah ke keranjang">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </button>
                        </div>

                        <!-- Content -->
                        <div class="p-3 sm:p-4">
                            <h3 class="font-bold text-stone-800 text-sm sm:text-base leading-tight mb-1 truncate" title="{{ $menu->nama }}">
                                {{ $menu->nama }}
                            </h3>
                            <p class="text-xs text-stone-500 line-clamp-2 mb-3 leading-relaxed">
                                {{ $menu->deskripsi }}
                            </p>

                            <!-- Price & Stock -->
                            <div class="flex items-center justify-between mb-3">
                                <span class="text-amber-700 font-bold text-sm sm:text-base">
                                    Rp {{ number_format($menu->harga, 0, ',', '.') }}
                                </span>
                                <span class="text-[10px] font-semibold px-2 py-0.5 rounded-full {{ $menu->tersedia ? 'bg-green-100 text-green-700' : 'bg-stone-100 text-stone-500' }}">
                                    {{ $menu->tersedia ? 'Tersedia' : 'Habis' }}
                                </span>
                            </div>

                            <!-- Buy Button -->
                            <button
                                class="w-full py-2 rounded-lg text-xs font-semibold transition {{ $menu->tersedia ? 'bg-amber-700 hover:bg-amber-600 text-white' : 'bg-stone-100 text-stone-400 cursor-not-allowed' }}"
                                {{ $menu->tersedia ? '' : 'disabled' }}>
                                {{ $menu->tersedia ? 'Beli Sekarang' : 'Stok Habis' }}
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <!-- Empty State -->
            <div class="flex flex-col items-center justify-center py-20">
                <div class="w-24 h-24 bg-stone-100 rounded-full flex items-center justify-center mb-4">
                    <svg class="w-12 h-12 text-stone-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-stone-700 mb-1">Tidak ada menu ditemukan</h3>
                <p class="text-sm text-stone-500 mb-4">Coba ubah filter pencarian Anda</p>
                <a href="/menu"
                    class="bg-amber-700 hover:bg-amber-600 text-white font-semibold py-2 px-6 rounded-lg transition text-sm">
                    Lihat Semua Menu
                </a>
            </div>
        @endif
    </div>

    <!-- Footer -->
    <footer class="bg-amber-950 text-amber-200/60 py-8 px-4">
        <div class="max-w-7xl mx-auto text-center">
            <p class="text-sm">&copy; {{ date('Y') }} Nongki. All rights reserved.</p>
        </div>
    </footer>

</body>

</html>
