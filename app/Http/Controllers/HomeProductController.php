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

        return view('index', compact('products'));
    }

    public function newArrival()
    {
        $products = $this->products()
            ->sortByDesc('sold') 
            ->values();

        return view('pages.new-arrival', compact('products'));
    }

}