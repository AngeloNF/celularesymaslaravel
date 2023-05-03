@extends('layout')

@section('cards')
    @if (Route::current()->getName() == 'inicio')
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://images.alphacoders.com/126/thumb-1920-1266726.png" class="d-block w-50 m-auto"
                        alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://i.pinimg.com/736x/8c/c4/3f/8cc43fc39d38691ab7cac7d273d24e40.jpg"
                        class="d-block w-50 m-auto" alt="...">
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    @endif
    <div class="row justify-content-center" id="celularesContainer">
        @foreach ($productos as $key => $producto)
            <div class="col-12 col-sm-6 col-lg-3 my-2 ">
                <div class="card bg-dark rounded-4 h-100 text-white" data-bs-theme="dark">
                    <img src="{{ url('storage/' . $producto['imagenURL']) }}" class="card-img-top rounded-4" alt="">
                    <div class="card-body d-flex flex-column">
                        <h4 class="card-title">{{ $producto['name'] }}</h4>
                        <h5 class="card-subtitle mb-2">{{ $producto['precio'] }}</h5>
                        @isset($producto->Caracteristicas)
                            <p class="card-text">
                                Descripción del Producto:
                            </p>
                            <ul class="mb-auto" id="descripcion-list">
                                @foreach ($producto->Caracteristicas as $carac)
                                    <li>{{ $carac->descripcion }}</li>
                                @endforeach
                            </ul>
                        @endisset
                        <div class="btn-group my-2 " role="group" aria-label="Basic example">
                            <a type="button" href="https://www.facebook.com/celuymas"class="btn btn-primary"><i
                                    class="bi bi-facebook"></i> Facebook</a>
                            <a type="button" href="https://www.instagram.com/celu.mas"class="btn btn-danger"><i
                                    class="bi bi-instagram"></i> Instagram</a>
                        </div>
                        <div class="btn-group my-2" role="group" aria-label="Basic example">
                            <a type="button"
                                href="https://wa.me/50664363905?text=Hola%2C%20Quiero%20m%C3%A1s%20informaci%C3%B3n%20sobre%20este%20celular%20"
                                class="btn btn-success "><i class="bi bi-whatsapp"></i> WhatsApp Escazú</a>
                            <a type="button"
                                href="https://wa.me/50687998062?text=Hola%2C%20Quiero%20m%C3%A1s%20informaci%C3%B3n%20sobre%20este%20celular%20"
                                class="btn btn-success "><i class="bi bi-whatsapp"></i> WhatsApp San José</a>
                        </div>
                        @auth

                            <div class="btn-group my-2" role="group" aria-label="Basic example">

                                <a type="button" href="{{ route('producto.show', $producto->id) }}"
                                    class="btn btn-warning "></i>EDITAR</a>

                            </div>
                        @endauth
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
@section('busqueda')
    @livewire('search-bar')
@endsection
