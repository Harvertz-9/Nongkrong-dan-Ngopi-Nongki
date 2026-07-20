@extends('layouts.app')
@section('title', 'Nongki - Hubungi Kami')

@section('content')

{{-- HERO --}}
<section class="relative min-h-[40vh] flex items-center overflow-hidden">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1554118811-1e0d58224f24?w=1600&q=80" alt="Contact" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-r from-coffee/90 to-coffee/60"></div>
    </div>
    <div class="relative max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-20 w-full">
        <span class="inline-block bg-latte/20 text-latte px-4 py-1.5 rounded-full text-sm font-medium mb-4">Kontak</span>
        <h1 class="text-4xl md:text-5xl font-bold font-bold text-cream mb-4">Hubungi <span class="text-latte">Kami</span></h1>
        <p class="text-lg text-latte-light/60 max-w-xl">Punya pertanyaan atau saran? Kami siap mendengar dari kamu.</p>
    </div>
</section>

{{-- CONTACT --}}
<section class="py-20 bg-warm-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-5 gap-12">

            <div class="lg:col-span-2 space-y-7">
                <div>
                    <h2 class="text-2xl font-bold font-bold text-coffee mb-2">Info Kontak</h2>
                    <p class="text-mocha text-sm">Hubungi kami kapan saja.</p>
                </div>

                <div class="space-y-5">
                    <div class="flex items-start gap-4">
                        <div class="w-11 h-11 rounded-xl bg-latte-light/30 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-mocha" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-coffee text-sm">Alamat</h3>
                            <p class="text-mocha text-sm mt-0.5">Jl. Sunset Road No. 88, Seminyak, Bali</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-11 h-11 rounded-xl bg-latte-light/30 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-mocha" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-coffee text-sm">Telepon</h3>
                            <p class="text-mocha text-sm mt-0.5">+62 812 3456 7890</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-11 h-11 rounded-xl bg-latte-light/30 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-mocha" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-coffee text-sm">Email</h3>
                            <p class="text-mocha text-sm mt-0.5">hello@nongki.com</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-11 h-11 rounded-xl bg-latte-light/30 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-mocha" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-coffee text-sm">Jam Buka</h3>
                            <p class="text-mocha text-sm mt-0.5">Setiap hari, 08:00 - 22:00 WITA</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-3">
                <div class="bg-cream rounded-2xl p-7 md:p-9 border border-latte-light/20">
                    <h2 class="text-xl font-bold font-bold text-coffee mb-6">Kirim Pesan</h2>

                    @if(session('success'))
                        <div class="bg-sage/10 border border-sage/20 text-sage px-4 py-3 rounded-xl mb-6 text-sm font-medium">{{ session('success') }}</div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-5">
                        @csrf
                        <div class="grid sm:grid-cols-2 gap-5">
                            <div>
                                <label class="block text-sm font-medium text-coffee mb-1.5">Nama</label>
                                <input type="text" name="name" value="{{ old('name') }}" placeholder="Nama kamu" class="w-full px-4 py-3 bg-warm-white border border-latte-light/30 rounded-xl text-sm text-coffee placeholder-mocha/40 focus:outline-none focus:ring-2 focus:ring-latte focus:border-transparent transition-all @error('name') border-terracotta @enderror" required>
                                @error('name') <p class="text-terracotta text-xs mt-1">{{ $message }}</p> @enderror
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-coffee mb-1.5">Email</label>
                                <input type="email" name="email" value="{{ old('email') }}" placeholder="email@nongki.com" class="w-full px-4 py-3 bg-warm-white border border-latte-light/30 rounded-xl text-sm text-coffee placeholder-mocha/40 focus:outline-none focus:ring-2 focus:ring-latte focus:border-transparent transition-all @error('email') border-terracotta @enderror" required>
                                @error('email') <p class="text-terracotta text-xs mt-1">{{ $message }}</p> @enderror
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-coffee mb-1.5">Subjek</label>
                            <input type="text" name="subject" value="{{ old('subject') }}" placeholder="Perihal pesan" class="w-full px-4 py-3 bg-warm-white border border-latte-light/30 rounded-xl text-sm text-coffee placeholder-mocha/40 focus:outline-none focus:ring-2 focus:ring-latte focus:border-transparent transition-all @error('subject') border-terracotta @enderror" required>
                            @error('subject') <p class="text-terracotta text-xs mt-1">{{ $message }}</p> @enderror
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-coffee mb-1.5">Kategori</label>
                            <select name="category" class="w-full px-4 py-3 bg-warm-white border border-latte-light/30 rounded-xl text-sm text-coffee focus:outline-none focus:ring-2 focus:ring-latte focus:border-transparent transition-all" required>
                                <option value="" disabled selected>Pilih kategori</option>
                                <option value="umum" {{ old('category') == 'umum' ? 'selected' : '' }}>Pertanyaan Umum</option>
                                <option value="menu" {{ old('category') == 'menu' ? 'selected' : '' }}>Tentang Menu</option>
                                <option value="promo" {{ old('category') == 'promo' ? 'selected' : '' }}>Promo & Diskon</option>
                                <option value="kerjasama" {{ old('category') == 'kerjasama' ? 'selected' : '' }}>Kerja Sama</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-coffee mb-1.5">Pesan</label>
                            <textarea name="message" rows="4" placeholder="Tulis pesan kamu..." class="w-full px-4 py-3 bg-warm-white border border-latte-light/30 rounded-xl text-sm text-coffee placeholder-mocha/40 focus:outline-none focus:ring-2 focus:ring-latte focus:border-transparent transition-all resize-none @error('message') border-terracotta @enderror" required>{{ old('message') }}</textarea>
                            @error('message') <p class="text-terracotta text-xs mt-1">{{ $message }}</p> @enderror
                        </div>
                        <button type="submit" class="w-full px-6 py-3.5 bg-coffee text-cream font-semibold rounded-full shadow-md hover:bg-coffee-light hover:shadow-lg transition-all flex items-center justify-center gap-2">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
                            Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
