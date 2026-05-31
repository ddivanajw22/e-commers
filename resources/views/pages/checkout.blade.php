@extends('layouts.app')

@section('content')
<div class="px-[8%] pt-10">
    <h2 class="text-2xl font-bold mb-8">Checkout</h2>
    
    <div class="flex gap-12">
        <div class="flex-1">
            <form action="{{ route('checkout.process') }}" method="POST">
                @csrf
                <div class="space-y-4">
                    <input type="text" name="name" placeholder="Full Name" required class="w-full border rounded-full px-5 py-3">
                    <input type="text" name="address" placeholder="Shipping Address" required class="w-full border rounded-full px-5 py-3">
                    <button type="submit" 
                            id="btn-place-order"
                            onclick="this.innerText='Processing...'; this.disabled=true; this.form.submit();"
                            class="bg-black text-white w-full py-3 rounded-full font-bold hover:bg-gray-800 transition-all">
                        Place Order
                    </button>
                </div>
            </form>
        </div>

        <div class="w-80 border p-6 rounded-[30px] bg-gray-50">
            <h3 class="font-bold mb-4">Order Summary</h3>
            
            @php $total = 0; @endphp

            {{-- Menghitung Item dari Buy Now --}}
            @if(isset($checkout_item) && !empty($checkout_item))
                <div class="flex gap-4 mb-4">
                    <img src="{{ $checkout_item['image'] }}" class="w-16 h-20 object-cover rounded-lg">
                    <div>
                        <p class="text-sm font-bold">{{ $checkout_item['name'] }}</p>
                        <p class="text-sm text-gray-500">{{ $checkout_item['price'] }}</p>
                    </div>
                </div>
                @php $total += (float) filter_var($checkout_item['price'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION); @endphp
            @endif

            {{-- Menghitung Item dari Cart --}}
            @foreach(($cart ?? []) as $item)
                <div class="flex gap-4 mb-4">
                    <img src="{{ $item['image'] }}" class="w-16 h-20 object-cover rounded-lg">
                    <div>
                        <p class="text-sm font-bold">{{ $item['name'] }}</p>
                        <p class="text-sm text-gray-500">{{ $item['price'] }}</p>
                    </div>
                </div>
                @php $total += (float) filter_var($item['price'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION); @endphp
            @endforeach

            {{-- Baris Total --}}
            <div class="border-t border-gray-200 pt-4 mt-2 flex justify-between items-center font-bold text-lg">
                <span>Total</span>
                <span>${{ number_format($total, 2) }}</span>
            </div>
        </div>
    </div>
</div>
@endsection