@extends('layouts.app')

@section('content')
@php
     $outerwear = [
        ['name' => 'Chocolate Brown Faux-Leather Biker Jacket', 'price' => '$75.00', 'image' => 'https://i.pinimg.com/1200x/ee/ea/94/eeea943b8f162fc123a4dd63a250d4f6.jpg', 'rating' => '4.8 (210 Reviews)'],
        ['name' => 'Burgundy Faux-Leather Belted Cropped Jacket', 'price' => '$72.00', 'image' => 'https://i.pinimg.com/1200x/39/fb/18/39fb18fe4a89377411968dbc3e3b3f5f.jpg', 'rating' => '4.9 (185 Reviews)'],
        ['name' => 'Jet Black Faux-Leather Bomber Jacket', 'price' => '$78.00', 'image' => 'https://i.pinimg.com/736x/57/5c/8c/575c8c00f590ce6cf7107fb795c17d80.jpg', 'rating' => '4.7 (340 Reviews)'],
        ['name' => 'Charcoal Gray Oversized Wide-Collar Long Cardigan', 'price' => '$65.00', 'image' => 'https://i.pinimg.com/1200x/66/cb/46/66cb462f58325f56117cd177d6635bd4.jpg', 'rating' => '4.6 (190 Reviews)'],
        ['name' => 'Classic Khaki Double-Breasted Long Trench Coat', 'price' => '$79.90', 'image' => 'https://i.pinimg.com/1200x/ee/49/ef/ee49ef3fb8fc9655502c074a996a4fc3.jpg', 'rating' => '4.9 (420 Reviews)'],
        ['name' => 'Tan Brown Sherpa-Lined Double-Breasted Long Coat', 'price' => '$64.00', 'image' => 'https://i.pinimg.com/1200x/f2/ae/b4/f2aeb480f26e34ca412f8b8d8031f8e2.jpg', 'rating' => '4.8 (150 Reviews)'],
        ['name' => 'Classic Blue Cable-Knit Buttoned Cardigan', 'price' => '$58.50', 'image' => 'https://i.pinimg.com/736x/83/97/2e/83972e546b66d30050987c80c86842bd.jpg', 'rating' => '4.7 (510 Reviews)'],
        ['name' => 'Boho Tribal Geometric Pattern Open Cardigan', 'price' => '$42.00', 'image' => 'https://i.pinimg.com/736x/fa/51/54/fa5154303378da12934a28c27ade3bf4.jpg', 'rating' => '4.8 (280 Reviews)'],
        ['name' => 'Elegant Dusty Pink Tweed Pattern Buttoned Cardigan', 'price' => '$52.00', 'image' => 'https://i.pinimg.com/1200x/e0/3b/aa/e03baac2a3719337d9fd5fcd8a20746e.jpg', 'rating' => '4.9 (670 Reviews)'],
        ['name' => 'Ultra-Cropped Red Long-Sleeve Hooded Shrug', 'price' => '$56.00', 'image' => 'https://i.pinimg.com/1200x/43/46/60/43466055835200abf254dcd24727948f.jpg', 'rating' => '4.7 (130 Reviews)'],
        ['name' => 'Aesthetic Pastel Marble Tie-Dye Cropped Hoodie', 'price' => '$69.90', 'image' => 'https://i.pinimg.com/1200x/bf/66/ce/bf66cee93c53210c562160d38c4516a6.jpg', 'rating' => '4.8 (220 Reviews)'],
        ['name' => 'Pastel Lime Green Cropped Tie-Back Hoodie', 'price' => '$69.00', 'image' => 'https://i.pinimg.com/1200x/a7/1f/b9/a71fb9b5de9f4c8611875c4207edf19d.jpg', 'rating' => '4.8 (480 Reviews)'],
        ['name' => 'Vibrant Pink Cropped Denim Jacket', 'price' => '$58.00', 'image' => 'https://i.pinimg.com/736x/de/55/b5/de55b58bd98b84767a8bdc8208a232a6.jpg', 'rating' => '4.6 (110 Reviews)'],
        ['name' => 'Classic Light Wash Cropped Denim Jacket', 'price' => '$75.00', 'image' => 'https://i.pinimg.com/736x/76/16/6f/76166fa18ff8f47a0e95fab2c7637184.jpg', 'rating' => '4.9 (165 Reviews)'],
        ['name' => 'Pastel Color-Block Cropped Denim Jacket', 'price' => '$68.00', 'image' => 'https://i.pinimg.com/1200x/1b/8f/0c/1b8f0c167ab8ed66329a1bd76b357357.jpg', 'rating' => '5.0 (95 Reviews)'],
    ];
@endphp

<div class="px-[8%] flex gap-12 pt-10">
    <aside class="w-52 flex-shrink-0 font-42dot">
            
            <h3 class="font-bold text-base mb-5">Category</h3>

            <div class="font-bold text-[13px] mb-2 text-black">All Product</div>

            <ul class="relative ml-[7px]">
                
                <li class="absolute left-0 top-[16px] bottom-[16px] w-[1px] bg-black"></li>

                @php
    $categories = [
        'Tops'       => '/shop',
        'Bottom'     => '/bottom',
        'Dresses'    => '/dresses',
        'Outerwear'  => '/outerwear',
        'Activewear' => '/activewear'
    ];
@endphp

@foreach($categories as $label => $url)
<li class="relative py-[6px] pl-5">
    <span class="absolute left-0 top-[16px] w-4 border-t border-black"></span>
    
    <a href="{{ $url }}" 
       class="text-[13px] {{ request()->is(ltrim($url, '/')) ? 'font-bold text-black' : 'text-gray-500' }} hover:text-black transition-colors block">
        {{ $label }}
    </a>
</li>
@endforeach
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
            @foreach($outerwear as $item)
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