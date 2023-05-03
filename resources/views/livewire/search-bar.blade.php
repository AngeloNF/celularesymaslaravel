<div class="row justify-content-center" id="celularesContainer">

    <form class="d-flex">
        <input wire:model="search" type="search" placeholder="Escriba el nombre o el precio" class="form-control me-2"
            aria-label="Search">
    </form>
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
