<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Films - {{$film->titre}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
    
    <div>
        <div class="flex flex-col justify-center items-center px-10 py-10 text-xl">
            <p class="text-gray-500"><span class="font-bold text-2xl text-black">{{$film->titre}}</span> ({{$film->annee}}) </p>

            <div class="flex flex-col gap-4 p-2 justify-start items-center">
                <div class="flex gap-8 p-4">
                    <p class="font-bold text-gray-400">Pays</p>
                    <p>{{$film->pays}}</p>
                </div>
                <div class="flex gap-4 p-4">
                    <p class="font-bold text-gray-400">Genre</p>
                    <p>{{$film->genre}}</p>
                </div>
                <div class="flex gap-4 p-4">
                    <p class="font-bold text-gray-400">Durée</p>
                    <p>{{$film->duree}}</p>
                </div>
            </div>


            <div>
                <button class="text-white bg-blue-700 px-4 rounded py-2  mx-auto"><a href="/films/{{$film->id}}/acteurs" class="text-md">Voir les Acteurs</a></button>
                <a href={{ route("films.index") }} class="text-yellow-500 font-semibold">Back</a>
            </div>
        </div>
    </div>

</body>
</html>