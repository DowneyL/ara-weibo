<div
    class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4 my-5" role="alert"
    x-show="@if(count($errors) > 0) true @else false @endif"
    x-transition:enter="transition ease-in duration-500"
    x-transition:enter-start="opacity-0 transform"
    x-transition:enter-end="opacity-100 transform"
>
    <p class="font-bold">Errors</p>
    @foreach($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach
</div>