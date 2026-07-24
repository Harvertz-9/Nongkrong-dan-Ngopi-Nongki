@extends('admin.layout.app')

@section('title', 'Edit Menu')

@section('content')
<div class="max-w-4xl mx-auto py-8 px-4 sm:px-6 lg:px-8">

    <a href="{{ route('admin.menu.index') }}" class="inline-flex items-center text-sm text-stone-500 hover:text-amber-600 mb-6 transition-colors">
        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
        Kembali ke Daftar Menu
    </a>

    <div class="mb-8">
        <h1 class="text-2xl font-bold text-stone-800">Edit Menu</h1>
        <p class="text-stone-500 mt-1">Perbarui data menu {{ $menu->nama }}</p>
    </div>

    <div class="bg-white rounded-xl shadow-sm border border-stone-200 p-6 sm:p-8">
        <form action="{{ route('admin.menu.update', $menu->id) }}" method="POST">
            @csrf
            @method('PUT')

            {{-- Nama --}}
            <div class="mb-5">
                <label for="nama" class="block text-sm font-semibold text-stone-700 mb-1.5">Nama</label>
                <input
                    type="text"
                    name="nama"
                    id="nama"
                    value="{{ old('nama', $menu->nama) }}"
                    required
                    maxlength="255"
                    class="w-full rounded-lg border border-stone-300 px-3.5 py-2.5 text-sm text-stone-800 placeholder-stone-400 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition"
                    placeholder="Masukkan nama menu"
                >
                @error('nama')
                    <p class="mt-1.5 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>

            {{-- Kategori --}}
            <div class="mb-5">
                <label for="category_id" class="block text-sm font-semibold text-stone-700 mb-1.5">Kategori</label>
                <select
                    name="category_id"
                    id="category_id"
                    class="w-full rounded-lg border border-stone-300 px-3.5 py-2.5 text-sm text-stone-800 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition"
                >
                    <option value="">-- Pilih Kategori --</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id', $menu->category_id) == $category->id ? 'selected' : '' }}>
                            {{ $category->nama }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                    <p class="mt-1.5 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>

            {{-- Harga --}}
            <div class="mb-5">
                <label for="harga" class="block text-sm font-semibold text-stone-700 mb-1.5">Harga</label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 text-sm text-stone-500">Rp</span>
                    <input
                        type="number"
                        name="harga"
                        id="harga"
                        value="{{ old('harga', $menu->harga) }}"
                        required
                        min="0"
                        class="w-full rounded-lg border border-stone-300 pl-10 pr-3.5 py-2.5 text-sm text-stone-800 placeholder-stone-400 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition"
                        placeholder="0"
                    >
                </div>
                @error('harga')
                    <p class="mt-1.5 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>

            {{-- Deskripsi --}}
            <div class="mb-5">
                <label for="deskripsi" class="block text-sm font-semibold text-stone-700 mb-1.5">Deskripsi</label>
                <textarea
                    name="deskripsi"
                    id="deskripsi"
                    required
                    rows="4"
                    class="w-full rounded-lg border border-stone-300 px-3.5 py-2.5 text-sm text-stone-800 placeholder-stone-400 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition resize-none"
                    placeholder="Masukkan deskripsi menu"
                >{{ old('deskripsi', $menu->deskripsi) }}</textarea>
                @error('deskripsi')
                    <p class="mt-1.5 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>

            {{-- Tersedia --}}
            <div class="mb-8">
                <label for="tersedia" class="block text-sm font-semibold text-stone-700 mb-1.5">Status Tersedia</label>
                <div class="flex items-center gap-3">
                    <label class="relative inline-flex cursor-pointer items-center">
                        <input
                            type="checkbox"
                            name="tersedia"
                            id="tersedia"
                            value="1"
                            class="peer sr-only"
                            {{ old('tersedia', $menu->tersedia) ? 'checked' : '' }}
                        >
                        <div class="h-6 w-11 rounded-full bg-stone-300 transition-colors peer-checked:bg-amber-500 after:absolute after:left-[2px] after:top-[2px] after:h-5 after:w-5 after:rounded-full after:bg-white after:transition-all peer-checked:after:translate-x-full"></div>
                    </label>
                    <span id="tersedia-label" class="text-sm text-stone-600">{{ old('tersedia', $menu->tersedia) ? 'Tersedia' : 'Tidak Tersedia' }}</span>
                </div>
                @error('tersedia')
                    <p class="mt-1.5 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>

            {{-- Buttons --}}
            <div class="flex items-center gap-3 pt-2 border-t border-stone-100">
                <a href="{{ route('admin.menu.index') }}" class="inline-flex items-center px-5 py-2.5 rounded-lg border border-stone-300 text-sm font-medium text-stone-600 hover:bg-stone-50 transition-colors">
                    Batal
                </a>
                <button type="submit" class="inline-flex items-center px-5 py-2.5 rounded-lg bg-amber-500 text-sm font-semibold text-white hover:bg-amber-600 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-offset-2 transition-colors">
                    Perbarui Menu
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    const tersediaCheckbox = document.getElementById('tersedia');
    const tersediaLabel = document.getElementById('tersedia-label');

    tersediaCheckbox.addEventListener('change', function () {
        tersediaLabel.textContent = this.checked ? 'Tersedia' : 'Tidak Tersedia';
    });
</script>
@endsection
