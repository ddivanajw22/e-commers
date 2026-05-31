<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // Pastikan ini ada

class DressesController extends Controller
{   
    public function index(Request $request) // Tambahkan Request $request di sini
    {
        $dresses = [
            [
                'name' => 'Elegant Deep Teal Ruched Bodycon Maxi Dress',
                'price' => '$55.00', 
                'image' => 'https://i.pinimg.com/1200x/6e/c3/32/6ec33234b443600fa17b027a1ff66667.jpg',
                'rating' => '4.8 (120 Reviews)'
            ],
            [
                'name' => 'Gothic Glam Black Sweetheart Corset Midi Dress',
                'price' => '$62.50', 
                'image' => 'https://i.pinimg.com/1200x/c2/46/30/c24630af02e71ecda39cb8468f82b218.jpg',
                'rating' => '4.9 (230 Reviews)'
            ],
            [
                'name' => 'Sophisticated Deep Maroon One-Shoulder Draped Dress',
                'price' => '$58.00', 
                'image' => 'https://i.pinimg.com/1200x/1b/60/32/1b60326228446bb64f16eee68e9df61c.jpg',
                'rating' => '4.7 (185 Reviews)'
            ],
            [
                'name' => 'Vintage Dream White Ruched Cottagecore Dress',
                'price' => '$59.90', 
                'image' => 'https://i.pinimg.com/736x/bb/5d/72/bb5d7235866b8e74353b7ee04c14d871.jpg',
                'rating' => '4.6 (95 Reviews)'
            ],
            [
                'name' => 'Retro Monochrome Floral A-Line Dress with Tie-Straps',
                'price' => '$60.00', 
                'image' => 'https://i.pinimg.com/1200x/82/32/a3/8232a33bfd2d41bf79e2adcbd6fc8301.jpg',
                'rating' => '4.8 (310 Reviews)'
            ],
            [
                'name' => 'Classic Sage Green Cap-Sleeve Flare Dress',
                'price' => '$56.00', 
                'image' => 'https://i.pinimg.com/1200x/ca/e7/16/cae71648f2cae1fbc51feea78118f931.jpg',
                'rating' => '4.9 (150 Reviews)'
            ],
            [
                'name' => 'Aesthetic Soft Pink A-Line Mini Dress with Bow Details',
                'price' => '$49.90', 
                'image' => 'https://i.pinimg.com/736x/f9/9d/3e/f99d3ee3a5997ea79c6dc3005d89558e.jpg',
                'rating' => '4.7 (210 Reviews)'
            ],
            [
                'name' => 'Sweet Off-The-Shoulder Cherry Print Mini Dress',
                'price' => '$57.00', 
                'image' => 'https://i.pinimg.com/736x/6e/d7/30/6ed7303d14b8a7feaa2644eb7630b980.jpg',
                'rating' => '4.8 (175 Reviews)'
            ],
            [
                'name' => 'Preppy Blue Plaid Off-The-Shoulder Puff-Sleeve Dress',
                'price' => '$55.00', 
                'image' => 'https://i.pinimg.com/736x/a8/c5/f5/a8c5f57d7cf26fa43dc5324a0023a0d6.jpg',
                'rating' => '5.0 (85 Reviews)'
            ],
            [
                'name' => 'Dark Crimson Double-Breasted Blazer Pleated Dress',
                'price' => '$64.00', 
                'image' => 'https://i.pinimg.com/1200x/db/af/a8/dbafa8678b84aa0d91daeb6f485f3a6c.jpg',
                'rating' => '4.9 (420 Reviews)'
            ],
            [
                'name' => 'Classy Houndstooth Halter Neck A-Line Dress',
                'price' => '$57.50', 
                'image' => 'https://i.pinimg.com/1200x/71/3c/2b/713c2b8fee9d2244b81008e9cfc370fd.jpg',
                'rating' => '4.7 (190 Reviews)'
            ],
            [
                'name' => 'Vintage Soft Pink Long-Sleeve Dress with Tie Collar',
                'price' => '$64.00', 
                'image' => 'https://i.pinimg.com/1200x/7e/a4/7a/7ea47a03659595a3dafa78d75da66195.jpg',
                'rating' => '4.8 (130 Reviews)'
            ],
            [
                'name' => 'Chic Indigo Denim Tiered Ruffle Cami Dress',
                'price' => '$54.90', 
                'image' => 'https://i.pinimg.com/736x/1c/c3/6e/1cc36e9c2a58aa9eb8e6d6ba9a9ffd27.jpg',
                'rating' => '4.6 (240 Reviews)'
            ],
            [
                'name' => 'Classic Camel Collar-Neck Short-Sleeve Flare Dress',
                'price' => '$69.00', 
                'image' => 'https://i.pinimg.com/1200x/94/ef/dd/94efddc8729e04c1788b88a30b13a18d.jpg',
                'rating' => '4.9 (165 Reviews)'
            ],
            [
                'name' => 'Cozy Charcoal Gray Hoodie Dress with Side-Buckle',
                'price' => '$65.00', 
                'image' => 'https://i.pinimg.com/736x/54/a1/d9/54a1d9e4f2859cf7c13ed2c55874428a.jpg',
                'rating' => '4.8 (110 Reviews)'
            ],
        ];

        // LOGIKA PENCARIAN
        $search = $request->query('search');

        if ($search) {
            $dresses = collect($dresses)->filter(function ($item) use ($search) {
                return false !== stripos($item['name'], $search);
            });
        }

        return view('pages.dresses', compact('dresses'));
    }   
}