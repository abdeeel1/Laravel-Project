@extends('layouts.master')
@section('title', 'Create Products')
@section('content')
    <div class="shadow-xl flex flex-col  justify-center ">
        <div>
            <h2 class="font-semibold text-2xl text-center">Ajouter un Produit</h2>
        </div>

        <form action="{{ route('store') }}" method="post" class="flex flex-col gap-5">
            @csrf
            <div class="flex flex-col gap-2 px-6">
                <label class="font-semibold">Title</label>
                <input type="text" name="title" placeholder="Ex: PS5" class="border py-2 px-4 rounded outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('title') }}">
                @error('title')
                    <p class="text-red-500">{{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-col gap-2 px-6">
                <label class="font-semibold">Price</label>
                <input value="{{ old('price') }}" type="number" name="price" placeholder="Ex: 200$" class="border py-2 px-4 rounded outline-none focus:ring-2 focus:ring-blue-500">
                @error('price')
                    <p class="text-red-500">{{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-col gap-2 px-6">
                <label class="font-semibold">Description</label>
                <textarea value="{{ old('desc') }}" name="desc" placeholder="Description du produit" class="border py-2 px-4 rounded outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                @error('desc')
                    <p class="text-red-500">{{$message}}</p>
                @enderror
            </div>
            
            
            <button type="submit" class="bg-blue-500 py-2 ms-5 me-5">Ajouter</button>
        </form>

        @if(session('success'))
        <div id="toast-success" class="fixed top-5 right-5 flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow-lg z-50" role="alert">
            <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                </svg>
                <span class="sr-only">Check icon</span>
            </div>
            <div class="ms-3 text-sm font-normal">{{ session('success') }}</div>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#toast-success" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>

        <script>
            // Auto-hide after 5 seconds
            setTimeout(function() {
                document.getElementById('toast-success').style.display = 'none';
            }, 3500);
        </script>
        @endif
    </div>
@endsection