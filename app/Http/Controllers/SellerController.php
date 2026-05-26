<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    
    public function dashboard()
    {
        $orders = Order::latest()->get(); 
        return view('pages.seller_dashboard', compact('orders'));
    }

    public function konfirmasiOrder($id)
    {
        $order = Order::findOrFail($id);
        $order->status = 'sudah_dikonfirmasi'; 
        $order->save();

        return redirect()->back()->with('success', 'Pesanan berhasil dikonfirmasi!');
    }
}