@extends('layouts.master')
@section('title', 'Créer Annonce')

@section('content')

<div class="flex  my-10">
    <div class="rounded shadow-2xl p-8 w-full">
        <h2 class="font-bold text-2xl mb-6">Nouvelle annonce</h2>
        
        <form action="{{ route('annonces.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="flex gap-4 mb-4">
                <div class="w-full">
                    <label class="font-semibold mb-2">Photo</label>
                    
                    <input type="file" name="photo" id="photoInput" class="w-full border rounded px-3 py-2" accept="image/*">
                    <p class="text-sm text-gray-500 mt-1">Format: JPEG, PNG, JPG, GIF (Max: 2MB)</p>
                </div>

                <div class="w-full">
                    <label class="font-semibold mb-2">Titre</label>
                    <input type="text" name="titre" class="w-full border rounded px-3 py-2" required>
                </div>
            </div>

            <div class="flex gap-4 mb-4">
                

                <div class="w-full">
                    <label class="font-semibold mb-2">Type</label>
                    <select name="type" class="w-full border rounded px-3 py-2" required>
                        <option value="">Sélectionner</option>
                        <option value="Appartement">Appartement</option>
                        <option value="Maison">Maison</option>
                        <option value="Villa">Villa</option>
                        <option value="Magasin">Magasin</option>
                        <option value="Terrain">Terrain</option>
                    </select>
                </div>
            </div>

            <div class="flex gap-4 mb-4">
                <div class="w-full">
                    <label class="block font-semibold mb-2">Ville</label>
                    <input type="text" name="ville" class="w-full border rounded px-3 py-2" required>
                </div>

                <div class="w-full">
                    <label class="block font-semibold mb-2">Superficie (m²)</label>
                    <input type="number" name="superficie" class="w-full border rounded px-3 py-2" required>
                </div>
            </div>

            <div class="flex gap-4 mb-4">
                <div class="w-full">
                    <label class="font-semibold mb-2">État</label>
                    <select name="etat" class="w-full border rounded px-3 py-2" required>
                        <option value="Neuf">Neuf</option>
                        <option value="Ancien">Ancien</option>
                    </select>
                </div>

                <div class="w-full">
                    <label class="font-semibold mb-2">Prix (DH)</label>
                    <input type="number" step="0.01" name="prix" class="w-full border rounded px-3 py-2" required>
                </div>
            </div>

            <div class="w-full mb-4">
                    <label class="font-semibold mb-2">Description</label>
                    <textarea name="desc" class="w-full border rounded px-3 py-2" rows="3" required></textarea>
            </div>

            <div class="flex gap-4">
                <button type="submit" class="w-full bg-blue-500 text-white rounded py-2 font-semibold hover:bg-blue-600">Create</button>
                <button type="button" class="w-full bg-gray-500 text-white rounded py-2 font-semibold hover:bg-gray-600"><a href="{{ route('annonces.index') }}">Back</a></button>
            </div>
        </form>
    </div>
</div>

@endsection