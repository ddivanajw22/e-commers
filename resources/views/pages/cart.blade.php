<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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

        <div class="flex items-center gap-6">
            <a href="/cart" class="text-black hover:text-gray-600 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                </svg>
            </a>
            
            <a href="/dashboard" class="text-black hover:text-gray-600 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                </svg>
            </a>
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
            <form action="{{ route('checkout.page') }}" method="GET">
                <div class="border border-gray-200 rounded-[25px] overflow-hidden">
                    <table class="w-full text-left border-collapse">
                        <tbody id="cart-items">
                            @foreach(session('cart', []) as $index => $item)
                                <tr id="row-{{ $index }}" class="border-b border-gray-100 last:border-b-0">
                                    <td class="p-6">
                                        <input type="checkbox" name="selected_items[]" value="{{ $index }}" checked class="w-5 h-5 accent-black cursor-pointer">
                                    </td>
                                    <td class="p-6 flex items-center gap-4">
                                        <img src="{{ $item['image'] }}" class="w-16 h-16 object-cover rounded-lg">
                                        <div>
                                            <h4 class="font-bold">{{ $item['name'] }}</h4>
                                            <p class="text-sm text-gray-500">{{ $item['price'] }}</p>
                                        </div>
                                    </td>
                                    <td class="p-6 font-bold">{{ $item['price'] }}</td>
                                    <td class="p-6">
                                        <button type="button" onclick="hapusItem({{ $index }})" class="text-red-500 font-bold hover:underline transition-all hover:text-red-700">
                                            Hapus
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
                <div class="mt-8 flex justify-end">
                    <button type="submit" class="bg-black text-white px-12 py-4 rounded-full font-bold hover:bg-gray-800 transition shadow-lg">
                        Checkout
                    </button>
                </div>
            </form>
        @endif
    </div>

    <footer class="px-[8%] py-20 mt-20 border-t">
        <div class="text-2xl font-extrabold italic font-genos">Ravenelle</div>
        <p class="text-gray-500 text-sm mt-2">Terima kasih sudah berbelanja di Ravenelle.</p>
    </footer>

    <script>
        function hapusItem(index) {
            if (!confirm('Hapus item ini dari keranjang?')) return;
            fetch(`/cart/remove/${index}`, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    const row = document.getElementById(`row-${index}`);
                    if (row) row.remove();
                    if (document.querySelectorAll('#cart-items tr').length === 0) location.reload();
                } else {
                    alert('Gagal menghapus item.');
                }
            });
        }
    </script>
</body>
</html>