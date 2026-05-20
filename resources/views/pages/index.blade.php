@extends('layouts.app')

@section('content')
    <div class="bg-white min-h-screen">
    
    <section class="relative h-[500px] lg:h-[650px] overflow-hidden bg-white">
        <div class="swiper heroSwiper h-full w-full">
            <div class="swiper-wrapper">
                
                <div class="swiper-slide relative">
                    <img src="banner.jpg" alt="1" class="hero-img">
                    <div class="absolute inset-0 flex items-end justify-center pb-16">
                        <a href="#shop" class="bg-black text-white px-10 py-3 rounded-full hover:bg-gray-800 transition duration-300 shadow-lg">Shop Now</a>
                    </div>
                </div>

                <div class="swiper-slide relative">
                    <img src="banner2.jpg" alt="2" class="hero-img">
                    <div class="absolute inset-0 flex items-end justify-center pb-16">
                        <a href="#shop" class="bg-black text-white px-10 py-3 rounded-full hover:bg-gray-800 transition duration-300 shadow-lg">Shop Now</a>
                    </div>
                </div>

                <div class="swiper-slide relative">
                    <img src="banner3.jpg" alt="3" class="hero-img">
                    <div class="absolute inset-0 flex items-end justify-center pb-16">
                        <a href="#shop" class="bg-black text-white px-10 py-3 rounded-full hover:bg-gray-800 transition duration-300 shadow-lg">Shop Now</a>
                    </div>
                </div>

                <div class="swiper-slide relative">
                    <img src="banner4.jpg" alt="4" class="hero-img">
                    <div class="absolute inset-0 flex items-end justify-center pb-16">
                        <a href="#shop" class="bg-black text-white px-10 py-3 rounded-full hover:bg-gray-800 transition duration-300 shadow-lg">Shop Now</a>
                    </div>
                </div>

                <div class="swiper-slide relative">
                    <img src="banner5.jpg" alt="5" class="hero-img">
                    <div class="absolute inset-0 flex items-end justify-center pb-16">
                        <a href="#shop" class="bg-black text-white px-10 py-3 rounded-full hover:bg-gray-800 transition duration-300 shadow-lg">Shop Now</a>
                    </div>
                </div>

            </div>
            
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next hidden md:flex"></div>
            <div class="swiper-button-prev hidden md:flex"></div>
        </div>
    </section>

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
    </div>

    <section id="shop" class="py-12 px-6 lg:px-20 bg-white">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-10 gap-4">
            <h2 class="text-3xl font-bold italic tracking-wider">WEAR THE TREND</h2>
            
            <div class="flex items-center border-b border-gray-400 py-1 w-full md:w-64">
                <input type="text" placeholder="Search..." class="bg-transparent outline-none text-sm px-2 w-full">
                <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
            @for ($i = 1; $i <= 3; $i++)
            <div class="group relative bg-[#F9F9F9] p-5 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-500">
                <div class="absolute top-6 right-6 z-10">
                    <button class="text-gray-400 hover:text-red-500 text-2xl transition">♡</button>
                </div>
                <div class="overflow-hidden rounded-xl mb-6">
                    <img src="/img/product-sample.jpg" alt="Product" class="w-full aspect-square object-contain group-hover:scale-110 transition duration-500">
                </div>
                <h3 class="font-medium text-lg mb-1">Asymmetrical Waist-Cinching Sweatshirt</h3>
                <div class="flex items-center mb-4 text-sm">
                    <span class="text-yellow-400 mr-1">★</span>
                    <span class="text-gray-500 font-medium">5.0</span>
                    <span class="text-gray-400 ml-1">(2.3k Reviews)</span>
                </div>
                <div class="flex justify-between items-center mt-auto">
                    <span class="text-2xl font-bold text-gray-900">$50.00</span>
                    <div class="flex gap-2">
                        <button class="bg-gray-200 p-2 px-4 rounded-lg text-xs font-semibold hover:bg-gray-300">Add to Cart</button>
                        <button class="bg-black text-white p-2 px-4 rounded-lg text-xs font-semibold hover:bg-opacity-80">Buy Now</button>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </section>

    <section class="py-16 px-6 lg:px-20 border-t border-gray-100 bg-[#FAFAFA]">
        <h2 class="text-2xl font-semibold mb-10 italic">Recommendation</h2>
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
            @for($j=0; $j<4; $j++)
            <div class="group cursor-pointer">
                <div class="w-full aspect-square bg-gray-200 rounded-lg mb-4 overflow-hidden">
                    <div class="w-full h-full bg-gray-300 group-hover:scale-105 transition duration-500"></div>
                </div>
                <p class="text-sm font-semibold text-gray-800">New Arrival Style</p>
                <p class="text-xs text-gray-500">$35.00</p>
            </div>
            @endfor
        </div>
    </section>
</div>

@endsection