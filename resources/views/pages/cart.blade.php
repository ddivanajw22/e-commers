@extends('layouts.app')

@section('content')
<div class="bg-white min-h-screen font-sans text-black">
    <nav class="flex justify-between items-center px-12 py-6 border-b border-gray-100">
        <div class="text-2xl font-black italic tracking-tighter">Ravenelle</div>
        <div class="flex gap-10 text-xs font-bold uppercase tracking-widest">
            <a href="#" class="hover:text-gray-500">Home</a>
            <a href="#" class="bg-gray-200 px-4 py-1 rounded-sm">Shop</a>
            <a href="#" class="hover:text-gray-500">Blog</a>
        </div>
        <div class="flex gap-6 items-center">
            <button><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" /></svg></button>
            <button><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" /></svg></button>
            <button><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg></button>
        </div>
    </nav>

    <div class="max-w-[1440px] mx-auto px-12 py-10 flex gap-12">
        <aside class="w-60 flex-shrink-0">
            <h3 class="font-bold text-sm mb-4">Category</h3>
            <ul class="text-[13px] space-y-3 text-gray-600">
                <li class="text-black font-medium">All Product</li>
                <li class="flex items-center gap-2 px-2"><span class="w-4 border-b border-gray-400"></span> <span class="font-bold text-black border-b-2 border-black">Tops</span></li>
                <li class="flex items-center gap-2 px-2"><span class="w-4 border-b border-gray-300"></span> Bottom</li>
                <li class="flex items-center gap-2 px-2"><span class="w-4 border-b border-gray-300"></span> Dresses</li>
                <li class="flex items-center gap-2 px-2"><span class="w-4 border-b border-gray-300"></span> Outerwear</li>
                <li class="flex items-center gap-2 px-2"><span class="w-4 border-b border-gray-300"></span> Activewear</li>
            </ul>
            <ul class="text-[13px] mt-6 space-y-3 text-gray-600">
                <li>New Arrival</li>
                <li>Best Seller</li>
                <li>On Discount</li>
            </ul>
        </aside>

        <main class="flex-1">
            <div class="flex justify-end mb-8">
                <div class="relative w-64">
                    <input type="text" placeholder="Search" class="w-full bg-gray-50 border border-gray-200 rounded-full px-5 py-2 text-xs focus:outline-none">
                    <span class="absolute right-4 top-2.5 text-gray-400 text-xs">🔍</span>
                </div>
            </div>

            <div class="grid grid-cols-3 gap-x-8 gap-y-12">
                @for ($i = 1; $i <= 15; $i++)
                <div class="flex flex-col">
                    <div class="relative bg-[#EAEAEA] aspect-[4/5] rounded-[25px] mb-4">
                        <button class="absolute top-4 right-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </button>
                    </div>
                    <h4 class="text-[11px] font-bold uppercase tracking-tight">Asymmetrical Waist-Cinching Sweatshirt</h4>
                    <div class="flex items-center justify-between mt-1">
                        <div class="flex items-center gap-1">
                            <span class="text-yellow-400 text-[10px]">★</span>
                            <span class="text-[9px] text-gray-400 italic">5.0 (1.3k Reviews)</span>
                        </div>
                        <span class="font-bold text-xs">$40.00</span>
                    </div>
                    <div class="flex gap-2 mt-3">
                        <button class="flex-1 border border-black rounded-full py-1.5 text-[9px] font-bold uppercase hover:bg-gray-50">Add to Cart</button>
                        <button class="flex-1 bg-black text-white rounded-full py-1.5 text-[9px] font-bold uppercase hover:bg-gray-800">Buy Now</button>
                    </div>
                </div>
                @endfor
            </div>

            <div class="flex justify-center items-center gap-4 mt-16 text-[11px] font-medium text-gray-400">
                <button class="hover:text-black">← Previous</button>
                <span class="bg-black text-white w-7 h-7 flex items-center justify-center rounded-md text-white">1</span>
                <span class="hover:text-black cursor-pointer">2</span>
                <span class="hover:text-black cursor-pointer">3</span>
                <span>...</span>
                <span class="hover:text-black cursor-pointer">9</span>
                <span class="hover:text-black cursor-pointer">10</span>
                <button class="text-black hover:text-gray-500">Next →</button>
            </div>
        </main>
    </div>

    <div class="px-12 pb-12">
        <div class="bg-[#E2E2E2] rounded-[40px] px-16 py-16">
            <div class="grid grid-cols-4 gap-10">
                <div class="col-span-1">
                    <h2 class="text-2xl font-black italic tracking-tighter uppercase mb-8">Ravenelle</h2>
                </div>
                <div>
                    <h5 class="font-bold text-sm mb-4">Our Store</h5>
                    <ul class="text-xs text-gray-600 space-y-2">
                        <li>Home</li>
                        <li>About</li>
                        <li>Service</li>
                        <li>Contact</li>
                    </ul>
                </div>
                <div>
                    <h5 class="font-bold text-sm mb-4">Explore</h5>
                    <ul class="text-xs text-gray-600 space-y-2">
                        <li>New Arrivals</li>
                        <li>Best Sellers</li>
                        <li>Size Guide</li>
                    </ul>
                </div>
                <div>
                    <h5 class="font-bold text-sm mb-4">Get In Touch</h5>
                    <ul class="text-xs text-gray-600 space-y-2">
                        <li class="flex items-center gap-2">📍 UIB</li>
                        <li class="flex items-center gap-2 text-[10px]">📞 123456789</li>
                        <li class="flex items-center gap-2 text-[10px]">✉️ Email</li>
                        <li class="flex items-center gap-2 text-[10px]">📸 Instagram</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection