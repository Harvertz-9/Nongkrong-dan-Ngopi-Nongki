@extends('layouts.app')
@section('title', 'Nongki - Nongkrong Favorit')

@section('content')

{{-- HERO SECTION --}}
<section class="relative min-h-[90vh] flex items-center overflow-hidden">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?w=1600&q=80" alt="Coffee Shop" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-r from-coffee/95 via-coffee/75 to-coffee/40"></div>
    </div>

    <div class="relative max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-20 w-full">
        <div class="max-w-2xl">
            <div class="inline-flex items-center gap-2 bg-latte/20 backdrop-blur-sm border border-latte/30 text-latte px-4 py-1.5 rounded-full text-sm font-medium mb-6">
                <span class="w-1.5 h-1.5 bg-sage rounded-full animate-pulse"></span>
                Ngopi dulu, ngobrol nanti
            </div>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold font-bold text-cream leading-[1.1] mb-6">
                Temukan Kopi <br>
                <span class="text-latte">yang Bikin Ketagihan</span>
            </h1>
            <p class="text-lg text-latte-light/70 leading-relaxed mb-8 max-w-md">
                Jelajahi menu kopi dan non-kopi pilihan. Dari espresso hingga matcha, semua ada di Nongki.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="{{ route('menu') }}" class="inline-flex items-center gap-2 px-7 py-3.5 bg-cream text-coffee font-semibold rounded-full shadow-lg hover:bg-white hover:shadow-xl transition-all">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    Lihat Menu
                </a>
                <a href="#rekomendasi" class="inline-flex items-center gap-2 px-7 py-3.5 border-2 border-latte/40 text-cream font-semibold rounded-full hover:bg-latte/10 transition-all">
                    Rekomendasi
                </a>
            </div>
        </div>
    </div>

    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce">
        <svg class="w-6 h-6 text-latte/50" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
    </div>
</section>

{{-- CATEGORIES --}}
<section class="py-16 bg-warm-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between mb-10">
            <div>
                <h2 class="text-2xl md:text-3xl font-bold font-bold text-coffee">Kategori</h2>
                <p class="text-mocha mt-1">Pilih berdasarkan selera kamu</p>
            </div>
            <a href="{{ route('menu') }}" class="text-sm font-medium text-mocha hover:text-coffee transition-colors flex items-center gap-1">
                Lihat Semua
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
            </a>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <a href="{{ route('menu') }}" class="group relative h-40 md:h-52 rounded-2xl overflow-hidden">
                <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93?w=600&q=80" alt="Coffee" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-coffee/80 to-coffee/20 group-hover:from-coffee/90 transition-colors"></div>
                <div class="absolute bottom-0 left-0 p-4">
                    <p class="text-cream font-bold font-bold text-lg">Coffee</p>
                    <p class="text-latte-light/70 text-xs">Espresso, Latte, Cappuccino...</p>
                </div>
            </a>
            <a href="{{ route('menu') }}" class="group relative h-40 md:h-52 rounded-2xl overflow-hidden">
                <img src="https://images.unsplash.com/photo-1556679343-c7306c1976bc?w=600&q=80" alt="Non-Coffee" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-coffee/80 to-coffee/20 group-hover:from-coffee/90 transition-colors"></div>
                <div class="absolute bottom-0 left-0 p-4">
                    <p class="text-cream font-bold font-bold text-lg">Non-Coffee</p>
                    <p class="text-latte-light/70 text-xs">Matcha, Chocolate, Tea...</p>
                </div>
            </a>
            <a href="{{ route('menu') }}" class="group relative h-40 md:h-52 rounded-2xl overflow-hidden">
                <img src="https://images.unsplash.com/photo-1565958011703-44f9829ba187?w=600&q=80" alt="Food" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-coffee/80 to-coffee/20 group-hover:from-coffee/90 transition-colors"></div>
                <div class="absolute bottom-0 left-0 p-4">
                    <p class="text-cream font-bold font-bold text-lg">Food</p>
                    <p class="text-latte-light/70 text-xs">Snack, Pastry, Heavy Meal...</p>
                </div>
            </a>
            <a href="{{ route('menu') }}" class="group relative h-40 md:h-52 rounded-2xl overflow-hidden">
                <img src="https://images.unsplash.com/photo-1544025162-d76694265947?w=600&q=80" alt="Promo" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-coffee/80 to-coffee/20 group-hover:from-coffee/90 transition-colors"></div>
                <div class="absolute bottom-0 left-0 p-4">
                    <p class="text-cream font-bold font-bold text-lg">Promo</p>
                    <p class="text-latte-light/70 text-xs">Diskon & Paket Spesial...</p>
                </div>
            </a>
        </div>
    </div>
</section>

{{-- REKOMENDASI CAROUSEL --}}
<section id="rekomendasi" class="py-16 bg-cream">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between mb-10">
            <div>
                <h2 class="text-2xl md:text-3xl font-bold text-coffee">Rekomendasi untuk Kamu</h2>
                <p class="text-mocha mt-1">Pilihan favorit dari Nongki</p>
            </div>
            <div class="flex gap-2">
                <button onclick="scrollCarousel(-1)" class="w-10 h-10 rounded-full border border-latte-light/40 flex items-center justify-center hover:bg-coffee hover:text-cream hover:border-coffee transition-all">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>
                </button>
                <button onclick="scrollCarousel(1)" class="w-10 h-10 rounded-full border border-latte-light/40 flex items-center justify-center hover:bg-coffee hover:text-cream hover:border-coffee transition-all">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                </button>
            </div>
        </div>

        <div id="carousel" class="flex gap-5 overflow-x-auto hide-scrollbar pb-4 snap-x snap-mandatory">
            @php
                $products = [
                    ['name' => 'Kopi Susu Aren', 'price' => 'Rp 22.000', 'old_price' => 'Rp 28.000', 'discount' => '-21%', 'img' => 'https://images.unsplash.com/photo-1461023058943-07fcbe16d735?w=400&q=80', 'category' => 'Coffee', 'badge' => 'Best Seller'],
                    ['name' => 'Matcha Latte', 'price' => 'Rp 25.000', 'old_price' => null, 'discount' => null, 'img' => 'https://images.unsplash.com/photo-1515823064-d6e0c04616a7?w=400&q=80', 'category' => 'Non-Coffee', 'badge' => 'Popular'],
                    ['name' => 'Caramel Macchiato', 'price' => 'Rp 28.000', 'old_price' => 'Rp 35.000', 'discount' => '-20%', 'img' => 'https://images.unsplash.com/photo-1485808191679-5f86510681a2?w=400&q=80', 'category' => 'Coffee', 'badge' => null],
                    ['name' => 'Avocado Toast', 'price' => 'Rp 35.000', 'old_price' => null, 'discount' => null, 'img' => 'https://images.unsplash.com/photo-1525351484163-7529414344d8?w=400&q=80', 'category' => 'Food', 'badge' => 'New'],
                    ['name' => 'Espresso Solo', 'price' => 'Rp 18.000', 'old_price' => null, 'discount' => null, 'img' => 'https://images.unsplash.com/photo-1510707577719-ae7c14805e3a?w=400&q=80', 'category' => 'Coffee', 'badge' => null],
                    ['name' => 'Croissant', 'price' => 'Rp 20.000', 'old_price' => 'Rp 25.000', 'discount' => '-20%', 'img' => 'https://images.unsplash.com/photo-1555507036-ab1f4038024a?w=400&q=80', 'category' => 'Food', 'badge' => 'Diskon'],
                ];
            @endphp

            @foreach($products as $product)
            <div class="flex-shrink-0 w-64 snap-start">
                <div class="bg-warm-white rounded-2xl overflow-hidden border border-latte-light/20 hover:shadow-xl hover:shadow-coffee/8 transition-all duration-300 group flex flex-col">

                    {{-- Image --}}
                    <div class="relative h-52 overflow-hidden">
                        <img src="{{ $product['img'] }}" alt="{{ $product['name'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">

                        {{-- Category Badge --}}
                        <span class="absolute top-3 left-3 bg-coffee/80 backdrop-blur-sm text-cream text-[10px] font-semibold px-2.5 py-1 rounded-full uppercase tracking-wider">{{ $product['category'] }}</span>

                        {{-- Discount Badge --}}
                        @if($product['discount'])
                            <span class="absolute top-3 right-3 bg-terracotta text-cream text-[10px] font-bold px-2 py-1 rounded-full">{{ $product['discount'] }}</span>
                        @endif

                        {{-- Like Button --}}
                        <button onclick="this.classList.toggle('text-terracotta'); this.classList.toggle('fill-terracotta')" class="absolute bottom-3 right-3 w-9 h-9 bg-white/90 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-white transition-all shadow-sm">
                            <svg class="w-4 h-4 text-coffee-light" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                        </button>
                    </div>

                    {{-- Info --}}
                    <div class="p-4 flex flex-col flex-1">
                        <div class="flex-1">
                            <p class="text-[11px] text-mocha/60 font-medium uppercase tracking-wider mb-1">{{ $product['category'] }}</p>
                            <h3 class="font-semibold text-coffee text-sm leading-snug">{{ $product['name'] }}</h3>
                        </div>

                        {{-- Price --}}
                        <div class="flex items-center gap-2 mt-2">
                            <span class="text-terracotta font-bold text-base">{{ $product['price'] }}</span>
                            @if($product['old_price'])
                                <span class="text-mocha/35 text-xs line-through">{{ $product['old_price'] }}</span>
                            @endif
                        </div>

                        {{-- Actions --}}
                        <div class="flex items-center gap-2 mt-3">
                            <button class="w-10 h-10 rounded-xl bg-cream border border-latte-light/30 flex items-center justify-center hover:bg-coffee hover:text-cream hover:border-coffee transition-all shrink-0">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 100 4 2 2 0 000-4z"/></svg>
                            </button>
                            <a href="{{ route('menu') }}" class="flex-1 flex items-center justify-center gap-2 px-4 py-2.5 bg-coffee text-cream text-xs font-semibold rounded-xl hover:bg-coffee-light transition-all">
                                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
                                Pesan Sekarang
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- PICK NONGKI --}}
<section class="py-16 bg-warm-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <span class="inline-block bg-latte-light/30 text-mocha px-3 py-1 rounded-full text-xs font-semibold uppercase tracking-wider mb-4">Kenapa Nongki?</span>
                <h2 class="text-2xl md:text-3xl font-bold font-bold text-coffee mb-4">Pilih Nongki, <br>Pilihan yang Tepat</h2>
                <p class="text-mocha leading-relaxed mb-6">Nongki hadir untuk kamu yang mencari tempat nongkrong asik dengan menu yang variatif dan harga yang nggak bikin kantong bolong.</p>
                <div class="space-y-3">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-lg bg-sage/20 flex items-center justify-center shrink-0">
                            <svg class="w-4 h-4 text-sage" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <span class="text-sm text-coffee-light">Menu lengkap dari coffee hingga food</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-lg bg-sage/20 flex items-center justify-center shrink-0">
                            <svg class="w-4 h-4 text-sage" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <span class="text-sm text-coffee-light">Harga ramah di kantong anak muda</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-lg bg-sage/20 flex items-center justify-center shrink-0">
                            <svg class="w-4 h-4 text-sage" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <span class="text-sm text-coffee-light">Update promo dan menu baru setiap minggu</span>
                    </div>
                </div>
            </div>
            <div class="relative">
                <div class="rounded-3xl overflow-hidden shadow-2xl shadow-coffee/10">
                    <img src="https://images.unsplash.com/photo-1501339847302-ac426a4a7cbb?w=800&q=80" alt="Nongki Vibes" class="w-full h-80 object-cover">
                </div>
                <div class="absolute -bottom-5 -left-5 bg-warm-white rounded-2xl p-4 shadow-xl border border-latte-light/20">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 rounded-xl bg-terracotta/10 flex items-center justify-center">
                            <svg class="w-6 h-6 text-terracotta" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <div>
                            <p class="text-xs text-mocha">Mulai dari</p>
                            <p class="text-lg font-bold text-coffee">Rp 15.000</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- GALLERY --}}
<section class="py-16 bg-cream">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10">
            <h2 class="text-2xl md:text-3xl font-bold font-bold text-coffee">Galeri Nongki</h2>
            <p class="text-mocha mt-1">Momen-momen asik di tempat kami</p>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-3 md:gap-4">
            <div class="col-span-2 row-span-2 rounded-2xl overflow-hidden group">
                <img src="https://images.unsplash.com/photo-1501339847302-ac426a4a7cbb?w=800&q=80" alt="Gallery" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            </div>
            <div class="rounded-2xl overflow-hidden group">
                <img src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?w=400&q=80" alt="Gallery" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            </div>
            <div class="rounded-2xl overflow-hidden group">
                <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93?w=400&q=80" alt="Gallery" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            </div>
            <div class="rounded-2xl overflow-hidden group">
                <img src="https://images.unsplash.com/photo-1442512595331-e89e73853f31?w=400&q=80" alt="Gallery" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            </div>
            <div class="rounded-2xl overflow-hidden group">
                <img src="https://images.unsplash.com/photo-1507133750040-4a8f57021571?w=400&q=80" alt="Gallery" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            </div>
        </div>
    </div>
</section>

{{-- CTA PROMO --}}
<section class="py-16 bg-warm-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-6">
            <div class="relative bg-coffee rounded-3xl p-8 md:p-10 overflow-hidden group">
                <div class="absolute top-0 right-0 w-40 h-40 bg-latte/10 rounded-full blur-2xl group-hover:bg-latte/20 transition-colors"></div>
                <div class="relative">
                    <span class="inline-block bg-terracotta text-cream text-xs font-bold px-3 py-1 rounded-full mb-4">PROMO</span>
                    <h3 class="text-2xl font-bold font-bold text-cream mb-2">Diskon 30%</h3>
                    <p class="text-latte-light/60 text-sm mb-6 max-w-xs">Berlaku untuk semua menu coffee setiap hari Jumat. Jangan sampai kelewatan!</p>
                    <a href="{{ route('menu') }}" class="inline-flex items-center gap-2 px-6 py-2.5 bg-cream text-coffee font-semibold rounded-full text-sm hover:bg-white transition-colors">
                        Pesan Sekarang
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </div>

            <div class="relative bg-terracotta rounded-3xl p-8 md:p-10 overflow-hidden group">
                <div class="absolute top-0 right-0 w-40 h-40 bg-cream/10 rounded-full blur-2xl group-hover:bg-cream/20 transition-colors"></div>
                <div class="relative">
                    <span class="inline-block bg-cream/20 text-cream text-xs font-bold px-3 py-1 rounded-full mb-4">BARU</span>
                    <h3 class="text-2xl font-bold font-bold text-cream mb-2">Menu Baru</h3>
                    <p class="text-cream/70 text-sm mb-6 max-w-xs">Cobain Signature Nongki: Brown Sugar Oat Latte & Tiramisu Cake. Limited edition!</p>
                    <a href="{{ route('menu') }}" class="inline-flex items-center gap-2 px-6 py-2.5 bg-cream text-terracotta font-semibold rounded-full text-sm hover:bg-white transition-colors">
                        Lihat Menu
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
function scrollCarousel(dir) {
    const c = document.getElementById('carousel');
    c.scrollBy({ left: dir * 280, behavior: 'smooth' });
}
</script>

@endsection
