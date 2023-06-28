<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="precos://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/stilos.css'])
</head>

<body class="bg-principal">
    <div id="app">

        <div>
            <nav class="navbar bg-2 py-0">
                <div class="container-fluid d-flex justify-content-between">
                    <div class="py-3 bg-white">
                        <img src="{{ asset('img/logo.png') }}" alt="" class="img-logo">
                    </div>
                    <div>
                        @if (Route::has('login'))
                            <div class="d-flex">
                                @auth
                                    <div class="py-3 px-4">
                                        <a href="{{ url('/home') }}" class="bton bton-3">HOME</a>

                                    </div>
                                @else
                                    <div class="py-3 px-4">
                                        <a href="{{ route('login') }}" class="bton bton-3">LOGIN</a>

                                    </div>
                                    @if (Route::has('register'))
                                        <div class="py-3 px-4">
                                            <a href="{{ route('register') }}" class="bton bton-3">REGISTER</a>
                                        </div>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </div>

                </div>
            </nav>
        </div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>
</body>

</html>
