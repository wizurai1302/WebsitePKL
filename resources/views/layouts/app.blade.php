<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('Website PKL') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
   <div id="app">
    <nav class="navbar navbar-expand-sm navbar-dark shadow-sm" style="background-color:#5d5dff; height:12vh">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                Website PKL 
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{route('home')}}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="{{route('tambahdata')}}" class="nav-link">Input Data Siswa</a>
                    </li>
                    <div class="btn-group" style="margin-left: 10px;">
                        <button class="btn btn-auto btn-sm" type="button">
                          Lokasi
                        </button>
                        <button type="button" class="btn btn-sm btn-auto dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                          <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('prrr.jogja')}}">Yogyakarta</a></li>
                            <li><a class="dropdown-item" href="{{route('batam')}}">Batam</a></li>
                            <li><a class="dropdown-item" href="{{route('pekanbaru')}}">Pekan Baru</a></li>
                            <li><a class="dropdown-item" href="{{route('padang')}}">Padang</a></li>
                            <li><a class="dropdown-item" href="{{route('jabodetabek')}}">Jabodetabek</a></li>
                        </ul>
                      </div>
                    <div class="btn-group" style="margin-left: 10px;">
                        <button class="btn btn-auto btn-sm" type="button">
                          Jurusan
                        </button>
                        <button type="button" class="btn btn-sm btn-auto dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                          <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('rpl')}}">Rekayasa Perangkat Lunak</a></li>
                            <li><a class="dropdown-item" href="{{route('mm')}}">Multimedia</a></li>
                            <li><a class="dropdown-item" href="{{route('tkj')}}">Teknik Komputer Jaringan</a></li>
                            <li><a class="dropdown-item" href="{{route('bc')}}">BroadCasting</a></li>
                        </ul>
                      </div>
                </ul>
                <ul class="navbar-nav ms-auto">
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</div>

</body>
</html>
