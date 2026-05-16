@extends('layouts.app')

@section('content')
@php
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
@endphp

<div class="px-[8%] flex gap-12 pt-10">
    <aside class="w-52 flex-shrink-0 font-42dot">
        <h3 class="font-bold text-base mb-5">Category</h3>
        <ul class="text-[13px] space-y-4 text-gray-500">
            <li class="text-gray-800 cursor-pointer">All Product</li>
            
            <li class="relative pl-5 flex items-center gap-2 before:content-[''] before:absolute before:left-[7px] before:top-[-10px] before:bottom-2 before:w-[1px] before:bg-gray-300">
                <span class="w-4 border-b-2 border-gray-300"></span>
                <span class="hover:text-black cursor-pointer">Tops</span>
            </li>
            
            <li class="relative pl-5 flex items-center gap-2 before:content-[''] before:absolute before:left-[7px] before:top-[-10px] before:bottom-2 before:w-[1px] before:bg-gray-300">
                <span class="w-4 border-b border-gray-300"></span> 
                <span class="hover:text-black cursor-pointer">Bottoms</span>
            </li>
            
            <li class="relative pl-5 flex items-center gap-2 before:content-[''] before:absolute before:left-[7px] before:top-[-10px] before:bottom-2 before:w-[1px] before:bg-gray-300">
                <span class="w-4 border-b border-black"></span> 
                <span class="font-bold text-black border-b-2 border-black">Dresses</span>
            </li>

            <li class="relative pl-5 flex items-center gap-2 before:content-[''] before:absolute before:left-[7px] before:top-[-10px] before:bottom-2 before:w-[1px] before:bg-gray-300">
                <span class="w-4 border-b border-gray-300"></span> 
                <span class="hover:text-black cursor-pointer">Outerwear</span>
            </li>

            <li class="relative pl-5 flex items-center gap-2 before:content-[''] before:absolute before:left-[7px] before:top-[-10px] before:bottom-2 before:w-[1px] before:bg-gray-300">
                <span class="w-4 border-b border-gray-300"></span> 
                <span class="hover:text-black cursor-pointer">Activewear</span>
            </li>
        </ul>

        <ul class="mt-10 text-[13px] space-y-4 text-gray-500 border-t pt-8">
            <li class="hover:text-black cursor-pointer">New Arrival</li>
            <li class="hover:text-black cursor-pointer">Best Seller</li>
            <li class="hover:text-black cursor-pointer">On Discount</li>
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
            @foreach($dresses as $item)
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

        <div class="flex justify-center items-center gap-5 mt-24 mb-40 text-[12px] font-medium text-gray-400">
            <button>← Previous</button>
            <span class="bg-black text-white w-8 h-8 flex items-center justify-center rounded-lg shadow-md">1</span>
            <span>2</span><span>3</span><span>...</span>
            <button class="text-black font-bold">Next →</button>
        </div>
    </main>
</div>
@endsection