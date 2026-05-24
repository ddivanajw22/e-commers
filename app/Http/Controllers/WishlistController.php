<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WishlistController extends Controller
{
   
    public function index()
    {
        $wishlistProducts = collect(
            session()->get('wishlist_products', [])
        );

        return view('pages.wishlist', compact('wishlistProducts'));
    }

    
    public function toggle(Request $request)
    {
        $product = [
            'id' => $request->product_id,
            'name' => $request->name,
            'price' => $request->price,
            'image' => $request->image,
            'category' => $request->category,
        ];

        $wishlist = session()->get('wishlist_products', []);

        $exists = collect($wishlist)->contains('id', $product['id']);

        if ($exists) {

            $wishlist = collect($wishlist)
                ->reject(fn($item) => $item['id'] == $product['id'])
                ->values()
                ->toArray();

            $status = 'removed';

        } else {

            $wishlist[] = $product;

            $status = 'added';
        }

        session()->put('wishlist_products', $wishlist);

        return response()->json([
            'status' => $status,
            'count' => count($wishlist)
        ]);
    }
}