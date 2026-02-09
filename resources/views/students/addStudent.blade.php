@extends('layouts.master')
@section('title', 'Products')
@section('content')
    <div class="shadow-xl flex flex-col  justify-center ">
        <div>
            <h2 class="font-semibold text-2xl text-center">Ajouter un Etudiant</h2>
        </div>

        <form action="" method="post" class="flex flex-col gap-5">
            @csrf
            <div class="flex flex-col gap-2 px-6">
                <label class="font-semibold">Nom</label>
                <input type="text" name="nom" placeholder="Ex: Najib" class="border py-2 px-4 rounded outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('nom') }}">
                @error('nom')
                    <p class="text-red-500">{{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-col gap-2 px-6">
                <label class="font-semibold">Prénom</label>
                <input value="{{ old('prenom') }}" type="text" name="prenom" placeholder="Ex: Abdessamad" class="border py-2 px-4 rounded outline-none focus:ring-2 focus:ring-blue-500">
                @error('prenom')
                    <p class="text-red-500">{{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-col gap-2 px-6">
                <label class="font-semibold">Email</label>
                <input value="{{ old('email') }}" type="email" name="email" placeholder="exemple@exemple.com" class="border py-2 px-4 rounded outline-none focus:ring-2 focus:ring-blue-500">
                @error('email')
                    <p class="text-red-500">{{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-col gap-2 px-6">
                <label class="font-semibold">Mot de Passe</label>
                <input  type="password" name="password" class="border py-2 px-4 rounded outline-none focus:ring-2 focus:ring-blue-500">
                @error('password')
                    <p class="text-red-500">{{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-col gap-2 px-6">
                <label class="font-semibold">Confirmation</label>
                <input value="{{ old('password_confirmation') }}" type="password" name="password_confirmation" class="border py-2 px-4 rounded outline-none focus:ring-2 focus:ring-blue-500">
                @error('password_confirmation')
                    <p class="text-red-500">{{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-col gap-2 px-6">
                <label class="font-semibold">Type de Bac</label>
                <div class="flex gap-5">
                    <div class="flex gap-2">
                        <input value="Marocain" type="radio" name="bac">Marocain
                    </div>
                    <div class="flex gap-2">
                        <input value="International" type="radio" name="bac">International
                    </div>
                </div>
                @error('bac')
                    <p class="text-red-500">{{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-col gap-2 px-6">
                <label class="font-semibold">Filiere souhaitée</label>
                <select value="{{ old('feliere') }}" name="feliere" id="" class="border py-2 px-4 rounded outline-0 focus:ring-2 focus:ring-blue-500">
                    <option value="" >Select Filiere</option>
                    <option value="SMI" >SMI</option>
                    <option value="SMA" >SMA</option>
                    <option value="SEG" >SEG</option>
                    <option value="PC" >PC</option>
                </select>
                @error('feliere')
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