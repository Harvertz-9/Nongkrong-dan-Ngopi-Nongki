<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $name = 'Bryan';
        $kampus = 'Primakara Univeristy';
        return view('welcome', compact('name', 'kampus'));
    }
}
