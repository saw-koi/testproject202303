<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

    </head>
    <body class="antialiased">
        <form action="/search">
            <input type="text" name="q" value="{{ $q }}">
            <input type="submit" value="検索">
        </form>
        <p>{{ $resultCountStr }}件の検索結果</p>
        @foreach($items as $item)
        <div class="search-item">
            <div><a href="{{ $item['link'] }}">{!! $item['htmlTitle'] !!}</a></div>
            <p>{{ $item['snippet'] }}</p>
        </div>
        @endforeach
    </body>
</html>
