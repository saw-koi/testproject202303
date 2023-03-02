<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

    </head>
    <body class="antialiased">
        インデックス
        <form action="/search">
            <input type="text" name="q">
            <input type="submit">
        </form>
    </body>
</html>
