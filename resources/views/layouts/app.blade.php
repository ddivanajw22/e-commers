<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>Ravenelle - Shop</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Genos:ital,wght@0,700;1,800&family=42dot+Sans:wght@400;700&display=swap" rel="stylesheet">

    <style>
        .font-genos { font-family: 'Genos', sans-serif; }
        .font-42dot { font-family: '42dot Sans', sans-serif; }
        .category-line { position: relative; padding-left: 20px; }
        .category-line::before {
            content: ""; position: absolute; left: 7px; top: -10px; bottom: 10px;
            width: 1px; background-color: #d1d5db;
        }
    </style>
</head>

<body class="bg-white text-black font-42dot antialiased">

<nav class="flex justify-between items-center px-[8%] py-7 sticky top-0 bg-white z-50 border-b border-gray-50 shadow-sm select-none">

    <div class="text-3xl font-extrabold italic font-genos tracking-tighter cursor-pointer relative z-50">
        <a href="/">Ravenelle</a>
    </div>

    <div class="flex items-center gap-12 text-lg font-bold font-genos relative z-50">
    <a href="/" class="px-7 py-1.5 rounded-md text-black transition-all {{ request()->is('/') ? 'bg-[#E5E7EB]' : 'hover:text-gray-500' }}">
        Home
    </a>
    
    <a href="/shop" class="px-7 py-1.5 rounded-md text-black transition-all 
        {{ (request()->is('shop*') || 
            request()->is('bottom*') || 
            request()->is('dresses*') || 
            request()->is('outerwear*') || 
            request()->is('activewear*') || 
            request()->is('new-arrival*') || 
            request()->is('best-seller*') || 
            request()->is('on-discount*')) 
            ? 'bg-[#E5E7EB]' : 'hover:text-gray-500' }}">
        Shop
    </a>
</div>

    <div class="flex gap-8 items-center relative z-[9999]">

        <a href="/cart" class="relative group">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="9" cy="20" r="2"></circle>
                <circle cx="20" cy="20" r="2"></circle>
                <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
            </svg>
            @if(session()->has('cart') && count(session('cart')) > 0)
                <span class="absolute -top-1 -right-1 bg-black text-white text-[9px] font-bold w-4 h-4 flex items-center justify-center rounded-full">
                    {{ count(session('cart')) }}
                </span>
            @endif
        </a>

        <a href="/wishlist" class="relative group">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
            </svg>
            <span class="absolute -top-1 -right-1 bg-black text-white text-[9px] font-bold w-4 h-4 flex items-center justify-center rounded-full {{ count(session('wishlist', [])) > 0 ? 'flex' : 'hidden' }}">
                {{ count(session('wishlist', [])) }}
            </span>
        </a>

        <a href="/login" class="group">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                <circle cx="12" cy="7" r="4"></circle>
            </svg>
        </a>

    </div>
</nav>

<main class="relative z-10">
    @yield('content')
</main>

<footer class="px-[8%] pb-12 mt-20 relative z-10">
    <div class="text-2xl font-extrabold italic font-genos mb-8">
        Ravenelle
    </div>

    <div class="bg-[#E2E2E2] rounded-[45px] px-24 py-20">
        <div class="grid grid-cols-3 gap-20">
            <div>
                <h5 class="font-bold text-sm mb-6">Our Store</h5>
                <ul class="text-[12px] text-gray-600 space-y-4">
                    <li><a href="/" class="hover:text-black">Home</a></li>
                    <li><a href="#" class="hover:text-black">About</a></li>
                    <li><a href="#" class="hover:text-black">Service</a></li>
                </ul>
            </div>

            <div>
                <h5 class="font-bold text-sm mb-6">Explore</h5>
                <ul class="text-[12px] text-gray-600 space-y-4">
                    <li><a href="/new-arrival" class="hover:text-black">New Arrivals</a></li>
                    <li><a href="/best-seller" class="hover:text-black">Best Sellers</a></li>
                    <li><a href="/on-discount" class="hover:text-black">On Discount</a></li>
                </ul>
            </div>

            <div>
                <h5 class="font-bold text-sm mb-6">Get In Touch</h5>
                <ul class="text-[12px] text-gray-600 space-y-5">
                    <li class="flex items-center gap-3">UIB</li>
                    <li class="flex items-center gap-3">123456789</li>
                    <li class="flex items-center gap-3">Email</li>
                    <li class="flex items-center gap-3">Instagram</li>
                </ul>
            </div>
        </div>
    </div>
</footer>

{{-- SCRIPT AJAX UNTUK ADD TO CART --}}
<script>
    function addToCart(event, form) {
        event.preventDefault();
        let formData = new FormData(form);

        fetch("{{ url('/cart/add') }}", {
            method: 'POST',
            headers: { 
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                'Accept': 'application/json'
            },
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if(data.success) {
                alert('Produk berhasil ditambahkan ke keranjang!');
                location.reload(); 
            }
        })
        .catch(err => console.error('Error:', err));
    }
</script>

</body>
</html>