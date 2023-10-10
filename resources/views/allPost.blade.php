<div class="relative sm:flex sm:justify-center sm:items-center  bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        {{-- @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif --}}
                    @endauth
                </div>
            @endif
            
        </div>
        
@include('layouts.master')
<section class="bg-white dark:bg-gray-900">
    <div class="container px-6 py-10 mx-auto">
        <h1 class="text-3xl font-semibold text-gray-900 capitalize lg:text-4xl dark:text-white mx-auto text-center">Blog's artist Kpop <3 </h1>

        <div class="grid grid-cols-1 gap-8 mt-8 md:mt-16 md:grid-cols-2">
            @foreach ($posts as $post)

            <div class="lg:flex flex-col">
                <img class="object-cover w-full h-56 rounded-lg lg:w-64" src="{{$post->image_url}}" alt="">
                <div class="flex flex-row justify-between py-6 lg:mx-6">
                    <a href="{{route('posts.blogPrincipal', ['id' => $post->id])}}" class="text-xl font-semibold text-gray-800 hover:underline dark:text-white">
                        {{$post->title}}
                    </a>
                </div>
                <span class="text-sm text-gray-500 dark:text-gray-200">En: {{ \Carbon\Carbon::parse($post->created_at)->isoFormat('dddd D [de] MMMM [de] YYYY [a las] h:mm:ss A') }}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>
        
