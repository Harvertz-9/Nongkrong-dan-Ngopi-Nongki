<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menus = [
            [
                'nama' => 'Espresso',
                'harga' => 18000,
                'stok' => 15,
            ],
            [
                'nama' => 'Latte',
                'harga' => 25000,
                'stok' => 0,
            ],
            [
                'nama' => 'Matcha',
                'harga' => 28000,
                'stok' => 7,
            ],
            [
                'nama' => 'Americano',
                'harga' => 20000,
                'stok' => 2,
            ],
        ];
        return view('menu', compact('menus'));
    }

    public function hasil(Request $request){
        return "Kamu mencari : " . $request->search;
    }
}
