@extends('layouts.app')
@section('title', 'Tambah Menu - Nongki')

@section('content')

<section class="py-12 bg-cream min-h-[80vh]">
    <div class="max-w-xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Header --}}
        <div class="mb-8">
            <a href="{{ route('menu') }}" class="inline-flex items-center gap-1.5 text-sm text-mocha hover:text-coffee transition mb-4">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>
                Kembali ke Daftar Menu
            </a>
            <h1 class="text-2xl md:text-3xl font-bold text-coffee">Tambah Menu Baru</h1>
            <p class="text-mocha text-sm mt-1">Lengkapi data berikut untuk menambahkan menu</p>
        </div>

        {{-- Success --}}
        @if(session('success'))
            <div class="bg-sage/10 border border-sage/20 text-sage px-5 py-3 rounded-xl mb-6 text-sm font-medium flex items-center gap-2">
                <svg class="w-5 h-5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                {{ session('success') }}
            </div>
        @endif

        {{-- Form Card --}}
        <div class="bg-warm-white rounded-2xl border border-latte-light/20 p-6 sm:p-8 shadow-sm">
            <form action="{{ route('menu') }}" method="POST">
                @csrf

                {{-- Nama --}}
                <div class="mb-5">
                    <label for="nama" class="block text-sm font-semibold text-coffee mb-1.5">Nama Menu <span class="text-terracotta">*</span></label>
                    <input type="text" id="nama" name="nama" value="{{ old('nama') }}" required placeholder="Contoh: Iced Americano" class="w-full px-4 py-3 bg-cream border border-latte-light/30 rounded-xl text-sm text-coffee placeholder-mocha/40 focus:outline-none focus:ring-2 focus:ring-latte focus:border-transparent transition @error('nama') border-terracotta @enderror">
                    @error('nama') <p class="text-terracotta text-xs mt-1.5">{{ $message }}</p> @enderror
                </div>

                {{-- Harga --}}
                <div class="mb-5">
                    <label for="harga" class="block text-sm font-semibold text-coffee mb-1.5">Harga <span class="text-terracotta">*</span></label>
                    <div class="relative">
                        <span class="absolute left-4 top-1/2 -translate-y-1/2 text-mocha/40 text-sm font-medium">Rp</span>
                        <input type="number" id="harga" name="harga" value="{{ old('harga') }}" required min="0" placeholder="0" class="w-full pl-12 pr-4 py-3 bg-cream border border-latte-light/30 rounded-xl text-sm text-coffee placeholder-mocha/40 focus:outline-none focus:ring-2 focus:ring-latte focus:border-transparent transition @error('harga') border-terracotta @enderror">
                    </div>
                    @error('harga') <p class="text-terracotta text-xs mt-1.5">{{ $message }}</p> @enderror
                </div>

                {{-- Deskripsi --}}
                <div class="mb-5">
                    <label for="deskripsi" class="block text-sm font-semibold text-coffee mb-1.5">Deskripsi <span class="text-terracotta">*</span></label>
                    <textarea id="deskripsi" name="deskripsi" rows="3" required placeholder="Deskripsikan menu ini..." class="w-full px-4 py-3 bg-cream border border-latte-light/30 rounded-xl text-sm text-coffee placeholder-mocha/40 focus:outline-none focus:ring-2 focus:ring-latte focus:border-transparent transition resize-none @error('deskripsi') border-terracotta @enderror">{{ old('deskripsi') }}</textarea>
                    @error('deskripsi') <p class="text-terracotta text-xs mt-1.5">{{ $message }}</p> @enderror
                </div>

                {{-- Tersedia --}}
                <div class="mb-8">
                    <label class="block text-sm font-semibold text-coffee mb-3">Ketersediaan</label>
                    <div class="flex items-center gap-3">
                        <label for="tersedia" class="relative inline-flex items-center cursor-pointer">
                            <input type="hidden" name="tersedia" value="0">
                            <input type="checkbox" id="tersedia" name="tersedia" value="1" {{ old('tersedia', '1') ? 'checked' : '' }} class="sr-only peer">
                            <div class="w-11 h-6 bg-latte-light/50 peer-focus:ring-2 peer-focus:ring-latte rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-coffee"></div>
                        </label>
                        <span class="text-sm text-coffee-light" id="tersediaLabel">{{ old('tersedia', '1') ? 'Tersedia' : 'Tidak Tersedia' }}</span>
                    </div>
                    @error('tersedia') <p class="text-terracotta text-xs mt-1.5">{{ $message }}</p> @enderror
                </div>

                {{-- Buttons --}}
                <div class="flex items-center gap-3">
                    <a href="{{ route('menu') }}" class="flex-1 text-center bg-cream border border-latte-light/30 hover:bg-latte-light/20 text-coffee-light font-semibold py-3 px-4 rounded-xl transition text-sm">Batal</a>
                    <button type="submit" class="flex-1 bg-coffee hover:bg-coffee-light text-cream font-semibold py-3 px-4 rounded-xl transition text-sm shadow-md">Simpan Menu</button>
                </div>
            </form>
        </div>
    </div>
</section>

<script>
    const checkbox = document.getElementById('tersedia');
    const label = document.getElementById('tersediaLabel');
    checkbox.addEventListener('change', () => {
        label.textContent = checkbox.checked ? 'Tersedia' : 'Tidak Tersedia';
    });
</script>

@endsection
