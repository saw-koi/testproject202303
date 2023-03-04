<form action="/search" class="flex">
    <input type="text" name="q" placeholder="ここに検索文字列を書いてみよう" value="{{ isset($q) ? $q : '' }}" class="w-3/4 bg-transparent border border-blue-500 focus:border-blue-300">
    <input type="submit" value="検索" class="w-1/4 bg-sky-500 hover:bg-sky-700 text-white font-bold py-2 px-4 rounded">
</form>
