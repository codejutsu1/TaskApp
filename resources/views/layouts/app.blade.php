<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="antialiased">
        <div class="relative ">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            
            <nav class="bg-gray-100 py-3 px-2 tracking tracking-wider">
                <div class="flex justify-between w-4/5 mx-auto items-center">
                    <a href="/" class="text-4xl font-bold text-gray-700">Todo</a>
                    <a href="/create" class="border-2 border-blue-600 p-3 rounded-md transition duration-500 ease-in hover:bg-white hover:text-blue-600 bg-blue-600 text-gray-200">Create Todo</a>
                </div>
            </nav>

            <div>

                @yield('content')

                @if(session()->has('success'))
                    <div class='text-green-400 text-center mx-auto w-4/5'>
                        {{  session()->get('success') }}
                    </div>
                @endif
            </div>
        </div>
    </body>
</html>
