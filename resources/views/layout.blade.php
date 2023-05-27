<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Catalogo Celulares Y Más</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
    <link rel="shortcut icon" href="{{ url('storage/Logos y mas/Icono Celulares Y Mas.png') }}" type="image/x-icon" />
    <style>
        .bg {
            background: radial-gradient(50% 50% at 50% 50%, #548EA6 0%, #000000 58.33%);
        }

        .bg-black {
            background: black;
        }
        .offcanvas{
            height: fit-content !important;
        }
    </style>
    @livewireStyles
</head>

<body class="bg">
    <nav class="navbar bg-black pt-3">
        <div class="container text-white">
            <p class="text-center m-auto">
                Avenida 1, Calle 5, Local Esquinero Parqueo La Antigua, San José, Costa Rica
            </p>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top bg-black">
        <div class="container">
            <a class="navbar-brand" href=" {{ route('inicio') }}">
                <img src="{{ url('storage/Logos y mas/Logo Celulares Y Mas.png') }}" alt="Bootstrap" width="150"
                    height="" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link @if (Route::current()->getName() === 'inicio') active @endif" aria-current="page"
                            href="{{ route('inicio') }}">Inicio</a>
                    </li>
                    @foreach ($categorias as $categoria)
                        <li class="nav-item">
                            <a class="nav-link @if (Route::current()->getName() === 'categoria' && Route::current()->name == $categoria->name) active @endif" aria-current="page"
                                href="{{ route('categoria.show', $categoria->name) }}">{{ $categoria->name }}</a>
                        </li>
                    @endforeach
                    @if (Route::current()->getName() != 'login')
                        <li class="nav-item">
                            <a class="nav-link " type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasTop" aria-controls="offcanvasTop"><i
                                    class="bi bi-search"></i></a>
                        </li>
                    @endif
                    @auth
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-circle"></i> {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                <li>
                                    <a class="dropdown-item" aria-current="page"href="{{ route('producto.create') }}">Crear
                                        Producto</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" aria-current="page"href="{{ route('categoria.index') }}">Lista
                                        Categorias</a>
                                </li>
                                <li>
                                    <form action="{{ route('logout') }}" method="post">
                                        @csrf
                                        <button type="submit" class="dropdown-item"> Cerrar Sesión</button>
                                    </form>
                                </li>
                            </ul>
                        </li>

                    @endauth
                    @guest
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="{{ route('login') }}">
                                <i class="bi bi-person-circle"></i>
                                Iniciar Sesión
                            </a>
                        </li>
                    @endguest

                </ul>
            </div>
        </div>
    </nav>
    <div class="container-xl" id="">
        @yield('cards')
    </div>
    <div class="offcanvas offcanvas-top text-bg-dark" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTop">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasDarkLabel">Offcanvas</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvasDark"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            @livewire('search-bar')
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    @livewireScripts
</body>

</html>
