<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('/css/styles.min.css') }}">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <header class="p-3 bg-white text-dark shadow-sm">
            <div class="container">
                <div class="d-flex justify-content-between">
                    <a href="{{ url('/') }}"
                        class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none navbar-brand">Taskify</a>
                    @if (Route::has('login'))
                        <div class="nav nav-masthead justify-content-center float-md-end">
                            @auth
                                <a href="{{ url('/dashboard') }}"
                                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-outline-dark text-dark me-2">Log
                                    in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn btn-warning">Register</a>
                                @endif

                            @endauth
                        </div>
                    @endif
                    {{-- <form action="#" class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" method="POST">
                            <input type="search" name="searchbox" id="searchbox" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
                        </form> --}}


                </div>
            </div>
        </header>

        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html>
