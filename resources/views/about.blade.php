<<<<<<< HEAD
@extends('layouts.app')
@section('title', 'Nongki - Tentang Kami')

@section('content')

{{-- HERO --}}
<section class="relative min-h-screen flex items-center overflow-hidden">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1442512595331-e89e73853f31?w=1600&q=80" alt="About Nongki" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-r from-coffee/90 to-coffee/60"></div>
    </div>
    <div class="relative max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-20 w-full">
        <span class="inline-block bg-latte/20 text-latte px-4 py-1.5 rounded-full text-sm font-medium mb-4">About Us</span>
        <h1 class="text-4xl md:text-5xl font-bold font-bold text-cream mb-4">Cerita di Balik <span class="text-latte">Nongki</span></h1>
        <p class="text-lg text-latte-light/60 max-w-xl">Kami percaya momen nongkrong adalah momen berharga yang layak diisi dengan hal-hal terbaik.</p>
    </div>
</section>

{{-- STORY --}}
<section class="py-20 bg-warm-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-14 items-center">
            <div class="relative">
                <div class="rounded-3xl overflow-hidden shadow-xl shadow-coffee/10">
                    <img src="https://images.unsplash.com/photo-1501339847302-ac426a4a7cbb?w=800&q=80" alt="Nongki Story" class="w-full h-80 object-cover">
                </div>
                <div class="absolute -bottom-6 -right-6 bg-coffee rounded-2xl px-5 py-3 shadow-lg">
                    <p class="text-latte text-sm font-medium">Sejak</p>
                    <p class="text-cream text-xl font-bold font-bold">2023</p>
                </div>
            </div>
            <div>
                <span class="inline-block bg-latte-light/30 text-mocha px-3 py-1 rounded-full text-xs font-semibold uppercase tracking-wider mb-4">Our Story</span>
                <h2 class="text-2xl md:text-3xl font-bold font-bold text-coffee mb-5">Dari kedai kecil, mimpi besar</h2>
                <div class="space-y-4 text-mocha leading-relaxed">
                    <p>Nongki lahir dari keinginan sederhana: mencari tempat nongkrong yang nyaman dengan menu yang enak dan harga yang nggak mahal.</p>
                    <p>Kami mulai dari sebuah kedai kecil di sudut kota Denpasar. Dengan semangat dan kopi terbaik, satu per satu pelanggan setia datang dan akhirnya menjadi bagian dari keluarga Nongki.</p>
                    <p>Sekarang, Nongki terus berkembang. Kami hadir secara online agar kamu bisa lihat menu, cek promo, dan pesan kapan saja tanpa harus antri.</p>
=======
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Nongki</title>
    @vite('resources/css/app.css')
</head>

<body class="font-Poppins bg-stone-50 min-h-screen">

    <!-- Navbar -->
    <nav class="bg-amber-950/95 backdrop-blur-sm shadow-lg sticky top-0 z-30">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <button onclick="document.getElementById('mobileMenu').classList.toggle('hidden')" class="md:hidden text-amber-200">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
                <a href="/" class="text-amber-200 text-xl font-bold tracking-wide">☕ Nongki</a>
                <div class="flex items-center gap-3">
                    <button class="relative text-amber-200/70 hover:text-amber-200 transition" title="Keranjang">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
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
        <div class="hidden md:block border-t border-amber-900/50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-center gap-8 h-10">
                    <a href="/" class="text-amber-100/70 hover:text-amber-200 transition text-sm">Home</a>
                    <a href="/menu" class="text-amber-100/70 hover:text-amber-200 transition text-sm">Menu</a>
                    <a href="/about" class="text-amber-200 font-semibold text-sm">About</a>
                </div>
            </div>
        </div>
        <div id="mobileMenu" class="hidden md:hidden border-t border-amber-900/50">
            <div class="px-4 py-3 space-y-2">
                <a href="/" class="block py-2 text-amber-100/70 hover:text-amber-200 transition">Home</a>
                <a href="/menu" class="block py-2 text-amber-100/70 hover:text-amber-200 transition">Menu</a>
                <a href="/about" class="block py-2 text-amber-200 font-semibold">About</a>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <div class="bg-gradient-to-br from-amber-900 to-amber-800 text-white py-16 sm:py-20 px-4 mb-12">
        <div class="max-w-7xl mx-auto text-center">
            <h1 class="text-3xl sm:text-4xl font-bold mb-2">Tentang Kami</h1>
            <p class="text-amber-200 text-sm sm:text-base">Cerita di balik secangkir kopi</p>
        </div>
    </div>

    <!-- Story -->
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 mb-16">
        <h2 class="text-2xl font-bold text-stone-800 mb-6 text-center">Cerita Kami</h2>
        <div class="bg-white rounded-xl shadow-sm border border-stone-200 p-6 sm:p-8 space-y-4">
            <p class="text-stone-600 leading-relaxed">
                Nongki didirikan pada tahun 2020 dengan visi sederhana: menyajikan kopi berkualitas tinggi
                dengan harga yang terjangkau. Bermula dari sebuah kedai kecil di pinggir jalan, kini Nongki
                telah berkembang menjadi tempat favorit bagi para pecinta kopi di kota ini.
            </p>
            <p class="text-stone-600 leading-relaxed">
                Kami percaya bahwa secangkir kopi yang baik dapat membawa kebahagiaan dan membangun
                konektivitas antar manusia. Setiap biji kopi yang kami pilih berasal dari petani lokal
                terbaik Indonesia, diproses dengan penuh ketelitian untuk menghadirkan cita rasa yang
                autentik dan konsisten.
            </p>
        </div>
    </div>

    <!-- Mission -->
    <div class="bg-stone-100 py-16 px-4 mb-16">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-2xl font-bold text-stone-800 mb-8 text-center">Misi Kami</h2>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                <div class="bg-white rounded-xl p-6 text-center shadow-sm border border-stone-200">
                    <div class="w-14 h-14 bg-amber-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-7 h-7 text-amber-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-stone-800 mb-2">Kopi Berkualitas</h3>
                    <p class="text-sm text-stone-500">Memilih biji kopi terbaik dari petani lokal untuk cita rasa yang konsisten</p>
                </div>
                <div class="bg-white rounded-xl p-6 text-center shadow-sm border border-stone-200">
                    <div class="w-14 h-14 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-7 h-7 text-green-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-stone-800 mb-2">Ramah Lingkungan</h3>
                    <p class="text-sm text-stone-500">Berkomitmen terhadap praktik berkelanjutan dalam setiap proses</p>
                </div>
                <div class="bg-white rounded-xl p-6 text-center shadow-sm border border-stone-200">
                    <div class="w-14 h-14 bg-amber-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-7 h-7 text-amber-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-stone-800 mb-2">Membangun Komunitas</h3>
                    <p class="text-sm text-stone-500">Menciptakan ruang yang nyaman untuk berinteraksi dan berbagi cerita</p>
>>>>>>> 5c924d4 (learn delete & relationship)
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD
</section>

{{-- TIMELINE --}}
<section class="py-20 bg-cream">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14">
            <span class="inline-block bg-latte-light/30 text-mocha px-3 py-1 rounded-full text-xs font-semibold uppercase tracking-wider mb-4">Perjalanan Kami</span>
            <h2 class="text-2xl md:text-3xl font-bold font-bold text-coffee">Langkah demi Langkah</h2>
        </div>

        <div class="relative">
            <div class="hidden md:block absolute left-1/2 top-0 bottom-0 w-px bg-latte-light/40 -translate-x-1/2"></div>

            <div class="space-y-12">
                <div class="md:grid md:grid-cols-2 md:gap-12 items-center">
                    <div class="md:text-right">
                        <div class="bg-warm-white rounded-2xl p-6 border border-latte-light/20 shadow-sm">
                            <p class="text-terracotta font-bold text-sm mb-1">2023 - Awal Mula</p>
                            <h3 class="font-bold font-bold text-coffee text-lg mb-2">Nongki Berdiri</h3>
                            <p class="text-mocha text-sm leading-relaxed">Kedai pertama dibuka di Denpasar, Bali. Menu andalan pertama: Kopi Susu Aren dan Mie Ayam Nenek.</p>
                        </div>
                    </div>
                    <div class="hidden md:flex justify-start">
                        <div class="w-10 h-10 rounded-full bg-coffee border-4 border-cream flex items-center justify-center z-10">
                            <div class="w-3 h-3 rounded-full bg-latte"></div>
                        </div>
                    </div>
                </div>

                <div class="md:grid md:grid-cols-2 md:gap-12 items-center">
                    <div class="hidden md:flex justify-end">
                        <div class="w-10 h-10 rounded-full bg-coffee border-4 border-cream flex items-center justify-center z-10">
                            <div class="w-3 h-3 rounded-full bg-latte"></div>
                        </div>
                    </div>
                    <div>
                        <div class="bg-warm-white rounded-2xl p-6 border border-latte-light/20 shadow-sm">
                            <p class="text-terracotta font-bold text-sm mb-1">2024 - Berkembang</p>
                            <h3 class="font-bold font-bold text-coffee text-lg mb-2">Menu Expansion</h3>
                            <p class="text-mocha text-sm leading-relaxed">Menambah 50+ menu baru termasuk kategori Non-Coffee dan Food. Pelanggan mulai dari 100 menjadi 1.000+ per bulan.</p>
                        </div>
                    </div>
                </div>

                <div class="md:grid md:grid-cols-2 md:gap-12 items-center">
                    <div class="md:text-right">
                        <div class="bg-warm-white rounded-2xl p-6 border border-latte-light/20 shadow-sm">
                            <p class="text-terracotta font-bold text-sm mb-1">2024 - Digital</p>
                            <h3 class="font-bold font-bold text-coffee text-lg mb-2">Go Online</h3>
                            <p class="text-mocha text-sm leading-relaxed">Meluncurkan platform digital Nongki. Pengguna bisa cek menu, promo, dan rekomendasi langsung dari browser.</p>
                        </div>
                    </div>
                    <div class="hidden md:flex justify-start">
                        <div class="w-10 h-10 rounded-full bg-coffee border-4 border-cream flex items-center justify-center z-10">
                            <div class="w-3 h-3 rounded-full bg-latte"></div>
                        </div>
                    </div>
                </div>

                <div class="md:grid md:grid-cols-2 md:gap-12 items-center">
                    <div class="hidden md:flex justify-end">
                        <div class="w-10 h-10 rounded-full bg-terracotta border-4 border-cream flex items-center justify-center z-10 animate-pulse">
                            <div class="w-3 h-3 rounded-full bg-cream"></div>
                        </div>
                    </div>
                    <div>
                        <div class="bg-coffee rounded-2xl p-6 border border-coffee-light/30 shadow-lg">
                            <p class="text-latte font-bold text-sm mb-1">Sekarang</p>
                            <h3 class="font-bold font-bold text-cream text-lg mb-2">50K+ Pengguna</h3>
                            <p class="text-latte-light/60 text-sm leading-relaxed">Melayani 50.000+ pengguna aktif dengan 500+ menu dan terus berinovasi setiap hari. Terima kasih sudah menjadi bagian dari perjalanan kami!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- TEAM --}}
<section class="py-20 bg-warm-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-14">
            <span class="inline-block bg-latte-light/30 text-mocha px-3 py-1 rounded-full text-xs font-semibold uppercase tracking-wider mb-4">Tim Kami</span>
            <h2 class="text-2xl md:text-3xl font-bold font-bold text-coffee">Orang di Balik Nongki</h2>
        </div>

        <div class="grid sm:grid-cols-3 gap-10 max-w-3xl mx-auto">
            <div class="text-center group">
                <div class="relative w-28 h-28 mx-auto mb-5">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=300&q=80" alt="Bryan" class="w-full h-full rounded-full object-cover border-4 border-cream shadow-md group-hover:shadow-lg group-hover:border-latte transition-all">
                </div>
                <h3 class="font-bold font-bold text-coffee">Bryan</h3>
                <p class="text-terracotta text-sm font-medium mb-1">Founder & CEO</p>
                <p class="text-mocha text-xs">Visioner yang memulai semuanya dari secangkir kopi.</p>
            </div>

            <div class="text-center group">
                <div class="relative w-28 h-28 mx-auto mb-5">
                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=300&q=80" alt="Andi" class="w-full h-full rounded-full object-cover border-4 border-cream shadow-md group-hover:shadow-lg group-hover:border-latte transition-all">
                </div>
                <h3 class="font-bold font-bold text-coffee">Andi</h3>
                <p class="text-terracotta text-sm font-medium mb-1">Lead Developer</p>
                <p class="text-mocha text-xs">Membangun fondasi teknologi Nongki.</p>
            </div>

            <div class="text-center group">
                <div class="relative w-28 h-28 mx-auto mb-5">
                    <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=300&q=80" alt="Sari" class="w-full h-full rounded-full object-cover border-4 border-cream shadow-md group-hover:shadow-lg group-hover:border-latte transition-all">
                </div>
                <h3 class="font-bold font-bold text-coffee">Sari</h3>
                <p class="text-terracotta text-sm font-medium mb-1">UI/UX Designer</p>
                <p class="text-mocha text-xs">Membuat Nongki indah dan menyenangkan.</p>
            </div>
        </div>
    </div>
</section>

@endsection
=======

    <!-- Team -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16">
        <h2 class="text-2xl font-bold text-stone-800 mb-8 text-center">Tim Kami</h2>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 max-w-3xl mx-auto">
            @foreach([
                ['nama' => 'Bryan', 'role' => 'Founder'],
                ['nama' => 'Andi', 'role' => 'Head Barista'],
                ['nama' => 'Sari', 'role' => 'Manager'],
            ] as $member)
                <div class="bg-white rounded-xl p-6 text-center shadow-sm border border-stone-200">
                    <div class="w-20 h-20 bg-amber-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-10 h-10 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-stone-800">{{ $member['nama'] }}</h3>
                    <p class="text-sm text-amber-700 font-medium">{{ $member['role'] }}</p>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-amber-950 text-amber-200/60 py-8 px-4">
        <div class="max-w-7xl mx-auto text-center">
            <p class="text-sm">&copy; 2026 Nongki. All rights reserved.</p>
        </div>
    </footer>

</body>

</html>
>>>>>>> 5c924d4 (learn delete & relationship)
