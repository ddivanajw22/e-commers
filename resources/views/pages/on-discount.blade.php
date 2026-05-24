@extends('layouts.app')

@section('content')

<div class="px-[8%] py-10">
    <h1 class="text-xl font-bold mb-6">On Discount</h1>

    <div class="grid grid-cols-4 gap-6">

        @foreach($products as $item)
        <div class="flex flex-col">

            <div class="aspect-[4/5] bg-gray-200 rounded-2xl overflow-hidden">
                <img src="{{ $item['image'] }}" class="w-full h-full object-cover">
            </div>

            <h3 class="text-sm font-bold mt-2">{{ $item['name'] }}</h3>

            <div class="flex justify-between text-xs text-gray-500">
                <span>★ {{ $item['rating'] }}</span>
                <span> {{ number_format($item['price']) }}</span>
            </div>

        </div>
        @endforeach

    </div>
</div>

@endsection