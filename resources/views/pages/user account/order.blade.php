@extends('layouts.app')

@section('content')
<body class="text-black antialiased">

    <header class="bg-white border-b border-gray-100 py-4 px-12 flex justify-between items-center">
        <div class="text-xl font-bold tracking-widest text-black">Ravenelle</div>
        <nav class="flex gap-8 font-medium text-sm text-black">
            <a href="#" class="hover:text-gray-600">Home</a>
            <a href="#" class="hover:text-gray-600">Shop</a>
            <a href="#" class="hover:text-gray-600">Blog</a>
        </nav>
        <div class="flex gap-6 text-base items-center text-black">
            <button class="hover:text-gray-600"><i class="fa-solid fa-cart-shopping"></i></button>
            <button class="hover:text-gray-600"><i class="fa-regular fa-heart"></i></button>
            <button class="hover:text-gray-600"><i class="fa-regular fa-user"></i></button>
        </div>
    </header>

    <main class="max-w-6xl mx-auto mt-12 px-6 mb-12">
        <h1 class="text-xl font-bold mb-6 px-2 text-black">My Account</h1>

        <div class="flex gap-6">
            <aside class="w-1/4 bg-white rounded-xl shadow-[0_4px_20px_rgba(0,0,0,0.03)] p-5 h-fit">
                <p class="font-bold text-sm mb-5 text-black">Welcome, Mia!</p>
                
                <div class="flex flex-col">
                    <button class="flex justify-between items-center w-full py-3 px-4 border border-gray-200 rounded-lg text-sm font-semibold mb-2 text-left bg-white text-black">
                        Orders 
                        <svg class="w-3 h-3 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path></svg>
                    </button>
                    <button class="flex justify-between items-center w-full py-3 px-4 text-sm font-normal text-black hover:bg-gray-50 rounded-lg transition text-left mb-1">
                        Personal Info 
                        <svg class="w-3 h-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </button>
                    <button class="flex justify-between items-center w-full py-3 px-4 text-sm font-normal text-black hover:bg-gray-50 rounded-lg transition text-left mb-1">
                        Change Password 
                        <svg class="w-3 h-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </button>
                    <button class="flex justify-between items-center w-full py-3 px-4 text-sm font-normal text-black hover:bg-gray-50 rounded-lg transition text-left">
                        Log Out 
                        <svg class="w-3 h-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </button>
                </div>
            </aside>

            <section class="w-3/4 bg-white rounded-xl shadow-[0_4px_20px_rgba(0,0,0,0.03)] p-8 min-h-[480px] flex flex-col justify-between">
                <div>
                    <h2 class="text-sm font-bold text-black mb-4">Your Orders</h2>
                    
                    <div class="flex gap-2">
                        <button class="bg-black text-white px-5 py-1.5 rounded-full text-xs font-semibold">Current</button>
                        <button class="border border-gray-300 px-5 py-1.5 rounded-full text-xs font-normal text-black hover:bg-gray-50">Unpaid</button>
                        <button class="border border-gray-300 px-5 py-1.5 rounded-full text-xs font-normal text-black hover:bg-gray-50">Done</button>
                        <button class="border border-gray-300 px-5 py-1.5 rounded-full text-xs font-normal text-black hover:bg-gray-50">Canceled</button>
                    </div>
                </div>

                <div class="flex flex-col items-center justify-center my-auto pt-6">
                    <div class="w-[140px] h-[140px] flex items-center justify-center mb-4">
                        <svg width="100%" height="100%" viewBox="0 0 140 140" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="58" y="23" width="30" height="52" fill="#D4D4D4" />
                            <line x1="58" y1="49" x2="88" y2="49" stroke="#B3B3B3" stroke-width="2"/>
                            
                            <rect x="25" y="20" width="66" height="90" rx="1" fill="#D9D9D9" stroke="#B3B3B3" stroke-width="3" />
                            
                            <line x1="58" y1="20" x2="58" y2="110" stroke="#B3B3B3" stroke-width="2" />
                            
                            <rect x="28" y="23" width="27" height="52" rx="1" fill="#E6E6E6" stroke="#B3B3B3" stroke-width="2" />
                            <circle cx="51" cy="49" r="1.5" fill="#B3B3B3" />
                            <rect x="28" y="78" width="27" height="29" rx="1" fill="#E6E6E6" stroke="#B3B3B3" stroke-width="2" />
                            <circle cx="41.5" cy="92.5" r="1.5" fill="#FFFFFF" stroke="#B3B3B3" stroke-width="0.5" />
                            
                            <rect x="61" y="78" width="27" height="29" rx="1" fill="#E6E6E6" stroke="#B3B3B3" stroke-width="2" />
                            <circle cx="74.5" cy="92.5" r="1.5" fill="#FFFFFF" stroke="#B3B3B3" stroke-width="0.5" />
                            
                            <polygon points="90,23 112,27 112,82 90,75" fill="#E6E6E6" stroke="#B3B3B3" stroke-width="2" stroke-linejoin="round" />
                            <circle cx="107" cy="53" r="1.5" fill="#B3B3B3" />
                        </svg>
                    </div>
                    <p class="text-sm font-bold text-black tracking-wide">No Order Yet</p>
                </div>
                
                <div></div>
            </section>
        </div>
    </main>
@endsection