@extends('layouts.master')
@section('title', 'Annonces')

@section('content')

<div class="flex flex-col my-10 px-4">
    <div class="flex justify-between items-center mb-8">
        <h2 class="font-bold text-3xl">Liste des annonces</h2>
        <a href="{{ route('annonces.create') }}" class="bg-blue-500 text-white px-6 py-2 rounded font-semibold hover:bg-blue-600">
            + Nouvelle annonce
        </a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6">
            {{ session('success') }}
        </div>
    @endif

    @if($annonces->count() > 0)
        <div class="overflow-x-auto shadow-lg rounded">
            <table class="w-full bg-white">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="px-6 py-3 text-left">Photo</th>
                        <th class="px-6 py-3 text-left">Titre</th>
                        <th class="px-6 py-3 text-left">Description</th>
                        <th class="px-6 py-3 text-left">Type</th>
                        <th class="px-6 py-3 text-left">Ville</th>
                        <th class="px-6 py-3 text-left">Superficie</th>
                        <th class="px-6 py-3 text-left">État</th>
                        <th class="px-6 py-3 text-left">Prix (DH)</th>
                        <th class="px-6 py-3 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach($annonces as $annonce)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4">
                                @if($annonce->photo)
                                    <img src="{{ asset('storage/' . $annonce->photo) }}" class="w-16 h-16 object-cover rounded">
                                @else
                                    <div class="w-16 h-16 bg-gray-200 rounded flex items-center justify-center">
                                        <span class="text-gray-500 text-xs">No image</span>
                                    </div>
                                @endif
                            </td>
                            <td class="px-6 py-4 font-semibold">{{ $annonce->titre }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600">{{ Str::limit($annonce->desc, 30) }}</td>
                            <td class="px-6 py-4">{{ $annonce->type }}</td>
                            <td class="px-6 py-4">{{ $annonce->ville }}</td>
                            <td class="px-6 py-4">{{ $annonce->superficie }} m²</td>
                            <td class="px-6 py-4">
                                <span class="px-3 py-1 rounded text-sm font-semibold 
                                    {{ $annonce->etat === 'Neuf' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                                    {{ $annonce->etat }}
                                </span>
                            </td>
                            <td class="px-6 py-4 font-semibold text-blue-600">{{ number_format($annonce->prix, 2) }}</td>
                            <td class="px-6 py-4 text-center">
                                <div class="flex justify-center gap-2">
                                    <a href="{{ route('annonces.show', $annonce->id) }}" class="bg-green-500 text-white px-3 py-1 rounded text-sm hover:bg-green-600" title="Afficher">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#EFEFEF"><path d="M120-160v-80h720v80H120Zm0-560v-80h720v80H120Zm80 400q-33 0-56.5-23.5T120-400v-160q0-33 23.5-56.5T200-640h560q33 0 56.5 23.5T840-560v160q0 33-23.5 56.5T760-320H200Zm0-80h560v-160H200v160Zm0-160v160-160Z"/></svg>
                                    </a>
                                    <a href="{{ route('annonces.edit', $annonce->id) }}" class="bg-blue-500 text-white px-3 py-1 rounded text-sm hover:bg-blue-600" title="Modifier">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#EFEFEF"><path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z"/></svg>
                                    </a>
                                    <form action="{{ route('annonces.destroy', $annonce->id) }}" method="POST" class="inline" onsubmit="return confirm('Êtes-vous sûr?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded text-sm hover:bg-red-600" title="Supprimer">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#EFEFEF"><path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/></svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="bg-gray-100 border-l-4 border-gray-500 text-gray-700 p-6 rounded text-center">
            <p class="font-semibold mb-2">Aucune annonce trouvée</p>
            <a href="{{ route('annonces.create') }}" class="text-blue-500 hover:underline">Créer la première annonce</a>
        </div>
    @endif
</div>

@endsection