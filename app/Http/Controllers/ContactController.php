<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|max:255',
            'category' => 'required',
            'message' => 'required',
        ]);

        return redirect()->route('contact')->with('success', 'Pesan kamu berhasil dikirim! Kami akan segera membalas.');
    }
}
