@extends('layouts.app')

@section('content')
<div class="w-full bg-[#F9F9F9] min-h-screen flex flex-col items-center">

    <div class="w-full h-[480px] relative overflow-hidden flex justify-center items-center bg-white select-none">
        <div class="slide-item absolute inset-0 flex justify-between items-center transition-opacity duration-1000 opacity-100 px-[8%]">
            <div class="flex gap-6 items-center">
                <img src="{{ asset('images/hero/model1a.png') }}" class="h-[420px] object-contain" alt="Model 1A">
                <img src="{{ asset('images/hero/model1b.png') }}" class="h-[420px] object-contain" alt="Model 1B">
            </div>
            <h1 class="text-5xl font-extrabold font-genos tracking-wider text-center leading-[0.95] text-black uppercase italic">
                Wear The <br> Trend
            </h1>
            <div class="flex gap-6 items-center">
                <img src="{{ asset('images/hero/model1c.png') }}" class="h-[420px] object-contain" alt="Model 1C">
                <img src="{{ asset('images/hero/model1d.png') }}" class="h-[420px] object-contain" alt="Model 1D">
            </div>
        </div>
        <div class="slide-item absolute inset-0 flex justify-between items-center transition-opacity duration-1000 opacity-0 px-[8%]">
            <div class="flex gap-6 items-center">
                <img src="{{ asset('images/hero/model2a.png') }}" class="h-[420px] object-contain" alt="Model 2A">
                <img src="{{ asset('images/hero/model2b.png') }}" class="h-[420px] object-contain" alt="Model 2B">
            </div>
            <h1 class="text-4xl font-extrabold font-genos tracking-wider text-center leading-[0.95] text-black uppercase">
                WEAR THE <br> TREND
            </h1>
            <div class="flex gap-6 items-center">
                <img src="{{ asset('images/hero/model2c.png') }}" class="h-[420px] object-contain" alt="Model 2C">
                <img src="{{ asset('images/hero/model2d.png') }}" class="h-[420px] object-contain" alt="Model 2D">
            </div>
        </div>
    </div>

    <div class="w-[92%] bg-white rounded-[45px] shadow-xl p-12 -mt-12 relative z-20 mb-20 border border-gray-100">
        <div class="flex justify-between items-center mb-10">
            <h2 class="text-4xl font-extrabold font-genos tracking-wider text-black capitalize">Find Your Style</h2>
            <div class="relative w-72">
                <input type="text" placeholder="Search" class="w-full bg-gray-50 border border-gray-200 rounded-full py-1.5 pl-10 pr-4 text-sm focus:outline-none">
            </div>
        </div>

        <div class="flex gap-12">
            <div class="w-1/5 shrink-0">
                <div class="mb-8">
                    <h3 class="font-extrabold text-sm mb-3 text-black">Category</h3>
                    <ul class="space-y-1 text-[13px] font-bold text-gray-800">
                        <li><a href="/" class="text-black">All Product</a></li>
                        <li><a href="/category/tops" class="hover:text-black block">Tops</a></li>
                        <li><a href="/category/bottom" class="hover:text-black block">Bottom</a></li>
                        <li><a href="/category/dresses" class="hover:text-black block">Dresses</a></li>
                        <li><a href="/category/outerwear" class="hover:text-black block">Outerwear</a></li>
                        <li><a href="/category/activewear" class="hover:text-black block">Activewear</a></li>
                    </ul>
                </div>
                <div class="space-y-3 text-[13px] font-bold text-gray-500 border-t border-gray-100 pt-6">
                    <a href="/new-arrival" class="block hover:text-black">New Arrival</a>
                    <a href="/best-seller" class="block hover:text-black">Best Seller</a>
                    <a href="/on-discount" class="block hover:text-black">On Discount</a>
                </div>
            </div>

            <div class="w-4/5">
                <div class="grid grid-cols-3 gap-x-8 gap-y-12">
                    @foreach($products as $product)
                        <div class="flex flex-col group">
                            <div class="bg-[#F3F4F6] rounded-2xl aspect-[3/4] relative overflow-hidden flex items-center justify-center p-4">
                                <img src="{{ $product['image'] }}" class="max-h-full object-contain group-hover:scale-105 transition-transform duration-300" alt="{{ $product['name'] }}">
                            </div>
                            <div class="mt-4 flex flex-col flex-grow">
                                <h4 class="font-bold text-xs text-black leading-tight line-clamp-2">{{ $product['name'] }}</h4>
                                <span class="text-xs font-black text-black mt-1">{{ $product['price'] }}</span>
                                <div class="grid grid-cols-2 gap-2 mt-3">
                                    <button class="border border-black text-black font-bold text-[10px] py-1.5 rounded-full hover:bg-gray-50">Add</button>
                                    <button class="bg-black text-white font-bold text-[10px] py-1.5 rounded-full hover:bg-gray-800">Buy</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const slides = document.querySelectorAll('.slide-item');
        let currentSlide = 0;
        setInterval(() => {
            slides[currentSlide].classList.replace('opacity-100', 'opacity-0');
            currentSlide = (currentSlide + 1) % slides.length;
            slides[currentSlide].classList.replace('opacity-0', 'opacity-100');
        }, 3500);
    });
</script>
@endsection