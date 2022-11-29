<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav style="background-color:#2b2b74;" class="navbar navbar-expand-md navbar-light shadow-sm"  >
            <div class="container">
                <a class="navbar-brand d-flex" href="{{ url('/') }}">
                        <div class="">
                            <img src="/img/logo.png" style="height: 30px; border-right: 2px solid #333; margin: 0px 15px 0px 0px; padding: 0px 15px 0px 0px; " class="pr-3">
                        </div>
                        <div style="color: white" class="pl-3">
                            AlumniPortal
                        </div>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
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
                            <li st class="nav-item dropdown">
                                <a style="color: white" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->familyName }}
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
        {{-- <footer>
            <div style="color: black; justify-content:center; text-align:center; background-color:#2b2b74; color:antiquewhite; margin:none; padding:none;" class="credits">
                <h3 style="font-size: 15px; padding-top:15px; padding-bottom:15px">
                    <p>
                        Jim Karlo Capero <br>
                    </p>
                    <p>
                        Lovely Ann Oligo <br>
                    </p>
                    <p>
                        Eric Delos Santos <br>
                    </p>
                    <p>
                        Perck Labra <br>
                    </p>
                    <p>
                        Khim Noel Capalla<br>
                    </p>
                </h3>
            </div>
        </footer> --}}
    </div>
</body>
</html>
