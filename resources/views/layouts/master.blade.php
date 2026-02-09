<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title - @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full flex flex-col">
    <header>
        @include("partials.navbar")
    </header>

    <div class="flex-1">
        <div class="grid grid-cols-1 md:grid-cols-12 grow gap-4 h-full">
            <div class="col-span-3 px-10">
                @include("partials.sidebar")
            </div>
            <div class="col-span-9 mt-4 mb-4 px-10">
                <div class="h-full">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    
    <footer class="mt-auto">
        @include("partials.footer")
    </footer>
</body>
</html>