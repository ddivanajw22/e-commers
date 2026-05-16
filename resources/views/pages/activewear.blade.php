@extends('layouts.app')

@section('content')
@php
    $activewear = [
        // Baris 1
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
@endphp

<div class="px-[8%] flex gap-12 pt-10">
    <aside class="w-52 flex-shrink-0 font-42dot">
        <h3 class="font-bold text-lg mb-5 tracking-wide">Category</h3>
        
        <ul class="text-[14px] space-y-4 text-gray-500">
            <li class="text-gray-800 font-medium cursor-pointer mb-2">All Product</li>
            
            <li class="relative pl-5 flex items-center gap-2 before:content-[''] before:absolute before:left-[7px] before:top-[-10px] before:bottom-2 before:w-[1px] before:bg-gray-300">
                <span class="w-4 border-b border-gray-300"></span>
                <span class="hover:text-black cursor-pointer">Tops</span>
            </li>
            
            <li class="relative pl-5 flex items-center gap-2 before:content-[''] before:absolute before:left-[7px] before:top-[-10px] before:bottom-2 before:w-[1px] before:bg-gray-300">
                <span class="w-4 border-b border-gray-300"></span> 
                <span class="hover:text-black cursor-pointer">Bottom</span>
            </li>
            
            <li class="relative pl-5 flex items-center gap-2 before:content-[''] before:absolute before:left-[7px] before:top-[-10px] before:bottom-2 before:w-[1px] before:bg-gray-300">
                <span class="w-4 border-b border-gray-300"></span> 
                <span class="hover:text-black cursor-pointer">Dresses</span>
            </li>

            <li class="relative pl-5 flex items-center gap-2 before:content-[''] before:absolute before:left-[7px] before:top-[-10px] before:bottom-2 before:w-[1px] before:bg-gray-300">
                <span class="w-4 border-b border-gray-300"></span> 
                <span class="hover:text-black cursor-pointer">Outerwear</span>
            </li>

            <li class="relative pl-5 flex items-center gap-2 before:content-[''] before:absolute before:left-[7px] before:top-[-10px] before:bottom-2 before:w-[1px] before:bg-gray-300">
                <span class="w-4 border-b-2 border-black"></span> 
                <span class="font-bold text-black border-b-2 border-black">Activewear</span>
            </li>
        </ul>

        <hr class="my-6 border-gray-200">

        <ul class="text-[14px] space-y-4 text-gray-500">
            <li class="hover:text-black cursor-pointer transition-colors">New Arrival</li>
            <li class="hover:text-black cursor-pointer transition-colors">Best Seller</li>
            <li class="hover:text-black cursor-pointer transition-colors">On Discount</li>
        </ul>
    </aside>

    <main class="flex-1">
        <div class="flex justify-end mb-10">
            <div class="relative w-72">
                <span class="absolute left-4 top-2.5">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <circle cx="11" cy="11" r="8"/>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"/>
                    </svg>
                </span>
                <input type="text" placeholder="Search" class="w-full bg-[#F3F4F6] border border-gray-200 rounded-full pl-12 pr-5 py-2.5 text-sm outline-none">
            </div>
        </div>

        <div class="grid grid-cols-3 gap-x-12 gap-y-16">
            @foreach($activewear as $item)
            <div class="flex flex-col">
                <div class="relative bg-[#EAEAEA] aspect-[4/5] rounded-[30px] mb-4 overflow-hidden shadow-sm">
                    <img src="{{ $item['image'] }}" class="w-full h-full object-cover">
                    <button class="absolute top-5 right-5 text-gray-800">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                        </svg>
                    </button>
                </div>
                <h4 class="text-[13px] font-bold">{{ $item['name'] }}</h4>
                <div class="flex justify-between items-center mt-1">
                    <span class="text-[10px] text-gray-400 italic">★ {{ $item['rating'] }}</span>
                    <span class="font-bold text-xs">{{ $item['price'] }}</span>
                </div>
                <div class="flex gap-2 mt-4">
                    <button class="flex-1 border border-black rounded-full py-2 text-[10px] font-bold hover:bg-black hover:text-white transition-all">Add to cart</button>
                    <button class="flex-1 bg-black text-white rounded-full py-2 text-[10px] font-bold hover:bg-gray-800 transition-all">Buy now</button>
                </div>
            </div>
            @endforeach
        </div>
    </main>
</div>
@endsection