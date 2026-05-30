<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return view('pages.cart');
    }

    public function add(Request $request)
    {
        $cart = session()->get('cart', []);
        
        $cart[] = [
            'id' => $request->product_id,
            'name' => $request->name,
            'price' => $request->price,
            'image' => $request->image
        ];
        
        session()->put('cart', $cart);

        return response()->json([
            'success' => true, 
            'message' => 'Produk berhasil ditambahkan!'
        ]);
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

    public function checkout(Request $request)
    {
        $cart = session()->get('cart', []);
        if (empty($cart)) {
            return back()->with('error', 'Keranjang belanja Anda masih kosong!');
        }
        
        return redirect()->back()->with('success', 'Pesanan berhasil dikonfirmasi!');
    }
}