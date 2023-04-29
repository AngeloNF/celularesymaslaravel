@extends('layout')
@section('cards')
    <div class="container bg-white">
        <form method="POST" action="{{ route("producto.store") }}" enctype="multipart/form-data" class=" m-5 rounded">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="id" name="id" aria-describedby="id" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Categoria</label>
                <select class="form-select" aria-label="Default select example" id="categoria" name="categoria" required>
                    <option selected>Open this select menu</option>
                    <option value="1">Celulares</option>
                    <option value="2">Accesorios</option>
                    <option value="3">Medias</option>
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
            <button type="submit" class="btn btn-primary">Subir</button>
        </form>
    </div>
@endsection
