@extends('layout')
@section('cards')
    <div class="container p-5 text-white bg-black">
        <form method="POST" action="{{ route('producto.store') }}" enctype="multipart/form-data" class=" m-5 rounded">
            @csrf
            <div class="mb-3 text-center">
                <h2>Crear / Agregar Producto</h2>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="id" name="id" aria-describedby="id" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Categoria</label>
                <select class="form-select" aria-label="Default select example" id="categoria" name="categoria" required>
                    <option selected>Open this select menu</option>
                    @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->name }}">
                        {{ $categoria->name }}</option>
                @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Foto del articulo</label>
                <input class="form-control" type="file" id="imagen" name="imagen" accept="image/*" required>
            </div>
            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="number" class="form-control" id="precio" name="precio" aria-describedby="precio" required>
                <div id="id" class="form-text">Solo numeros sin comilas ni espacios</div>
            </div>
            <div class="mb-3">
                <label for="caracteristicas" class="form-label">Caracteristicas</label>
                <textarea class="form-control" id="caracteristicas" name="caracteristicas"rows="5"></textarea>
                <div id="id" class="form-text">Separar las caracteristicas por saltos de linea (ENTERS)</div>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Subir</button>
            </div>
        </form>
    </div>
@endsection
