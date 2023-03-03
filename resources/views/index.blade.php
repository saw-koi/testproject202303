<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="antialiased flex h-screen">
        <div id="wrapper" class="w-full m-auto">
            <h1 class="w-full mb-4 text-4xl text-center font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl"><a href="{{ route('index') }}" class="block">グーグルカスタムサーチAPIをつかってみよう！</a></h1>
            <form action="/search" class="flex">
                <input type="text" name="q" placeholder="ここに検索文字列を書いてみよう" class="w-3/4 bg-transparent border border-blue-500 focus:border-blue-300">
                <input type="submit" value="検索" class="w-1/4 bg-sky-500 hover:bg-sky-700 text-white font-bold py-2 px-4 rounded">
            </form>
        </div>
    </body>
</html>
