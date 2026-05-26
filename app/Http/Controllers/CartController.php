<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return view('pages.cart');
    }

    public function remove(Request $request)
    {
        $index = $request->input('index');
        $cart = session()->get('cart', []);

        if (isset($cart[$index])) {
            unset($cart[$index]);
            session()->put('cart', array_values($cart));
        }

        return back();
    }

    public function checkout(Request $request)
    {
        $cart = session()->get('cart', []);

        if (empty($cart)) {
            return back()->with('error', 'Keranjang belanja Anda masih kosong!');
        }

        
        $order = new Order();
        $order->user_id = Auth::id(); 
        $order->total_harga = $request->input('total_harga'); 
        $order->status = 'belum_dikonfirmasi'; 
        $order->save();

       

        return redirect()->back()->with('success', 'Pesanan berhasil dikonfirmasi! Menunggu konfirmasi Seller.');
    }
}