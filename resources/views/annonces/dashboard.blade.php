@extends('layouts.master')
@section('title', 'Dashboard')

@section('content')

<div class="my-10 px-4">
    <div class="flex justify-between items-center mb-8">
        <h2 class="font-bold text-3xl">Gestion Immobilière</h2>
        <a href="{{ route('annonces.create') }}" class="bg-blue-500 text-white px-6 py-2 rounded font-semibold hover:bg-blue-600">
            + Nouvelle annonce
        </a>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
        
        <div class="bg-white rounded-lg shadow-lg p-6 border-l-4 border-blue-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-600 text-sm font-semibold">Total d'enregistrements</p>
                    <p class="text-4xl font-bold text-blue-600 mt-2">{{ $stats['total'] }}</p>
                </div>
                <i class="fas fa-file-alt text-5xl text-blue-200"></i>
            </div>
        </div>

       
        <div class="bg-white rounded-lg shadow-lg p-6 border-l-4 border-green-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-600 text-sm font-semibold">Valeur Totale (DHS)</p>
                    <p class="text-3xl font-bold text-green-600 mt-2">{{ number_format($stats['prix_total'], 0) }}</p>
                </div>
                <i class="fas fa-wallet text-5xl text-green-200"></i>
            </div>
        </div>

       
        <div class="bg-white rounded-lg shadow-lg p-6 border-l-4 border-purple-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-600 text-sm font-semibold">Prix Moyen</p>
                    <p class="text-3xl font-bold text-purple-600 mt-2">{{ number_format($stats['prix_moyen'], 0) }}</p>
                </div>
                <i class="fas fa-chart-pie text-5xl text-purple-200"></i>
            </div>
        </div>

       
        <div class="bg-white rounded-lg shadow-lg p-6 border-l-4 border-orange-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-600 text-sm font-semibold">Superficie m²</p>
                    <p class="text-3xl font-bold text-orange-600 mt-2">{{ number_format($stats['superficie_total']) }}</p>
                </div>
                <i class="fas fa-ruler-combined text-5xl text-orange-200"></i>
            </div>
        </div>
    </div>

    
    </div>
</div>

@endsection