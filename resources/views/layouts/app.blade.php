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
        
        <a href="/login">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
        </a>
    </div>
</nav>

@if(session('success'))
    <div class="px-[8%] pt-6" id="flash-msg">
        <div class="bg-black text-white px-6 py-4 rounded-2xl flex items-center justify-between shadow-lg">
            <span>{{ session('success') }}</span>
            <button onclick="this.parentElement.parentElement.remove()" class="font-bold hover:text-gray-300">✕</button>
        </div>
    </div>
@endif

@if(session('error'))
    <div class="px-[8%] pt-6" id="flash-msg">
        <div class="bg-red-600 text-white px-6 py-4 rounded-2xl flex items-center justify-between shadow-lg">
            <span>{{ session('error') }}</span>
            <button onclick="this.parentElement.parentElement.remove()" class="font-bold hover:text-gray-200">✕</button>
        </div>
    </div>
@endif

<main class="relative z-10">
    @yield('content')
</main>

<footer class="px-[8%] pb-12 mt-20 relative z-10">
    <div class="bg-[#E2E2E2] rounded-[45px] py-16 px-16 flex flex-col md:flex-row justify-between items-start gap-12">
        <div class="flex-1">
            <div class="text-3xl font-extrabold italic font-genos mb-4">Ravenelle</div>
            <p class="text-[13px] text-gray-500 max-w-[250px]">
                Providing high-quality fashion essentials for your daily style. Crafted with care.
            </p>
        </div>
        <div class="flex-1">
            <h5 class="font-bold text-lg mb-6">Get In Touch</h5>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-4 text-[13px] text-gray-700">
                <div class="flex items-center gap-3"><span>UIB, Batam</span></div>
                <div class="flex items-center gap-3"><span>1111222345</span></div>
                <div class="flex items-center gap-3"><span>business@ravenelle.com</span></div>
                <a href="https://instagram.com/ravenelle" class="flex items-center gap-3 hover:text-black transition-colors"><span>@ravenelle</span></a>
            </div>
        </div>
    </div>
</footer>

<script>
    // Menghilangkan notifikasi otomatis setelah 4 detik
    setTimeout(function() {
        let flash = document.getElementById('flash-msg');
        if (flash) flash.remove();
    }, 4000);

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