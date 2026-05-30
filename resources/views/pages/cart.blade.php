<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ravenelle - Your Cart</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Genos:ital,wght@0,700;1,800&family=42dot+Sans:wght@400;700&display=swap" rel="stylesheet">
    <style>
        .font-genos { font-family: 'Genos', sans-serif; }
        .font-42dot { font-family: '42dot Sans', sans-serif; }
    </style>
</head>
<body class="bg-white text-black font-42dot">

    <nav class="flex justify-between items-center px-[8%] py-7 border-b border-gray-100">
        <div class="text-3xl font-extrabold italic font-genos tracking-tighter">Ravenelle</div>
        <div class="flex items-center gap-12 text-lg font-bold font-genos">
            <a href="/">Home</a>
            <a href="/shop">Shop</a>
        </div>
    </nav>

    <div class="px-[8%] pt-16 min-h-[50vh]">
        <h2 class="text-3xl font-bold mb-10">Shopping Cart</h2>

        @if(empty(session('cart')))
            <div class="text-center py-20 border-2 border-dashed rounded-[30px]">
                <p class="text-gray-500 mb-5">Keranjang kamu masih kosong nih.</p>
                <a href="/shop" class="bg-black text-white px-8 py-3 rounded-full font-bold">Mulai Belanja</a>
            </div>
        @else
            <div class="grid grid-cols-1 gap-6">
                {{-- Kita gunakan $item sebagai representasi array produk --}}
                @foreach(session('cart') as $index => $item)
                    <div class="border border-gray-200 p-6 rounded-[25px] flex justify-between items-center">
                        <div class="flex items-center gap-4">
                            <img src="{{ $item['image'] }}" class="w-16 h-16 object-cover rounded-lg">
                            <div>
                                <h4 class="font-bold">{{ $item['name'] }}</h4>
                                <p class="text-sm text-gray-500">{{ $item['price'] }}</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-8 w-full sm:w-auto justify-end">
                            <form action="/cart/remove" method="POST">
                                @csrf
                                <input type="hidden" name="index" value="{{ $index }}">
                                <button type="submit" class="text-red-500 font-bold text-sm">Hapus</button>
                            </form>
                            
                            <form action="/checkout" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $item['id'] }}"> 
                                <button type="submit" class="bg-black text-white p-2 px-4 rounded-lg text-xs font-semibold hover:bg-opacity-80 transition">
                                    Beli Sekarang
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
            
            <div class="mt-12 flex justify-end">
                <a href="/checkout" class="bg-black text-white px-12 py-4 rounded-full font-bold">Checkout Sekarang</a>
            </div>
        @endif
    </div>

    <footer class="px-[8%] py-20 mt-20 border-t">
        <div class="text-2xl font-extrabold italic font-genos">Ravenelle</div>
        <p class="text-gray-500 text-sm mt-2">Terima kasih sudah berbelanja di Ravenelle.</p>
    </footer>
</body>
</html>