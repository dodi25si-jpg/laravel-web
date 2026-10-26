<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;

class GuestController extends Controller
{
    // Home  ( / )
    public function index()
    {
        return view('guest.home');
    }

    // Halaman Login  ( /auth )
    public function login()
    {
        return view('guest.login');
    }

    // Halaman Register  ( /register )
    public function register()
    {
        return view('guest.register');
    }
}
