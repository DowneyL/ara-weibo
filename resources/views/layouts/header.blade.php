<svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2"
     fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
    <polygon points="50,0 100,0 50,100 0,100"/>
</svg>
<div class="relative pt-6 px-4 sm:px-6 lg:px-8">
    <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start">
        <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
            <div class="flex items-center w-full md:w-auto justify-end">
                <div class="absolute top-0 left-0 z-0">
                    @include('layouts.logo')
                </div>
                <div class="mr-2 flex items-center md:hidden">
                    <button @click="open = true" type="button"
                            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="hidden md:block md:ml-20 md:pr-4">
            <a href="#"
               class="font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition duration-150 ease-in-out">Product</a>
            <a href="#"
               class="ml-8 font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition duration-150 ease-in-out">Features</a>
            <a href="{{route('about')}}"
               class="ml-8 font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition duration-150 ease-in-out">About</a>
            <a href="{{route('help')}}"
               class="ml-8 font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition duration-150 ease-in-out">Help</a>
            @if(!isset($user))
                <a href="{{ route('sign-in')}}"
                   class="ml-8 font-medium text-indigo-600 hover:text-indigo-900 focus:outline-none focus:text-indigo-700 transition duration-150 ease-in-out">Log
                    in</a>
            @else
                <img src="{{$user->gravatar(140)}}" alt="{{$user->name}}" class="inline ml-8 h-8 w-8 rounded-full">
            @endif
        </div>
    </nav>
</div>
<div x-show="open" x-description="Mobile menu, show/hide based on menu open state."
     x-transition:enter="duration-150 ease-out" x-transition:enter-start="opacity-0 scale-95"
     x-transition:enter-end="opacity-100 scale-100" x-transition:leave="duration-100 ease-in"
     x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
     class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
    <div class="rounded-lg shadow-md">
        <div class="rounded-lg bg-white shadow-xs overflow-hidden">
            <div class="relative px-5 pt-4 flex items-center justify-end">
                <div class="absolute top-4 left-5">
                    @include('layouts.logo')
                </div>
                <div class=>
                    <button @click="open = false" type="button"
                            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="px-2 pt-2 pb-3">
                <a href="#"
                   class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out">Product</a>
                <a href="#"
                   class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out">Features</a>
                <a href="{{route('about')}}"
                   class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out">About</a>
                <a href="{{route('help')}}"
                   class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition duration-150 ease-in-out">Help</a>
                @if(isset($user))
                    <img src="{{$user->gravatar(140)}}" alt="{{$user->name}}" class="inline mt-1 h-8 w-8 ml-3 rounded-full">
                @endif
            </div>
            @if(!isset($user))
            <div>
                <a href="{{route('sign-in')}}"
                   class="block w-full px-5 py-3 text-center font-medium text-indigo-600 bg-gray-50 hover:bg-gray-100 hover:text-indigo-700 focus:outline-none focus:bg-gray-100 focus:text-indigo-700 transition duration-150 ease-in-out">
                    Log in
                </a>
            </div>
            @endif
        </div>
    </div>
</div>
