<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        return view('pages.cart', compact('cart'));
    }

    public function add(Request $request)
    {
        $cart = session()->get('cart', []);
        $cart[] = [
            'id'    => $request->product_id,
            'name'  => $request->name,
            'price' => $request->price,
            'image' => $request->image
        ];
        session()->put('cart', $cart);

        return response()->json(['success' => true, 'message' => 'Produk berhasil ditambahkan!']);
    }

    public function buyNow(Request $request)
    {
        // Menyimpan item untuk dibeli langsung
        session(['checkout_item' => [
            'name'  => $request->name,
            'price' => $request->price,
            'image' => $request->image,
        ]]);
        // Penting: Hapus session cart agar tidak tercampur saat beli langsung
        session()->forget('cart'); 

        return redirect()->route('checkout.page');
    }

    public function remove($index)
    {
        $cart = session()->get('cart', []);
        if (isset($cart[$index])) {
            unset($cart[$index]);
            session()->put('cart', array_values($cart));
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false, 'message' => 'Item tidak ditemukan'], 404);
    }

  
    public function checkoutPage()
    {
       
        $checkout_item = session('checkout_item');
        $cart = session('cart', []);

        if (!$checkout_item && empty($cart)) {
            return redirect()->route('shop')->with('error', 'Keranjang Anda kosong!');
        }

        return view('pages.checkout', compact('checkout_item', 'cart'));
    }

  public function processOrder(Request $request)
{
   

    session()->forget(['cart', 'checkout_item']);

  
    return redirect()->route('home')->with('success', 'Thank you! Your order has been placed successfully.');
}
}