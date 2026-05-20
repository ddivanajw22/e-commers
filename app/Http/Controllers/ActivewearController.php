<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivewearController extends Controller
{   
    public function index () {
        $activewear = [
        [
            'name' => 'Ribbed Seamless Two-Piece Crop Top & Shorts Set',
            'price' => '$65.00', 
            'image' => 'https://i.pinimg.com/1200x/b4/cb/59/b4cb59360ee9e8f413f832322d791d15.jpg',
            'rating' => '4.8 (115 Reviews)'
        ],
        [
            'name' => 'Athletic Compression Short Sleeve & Biker Shorts Set',
            'price' => '$69.00', 
            'image' => 'https://i.pinimg.com/736x/99/09/60/990960a1339d2ae5375e689cd467cabd.jpg',
            'rating' => '4.9 (210 Reviews)'
        ],
        [
            'name' => 'Sleek Mock-Neck Zip-Up Activewear Jumpsuit',
            'price' => '$72.50', 
            'image' => 'https://i.pinimg.com/736x/db/95/00/db95006b010e37036802e8d92877a7f9.jpg',
            'rating' => '4.7 (98 Reviews)'
        ],
        // Baris 2
        [
            'name' => 'Aesthetic Racerback Mock-Neck Running Romper',
            'price' => '$79.90', 
            'image' => 'https://i.pinimg.com/736x/ef/51/54/ef5154b721f2340b5710516b5961d28b.jpg',
            'rating' => '4.8 (320 Reviews)'
        ],
        [
            'name' => 'PClassic Neon Lime Green Workout Bodysuit',
            'price' => '$70.00', 
            'image' => 'https://i.pinimg.com/1200x/bb/4b/cd/bb4bcde322a50a169b79d2df56c72fd9.jpg',
            'rating' => '4.9 (145 Reviews)'
        ],
        [
            'name' => 'Asymmetric Strappy Sports Bra & Biker Shorts Set',
            'price' => '$79.90', 
            'image' => 'https://i.pinimg.com/1200x/64/db/3b/64db3be1b66b60121046c04174b14e5a.jpg',
            'rating' => '4.6 (180 Reviews)'
        ],
        // Baris 3
        [
            'name' => 'Sporty V-Neck Tank Top & Pleated Tennis Skirt Set',
            'price' => '$78.00', 
            'image' => 'https://i.pinimg.com/736x/6b/ea/6e/6bea6eeee7d43457f652be711c770064.jpg',
            'rating' => '4.8 (240 Reviews)'
        ],
        [
            'name' => 'Preppy Contrast-Collar Activewear Tennis Dress',
            'price' => '$75.00', 
            'image' => 'https://i.pinimg.com/1200x/68/56/2e/68562e646b88c3aaa2f6d812972d3686.jpg',
            'rating' => '4.7 (155 Reviews)'
        ],
        [
            'name' => 'Minimalist Square-Neck Crop Top & Skirt Workout Set',
            'price' => '$76.00', 
            'image' => 'https://i.pinimg.com/736x/11/a6/79/11a679a75d2212c75553f923688e8371.jpg',
            'rating' => '4.9 (192 Reviews)'
        ],
        // Baris 4
        [
            'name' => 'Premium Slim-Fit Zip Jacket & Flared Leggings Set',
            'price' => '$72.00', 
            'image' => 'https://i.pinimg.com/736x/a5/ac/27/a5ac27c729f9b7b32e2cef27fa905c24.jpg',
            'rating' => '5.0 (88 Reviews)'
        ],
        [
            'name' => 'Performance Training Zipper Jacket & Leggings Set',
            'price' => '$75.00', 
            'image' => 'https://i.pinimg.com/736x/e4/b8/b5/e4b8b58423d6a55c29693b41ac1f69db.jpg',
            'rating' => '4.8 (137 Reviews)'
        ],
        [
            'name' => 'Chic V-Cross High-Waist Bra & Leggings Gym Set',
            'price' => '$71.00', 
            'image' => 'https://i.pinimg.com/736x/32/62/7d/32627da469f9fe22bb6869cd5e5dd187.jpg',
            'rating' => '4.7 (204 Reviews)'
        ],
        // Baris 5
        [
            'name' => 'Casual Varsity Los Angeles 79 Sweatshirt & Joggers Set',
            'price' => '$76.90', 
            'image' => 'https://i.pinimg.com/1200x/1e/75/52/1e7552a9a1c6bddabf6ae9c939ffe64c.jpg',
            'rating' => '4.9 (165 Reviews)'
        ],
        [
            'name' => 'Cozy New York Brooklyn Quarter-Zip & Sweatpants Set',
            'price' => '$79.00', 
            'image' => 'https://i.pinimg.com/736x/6a/83/fc/6a83fc547d420b6cc863fce754eecec0.jpg',
            'rating' => '4.8 (290 Reviews)'
        ],
        [
            'name' => 'Streetwear 89 Cropped Long-Sleeve & Wide Joggers Set',
            'price' => '$70.50', 
            'image' => 'https://i.pinimg.com/736x/17/96/42/1796429189113214458b6204a201e4fa.jpg',
            'rating' => '4.9 (412 Reviews)'
        ],
    ];
        return view('pages.activewear', compact('activewear'));
    }   
}