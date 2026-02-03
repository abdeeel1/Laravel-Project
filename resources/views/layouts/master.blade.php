<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title - @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        @include("partials.navbar")
    </header>

    <div class="container h-[725px] grid grid-cols-1 md:grid-cols-12 gap-4">
        <div class="col-span-3">
            @include("partials.sidebar")
        </div>
        <div class="col-span-9  mt-4">
            <div class="">
                @yield('content')
            </div>
        </div>
    </div>


    @include("partials.footer")
</body>
</html>