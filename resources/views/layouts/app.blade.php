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
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    @guest
                    @if (Route::has('login'))
                    
                        
                    @endif
                @else
                <ul class="navbar-nav me-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Actividades
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="{{route('actividad.index')}}">Ver Actividades</a></li>
                          <li><a class="dropdown-item" href="{{route('actividad.create')}}">Crear Nueva Actividad</a></li>
                        </ul>
                      </li>
                </ul>

                <ul class="navbar-nav me-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarMO" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Mano de Obra
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarMO">
                          <li><a class="dropdown-item" href="#">Ver Mano de Obra</a></li>
                          <li><a class="dropdown-item" href="#">Crear Nueva Mano de Obra</a></li>
                        </ul>
                      </li>
                </ul>

                <ul class="navbar-nav me-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarMA" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Materiales
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarMA">
                          <li><a class="dropdown-item" href="#">Ver Materiales</a></li>
                          <li><a class="dropdown-item" href="#">Crear Material</a></li>
                        </ul>
                      </li>
                </ul>

                <ul class="navbar-nav me-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarPO" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Proyectos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarPO">
                          <li><a class="dropdown-item" href="#">Ver Proyectos</a></li>
                          <li><a class="dropdown-item" href="#">Crear Proyectos</a></li>
                        </ul>
                      </li>
                </ul>
                @endguest
                   

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
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

        <main class="py-5">
            @yield('content')
        </main>
    </div>
</body>
</html>
