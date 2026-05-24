@extends('layouts.app')

@section('content')

<div class="px-[8%] py-10">

    <h2 class="text-xl font-bold mb-6">New</h2>

    <div class="grid grid-cols-4 gap-6">

        @foreach($products as $item)
        <div class="flex flex-col">

            <div class="relative bg-gray-100 aspect-[3/4] rounded-2xl overflow-hidden mb-3">
                <img 
                    src="{{ $item['image'] }}" 
                    class="w-full h-full object-cover"
                >
            </div>

            <h4 class="text-sm font-bold">{{ $item['name'] }}</h4>

            <div class="flex justify-between text-xs text-gray-500">
                <span>★ {{ $item['rating'] }}</span>
                <span class="font-bold text-black">
                    Rp {{ number_format($item['price']) }}
                </span>
            </div>

        </div>
        @endforeach

    </div>

</div>

@endsection