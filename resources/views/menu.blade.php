@extends('layouts.app')
@section('title', 'Dashboard Menu - Nongki')

@section('content')

<section class="py-10 bg-cream min-h-[85vh]">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Header --}}
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-8">
            <div>
                <h1 class="text-2xl md:text-3xl font-bold text-coffee">Dashboard Menu</h1>
                <p class="text-mocha text-sm mt-1">Kelola seluruh menu yang tersedia di Nongki</p>
            </div>
            <a href="{{ route('menu.create') }}" class="inline-flex items-center gap-2 px-5 py-2.5 bg-terracotta text-cream text-sm font-semibold rounded-xl hover:bg-terracotta/90 transition-all shadow-md shrink-0">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                Tambah Menu
            </a>
        </div>

        {{-- Stats --}}
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
            <div class="bg-warm-white rounded-xl border border-latte-light/20 p-4">
                <p class="text-xs text-mocha/60 font-medium uppercase tracking-wider">Total Menu</p>
                <p class="text-2xl font-bold text-coffee mt-1">{{ $menus->count() }}</p>
            </div>
            <div class="bg-warm-white rounded-xl border border-latte-light/20 p-4">
                <p class="text-xs text-mocha/60 font-medium uppercase tracking-wider">Tersedia</p>
                <p class="text-2xl font-bold text-sage mt-1">{{ $menus->where('tersedia', true)->count() }}</p>
            </div>
            <div class="bg-warm-white rounded-xl border border-latte-light/20 p-4">
                <p class="text-xs text-mocha/60 font-medium uppercase tracking-wider">Habis</p>
                <p class="text-2xl font-bold text-terracotta mt-1">{{ $menus->where('tersedia', false)->count() }}</p>
            </div>
            <div class="bg-warm-white rounded-xl border border-latte-light/20 p-4">
                <p class="text-xs text-mocha/60 font-medium uppercase tracking-wider">Promo</p>
                <p class="text-2xl font-bold text-mocha mt-1">{{ $menus->where('harga', '<', 25000)->count() }}</p>
            </div>
        </div>

        {{-- Search --}}
        <div class="bg-warm-white rounded-xl border border-latte-light/20 p-4 mb-6">
            <form action="/hasil" method="GET" class="flex gap-2">
                <div class="relative flex-1">
                    <svg class="absolute left-3.5 top-1/2 -translate-y-1/2 w-4 h-4 text-mocha/40" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    <input type="text" name="search" placeholder="Cari nama menu..." class="w-full pl-10 pr-4 py-2.5 bg-cream border border-latte-light/30 rounded-xl text-sm text-coffee placeholder-mocha/40 focus:outline-none focus:ring-2 focus:ring-latte focus:border-transparent transition">
                </div>
                <button type="submit" class="px-5 py-2.5 bg-coffee text-cream text-sm font-semibold rounded-xl hover:bg-coffee-light transition-all shrink-0">Cari</button>
            </form>
        </div>

        {{-- Success --}}
        @if(session('success'))
            <div class="bg-sage/10 border border-sage/20 text-sage px-5 py-3 rounded-xl mb-6 text-sm font-medium flex items-center gap-2">
                <svg class="w-5 h-5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                {{ session('success') }}
            </div>
        @endif

        {{-- Table --}}
        <div class="bg-warm-white rounded-2xl border border-latte-light/20 overflow-hidden shadow-sm">
            @if($menus->count() > 0)

                {{-- Desktop --}}
                <div class="hidden md:block overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="bg-coffee text-cream">
                                <th class="text-left py-3.5 px-5 font-semibold text-xs uppercase tracking-wider w-12">No</th>
                                <th class="text-left py-3.5 px-5 font-semibold text-xs uppercase tracking-wider">Nama Menu</th>
                                <th class="text-left py-3.5 px-5 font-semibold text-xs uppercase tracking-wider">Deskripsi</th>
                                <th class="text-right py-3.5 px-5 font-semibold text-xs uppercase tracking-wider">Harga</th>
                                <th class="text-center py-3.5 px-5 font-semibold text-xs uppercase tracking-wider">Promo</th>
                                <th class="text-center py-3.5 px-5 font-semibold text-xs uppercase tracking-wider">Status</th>
                                <th class="text-center py-3.5 px-5 font-semibold text-xs uppercase tracking-wider">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($menus as $index => $menu)
                                <tr class="border-b border-latte-light/15 hover:bg-latte-light/10 transition {{ $loop->last ? 'border-b-0' : '' }}">
                                    <td class="py-3.5 px-5 text-mocha/50 font-medium">{{ $index + 1 }}</td>
                                    <td class="py-3.5 px-5">
                                        <div class="flex items-center gap-3">
                                            @php
                                                $colors = ['bg-coffee', 'bg-mocha', 'bg-terracotta', 'bg-sage', 'bg-latte', 'bg-coffee-light'];
                                                $colorClass = $colors[$index % count($colors)];
                                            @endphp
                                            <div class="w-9 h-9 rounded-lg {{ $colorClass }} flex items-center justify-center shrink-0">
                                                <span class="text-cream text-sm font-bold">{{ substr($menu->nama, 0, 1) }}</span>
                                            </div>
                                            <span class="font-semibold text-coffee">{{ $menu->nama }}</span>
                                        </div>
                                    </td>
                                    <td class="py-3.5 px-5 text-mocha max-w-xs truncate" title="{{ $menu->deskripsi }}">{{ $menu->deskripsi }}</td>
                                    <td class="py-3.5 px-5 text-right font-semibold text-coffee">Rp {{ number_format($menu->harga, 0, ',', '.') }}</td>
                                    <td class="py-3.5 px-5 text-center">
                                        @if($menu->harga < 25000)
                                            <span class="inline-flex items-center gap-1 bg-terracotta/10 text-terracotta text-xs font-semibold px-2.5 py-1 rounded-full">
                                                <span class="w-1.5 h-1.5 bg-terracotta rounded-full"></span>
                                                Promo
                                            </span>
                                        @else
                                            <span class="text-mocha/30 text-xs">-</span>
                                        @endif
                                    </td>
                                    <td class="py-3.5 px-5 text-center">
                                        @if($menu->tersedia)
                                            <span class="inline-flex items-center gap-1 bg-sage/15 text-sage text-xs font-semibold px-2.5 py-1 rounded-full">
                                                <span class="w-1.5 h-1.5 bg-sage rounded-full"></span>
                                                Tersedia
                                            </span>
                                        @else
                                            <span class="inline-flex items-center gap-1 bg-mocha/10 text-mocha/50 text-xs font-semibold px-2.5 py-1 rounded-full">
                                                <span class="w-1.5 h-1.5 bg-mocha/40 rounded-full"></span>
                                                Habis
                                            </span>
                                        @endif
                                    </td>
                                    <td class="py-3.5 px-5">
                                        <div class="flex items-center justify-center gap-1.5">
                                            <a href="{{ route('menu.edit', $menu->id) }}" class="w-8 h-8 rounded-lg bg-latte-light/20 flex items-center justify-center text-mocha hover:bg-coffee hover:text-cream transition-all" title="Edit">
                                                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                                            </a>
                                            <form action="{{ route('menu.destroy', $menu->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus menu ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="w-8 h-8 rounded-lg bg-latte-light/20 flex items-center justify-center text-mocha hover:bg-red-500 hover:text-cream transition-all" title="Hapus">
                                                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                {{-- Mobile --}}
                <div class="md:hidden divide-y divide-latte-light/15">
                    @foreach($menus as $index => $menu)
                        @php
                            $isPromo = $menu->harga < 25000;
                            $colors = ['bg-coffee', 'bg-mocha', 'bg-terracotta', 'bg-sage', 'bg-latte', 'bg-coffee-light'];
                            $colorClass = $colors[$index % count($colors)];
                        @endphp
                        <div class="p-4 hover:bg-latte-light/10 transition">
                            <div class="flex items-start gap-3">
                                <div class="w-10 h-10 rounded-xl {{ $colorClass }} flex items-center justify-center shrink-0">
                                    <span class="text-cream text-sm font-bold">{{ substr($menu->nama, 0, 1) }}</span>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <div class="flex items-center gap-2">
                                        <h3 class="font-semibold text-coffee text-sm">{{ $menu->nama }}</h3>
                                        @if($isPromo)
                                            <span class="bg-terracotta/10 text-terracotta text-[10px] font-bold px-1.5 py-0.5 rounded-full">Promo</span>
                                        @endif
                                    </div>
                                    <p class="text-xs text-mocha/50 mt-0.5 truncate">{{ $menu->deskripsi }}</p>
                                    <div class="flex items-center gap-3 mt-2">
                                        <span class="text-terracotta font-bold text-sm">Rp {{ number_format($menu->harga, 0, ',', '.') }}</span>
                                        @if($menu->tersedia)
                                            <span class="inline-flex items-center gap-1 text-sage text-[11px] font-medium"><span class="w-1.5 h-1.5 bg-sage rounded-full"></span> Tersedia</span>
                                        @else
                                            <span class="inline-flex items-center gap-1 text-mocha/40 text-[11px] font-medium"><span class="w-1.5 h-1.5 bg-mocha/30 rounded-full"></span> Habis</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center gap-2 mt-3 pt-3 border-t border-latte-light/15">
                                <a href="{{ route('menu.edit', $menu->id) }}" class="flex-1 text-center text-xs font-semibold text-coffee bg-cream border border-latte-light/30 hover:bg-coffee hover:text-cream py-2 rounded-xl transition-all">Edit</a>
                                <form action="{{ route('menu.destroy', $menu->id) }}" method="POST" class="flex-1" onsubmit="return confirm('Yakin ingin menghapus menu ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="w-full text-xs font-semibold text-terracotta bg-terracotta/10 hover:bg-terracotta hover:text-cream py-2 rounded-xl transition-all">Hapus</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>

            @else
                {{-- Empty State --}}
                <div class="flex flex-col items-center justify-center py-20">
                    <div class="w-20 h-20 rounded-full bg-latte-light/30 flex items-center justify-center mb-5">
                        <svg class="w-10 h-10 text-mocha/30" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
                    </div>
                    <h3 class="text-lg font-semibold text-coffee mb-1">Belum ada menu</h3>
                    <p class="text-sm text-mocha mb-6">Mulai tambahkan menu pertama untuk Nongki</p>
                    <a href="{{ route('menu.create') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-coffee text-cream font-semibold rounded-full hover:bg-coffee-light transition-all shadow-md">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                        Tambah Menu
                    </a>
                </div>
            @endif
        </div>
    </div>
</section>

@endsection
