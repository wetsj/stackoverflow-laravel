<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="./resources/css/app.css">
    <!-- BootStrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Stackoverflow</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <script src="https://kit.fontawesome.com/dd02144266.js" crossorigin="anonymous"></script>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
            <!-- Container wrapper -->
            <div class="container">
                <!-- Navbar brand -->
                <a class="navbar-brand" href="#"><img id="MDB-logo" src="https://mdbcdn.b-cdn.net/wp-content/uploads/2018/06/logo-mdb-jquery-small.png" alt="MDB Logo" draggable="false" height="30" /></a>

                <!-- Toggle button -->
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <!-- Collapsible wrapper -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left links -->
                    <ul class="navbar-nav me-3">
                        <li class="nav-item">
                            <a class="nav-link active d-flex align-items-center" aria-current="page" href="#"><i class="fas fa-bars pe-2"></i>Menu</a>
                        </li>
                    </ul>
                    <!-- Left links -->

                    <form class="d-flex align-items-center w-100 form-search">
                        <div class="input-group">
                            <button class="btn btn-light dropdown-toggle shadow-0" type="button" data-mdb-toggle="dropdown" aria-expanded="false" style="padding-bottom: 0.4rem;">
                                Catégories
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark fa-ul">
                                <li>
                                    <a class="dropdown-item" href="#"><span class="fa-li pe-2"><i class="fa fa-search"></i></span>All</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"><span class="fa-li pe-2"><i class="fas fa-film"></i></span>Titles</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"><span class="fa-li pe-2"><i class="fa fa-tv"></i></span>TV
                                        Episodes</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"><span class="fa-li pe-2"><i class="fas fa-user-friends"></i></span>Celebs</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"><span class="fa-li pe-2"><i class="fas fa-building"></i></span>Companies</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#"><span class="fa-li pe-2"><i class="fas fa-key"></i></span>Keywords</a>
                                </li>
                            </ul>
                            <input type="search" class="form-control" placeholder="Search" aria-label="Search" />
                        </div>
                        <a href="#!" class="text-white"><i class="fas fa-search ps-3"></i></a>
                    </form>

                    <ul class="navbar-nav ms-3">
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item ">
                            <a class="nav-link d-flex align-items-center me-3" href="{{ route('login') }}">{{ __('Connexion') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item" style="width: 65px;">
                            <a class="nav-link d-flex align-items-center" href="{{ route('register') }}">{{ __('Inscription') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                    {{ __('Se déconnecter') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
                <!-- Collapsible wrapper -->
            </div>
            <!-- Container wrapper -->
        </nav>
        <!-- Navbar -->

        <main class="py-4">
            @yield('content')
        </main>
    </div>

</body>
</html>
