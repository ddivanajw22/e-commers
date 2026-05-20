<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{   
    public function index () {
        $tops = [
            [
                'name' => 'Asymmetrical Collar Crop Sweatshirt',
                'price' => '$40.00', 
                'image' => 'https://i.pinimg.com/1200x/0d/f3/07/0df307f04ca36d28eb7dd4eb4ebfcadb.jpg',
                'rating' => '5.0 (1.3k Reviews)'
            ],
            [
                'name' => 'Dark Brown Faux Leather Wrap Shirt', 
                'price' => '$59.00', 
                'image' => 'https://i.pinimg.com/1200x/94/3d/68/943d6825adef9ef9015628287212ec06.jpg',
                'rating' => '4.8 (850 Reviews)'
            ],
            [
                'name' => 'Navy Blue Ruched Button-Up Shirt',
                'price' => '$48.50', 
                'image' => 'https://i.pinimg.com/736x/aa/c9/c4/aac9c481cbb53fe78636bea482b7ec23.jpg',
                'rating' => '4.7 (1.1k Reviews)'
            ],
            [
                'name' => 'Sage Green Sleeveless Wrap Top',
                'price' => '$48.00', 
                'image' => 'https://i.pinimg.com/736x/67/38/08/67380873a3e7ae3ce4d5fe1b446730c1.jpg',
                'rating' => '4.9 (540 Reviews)'
            ],
            [
                'name' => 'White Stand Collar Crop Top with Gold Buttons',
                'price' => '$45.90', 
                'image' => 'https://i.pinimg.com/1200x/b3/7d/0e/b37d0eebf1fcc367c67ff2ab8af832ed.jpg',
                'rating' => '5.0 (2k Reviews)'
            ],
            [
                'name' => 'Khaki Ruched Blouse with Gold Brooch',
                'price' => '$52.00', 
                'image' => 'https://i.pinimg.com/736x/1e/98/d3/1e98d3b8df29cc97bead872adfb8245c.jpg',
                'rating' => '4.6 (320 Reviews)'
            ],
            [
                'name' => 'Burgundy Lace-Up Corset Vest',
                'price' => '$42.00', 
                'image' => 'https://i.pinimg.com/736x/85/63/ce/8563cefafd317696002c6badd9431802.jpg',
                'rating' => '4.8 (1.5k Reviews)'
            ],
            [
                'name' => 'Denim Off-Shoulder Two-Piece Look Top',
                'price' => '$58.50', 
                'image' => 'https://i.pinimg.com/1200x/16/82/04/168204f46ac9cb3777e8bcec25710842.jpg',
                'rating' => '4.7 (780 Reviews)'
            ],
            [
                'name' => 'Navy Blue Ruched Cami Top',
                'price' => '$45.00', 
                'image' => 'https://i.pinimg.com/736x/9d/63/d6/9d63d6cf03cbe22742ae3ca186328a6f.jpg',
                'rating' => '4.9 (410 Reviews)'
            ],
            [
                'name' => 'Yellow Off-Shoulder Fuzzy Knit Sweater',
                'price' => '$48.00', 
                'image' => 'https://i.pinimg.com/1200x/46/55/58/46555866dfd03277a9969cacfcbc8f6b.jpg',
                'rating' => '5.0 (1.1k Reviews)'
            ],
            [
                'name' => 'Light Blue Asymmetric Buckle Strap Top',
                'price' => '$40.00', 
                'image' => 'https://i.pinimg.com/1200x/c8/e4/25/c8e425b1dae724269f5c0a4dc7afae87.jpg',
                'rating' => '4.7 (630 Reviews)'
            ],
            [
                'name' => 'Floral Print Flare Sleeve Blouse',
                'price' => '$55.00', 
                'image' => 'https://i.pinimg.com/1200x/d1/fd/1d/d1fd1d025befd9053c81af4d593fe32d.jpg',
                'rating' => '4.9 (890 Reviews)'
            ],
            [
                'name' => 'White Button-Up Shirt with Brown Corset',
                'price' => '$44.00', 
                'image' => 'https://i.pinimg.com/1200x/aa/f9/de/aaf9deb5a01da5e90130be16db82f6f8.jpg',
                'rating' => '4.6 (450 Reviews)'
            ],
            [
                'name' => 'Black Faux Leather Chain Strap Top',
                'price' => '$52.00', 
                'image' => 'https://i.pinimg.com/736x/8a/b1/53/8ab153f0e28ca15185e6045b487aecdd.jpg',
                'rating' => '4.8 (1.2k Reviews)'
            ],
            [
                'name' => 'Light Blue Modern Cheongsam Crop Top',
                'price' => '$59.90', 
                'image' => 'https://i.pinimg.com/1200x/88/06/77/8806774370cd1181ab6f62ea17676571.jpg',
                'rating' => '4.7 (310 Reviews)'
            ],
        ];
        return view('pages.shop', compact('tops'));
    }
}
