<?php

namespace App\Http\Controllers;

use App\Data\ProductData;

class HomeProductController extends Controller
{
    private function products()
    {
        return collect(ProductData::all());
    }

    public function index()
    {
        $products = $this->products()->values();
        return view('pages.index', compact('products'));
    }

    // --- TAMBAHKAN FUNGSI INI UNTUK FILTER KATEGORI ---
    public function category($category)
    {
        $products = $this->products()
            ->filter(function ($product) use ($category) {
                // Pastikan di data produkmu ada kolom 'category'
                return isset($product['category']) && strtolower($product['category']) === strtolower($category);
            })
            ->values();

        return view('pages.index', compact('products'));
    }
    // --------------------------------------------------

    public function newArrival()
    {
        $products = $this->products()
            ->sortByDesc('id') 
            ->values();

        return view('pages.new-arrival', compact('products'));
    }

    public function bestSeller()
    {
        $products = $this->products()
            ->sortByDesc('sold') 
            ->values();
        
        return view('pages.best-seller', compact('products'));
    }

    public function onDiscount()
    {
        $products = $this->products()
            ->filter(function ($product) {
                return isset($product['discount']) && $product['discount'] > 0;
            })
            ->values();

        return view('pages.on-discount', compact('products'));
    }
}