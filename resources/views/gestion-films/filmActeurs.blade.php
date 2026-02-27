<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Films - </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
    <div class="rounded bg-slate-300 py-4 mt-10 mx-8">
        <table class="min-w-full mt-4 font-bold bg-white border border-gray-200 shadow-md rounded-lg">
            <thead class="font-bold">
                <tr class="bg-gray-100 text-gray-700 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-left">Acteurs</th>
                    <th class="py-3 px-6 text-left">Role</th>
                    <th class="py-3 px-6 text-center">Type</th>
                    
                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-bold">
                @foreach($acteurs as $acteur)
                <h2 class="text-center font-bold text-xl">{{$acteur->titre}}</h2>
              
              <tr class="border-b border-gray-200 hover:bg-gray-50">
                <td class="py-3 px-6 text-left">{{$acteur->nom}} {{$acteur->prenom}}</td>
                <td class="py-3 px-6 text-left">{{$acteur->role}}</td>
                <td class="py-3 px-6 text-center">
                  <span class="bg-green-100 text-green-600 py-1 px-3 rounded-full text-xs capitalize">{{$acteur->typeRole}}</span>
                </td>
                
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
</body>
</html>