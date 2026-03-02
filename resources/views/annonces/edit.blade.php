@extends('layouts.master')
@section('title', 'Modifier Annonce')

@section('content')

<div class="flex my-10">
    <div class="rounded shadow-2xl p-8 w-full">
        <h2 class="font-bold text-2xl mb-6">Modifier annonce #{{ $annonce->id }}</h2>
        
        <form action="{{ route('annonces.update', $annonce->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="mb-6">
                <label class="block font-semibold mb-2">Photo</label>
                @if($annonce->photo)
                    <img id="photoPreview" src="{{ asset('storage/' . $annonce->photo) }}" class="w-full h-48 object-cover rounded mb-3">
                @else
                    <div id="photoPreview" class="w-full h-48 bg-gray-200 rounded mb-3 flex items-center justify-center">
                        <p class="text-gray-500">Aucune photo</p>
                    </div>
                @endif
                <input type="file" name="photo" id="photoInput" class="w-full border rounded px-3 py-2" accept="image/*">
                <p class="text-sm text-gray-500 mt-1">Format: JPEG, PNG, JPG, GIF (Max: 2MB)</p>
            </div>

            <div class="mb-4 flex gap-4">
                <div class="w-full">
                    <label class="block font-semibold mb-2">Titre</label>
                    <input type="text" name="titre" class="w-full border rounded px-3 py-2" value="{{ $annonce->titre }}" required>
                </div>

                <div class="w-full">
                    <label class="block font-semibold mb-2">Description</label>
                    <textarea name="desc" class="w-full border rounded px-3 py-2" rows="3" required>{{ $annonce->desc }}</textarea>
                </div>
            </div>

            <div class="mb-4 flex gap-4">
                <div class="w-full">
                    <label class="block font-semibold mb-2">Type</label>
                    <select name="type" class="w-full border rounded px-3 py-2" required>
                        <option value="Appartement" {{ $annonce->type === 'Appartement' ? 'selected' : '' }}>Appartement</option>
                        <option value="Maison" {{ $annonce->type === 'Maison' ? 'selected' : '' }}>Maison</option>
                        <option value="Villa" {{ $annonce->type === 'Villa' ? 'selected' : '' }}>Villa</option>
                        <option value="Magasin" {{ $annonce->type === 'Magasin' ? 'selected' : '' }}>Magasin</option>
                        <option value="Terrain" {{ $annonce->type === 'Terrain' ? 'selected' : '' }}>Terrain</option>
                    </select>
                </div>

                <div class="w-full">
                    <label class="block font-semibold mb-2">Ville</label>
                    <input type="text" name="ville" class="w-full border rounded px-3 py-2" value="{{ $annonce->ville }}" required>
                </div>
            </div>

            <div class="mb-4 flex gap-4">
                <div class="w-full">
                    <label class="block font-semibold mb-2">Superficie (m²)</label>
                    <input type="number" name="superficie" class="w-full border rounded px-3 py-2" value="{{ $annonce->superficie }}" required>
                </div>

                <div class="w-full">
                    <label class="block font-semibold mb-2">État</label>
                    <select name="etat" class="w-full border rounded px-3 py-2" required>
                        <option value="Neuf" {{ $annonce->etat === 'Neuf' ? 'selected' : '' }}>Neuf</option>
                        <option value="Ancien" {{ $annonce->etat === 'Ancien' ? 'selected' : '' }}>Ancien</option>
                    </select>
                </div>
            </div>

            <div class="mb-4">
                <label class="block font-semibold mb-2">Prix (DH)</label>
                <input type="number" step="0.01" name="prix" class="w-full border rounded px-3 py-2" value="{{ $annonce->prix }}" required>
            </div>

            <div class="flex gap-4">
                <button type="submit" class="w-full bg-blue-500 text-white rounded py-2 font-semibold hover:bg-blue-600">Update</button>
                <button type="button" class="w-full bg-gray-500 text-white rounded py-2 font-semibold hover:bg-gray-600"><a href=" {{ route('annonces.index') }} ">Back</a></button>
            </div>

        </form>
    </div>
</div>



@endsection