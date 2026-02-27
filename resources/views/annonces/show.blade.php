@extends('layouts.master')
@section('title', 'Détail Annonce')

@section('content')

<div class="flex justify-center my-10 px-4">
    <div class="rounded shadow-2xl p-8 w-full max-w-2xl">
        
        <div class="mb-6">
            @if($annonce->photo)
                <img src="{{ asset('storage/' . $annonce->photo) }}" class="w-full h-96 object-cover rounded-lg">
            @else
                <div class="w-full h-96 bg-gray-200 rounded-lg flex items-center justify-center">
                    <p class="text-gray-500">Aucune photo</p>
                </div>
            @endif
        </div>

        <h2 class="font-bold text-3xl mb-2">{{ $annonce->titre }}</h2>
        
        <div class="grid grid-cols-2 gap-4 mb-6 border-b pb-6">
            <div>
                <p class="text-gray-600 text-sm">Type</p>
                <p class="font-semibold text-lg">{{ $annonce->type }}</p>
            </div>
            <div>
                <p class="text-gray-600 text-sm">Ville</p>
                <p class="font-semibold text-lg">{{ $annonce->ville }}</p>
            </div>
            <div>
                <p class="text-gray-600 text-sm">Superficie</p>
                <p class="font-semibold text-lg">{{ $annonce->superficie }} m²</p>
            </div>
            <div>
                <p class="text-gray-600 text-sm">État</p>
                <p class="font-semibold text-lg">
                    <span class="px-3 py-1 rounded text-sm 
                        {{ $annonce->etat === 'Neuf' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                        {{ $annonce->etat }}
                    </span>
                </p>
            </div>
        </div>

        <div class="mb-6 border-b pb-6">
            <p class="text-gray-600 text-sm mb-2">Description</p>
            <p class="text-gray-700 leading-relaxed">{{ $annonce->desc }}</p>
        </div>

        <div class="mb-8">
            <p class="text-gray-600 text-sm">Prix</p>
            <p class="font-bold text-4xl text-blue-600">{{ number_format($annonce->prix, 2) }} DH</p>
        </div>

        <div class="flex gap-4">
            <a href="{{ route('annonces.edit', $annonce->id) }}" class="flex-1 bg-blue-500 text-white px-6 py-3 rounded font-semibold hover:bg-blue-600 text-center">
                Modifier
            </a>
            <a href="{{ route('annonces.index') }}" class="flex-1 bg-gray-500 text-white px-6 py-3 rounded font-semibold hover:bg-gray-600 text-center">
                Retour
            </a>
        </div>
    </div>
</div>

@endsection