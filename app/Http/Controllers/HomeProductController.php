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
        $products = $this->products();
        return view('pages.index', compact('products'));
    }

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
     * New Arrival: Mengambil 5 produk dengan ID tertinggi
     */
    public function newArrival()
    {
        $products = $this->products()
            ->sortByDesc('id')
            ->take(5) // Mengambil 5 produk terbaru
            ->values();

        return view('pages.new-arrival', compact('products'));
    }

    /**
     * Best Seller: Mengambil produk spesifik yang kita anggap best seller
     * (Karena tidak ada field 'sold', kita pakai whereIn ID)
     */
    public function bestSeller()
    {
        $bestSellerIds = [7, 2, 8, 4, 15]; // Masukkan ID produk best seller Anda di sini
        
        $products = $this->products()
            ->whereIn('id', $bestSellerIds)
            ->values();
        
        return view('pages.best-seller', compact('products'));
    }

    public function onDiscount()
    {
        $products = $this->products()
            ->filter(function ($product) {
                return isset($product['is_discount']) && $product['is_discount'] === true;
            })
            ->values();

        return view('pages.on-discount', compact('products'));
    }
}