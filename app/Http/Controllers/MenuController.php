<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index(){
        $menus = Menu::all();
        return view('menu', compact('menus'));
    }
    public function hasil(Request $request){
        return "Kamu mencari : " . $request->search;
    }
    public function create(){
        return view('menus.create');
    }
    public function store(Request $request){

        $request -> validate([
            'nama' => 'required|max:255',
            'harga' => 'required|integer',
            'deskripsi' => 'required',
            'tersedia' => 'boolean',
        ]);

        Menu::create($request->only([
            'nama',
            'harga',
            'deskripsi',
            'tersedia'
        ]));

        return redirect('/menu')->with('success', 'Menu berhasil ditambahkan!');
    }

    public function edit($id){
        $menu = Menu::findOrFail($id);
        return view('menus.edit', compact('menu'));
    }
    
    public function update(Request $request, $id){

        $request -> validate([
            'nama' => 'required|max:255',
            'harga' => 'required|integer',
            'deskripsi' => 'required',
            'tersedia' => 'boolean',
        ]);

        $menu = Menu::findOrFail($id);

        $menu -> update([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'tersedia' => $request->tersedia
        ]);

        return redirect('/menu')->with('success', 'Menu berhasil diperbarui!');
    }

    
}
