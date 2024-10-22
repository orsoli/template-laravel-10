<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Orsol Filaj">
        <meta name="description" content="Template laravel 10">

        <title>Template laravel 10</title>

        {{-- Integrate app.js  --}}
        @vite("resources/js/app.js")

    </head>
    <body>
        {{-- Header  --}}

       {{-- Main  --}}
        <main>
            <h1 class="text-center text-success">This is a Template of LARAVEL 10.0</h1>
        </main>

        {{-- Footer  --}}
    </body>
</html>
