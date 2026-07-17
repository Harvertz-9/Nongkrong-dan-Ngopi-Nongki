<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Menu - Nongki</title>
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
                    <a href="/menu" class="text-amber-100/70 hover:text-amber-200 transition">Menu</a>
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
    <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8 py-8">

        <!-- Header -->
        <div class="mb-6">
            <a href="/menu" class="inline-flex items-center gap-1.5 text-sm text-stone-500 hover:text-amber-700 transition mb-3">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                Kembali ke Daftar Menu
            </a>
            <h1 class="text-2xl sm:text-3xl font-bold text-stone-800">Tambah Menu Baru</h1>
            <p class="text-stone-500 text-sm mt-1">Lengkapi data berikut untuk menambahkan menu</p>
        </div>

        <!-- Success Message -->
        @if (session('success'))
            <div class="bg-green-50 border border-green-200 text-green-700 rounded-xl p-4 mb-6 text-sm flex items-center gap-2">
                <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                {{ session('success') }}
            </div>
        @endif

        <!-- Form Card -->
        <div class="bg-white rounded-xl shadow-sm border border-stone-200 p-6 sm:p-8">
            <form action="/menus" method="POST">
                @csrf

                <!-- Nama -->
                <div class="mb-5">
                    <label for="nama" class="block text-sm font-semibold text-stone-700 mb-1.5">
                        Nama Menu <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="nama" name="nama" value="{{ old('nama') }}" required
                        placeholder="Contoh: Iced Americano"
                        class="w-full px-4 py-2.5 border border-stone-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 outline-none transition text-sm @error('nama') border-red-400 @enderror">
                    @error('nama')
                        <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Harga -->
                <div class="mb-5">
                    <label for="harga" class="block text-sm font-semibold text-stone-700 mb-1.5">
                        Harga <span class="text-red-500">*</span>
                    </label>
                    <div class="relative">
                        <span class="absolute left-3 top-1/2 -translate-y-1/2 text-stone-400 text-sm font-medium">Rp</span>
                        <input type="number" id="harga" name="harga" value="{{ old('harga') }}" required min="0"
                            placeholder="0"
                            class="w-full pl-10 pr-4 py-2.5 border border-stone-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 outline-none transition text-sm @error('harga') border-red-400 @enderror">
                    </div>
                    @error('harga')
                        <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Deskripsi -->
                <div class="mb-5">
                    <label for="deskripsi" class="block text-sm font-semibold text-stone-700 mb-1.5">
                        Deskripsi <span class="text-red-500">*</span>
                    </label>
                    <textarea id="deskripsi" name="deskripsi" rows="3" required
                        placeholder="Deskripsikan menu ini..."
                        class="w-full px-4 py-2.5 border border-stone-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 outline-none transition text-sm resize-none @error('deskripsi') border-red-400 @enderror">{{ old('deskripsi') }}</textarea>
                    @error('deskripsi')
                        <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Tersedia -->
                <div class="mb-6">
                    <label class="block text-sm font-semibold text-stone-700 mb-2">
                        Ketersediaan
                    </label>
                    <div class="flex items-center gap-3">
                        <label for="tersedia" class="relative inline-flex items-center cursor-pointer">
                            <input type="hidden" name="tersedia" value="0">
                            <input type="checkbox" id="tersedia" name="tersedia" value="1"
                                {{ old('tersedia', '1') ? 'checked' : '' }}
                                class="sr-only peer">
                            <div class="w-11 h-6 bg-stone-300 peer-focus:ring-2 peer-focus:ring-amber-500 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-stone-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-amber-600"></div>
                        </label>
                        <span class="text-sm text-stone-600" id="tersediaLabel">
                            {{ old('tersedia', '1') ? 'Tersedia' : 'Tidak Tersedia' }}
                        </span>
                    </div>
                    @error('tersedia')
                        <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Buttons -->
                <div class="flex items-center gap-3">
                    <a href="/menu"
                        class="flex-1 text-center bg-stone-100 hover:bg-stone-200 text-stone-700 font-semibold py-2.5 px-4 rounded-lg transition text-sm">
                        Batal
                    </a>
                    <button type="submit"
                        class="flex-1 bg-amber-700 hover:bg-amber-600 text-white font-semibold py-2.5 px-4 rounded-lg transition text-sm">
                        Simpan Menu
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        const checkbox = document.getElementById('tersedia');
        const label = document.getElementById('tersediaLabel');
        checkbox.addEventListener('change', () => {
            label.textContent = checkbox.checked ? 'Tersedia' : 'Tidak Tersedia';
        });
    </script>

</body>

</html>
