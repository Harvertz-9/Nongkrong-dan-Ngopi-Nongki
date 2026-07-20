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
                </div>
            </div>
        </div>
    </div>
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
