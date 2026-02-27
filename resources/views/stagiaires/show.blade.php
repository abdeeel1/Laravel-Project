@extends('layouts.master')
@section('title', 'Stagiaire')

@section('content')

<div class="flex flex-col justify-center my-10">
    <div class="rounded gap-4 shadow-2xl flex flex-col justify-center items-center py-8">
        <h2 class="font-bold text-2xl">Stagiaire #{{ $s->id }}</h2>
        <p class="font-mono">{{$s->nom}}</p>
        <p class="font-mono">{{$s->note}}</p>
        <p class="font-mono">{{$s->groupe}}</p>
        <a href=" {{ route('stagiaires.index') }} " class="text-white rounded py-2 px-6 font-semibold bg-blue-500">Back</a>
    </div>
    
    

</div>

@endsection