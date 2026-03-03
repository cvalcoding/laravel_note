<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <title>Note - @yield('title')</title>
         @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        @include('partials.nav')
        <div class="container">
            @yield('content')
        </div>
        
    </body>
</html>