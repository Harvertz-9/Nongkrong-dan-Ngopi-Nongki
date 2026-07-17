<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Menu - Nongki</title>
    @vite('resources/css/app.css')
</head>

<body class="font-Poppins bg-stone-50 min-h-screen">

    <!-- Navbar -->
    <nav class="bg-amber-950/95 backdrop-blur-sm shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <a href="/" class="text-amber-200 text-xl font-bold tracking-wide">☕ Nongki</a>
                <div class="hidden md:flex items-center gap-6">
                    <a href="/" class="text-amber-100/70 hover:text-amber-200 transition">Home</a>
                    <a href="/menu" class="text-amber-200 font-semibold border-b-2 border-amber-400 pb-0.5">Menu</a>
                    <a href="/about" class="text-amber-100/70 hover:text-amber-200 transition">About</a>
                    <a href="/contact" class="text-amber-100/70 hover:text-amber-200 transition">Contact</a>
                </div>
                <a href="/menus/create"
                    class="bg-amber-600 hover:bg-amber-500 text-white text-sm font-semibold py-2 px-4 rounded-lg transition">
                    + Tambah Menu
                </a>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">

        <!-- Header -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-6">
            <div>
                <h1 class="text-2xl sm:text-3xl font-bold text-stone-800">Daftar Menu</h1>
                <p class="text-stone-500 text-sm mt-1">Kelola seluruh menu yang tersedia di Nongki</p>
            </div>
            <div class="text-sm text-stone-500">
                Total: <span class="font-semibold text-stone-700">{{ $menus->count() }}</span> menu
            </div>
        </div>

        <!-- Search & Filter Bar -->
        <div class="bg-white rounded-xl shadow-sm border border-stone-200 p-4 mb-6">
            <form action="/hasil" method="GET" class="flex flex-col sm:flex-row gap-3">
                <div class="relative flex-1">
                    <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-stone-400" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                    <input type="text" name="search" placeholder="Cari nama menu..."
                        class="w-full pl-10 pr-4 py-2.5 border border-stone-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 outline-none transition text-sm">
                </div>
                <button type="submit"
                    class="bg-amber-700 hover:bg-amber-600 text-white font-semibold py-2.5 px-6 rounded-lg transition text-sm whitespace-nowrap">
                    Cari
                </button>
            </form>
        </div>

        <!-- Success Message -->
        @if (session('success'))
            <div class="bg-green-50 border border-green-200 text-green-700 rounded-xl p-4 mb-6 text-sm">
                {{ session('success') }}
            </div>
        @endif

        <!-- Table -->
        <div class="bg-white rounded-xl shadow-sm border border-stone-200 overflow-hidden">
            @if ($menus->count() > 0)
                <!-- Desktop Table -->
                <div class="hidden md:block overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="bg-amber-950 text-amber-100">
                                <th class="text-left py-3 px-4 font-semibold">No</th>
                                <th class="text-left py-3 px-4 font-semibold">Nama Menu</th>
                                <th class="text-left py-3 px-4 font-semibold">Deskripsi</th>
                                <th class="text-right py-3 px-4 font-semibold">Harga</th>
                                <th class="text-center py-3 px-4 font-semibold">Status</th>
                                <th class="text-center py-3 px-4 font-semibold">Ketersediaan</th>
                                <th class="text-center py-3 px-4 font-semibold">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($menus as $index => $menu)
                                <tr
                                    class="border-b border-stone-100 hover:bg-amber-50/50 transition {{ $loop->last ? 'border-b-0' : '' }}">
                                    <td class="py-3 px-4 text-stone-500">{{ $index + 1 }}</td>
                                    <td class="py-3 px-4">
                                        <div class="font-semibold text-stone-800">{{ $menu->nama }}</div>
                                    </td>
                                    <td class="py-3 px-4 text-stone-600 max-w-xs truncate" title="{{ $menu->deskripsi }}">
                                        {{ $menu->deskripsi }}
                                    </td>
                                    <td class="py-3 px-4 text-right font-medium text-stone-800">
                                        Rp {{ number_format($menu->harga, 0, ',', '.') }}
                                    </td>
                                    <td class="py-3 px-4 text-center">
                                        @if ($menu->harga < 25000)
                                            <span
                                                class="inline-flex items-center gap-1 bg-red-100 text-red-700 text-xs font-semibold px-2.5 py-1 rounded-full">
                                                <span class="w-1.5 h-1.5 bg-red-500 rounded-full"></span>
                                                Promo
                                            </span>
                                        @else
                                            <span
                                                class="inline-flex items-center gap-1 bg-stone-100 text-stone-600 text-xs font-semibold px-2.5 py-1 rounded-full">
                                                Normal
                                            </span>
                                        @endif
                                    </td>
                                    <td class="py-3 px-4 text-center">
                                        @if ($menu->tersedia)
                                            <span
                                                class="inline-flex items-center gap-1 bg-green-100 text-green-700 text-xs font-semibold px-2.5 py-1 rounded-full">
                                                <span class="w-1.5 h-1.5 bg-green-500 rounded-full"></span>
                                                Tersedia
                                            </span>
                                        @else
                                            <span
                                                class="inline-flex items-center gap-1 bg-stone-100 text-stone-500 text-xs font-semibold px-2.5 py-1 rounded-full">
                                                <span class="w-1.5 h-1.5 bg-stone-400 rounded-full"></span>
                                                Habis
                                            </span>
                                        @endif
                                    </td>
                                    <td class="py-3 px-4 text-center">
                                        <div class="flex items-center justify-center gap-2">
                                            <a href="/menus/{{ $menu->id }}/edit"
                                                class="text-amber-700 hover:text-amber-900 hover:bg-amber-100 p-1.5 rounded-lg transition"
                                                title="Edit">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                </svg>
                                            </a>
                                            <form action="/menus/{{ $menu->id }}" method="POST"
                                                onsubmit="return confirm('Yakin ingin menghapus menu ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="text-red-500 hover:text-red-700 hover:bg-red-50 p-1.5 rounded-lg transition"
                                                    title="Hapus">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Mobile Cards -->
                <div class="md:hidden divide-y divide-stone-100">
                    @foreach ($menus as $index => $menu)
                        <div class="p-4 hover:bg-amber-50/30 transition">
                            <div class="flex items-start justify-between mb-2">
                                <div class="flex-1">
                                    <div class="flex items-center gap-2 mb-1">
                                        <span class="text-xs text-stone-400 font-medium">#{{ $index + 1 }}</span>
                                        <h3 class="font-semibold text-stone-800">{{ $menu->nama }}</h3>
                                    </div>
                                    <p class="text-sm text-stone-500 line-clamp-2">{{ $menu->deskripsi }}</p>
                                </div>
                            </div>
                            <div class="flex items-center justify-between mt-3">
                                <span class="text-lg font-bold text-amber-800">
                                    Rp {{ number_format($menu->harga, 0, ',', '.') }}
                                </span>
                                <div class="flex items-center gap-2">
                                    @if ($menu->harga < 25000)
                                        <span
                                            class="bg-red-100 text-red-700 text-xs font-semibold px-2 py-0.5 rounded-full">Promo</span>
                                    @endif
                                    @if ($menu->tersedia)
                                        <span
                                            class="bg-green-100 text-green-700 text-xs font-semibold px-2 py-0.5 rounded-full">Tersedia</span>
                                    @else
                                        <span
                                            class="bg-stone-100 text-stone-500 text-xs font-semibold px-2 py-0.5 rounded-full">Habis</span>
                                    @endif
                                </div>
                            </div>
                            <div class="flex items-center gap-2 mt-3 pt-3 border-t border-stone-100">
                                <a href="/menus/{{ $menu->id }}/edit"
                                    class="flex-1 text-center text-xs font-semibold text-amber-700 bg-amber-50 hover:bg-amber-100 py-2 rounded-lg transition">
                                    Edit
                                </a>
                                <form action="/menus/{{ $menu->id }}" method="POST" class="flex-1"
                                    onsubmit="return confirm('Yakin ingin menghapus menu ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="w-full text-xs font-semibold text-red-600 bg-red-50 hover:bg-red-100 py-2 rounded-lg transition">
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <!-- Empty State -->
                <div class="flex flex-col items-center justify-center py-16 px-4">
                    <div class="w-20 h-20 bg-stone-100 rounded-full flex items-center justify-center mb-4">
                        <svg class="w-10 h-10 text-stone-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-stone-700 mb-1">Belum ada menu</h3>
                    <p class="text-sm text-stone-500 mb-4">Mulai tambahkan menu pertama untuk Nongki</p>
                    <a href="/menus/create"
                        class="bg-amber-700 hover:bg-amber-600 text-white font-semibold py-2 px-6 rounded-lg transition text-sm">
                        + Tambah Menu
                    </a>
                </div>
            @endif
        </div>
    </div>

</body>
</html>
