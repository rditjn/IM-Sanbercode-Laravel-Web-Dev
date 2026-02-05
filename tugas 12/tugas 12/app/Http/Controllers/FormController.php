<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    // Menampilkan halaman register
    public function registerForm()
    {
        return view('register');
    }

    // Menangani form submission
    public function submitForm(Request $request)
    {
        $data = $request->only('first_name', 'last_name');
        return redirect()->route('welcome')->with($data);
    }

    // Menampilkan halaman welcome
    public function welcome(Request $request)
    {
        $first_name = session('first_name');
        $last_name = session('last_name');
        return view('welcome', compact('first_name', 'last_name'));
    }
}
