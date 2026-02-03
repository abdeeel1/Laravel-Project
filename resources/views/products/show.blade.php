@extends('layouts.master')
@section('title', 'Products Details')
@section('content')
<div class="flex flex-col gap-4 shadow-2xl mt-10 py-10">
        <div>
            <h2 class="text-2xl font-bold mb-4 ms-9">Product#{{$product["id"]}}</h2>
        </div>
        <div class="flex gap-8">
            <img src="{{ asset('images/'. $product['image']) }}" alt="" class="w-80 ms-4">
        <div>
            <p class="font-bold text-4xl mt-4 font-mono text-black">{{$product["title"]}}</p>
            <p class="font-bold text-2xl mt-4 font-mono text-green-600">{{$product["price"]}} MAD</p>
            <p class="font-bold text-2xl mt-4 font-mono text-black">{{$product["spec"]}}</p>
            <p class="font-bold text-2xl mt-4 font-mono text-black">{{$product["description"]}} MAD</p>
            <a href="{{route('products')}}"><button class="bg-red-700 px-8 py-2 rounded font-bold text-white mt-10 hover:bg-red-900">Back</button></a>
        </div>
        </div>
    </div>
@endsection