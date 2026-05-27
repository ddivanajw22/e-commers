<?php

namespace App\Data;

class ProductData
{
    public static function all()
    {
        return array_merge(
            self::tops(),
            self::bottom(),
            self::dresses(),
            self::outerwear(),
            self::activewear(),
        );
    }

    public static function tops()
    {
        return [
            ['id' => 1, 'name' => 'White Button-Up Shirt with Brown Corset', 'price' => '$44.00', 'image' => 'https://i.pinimg.com/1200x/aa/f9/de/aaf9deb5a01da5e90130be16db82f6f8.jpg', 'rating' => '4.6 (450 Reviews)', 'is_discount' => false, 'category' => 'tops'],
            ['id' => 2, 'name' => 'Black Faux Leather Chain Strap Top', 'price' => '$52.00', 'image' => 'https://i.pinimg.com/736x/8a/b1/53/8ab153f0e28ca15185e6045b487aecdd.jpg', 'rating' => '4.8 (1200 Reviews)', 'is_discount' => false, 'category' => 'tops'],
            ['id' => 3, 'name' => 'Light Blue Modern Cheongsam Crop Top', 'price' => '$59.00', 'image' => 'https://i.pinimg.com/1200x/88/06/77/8806774370cd1181ab6f62ea17676571.jpg', 'rating' => '4.7 (310 Reviews)', 'is_discount' => true, 'category' => 'tops'],
        ];
    }

    public static function bottom()
    {
        return [
            ['id' => 4, 'name' => 'Dark Brown Faux Leather Mini Skirt', 'price' => '$58.00', 'image' => 'https://i.pinimg.com/736x/83/6b/67/836b67ee309ea58b9d0f5be0c7f2f637.jpg', 'rating' => '4.7 (280 Reviews)', 'is_discount' => false, 'category' => 'bottom'],
            ['id' => 5, 'name' => 'Navy Blue Denim Wrap Mini Skirt', 'price' => '$45.00', 'image' => 'https://i.pinimg.com/1200x/17/3a/94/173a94e217e71827e9dd5b0a79d46de7.jpg', 'rating' => '4.8 (340 Reviews)', 'is_discount' => false, 'category' => 'bottom'],
            ['id' => 6, 'name' => 'Soft Pink Drawstring Casual Skort', 'price' => '$45.00', 'image' => 'https://i.pinimg.com/1200x/3b/39/dd/3b39dd7215b0816a1ceeb289f00d5f98.jpg', 'rating' => '4.9 (510 Reviews)', 'is_discount' => false, 'category' => 'bottom'],
        ];
    }

    public static function dresses()
    {
        return [
            ['id' => 7, 'name' => 'Chic Indigo Denim Tiered Ruffle Cami Dress', 'price' => '$54.00', 'image' => 'https://i.pinimg.com/736x/1c/c3/6e/1cc36e9c2a58aa9eb8e6d6ba9a9ffd27.jpg', 'rating' => '4.6 (240 Reviews)', 'is_discount' => false, 'category' => 'dresses'],
            ['id' => 8, 'name' => 'Classic Camel Collar-Neck Short-Sleeve Flare Dress', 'price' => '$69.00', 'image' => 'https://i.pinimg.com/1200x/94/ef/dd/94efddc8729e04c1788b88a30b13a18d.jpg', 'rating' => '4.9 (165 Reviews)', 'is_discount' => false, 'category' => 'dresses'],
            ['id' => 9, 'name' => 'Cozy Charcoal Gray Hoodie Dress with Side-Buckle', 'price' => '$65.00', 'image' => 'https://i.pinimg.com/736x/54/a1/d9/54a1d9e4f2859cf7c13ed2c55874428a.jpg', 'rating' => '4.8 (110 Reviews)', 'is_discount' => false, 'category' => 'dresses'],
        ];
    }

   public static function outerwear()
    {
        return [
            ['id' => 11, 'name' => 'Urban Slate Gray Fitted Workout Zip-Up', 'price' => '$46.00', 'image' => 'https://i.pinimg.com/736x/11/a6/79/11a679a75d2212c75553f923688e8371.jpg', 'rating' => '4.9 (192 Reviews)', 'is_discount' => false, 'category' => 'outerwear'],
            ['id' => 12, 'name' => 'Trendy Soft Blue Collared Athletic Windbreaker', 'price' => '$52.00', 'image' => 'https://i.pinimg.com/736x/a5/ac/27/a5ac27c729f9b7b32e2cef27fa905c24.jpg', 'rating' => '5.0 (88 Reviews)', 'is_discount' => false, 'category' => 'outerwear'],
            ['id' => 13, 'name' => 'Vibrant Pink Cropped Denim Jacket', 'price' => '$58.00', 'image' => 'https://i.pinimg.com/736x/de/55/b5/de55b58bd98b84767a8bdc8208a232a6.jpg', 'rating' => '4.6 (110 Reviews)', 'is_discount' => false, 'category' => 'outerwear'],
            ['id' => 14, 'name' => 'Classic Light Wash Cropped Denim Jacket', 'price' => '$75.00', 'image' => 'https://i.pinimg.com/736x/76/16/6f/76166fa18ff8f47a0e95fab2c7637184.jpg', 'rating' => '4.9 (165 Reviews)', 'is_discount' => false, 'category' => 'outerwear'],
            ['id' => 15, 'name' => 'Pastel Color-Block Cropped Denim Jacket', 'price' => '$68.00', 'image' => 'https://i.pinimg.com/1200x/1b/8f/0c/1b8f0c167ab8ed66329a1bd76b357357.jpg', 'rating' => '5.0 (95 Reviews)', 'is_discount' => false, 'category' => 'outerwear'],
        ];
    }

    public static function activewear()
    {
        return [
            ['id' => 15, 'name' => 'Neon Lime Green Workout Bodysuit', 'price' => '$70.00', 'image' => 'https://i.pinimg.com/1200x/bb/4b/cd/bb4bcde322a50a169b79d2df56c72fd9.jpg', 'rating' => '4.9 (145 Reviews)', 'is_discount' => false, 'category' => 'activewear'],
            ['id' => 16, 'name' => 'Asymmetric Strappy Sports Bra & Biker Shorts Set', 'price' => '$79.00', 'image' => 'https://i.pinimg.com/1200x/64/db/3b/64db3be1b66b60121046c04174b14e5a.jpg', 'rating' => '4.6 (180 Reviews)', 'is_discount' => true, 'category' => 'activewear'],
        ];
    }
}