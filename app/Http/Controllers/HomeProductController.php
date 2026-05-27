<?php

namespace App\Http\Controllers;

use App\Data\ProductData;

class HomeProductController extends Controller
{
    /**
     * Helper untuk mengambil semua produk dari class ProductData
     */
    private function products()
    {
        return collect(ProductData::all());
    }

    /**
     * Menampilkan halaman utama (Home)
     */
    public function index()
    {
        $products = $this->products();
        return view('pages.index', compact('products'));
    }

    /**
     * Filter berdasarkan kategori (Tops, Bottom, dll)
     */
    public function category($category)
    {
        $products = $this->products()
            ->filter(function ($product) use ($category) {
                return isset($product['category']) && strtolower($product['category']) === strtolower($category);
            })
            ->values();

        return view('pages.index', compact('products'));
    }

    /**
     * Menampilkan produk terbaru berdasarkan ID tertinggi
     */
    public function newArrival()
    {
        $products = $this->products()
            ->sortByDesc('id') 
            ->values();

        return view('pages.new-arrival', compact('products'));
    }

    /**
     * Menampilkan produk terlaris berdasarkan jumlah sold terbanyak
     */
    public function bestSeller()
    {
        $products = $this->products()
            ->sortByDesc('sold') 
            ->values();
        
        return view('pages.best-seller', compact('products'));
    }

    /**
     * Menampilkan produk yang sedang diskon
     */
    public function onDiscount()
    {
        $products = $this->products()
            ->filter(function ($product) {
                // Sesuai dengan struktur ProductData Anda yang menggunakan 'is_discount' (boolean)
                return isset($product['is_discount']) && $product['is_discount'] === true;
            })
            ->values();

        return view('pages.on-discount', compact('products'));
    }
}