@extends('layouts.master')
@section('title', 'List Stagiaires')
@section('content')

<div class="flex flex-col justify-center">
    <h2 class="font-bold text-2xl my-10">Liste Stagiaires</h2>
    
    <a href="{{ route('stagiaires.create') }}" class="bg-blue-700 hover:bg-blue-800 font-bold text-white rounded py-2 px-6 inline-block w-fit mb-4 transition">Ajouter</a>
    
    @if(session('success'))
        <div class="mt-4 mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
            {{ session('success') }}
        </div>
    @endif

    <table class="min-w-full mt-4 font-bold bg-white border border-gray-200 shadow-md rounded-lg overflow-hidden">
        <thead class="bg-gray-100 text-center">
            <tr>
                <th class="p-3 border-b">#</th>
                <th class="p-3 border-b">Nom</th>
                <th class="p-3 border-b">Genre</th>
                <th class="p-3 border-b">Note</th>
                <th class="p-3 border-b">Groupe</th>
                <th class="p-3 border-b">Actions</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @forelse($stagiaires as $stagiaire)
                <tr class="hover:bg-gray-50 transition">
                    <td class="p-3 border-b">{{ $stagiaire->id }}</td>
                    <td class="p-3 border-b">{{ $stagiaire->nom }}</td>
                    <td class="p-3 border-b">
                        @if($stagiaire->genre == 'F')
                            <span class="bg-pink-200 text-pink-800 px-3 py-1 rounded-full text-sm">Femme</span>
                        @else
                            <span class="bg-blue-200 text-blue-800 px-3 py-1 rounded-full text-sm">Homme</span>
                        @endif
                    </td>
                    <td class="p-3 border-b">
                        <span class="font-semibold">{{ $stagiaire->note }}/20</span>
                    </td>
                    <td class="p-3 border-b">{{ $stagiaire->groupe }}</td>
                    <td class="p-3 border-b">
                        <div class="flex gap-2 justify-center flex-wrap">
                            <a href="{{ route('stagiaires.show', $stagiaire->id) }}" class="bg-blue-500 hover:bg-blue-600 rounded py-2 px-4 font-bold text-white text-sm transition">Voir</a>
                            <a href="{{ route('stagiaires.edit', $stagiaire->id) }}" class="bg-yellow-500 hover:bg-yellow-600 rounded py-2 px-4 font-bold text-white text-sm transition">Edit</a>
                            <form class="inline" action="{{ route('stagiaires.destroy', $stagiaire->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce stagiaire?');">
                                @csrf    
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-600 rounded py-2 px-4 font-bold text-white text-sm transition">Supprimer</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="p-6 text-center text-gray-500">
                        <p class="text-lg">Aucun stagiaire trouvé.</p>
                        <a href="{{ route('stagiaires.create') }}" class="text-blue-600 hover:text-blue-800 font-semibold">Ajouter le premier stagiaire</a>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection