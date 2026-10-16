<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
       // Data sampel untuk landing page guest
        $featuredProducts = [
            ['name' => 'Kopi Susu Gula Aren', 'category' => 'Minuman', 'price' => '$2.50', 'rating' => '4.8', 'badge' => 'Best Seller'],
            ['name' => 'Roti Bakar Cokelat Keju', 'category' => 'Makanan', 'price' => '$3.00', 'rating' => '4.7', 'badge' => 'Populer'],
            ['name' => 'Nasi Goreng Spesial', 'category' => 'Makanan Utama', 'price' => '$4.50', 'rating' => '4.9', 'badge' => 'Rekomendasi'],
            ['name' => 'Matcha Latte Ice', 'category' => 'Minuman', 'price' => '$3.20', 'rating' => '4.6', 'badge' => 'Baru'],
        ];

        return view('guest.dashboard-guest', compact('featuredProducts'));
    }
}
