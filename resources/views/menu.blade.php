<!DOCTYPE html>
<html lang="en">

<head>
    @vite('resources/css/app.css')
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
</head>

<body class="font-Poppins">
    <h1 class="text-3xl font-bold text-center"> Daftar Menu</h1>

    <form action="/hasil" method="GET">

        <div class="flex justify-center gap-2 mt-4">
            <input type="text" name="search" placeholder="Cari menu" class="border border-gray-300 rounded p-2">
    
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Cari
            </button>
        </div>

    </form>

    <div class="flex flex-wrap justify-center gap-4 mt-4 items-center">
        @forelse ($menus as $menu)
            <div class="border border-gray-300 rounded p-4 mb-4">

                <h2 class="text-xl font-semibold">{{ $menu['nama'] }}</h2>
                <p class="text-gray-600">Harga: {{ $menu['harga'] }}</p>
                <p class="text-gray-600">Status: {{ $menu['stok'] }}</p>

                @if ($menu['harga'] < 25000)
                    <p>Promo</p>
                @elseif($menu['stok'] > 0)
                    <p>Tersedia</p>
                @elseif($menu['stok'] == 0)
                    <p>Habis</p>
                @endif
            </div>
        @empty
            <p class="text-gray-500">Tidak ada menu tersedia.</p>
        @endforelse
</body>

</html>
