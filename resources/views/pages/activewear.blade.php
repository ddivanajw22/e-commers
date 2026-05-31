@extends('layouts.app')

@section('content')
    <div class="px-[8%] flex gap-12 pt-10">

        <aside class="w-52 flex-shrink-0 font-42dot">
            <h3 class="font-bold text-base mb-5">Category</h3>
            <div class="font-bold text-[13px] mb-2 text-black">
                <a href="{{ url('/shop') }}">All Product</a>
            </div>

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
                    <a href="{{ $url }}" class="text-[13px] {{ request()->is(ltrim($url, '/')) ? 'font-bold text-black' : 'text-gray-500' }} hover:text-black transition-colors block">
                        {{ $label }}
                    </a>
                </li>
                @endforeach
            </ul>

            <ul class="mt-10 text-[13px] space-y-4 text-gray-500 border-t pt-8">
                <li><a href="/new-arrival" class="hover:text-black block transition-colors {{ request()->is('new-arrival') ? 'font-bold text-black' : '' }}">New Arrival</a></li>
                <li><a href="/best-seller" class="hover:text-black block transition-colors {{ request()->is('best-seller') ? 'font-bold text-black' : '' }}">Best Seller</a></li>
                <li><a href="/on-discount" class="hover:text-black block transition-colors {{ request()->is('on-discount') ? 'font-bold text-black' : '' }}">On Discount</a></li>
            </ul>
        </aside>

        <main class="flex-1">
            <div class="flex justify-end mb-10">
                <form action="{{ url('/activewear') }}" method="GET" class="relative w-72">
                    <span class="absolute left-4 top-2.5">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <circle cx="11" cy="11" r="8"/>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"/>
                        </svg>
                    </span>
                    <input type="text" name="search" placeholder="Search" value="{{ request('search') }}" class="w-full bg-[#F3F4F6] border border-gray-200 rounded-full pl-12 pr-5 py-2.5 text-sm outline-none">
                </form>
            </div>

            <div class="grid grid-cols-3 gap-x-12 gap-y-16">
    @forelse($activewear as $item)
    <div class="flex flex-col">
        <div class="relative bg-[#EAEAEA] aspect-[4/5] rounded-[30px] mb-4 overflow-hidden shadow-sm">
            <img src="{{ $item['image'] ?? 'https://via.placeholder.com/300x400' }}" class="w-full h-full object-cover rounded-[30px]">
        </div>
        
        <h4 class="text-[13px] font-bold">{{ $item['name'] ?? 'Activewear Product' }}</h4>
        
        <div class="flex justify-between items-center mt-1">
            <span class="font-bold text-xs">{{ $item['price'] ?? '$0.00' }}</span>
        </div>
        
        <div class="flex gap-2 mt-4">
            <form onsubmit="addToCart(event, this)" class="flex-1">
                @csrf
                <input type="hidden" name="product_id" value="{{ $item['id'] ?? 0 }}">
                <input type="hidden" name="name" value="{{ $item['name'] }}">
                <input type="hidden" name="price" value="{{ $item['price'] }}">
                <input type="hidden" name="image" value="{{ $item['image'] }}">
                
                <button type="submit" class="w-full border border-black rounded-full py-2 text-[10px] font-bold hover:bg-black hover:text-white transition-all">
                    Add to cart
                </button>
            </form>
            
            <button class="flex-1 bg-black text-white rounded-full py-2 text-[10px] font-bold hover:bg-gray-800 transition-all">
                Buy now
            </button>
        </div>
    </div>
    @empty
        <div class="col-span-3 text-center py-10">
            <p class="text-gray-500">Produk tidak ditemukan.</p>
            <a href="{{ url('/activewear') }}" class="text-black underline mt-2 block">Reset Pencarian</a>
        </div>
    @endforelse
</div>
            </div>
        </main>
    </div>
@endsection