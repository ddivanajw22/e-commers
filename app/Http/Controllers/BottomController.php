<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BottomController extends Controller
{   
    public function index () {
        $bottom = [
        [
            'name' => 'Navy Blue Denim Wrap Mini Skirt',
            'price' => '$45.00', 
            'image' => 'https://i.pinimg.com/1200x/17/3a/94/173a94e217e71827e9dd5b0a79d46de7.jpg',
            'rating' => '4.8 (340 Reviews)'
        ],
        [
            'name' => 'Soft Pink Drawstring Casual Skort',
            'price' => '$45.00', 
            'image' => 'https://i.pinimg.com/1200x/3b/39/dd/3b39dd7215b0816a1ceeb289f00d5f98.jpg',
            'rating' => '4.9 (510 Reviews)'
        ],
        [
            'name' => 'Dark Brown Faux Leather Mini Skirt',
            'price' => '$58.00', 
            'image' => 'https://i.pinimg.com/736x/83/6b/67/836b67ee309ea58b9d0f5be0c7f2f637.jpg',
            'rating' => '4.7 (280 Reviews)'
        ],
        [
            'name' => 'High-Waisted Light Wash Wide-Leg Jeans',
            'price' => '$48.50', 
            'image' => 'https://i.pinimg.com/1200x/fa/7d/b7/fa7db741cf6848f1c657e56af9bd17e2.jpg',
            'rating' => '4.6 (190 Reviews)'
        ],
        [
            'name' => 'Classic Denim Flare Trousers',
            'price' => '$52.00', 
            'image' => 'https://i.pinimg.com/1200x/5d/8d/7f/5d8d7ffcc26b927900801f2c941d513c.jpg',
            'rating' => '4.9 (420 Reviews)'
        ],
        [
            'name' => 'Vintage Denim Maxi Skirt with Star Patchwork',
            'price' => '$69.90', 
            'image' => 'https://i.pinimg.com/736x/1c/f9/8b/1cf98b4c031a4ded24b883ae1ca75965.jpg',
            'rating' => '4.8 (150 Reviews)'
        ],
        [
            'name' => 'Elegant Off-White Tailored Wide-Leg Trousers',
            'price' => '$66.00', 
            'image' => 'https://i.pinimg.com/1200x/3f/cf/ca/3fcfcaff79887de446a577e00198aac6.jpg',
            'rating' => '4.7 (210 Reviews)'
        ],
        [
            'name' => 'Dusty Rose High-Waisted Wide-Leg Pants',
            'price' => '$40.00', 
            'image' => 'https://i.pinimg.com/1200x/10/ee/20/10ee20e6eff7444d141dc1cd312e7132.jpg',
            'rating' => '4.8 (310 Reviews)'
        ],
        [
            'name' => 'Classic Dark Brown Pleated Trousers',
            'price' => '$42.00', 
            'image' => 'https://i.pinimg.com/1200x/5d/35/c4/5d35c46e2929e0390d19afd27401bca5.jpg',
            'rating' => '4.9 (670 Reviews)'
        ],
        [
            'name' => 'White Textured High-Waisted Shorts with Belt',
            'price' => '$40.00', 
            'image' => 'https://i.pinimg.com/736x/1b/d7/93/1bd793fcb43bac9f2fc68ab48b5ed367.jpg',
            'rating' => '4.7 (480 Reviews)'
        ],
        [
            'name' => 'Casual Beige High-Waisted Shorts with Rope Belt',
            'price' => '$39.90', 
            'image' => 'https://i.pinimg.com/736x/91/42/8a/91428a79a13e0c4a45a6e19d78442eb0.jpg',
            'rating' => '4.8 (180 Reviews)'
        ],
        [
            'name' => 'Navy Blue Tiered Ruffle Mini Skirt',
            'price' => '$44.00', 
            'image' => 'https://i.pinimg.com/736x/81/15/c1/8115c106378956fca2dffa0d038af58b.jpg',
            'rating' => '4.8 (290 Reviews)'
        ],
        [
            'name' => 'Elegant Khaki Pleated Midi Long Skirt',
            'price' => '$47.50', 
            'image' => 'https://i.pinimg.com/1200x/2a/45/93/2a4593469e968e4afc0467306f654ac8.jpg',
            'rating' => '5.0 (130 Reviews)'
        ],
        [
            'name' => 'Aesthetic Pink Ruffle Asymmetric Midi Skirt',
            'price' => '$44.00', 
            'image' => 'https://i.pinimg.com/736x/55/c3/75/55c375c0dfc6dc93e7de93fa0b0abbd2.jpg',
            'rating' => '4.6 (220 Reviews)'
        ],
        [
            'name' => 'Burgundy Faux Leather Slit Midi Skirt',
            'price' => '$55.90', 
            'image' => 'https://i.pinimg.com/1200x/17/8c/bf/178cbff6c03e1f956edb0ff952a8838b.jpg',
            'rating' => '4.8 (410 Reviews)'
        ],
    ];
        return view('pages.bottom', compact('bottom'));
    }   
}