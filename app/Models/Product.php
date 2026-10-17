<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    // Matikan fitur timestamps otomatis
    public $timestamps = false;

    protected $fillable = [
        'Nama Produk',
        'Harga Produk',
        'Stok Produk',
        'Category',
    ];
}

