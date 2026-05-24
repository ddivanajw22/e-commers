@extends('layouts.app')

@section('content')

<div class="px-[8%] py-10">

    <h2 class="text-xl font-bold mb-2">Wishlist</h2>

    <p class="text-gray-500 mb-6">
        ini masih kerangka ya gais
    </p>

    <!-- Empty state -->
    <div class="border border-dashed border-gray-300 py-10 text-center mb-10 rounded-lg">
        Empty State Area
    </div>

    <!-- Grid produk -->
    <div class="grid grid-cols-4 gap-6">

        <!-- CARD 1 -->
        <div class="flex flex-col">
            <div class="relative bg-gray-200 aspect-[3/4] rounded-2xl overflow-hidden mb-3"></div>
            <div class="h-3 w-3/4 bg-gray-300 rounded"></div>
            <div class="h-3 w-1/2 bg-gray-200 rounded mt-2"></div>
        </div>

        <!-- CARD 2 -->
        <div class="flex flex-col">
            <div class="relative bg-gray-200 aspect-[3/4] rounded-2xl overflow-hidden mb-3"></div>
            <div class="h-3 w-3/4 bg-gray-300 rounded"></div>
            <div class="h-3 w-1/2 bg-gray-200 rounded mt-2"></div>
        </div>

        <!-- CARD 3 -->
        <div class="flex flex-col">
            <div class="relative bg-gray-200 aspect-[3/4] rounded-2xl overflow-hidden mb-3"></div>
            <div class="h-3 w-3/4 bg-gray-300 rounded"></div>
            <div class="h-3 w-1/2 bg-gray-200 rounded mt-2"></div>
        </div>

        <!-- CARD 4 -->
        <div class="flex flex-col">
            <div class="relative bg-gray-200 aspect-[3/4] rounded-2xl overflow-hidden mb-3"></div>
            <div class="h-3 w-3/4 bg-gray-300 rounded"></div>
            <div class="h-3 w-1/2 bg-gray-200 rounded mt-2"></div>
        </div>

    </div>

</div>

@endsection