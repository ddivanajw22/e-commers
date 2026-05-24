<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class OuterwearController extends Controller
{   
    public function index () {
    
        $outerwear = [
            
            [
                'name' => 'Aesthetic Sage Green Zippered Sports Jacket',
                'price' => '$45.00', 
                'image' => 'https://i.pinimg.com/736x/28/98/0e/28980eab28e66fb0239b578c3868eb99.jpg',
                'rating' => '4.8 (115 Reviews)'
            ],
            [
                'name' => 'Minimalist Cream White Athletic Quarter-Zip Pullover',
                'price' => '$48.00', 
                'image' => 'https://i.pinimg.com/1200x/09/a9/ce/09a9ceafe37b9253a4e0dbce0fe8a907.jpg',
                'rating' => '4.9 (210 Reviews)'
            ],
            [
                'name' => 'Classic Off-White Workout Zip-Up Hoodie',
                'price' => '$42.50', 
                'image' => 'https://i.pinimg.com/736x/db/95/00/db95006b010e37036802e8d92877a7f9.jpg',
                'rating' => '4.7 (98 Reviews)'
            ],
            
            [
                'name' => 'Cozy Charcoal Gray Oversized Sporty Sweatshirt',
                'price' => '$39.90', 
                'image' => 'https://i.pinimg.com/736x/ef/51/54/ef5154b721f2340b5710516b5961d28b.jpg',
                'rating' => '4.8 (320 Reviews)'
            ],
            [
                'name' => 'Premium Oatmeal Beige Knit Training Crewneck',
                'price' => '$44.00', 
                'image' => 'https://i.pinimg.com/1200x/bb/4b/cd/bb4bcde322a50a169b79d2df56c72fd9.jpg',
                'rating' => '4.9 (145 Reviews)'
            ],
            [
                'name' => 'Sporty Jet Black Lightweight Running Jacket',
                'price' => '$49.90', 
                'image' => 'https://i.pinimg.com/1200x/64/db/3b/64db3be1b66b60121046c04174b14e5a.jpg',
                'rating' => '4.6 (180 Reviews)'
            ],
           
            [
                'name' => 'Elegant Dusty Pink Cropped Activewear Jacket',
                'price' => '$38.00', 
                'image' => 'https://i.pinimg.com/736x/6b/ea/6e/6bea6eeee7d43457f652be711c770064.jpg',
                'rating' => '4.8 (240 Reviews)'
            ],
            [
                'name' => 'Chic Light Gray Cropped Gym Hoodie',
                'price' => '$35.00', 
                'image' => 'https://i.pinimg.com/1200x/68/56/2e/68562e646b88c3aaa2f6d812972d3686.jpg',
                'rating' => '4.7 (155 Reviews)'
            ],
            [
                'name' => 'Urban Slate Gray Fitted Workout Zip-Up',
                'price' => '$46.00', 
                'image' => 'https://i.pinimg.com/736x/11/a6/79/11a679a75d2212c75553f923688e8371.jpg',
                'rating' => '4.9 (192 Reviews)'
            ],
           
            [
                'name' => 'Trendy Soft Blue Collared Athletic Windbreaker',
                'price' => '$52.00', 
                'image' => 'https://i.pinimg.com/736x/a5/ac/27/a5ac27c729f9b7b32e2cef27fa905c24.jpg',
                'rating' => '5.0 (88 Reviews)'
            ],
            [
                'name' => 'Streetwear Vintage Olive Green Sporty Track Jacket',
                'price' => '$55.00', 
                'image' => 'https://i.pinimg.com/1200x/36/bd/26/36bd26379fa7ee2b4094d34abc2c2212.jpg',
                'rating' => '4.8 (137 Reviews)'
            ],
            [
                'name' => 'Casual Ash Gray Fleece Training Hoodie',
                'price' => '$41.00', 
                'image' => 'https://i.pinimg.com/736x/32/62/7d/32627da469f9fe22bb6869cd5e5dd187.jpg',
                'rating' => '4.7 (204 Reviews)'
            ],
            
            [
                'name' => 'Retro Navy Blue Varsity Active Pullover',
                'price' => '$43.90', 
                'image' => 'https://i.pinimg.com/736x/e9/10/2c/e9102c1407e9d523b9cd8b4ddc3c2950.jpg',
                'rating' => '4.9 (165 Reviews)'
            ],
            [
                'name' => 'Comfortable Tan Beige Oversized Gym Sweatshirt',
                'price' => '$39.00', 
                'image' => 'https://i.pinimg.com/736x/22/21/b0/2221b0cb32916e575bd4a0b07e4e2322.jpg',
                'rating' => '4.8 (290 Reviews)'
            ],
            [
                'name' => 'Sleek All-Black Performance Gym Jacket',
                'price' => '$47.50', 
                'image' => 'https://i.pinimg.com/736x/17/96/42/1796429189113214458b6204a201e4fa.jpg',
                'rating' => '4.9 (412 Reviews)'
            ],
        ];

        
        return view('pages.outerwear', compact('outerwear'));
    }
}