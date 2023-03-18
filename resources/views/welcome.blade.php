<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Taskify</title>

    {{-- Bootstrap CSS --}}
    <link rel="stylesheet" href="{{ asset('/css/styles.min.css') }}">

    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

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

    <div class="container col-lg-10 px-4 py-4">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
          <div class="col-10 col-sm-8 col-lg-6">
            <img src="{{ asset('images/training-6010.svg') }}" class="d-block mx-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
          </div>
          <div class="col-lg-6">
            <h1 class="display-5 fw-bold lh-1 mb-3">Organize Your Life And Boost Your Productivity</h1>
            <p class="lead">The ultimate tool for managing your daily tasks and projects! Our website is designed to help you stay on top of your to-do list, collaborate with others, and achieve your goals.</p>
          </div>
        </div>
      </div>
</body>

</html>
