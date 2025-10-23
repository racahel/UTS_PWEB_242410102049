<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login() {
        return view('login');
    }

    public function doLogin(Request $request) {
        $username = $request->input('username');
        $password = $request->input('password');

        if ($username && $password) {
            return redirect()->route('dashboard', ['username' => $username]);
        } else {
            return redirect()->route('login')->with('error', 'Isi username dan password dulu!');
        }
    }

    public function dashboard(Request $request) {
        $username = $request->query('username');
        return view('dashboard', compact('username'));
    }

    public function profile(Request $request) {
        $username = $request->query('username');
        return view('profile', compact('username'));
    }

    public function pengelolaan() {
        $plants = [
            ['id' => 1, 'nama' => 'Monstera Deliciosa', 'kategori' => 'Indoor', 'harga' => 'Rp 75.000'],
            ['id' => 2, 'nama' => 'Lidah Mertua', 'kategori' => 'Indoor', 'harga' => 'Rp 35.000'],
            ['id' => 3, 'nama' => 'Kaktus Mini', 'kategori' => 'Succulent', 'harga' => 'Rp 25.000'],
            ['id' => 4, 'nama' => 'Sirih Gading', 'kategori' => 'Gantung', 'harga' => 'Rp 45.000'],
        ];

        return view('pengelolaan', compact('plants'));
    }
}
