@extends('layouts.app')

@section('content')
<!-- Seluruh halaman putih bersih -->
<div class="w-full bg-white min-h-screen pb-16 flex flex-col items-center">

    <!-- Hero Section -->
    <div class="w-full h-[480px] relative overflow-hidden flex justify-center items-center bg-white select-none">
        <h1 class="absolute z-10 text-5xl font-extrabold font-genos tracking-wider text-center leading-[0.95] text-black uppercase not-italic pointer-events-none">
            Wear The <br> Trend
        </h1>
        <div class="slide-item absolute inset-0 flex justify-between items-center transition-opacity duration-1000 opacity-100 px-[8%]">
            <div class="flex gap-6 items-center">
                <img src="{{ asset('images/hero/model1a.png') }}" class="h-[420px] object-contain" alt="Model 1A">
                <img src="{{ asset('images/hero/model1b.png') }}" class="h-[420px] object-contain" alt="Model 1B">
            </div>
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
            <div class="flex gap-6 items-center">
                <img src="{{ asset('images/hero/model2c.png') }}" class="h-[420px] object-contain" alt="Model 2C">
                <img src="{{ asset('images/hero/model2d.png') }}" class="h-[420px] object-contain" alt="Model 2D">
            </div>
        </div>
    </div>

    <!-- Main Container -->
    <div class="w-[92%] bg-white rounded-[45px] shadow-[0_20px_60px_rgba(0,0,0,0.12)] p-12 mt-8 relative z-20 border border-gray-100">
        
        <div class="flex justify-between items-center mb-16">
            <!-- Ukuran judul dikecilkan menjadi text-2xl -->
            <h2 class="text-2xl font-extrabold font-genos tracking-wider text-black capitalize">Find Your Style</h2>
            <a href="/shop" class="text-sm font-bold text-black border-b-2 border-black hover:text-gray-500 hover:border-gray-500 transition-colors">
                Category
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-x-8 gap-y-12">
            @foreach($products as $product)
                <div class="flex flex-col group">
                    <div class="bg-[#F3F4F6] rounded-2xl aspect-[3/4] relative overflow-hidden flex items-center justify-center p-4">
                        <img src="{{ $product['image'] }}" class="max-h-full object-contain group-hover:scale-105 transition-transform duration-300" alt="{{ $product['name'] }}">
                    </div>
                    <div class="mt-4 flex flex-col flex-grow">
                        <h4 class="font-bold text-xs text-black leading-tight line-clamp-2">{{ $product['name'] }}</h4>
                        <span class="text-xs font-black text-black mt-1">Rp {{ number_format($product['price'], 0, ',', '.') }}</span>
                        <div class="grid grid-cols-2 gap-2 mt-3">
                            <button class="border border-black text-black font-bold text-[10px] py-1.5 rounded-full hover:bg-gray-50 transition-colors">Add</button>
                            <button class="bg-black text-white font-bold text-[10px] py-1.5 rounded-full hover:bg-gray-800 transition-colors">Buy</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="flex justify-center items-center mt-20 gap-4 text-sm font-bold text-gray-400">
            <a href="/shop" class="flex items-center gap-2 text-black hover:opacity-70 transition-opacity">
                Next <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
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