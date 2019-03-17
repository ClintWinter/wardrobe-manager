<!DOCTYPE html>
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
    <link href="https://fonts.googleapis.com/css?family=Cinzel|Sarabun" rel="stylesheet">

    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">

        <nav class="mb-40">
            <ul class="left">
                <li><a href="{{ route('home') }}">WR</a></li>
            </ul>
            <ul class="center">
                <li>
                    <a href="{{ url('/garments') }}">Garments</a>
                    <a class="add" href="{{ url('/garments/create') }}"><i class="fas fa-plus"></i></a>
                </li>
                <li>
                    <a href="{{ url('/outfits') }}">Outfits</a>
                    <a class="add" href="{{ url('/outfits/create') }}"><i class="fas fa-plus"></i></a>
                </li>
            </ul>
            <ul class="right">
                {{-- <li><a id="nav-popup" href="javascript:;"><i class="fas fa-bars"></i></a></li> --}}
                @guest
                    <li>
                        <a href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li>
                            <a href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                
                @else
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @endguest
            </ul>
        </nav>

        <main class="container">
            @yield('content')
        </main>

        <div id="modal-container">
            <div class="modal-mask"></div>
            <div class="modal">
                {{-- <div class="modal-header"></div>
                <div class="modal-body"></div>
                <div class="modal-footer"></div> --}}
                <ul class="right">
                    <li><a id="nav-popup" href="javascript:;"><i class="fas fa-bars"></i></a></li>
                    @guest
                        <li>
                            <a href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li>
                                <a href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    
                    @else
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @endguest
                </ul>
            </div>
        </div>

    </div>
</body>
</html>
