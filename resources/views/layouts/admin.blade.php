<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @include('partials.navbar_laravel')
    <header>
        @yield('header')
    </header>
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="d-flex col-md-12">
                    {{-- sidebar --}}
                    <div class="col-3 p-0 d-flex">
                        @include('partials.sidebar')
                    </div>
                    {{-- contenuto --}}
                    <div class="col-9 p-0">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>

        </div>
    </main>
    <footer>
        @include('partials.footer')
    </footer>
</body>
