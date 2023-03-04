<x-app>
    @if( isset( $q ) )
        <x-slot name="title">"{{ $q }}"の検索結果 - グーグルカスタムサーチAPIをつかってみよう！</x-slot>
    @else
        <x-slot name="title">検索 - グーグルカスタムサーチAPIをつかってみよう！</x-slot>
    @endif

    <div id="wrapper" class="w-full">
        <h1><a href="{{ route('index') }}" class="block text-sm text-center">グーグルカスタムサーチAPIをつかってみよう！</a></h1>
        <x-search-form type="search" :q="$q"></x-search-form>
        @if( isset($msg) )
        <p class="block text-center mx-2 my-2 border-2 border-lime-800 bg-lime-100 rounded-full">{{ $msg }}</p>
        @endif
        @if( isset($resultCountStr) )
        <p class="block text-sm">{{ $resultCountStr }}件の検索結果（{{ $page }}ページ目）</p>
        @endif
        @if( isset($items) )
            <ul class="flex grid grid-cols-5 gap-4">
                @foreach($items as $item)
                <a href="{{ $item['link'] }}" class="col-span-1 border rounded-lg block">
                    <span class="text-center text-sm block bg-blue-500 text-white rounded-t-lg">{{ $start + $loop->index }}位</span>
                    <span class="block px-1 text-xl text-center block bg-blue-200">{!! $item['htmlTitle'] !!}</span>
                    <span class="block text-xs border-b-2 border-gray-300">{!! str_replace('/', '<wbr>/', urldecode($item["link"])) !!}</span>
                    <span class="text-sm">{{ $item['snippet'] }}</span>
                </a>
                @endforeach
            </ul>
            <div class="flex grid grid-cols-2 gap-4 m-2">
                @if( $prevExists )
                    <a href="{{ route('search') }}?q={{ $q }}&page={{ $page-1 }}" class="block col-span-1 text-center border-2 border-blue-600">もっと順位の高い10件</a>
                @else
                    <span class="block col-span-1 text-center text-gray-400 border-2 border-gray-400">もっと順位の高い10件</span>
                @endif
                @if( $nextExists )
                    <a href="{{ route('search') }}?q={{ $q }}&page={{ $page+1 }}" class="block col-span-1 text-center border-2 border-blue-600">もっと順位の低い10件</a>
                    @else
                    <span class="block col-span-1 text-center text-gray-400 border-2 border-gray-400">もっと順位の低い10件</span>
                @endif
            </div>
        @endif
    </div>
</x-app>