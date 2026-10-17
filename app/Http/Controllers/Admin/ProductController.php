<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      // 1. Validasi Input
    $request->validate([
        'name'     => 'required|string|max:255',
        'price'    => 'required|numeric',
        'stock'    => 'required|integer',
        'category' => 'required|string',
    ]);

    // 2. Simpan secara eksplisit
    $product = new Product();
    $product->name     = $request->name;
    $product->price    = $request->price;
    $product->stock    = $request->stock;
    $product->category = $request->category;
    $product->save();

    return redirect()->route('product.index')
                     ->with('success', 'Data barang berhasil ditambahkan!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
