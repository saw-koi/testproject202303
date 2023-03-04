<x-app>
    <x-slot name="title">グーグルカスタムサーチAPIをつかってみよう！</x-slot>

    <div id="wrapper" class="w-full m-auto">
        <h1 class="w-full mb-4 text-4xl text-center font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl"><a href="{{ route('index') }}" class="block">グーグルカスタムサーチAPIをつかってみよう！</a></h1>
        <x-search-form type="index"></x-search-form>
    </div>
</x-app>
