<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="antialiased">
        <div id="wrapper" class="w-full">
            <h1><a href="{{ route('index') }}" class="block text-sm text-center">グーグルカスタムサーチAPIをつかってみよう！</a></h1>
            <form action="/search" class="flex">
                <input type="text" name="q" value="{{ isset($q) ? $q : "" }}" placeholder="ここに検索文字列を書いてみよう" class="w-3/4 bg-transparent border border-blue-500 focus:border-blue-300">
                <input type="submit" value="検索" class="w-1/4 bg-sky-500 hover:bg-sky-700 text-white font-bold py-2 px-4 rounded">
            </form>
            @if( isset($msg) )
            <p class="block text-center mx-2 my-2 border-2 border-lime-800 bg-lime-100 rounded-full">{{ $msg }}</p>
            @endif
            @if( isset($resultCountStr) )
            <p class="block text-sm">{{ $resultCountStr }}件の検索結果</p>
            @endif
            @if( isset($items) )
                <ul class="flex grid grid-cols-5 gap-4">
                    @foreach($items as $item)
                    <a href="{{ $item['link'] }}" class="col-span-1 border rounded-lg block">
                        <span class="text-center text-sm block bg-blue-500 text-white rounded-t-lg">{{ $loop->index+1 }}位</span>
                        <span class="block px-1 text-xl text-center block bg-blue-200">{!! $item['htmlTitle'] !!}</span>
                        <span class="block text-xs border-b-2 border-gray-300">{!! str_replace('/', '<wbr>/', urldecode($item["link"])) !!}</span>
                        <span class="text-sm">{{ $item['snippet'] }}</span>
                    </a>
                    @endforeach
                </ul>
            @endif
        </div>
    </body>
</html>
