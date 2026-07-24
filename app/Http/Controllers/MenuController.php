<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Category;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::with('category')->get();
        return view('admin.dashboard.menu', compact('menus'));
    }
    public function hasil(Request $request)
    {
        return "Kamu mencari : " . $request->search;
    }
    public function create()
    {
        $categories = Category::all();
        return view('admin.dashboard.create', compact('categories'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'harga' => 'required|integer',
            'deskripsi' => 'required',
            'tersedia' => 'boolean',
            'category_id' => 'nullable|exists:categories,id',
        ]);
        try {
            Menu::create($request->only([
                'nama',
                'harga',
                'deskripsi',
                'tersedia',
                'category_id'
            ]));
            return redirect('/admin/menu')->with('success', 'Menu berhasil ditambahkan!');
        } catch (\Exception $e) {
            return redirect('/admin/menu')->with('error', 'Gagal menambahkan menu: ' . $e->getMessage());
        }
    }
    public function edit($id)
    {
        $menu = Menu::findOrFail($id);
        $categories = Category::all();
        return view('admin.dashboard.edit', compact('menu', 'categories'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'harga' => 'required|integer',
            'deskripsi' => 'required',
            'tersedia' => 'boolean',
            'category_id' => 'nullable|exists:categories,id',
        ]);
        try {
            $menu = Menu::findOrFail($id);
            $menu->update([
                'nama' => $request->nama,
                'harga' => $request->harga,
                'deskripsi' => $request->deskripsi,
                'tersedia' => $request->tersedia,
                'category_id' => $request->category_id
            ]);
            return redirect('/admin/menu')->with('success', 'Menu berhasil diperbarui!');
        } catch (\Exception $e) {
            return redirect('/admin/menu')->with('error', 'Gagal memperbarui menu: ' . $e->getMessage());
        }
    }
    public function destroy($id)
    {
        try {
            $menu = Menu::findOrFail($id);
            $menu->delete();
            return redirect('/admin/menu')->with('success', 'Menu berhasil dihapus!');
        } catch (\Exception $e) {
            return redirect('/admin/menu')->with('error', 'Gagal menghapus menu: ' . $e->getMessage());
        }
    }
    
}
