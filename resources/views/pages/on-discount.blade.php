@extends('layouts.app')

@section('content')
<div class="px-[8%] flex gap-12 pt-10">

    {{-- SIDEBAR --}}
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
                <a href="{{ $url }}" class="text-[13px] {{ request()->is(ltrim($url, '/')) ? 'text-black font-bold' : 'text-gray-500' }} hover:text-black transition-colors block">
                    {{ $label }}
                </a>
            </li>
            @endforeach
        </ul>

        <ul class="mt-10 text-[13px] space-y-4 text-gray-500 border-t pt-8">
            <li>
                <a href="{{ route('shop.new-arrival') }}" class="block {{ request()->routeIs('shop.new-arrival') ? 'font-bold text-black' : 'hover:text-black' }}">
                    New Arrival
                </a>
            </li>
            <li>
                <a href="{{ route('shop.best-seller') }}" class="block {{ request()->routeIs('shop.best-seller') ? 'font-bold text-black' : 'hover:text-black' }}">
                    Best Seller
                </a>
            </li>
            <li>
                <a href="{{ route('shop.on-discount') }}" class="block {{ request()->routeIs('shop.on-discount') ? 'font-bold text-black' : 'hover:text-black' }}">
                    On Discount
                </a>
            </li>
        </ul>
    </aside>

    {{-- MAIN CONTENT --}}
    <main class="flex-1">
        <h2 class="text-xl font-bold mb-6">
            @if(request()->routeIs('shop.new-arrival'))
                New Arrival
            @elseif(request()->routeIs('shop.best-seller'))
                Best Seller
            @elseif(request()->routeIs('shop.on-discount'))
                On Discount
            @else
                Products
            @endif
        </h2>

        <div class="grid grid-cols-3 gap-x-12 gap-y-16">
            @foreach($products as $item)
            <div class="flex flex-col">
                <div class="relative bg-[#EAEAEA] aspect-[4/5] rounded-[30px] mb-4 overflow-hidden shadow-sm">
                    <img src="{{ $item['image'] }}" class="w-full h-full object-cover rounded-[30px]">
                    <button class="absolute top-5 right-5 text-gray-800 outline-none">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                        </svg>
                    </button>
                </div>
                
                <h4 class="text-[13px] font-bold">{{ $item['name'] }}</h4>
                <div class="flex justify-between items-center mt-1">
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