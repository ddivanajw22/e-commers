@extends('layouts.app')

@section('content')
<div class="w-full bg-white min-h-screen pb-16 flex flex-col items-center">

<div class="w-full h-[480px] relative overflow-hidden bg-white select-none">
    <div class="relative w-full h-full">
        @foreach(range(1, 5) as $i)
        <div class="slide-item absolute inset-0 transition-opacity duration-1000 {{ $i == 1 ? 'opacity-100' : 'opacity-0' }}">
            
            <img src="{{ asset('assets/banner' . ($i > 1 ? $i : '') . '.png') }}" class="w-full h-full object-cover object-top" alt="Banner {{ $i }}">
            
        </div>
        @endforeach
    </div>
</div>

    <div class="w-[92%] bg-white rounded-[45px] shadow-[0_20px_60px_rgba(0,0,0,0.12)] p-12 mt-8 relative z-20 border border-gray-100">
        
        <div class="flex justify-between items-center mb-12">
            <h2 class="text-4xl font-extrabold font-genos tracking-wider text-black capitalize">
                {{ request()->route('category') ? ucfirst(request()->route('category')) : 'Our Collection' }}
            </h2>
            <a href="/shop" class="text-sm font-bold text-black border-b-2 border-black hover:text-gray-500 hover:border-gray-500 transition-colors">
                View All
            </a>
        </div>

        @if($products->isEmpty())
            <div class="text-center py-20 text-gray-500 font-bold">Produk tidak ditemukan.</div>
        @else
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            @foreach($products as $product)
                <div class="flex flex-col group">
                    <div class="relative overflow-hidden rounded-[30px] aspect-square bg-gray-100">
                        <img src="{{ $product['image'] }}" 
                             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" 
                             alt="{{ $product['name'] }}">
                        
                        @if(isset($product['is_discount']) && $product['is_discount'])
                            <span class="absolute top-4 left-4 bg-black text-white text-[9px] px-3 py-1 rounded-full font-bold uppercase tracking-wider z-10">Sale</span>
                        @endif
                    </div>

                    <div class="mt-4 px-1">
                        <h4 class="font-bold text-xs text-black leading-snug truncate">{{ $product['name'] }}</h4>
                        <div class="flex justify-between items-center mt-2">
                            <span class="text-[10px] text-gray-400 font-medium">★ {{ $product['rating'] }}</span>
                            <span class="text-xs font-black text-black">{{ $product['price'] }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        @endif
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const slides = document.querySelectorAll('.slide-item');
        if (slides.length > 0) {
            let currentSlide = 0;
            setInterval(() => {
                slides[currentSlide].classList.replace('opacity-100', 'opacity-0');
                currentSlide = (currentSlide + 1) % slides.length;
                slides[currentSlide].classList.replace('opacity-0', 'opacity-100');
            }, 3000);
        }
    });
</script>
@endsection