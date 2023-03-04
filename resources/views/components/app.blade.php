<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>{{ $title }}</title>
    </head>
    <body class="antialiased flex h-screen">
        {{ $slot }}
    </body>
</html>