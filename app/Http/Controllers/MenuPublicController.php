<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Category;

class MenuPublicController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();

        $query = Menu::with('category')->where('tersedia', true);

        if ($request->filled('category')) {
            $query->where('category_id', $request->category);
        }

        if ($request->filled('harga_min')) {
            $query->where('harga', '>=', $request->harga_min);
        }

        if ($request->filled('harga_max')) {
            $query->where('harga', '<=', $request->harga_max);
        }

        $menus = $query->get();

        return view('menu.index', compact('menus', 'categories'));
    }
}
