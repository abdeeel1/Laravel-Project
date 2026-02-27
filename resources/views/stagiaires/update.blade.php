@extends('layouts.master')
@section('title', 'Modifier Stagiaire')
@section('content')

<div class="flex flex-col justify-center my-10">
    <h2 class="font-bold text-2xl mb-6">Modifier Stagiaire #{{ $stagiaire->id }}</h2>
    
    <form action="{{ route('stagiaires.update', $stagiaire->id) }}" method="POST" class="bg-white shadow-md rounded-lg p-6 max-w-md">
        @csrf
        @method('PUT')
        
        <div class="mb-4">
            <label for="nom" class="block font-bold text-gray-700 mb-2">Nom</label>
            <input type="text" id="nom" name="nom" class="w-full px-3 py-2 border border-gray-300 rounded @error('nom') border-red-500 @enderror" value="{{ old('nom', $stagiaire->nom) }}" required>
            @error('nom')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror

            

            
        </div>

        <div class="mb-4">
            <label for="genre" class="block font-bold text-gray-700 mb-2">Genre</label>
            <select id="genre" name="genre" class="w-full px-3 py-2 border border-gray-300 rounded @error('genre') border-red-500 @enderror" required>
                <option value="">-- Sélectionner --</option>
                <option value="F" {{ old('genre', $stagiaire->genre) == 'F' ? 'selected' : '' }}>Femme</option>
                <option value="H" {{ old('genre', $stagiaire->genre) == 'H' ? 'selected' : '' }}>Homme</option>
            </select>
            @error('genre')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="note" class="block font-bold text-gray-700 mb-2">Note</label>
            <input type="number" id="note" name="note" step="0.01" min="0" max="20" class="w-full px-3 py-2 border border-gray-300 rounded @error('note') border-red-500 @enderror" value="{{ old('note', $stagiaire->note) }}" required>
            @error('note')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-6">
            <label for="groupe" class="block font-bold text-gray-700 mb-2">Groupe</label>
            <input type="text" id="groupe" name="groupe" class="w-full px-3 py-2 border border-gray-300 rounded @error('groupe') border-red-500 @enderror" value="{{ old('groupe', $stagiaire->groupe) }}" required>
            @error('groupe')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex gap-2">
            <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded transition">Modifier</button>
            <a href="{{ route('stagiaires.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded transition">Annuler</a>
        </div>
    </form>
</div>

@endsection