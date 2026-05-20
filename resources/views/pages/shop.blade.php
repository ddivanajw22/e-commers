@extends('layouts.app')

@section('content')
    @php
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
    @endphp

    <div class="px-[8%] flex gap-12 pt-10">
        <aside class="w-52 flex-shrink-0 font-42dot">
            <h3 class="font-bold text-base mb-5">Category</h3>
            <ul class="text-[13px] space-y-4 text-gray-500">
                <li class="text-gray-800 cursor-pointer">All Product</li>
                
                <li class="relative pl-5 flex items-center gap-2 before:content-[''] before:absolute before:left-[7px] before:top-[-10px] before:bottom-2 before:w-[1px] before:bg-gray-300">
                    <span class="w-4 border-b-2 border-black"></span>
                    <span class="font-bold text-black border-b-2 border-black">Tops</span>
                </li>
                
                <li class="relative pl-5 flex items-center gap-2 before:content-[''] before:absolute before:left-[7px] before:top-[-10px] before:bottom-2 before:w-[1px] before:bg-gray-300">
                    <span class="w-4 border-b border-gray-300"></span> 
                    <span class="hover:text-black cursor-pointer">Bottoms</span>
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
                @foreach($tops as $item)
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