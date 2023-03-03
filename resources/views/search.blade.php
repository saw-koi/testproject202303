<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

    </head>
    <body class="antialiased">
        <form action="/search">
            <input type="text" name="q" value="{{ isset($q) ? $q : "" }}">
            <input type="submit" value="検索">
        </form>
        @if( isset($msg) )
        <p>{{ $msg }}</p>
        @endif
        @if( isset($resultCountStr) )
        <p>{{ $resultCountStr }}件の検索結果</p>
        @endif
        @if( isset($items) )
            @foreach($items as $item)
            <div class="search-item">
                <div><a href="{{ $item['link'] }}">{!! $item['htmlTitle'] !!}</a></div>
                <p>{{ $item['snippet'] }}</p>
            </div>
            @endforeach
        @endif
    </body>
</html>
