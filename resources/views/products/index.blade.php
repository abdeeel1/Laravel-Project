@extends('layouts.master')
@section('title', 'Products')
@section('content')
    <h2 class="text-2xl font-bold mb-4">Our Products</h2>
    <div class="flex gap-4">
        @foreach($products as $product)
            <div class="">
                
                    <x-product-card :product="$product"/>
                   
            </div>
        @endforeach

    </div>
@endsection