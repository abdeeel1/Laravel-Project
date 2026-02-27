<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Films - Films</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
    <div class="flex flex-col justify-center items-center my-10">
        <h2 class="font-bold text-2xl text-blue-700 my-10">List of Films</h2>

        <div class="flex gap-8">
            @foreach($films as $film)

            <div class="shadow-xl shadow-blue-500 flex flex-col justify-start items-start px-10 rounded py-4 gap-4 text-xl">
                <p class="text-blue-700 font-bold">{{$film->titre}}</p>

                <p>Genre {{$film->genre}} - {{$film->annee}}</p>
                <pre class="text-sm">{{$film->pays}} | {{$film->duree}} min</pre>

                <button class="text-white bg-blue-700 w-full rounded py-2 text-sm"><a href="/films/{{$film->id}}">Details</a></button>
            </div>

            @endforeach
            
        </div>
    </div>
</body>
</html>