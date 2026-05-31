<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>Ravenelle - Shop</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Genos:ital,wght@0,700;1,800&family=42dot+Sans:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/@heroicons/v2@2.1.1/dist/heroicons-2.1.1.min.js"></script>

    <style>
        .font-genos { font-family: 'Genos', sans-serif; }
        .font-42dot { font-family: '42dot Sans', sans-serif; }
    </style>
</head>

<body class="bg-white text-black font-42dot antialiased">

<nav class="flex justify-between items-center px-[8%] py-7 sticky top-0 bg-white z-50 border-b border-gray-50 shadow-sm select-none">
    <div class="text-3xl font-extrabold italic font-genos tracking-tighter cursor-pointer relative z-50">
        <a href="/">Ravenelle</a>
    </div>

    <div class="flex items-center gap-12 text-lg font-bold font-genos relative z-50">
        <a href="/" class="px-7 py-1.5 rounded-md text-black transition-all {{ request()->is('/') ? 'bg-[#E5E7EB]' : 'hover:text-gray-500' }}">Home</a>
        <a href="/shop" class="px-7 py-1.5 rounded-md text-black transition-all {{ (request()->is('shop*') || request()->is('bottom*') || request()->is('dresses*') || request()->is('outerwear*') || request()->is('activewear*')) ? 'bg-[#E5E7EB]' : 'hover:text-gray-500' }}">Shop</a>
    </div>

    <div class="flex gap-8 items-center relative z-[9999]">
        <a href="/cart" class="relative">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="20" r="2"></circle><circle cx="20" cy="20" r="2"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
            @if(session()->has('cart') && count(session('cart')) > 0)
                <span class="absolute -top-1 -right-1 bg-black text-white text-[9px] font-bold w-4 h-4 flex items-center justify-center rounded-full">{{ count(session('cart')) }}</span>
            @endif
        </a>
        <a href="/wishlist" class="relative">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
        </a>
        <a href="/login">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
        </a>
    </div>
</nav>

<main class="relative z-10">
    @yield('content')
</main>

<!-- Footer Baru yang lebih proporsional -->
<!-- Footer dengan Ikon Instagram -->
<footer class="px-[8%] pb-12 mt-20 relative z-10">
    <div class="bg-[#E2E2E2] rounded-[45px] py-16 px-16 flex flex-col md:flex-row justify-between items-start gap-12">
        
        <!-- Sisi Kiri: Branding -->
        <div class="flex-1">
            <div class="text-3xl font-extrabold italic font-genos mb-4">Ravenelle</div>
            <p class="text-[13px] text-gray-500 max-w-[250px]">
                Providing high-quality fashion essentials for your daily style. Crafted with care.
            </p>
        </div>

        <!-- Sisi Kanan: Get In Touch -->
        <div class="flex-1">
            <h5 class="font-bold text-lg mb-6">Get In Touch</h5>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-4 text-[13px] text-gray-700">
                <!-- Lokasi -->
                <div class="flex items-center gap-3">
                    <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    <span>UIB, Batam</span>
                </div>
                <!-- Telepon -->
                <div class="flex items-center gap-3">
                    <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    <span>1111222345</span>
                </div>
                <!-- Email -->
                <div class="flex items-center gap-3">
                    <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    <span>business@ravenelle.com</span>
                </div>
                <!-- Instagram -->
                <a href="https://instagram.com/ravenelle" class="flex items-center gap-3 hover:text-black transition-colors">
                    <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><rect width="20" height="20" x="2" y="2" rx="5" ry="5" stroke-width="2"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" stroke-width="2"/><line x1="17.5" x2="17.51" y1="6.5" y2="6.5" stroke-width="2"/></svg>
                    <span>@ravenelle</span>
                </a>
            </div>
        </div>
    </div>
</footer>

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