@extends('layout')
@section('cards')
    <div class="container p-5 text-white bg-black">
        <div class=" m-5 rounded">
            <div class="mb-3 text-center">
                <h2>Editar / Eliminar Producto</h2>
            </div>
            <div class="mb-3 text-center">
                <img src="{{ url('storage/' . $articulo['imagenURL']) }}" class="rounded-4" width="500px">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="id" name="id" aria-describedby="id"
                    value="{{ $articulo['name'] }}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Categoria</label>
                <select class="form-select" aria-label="Default select example" id="categoria" name="categoria">
                    <option value="Celulares" @if ($articulo['categoria'] == 'Celulares') selected @endif>Celulares</option>
                    <option value="Accesorios"@if ($articulo['categoria'] == 'Accesorios') selected @endif>Accesorios</option>
                    <option value="Medias"@if ($articulo['categoria'] == 'Medias') selected @endif>Medias</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Foto del articulo</label>
                <input class="form-control" type="file" id="imagen" name="imagen" accept="image/*">
            </div>
            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="number" class="form-control" id="precio" name="precio" aria-describedby="precio"
                    value="{{ $articulo['precio'] }}">

                <div id="id" class="form-text">Solo numeros sin comilas ni espacios</div>
            </div>
            <div class="mb-3">
                <label for="caracteristicas" class="form-label">Caracteristicas</label>
                <textarea class="form-control" id="caracteristicas" name="caracteristicas"rows="5">@foreach($articulo["caracteristicas"] as $item){{ $item->descripcion."\n" }}@endforeach</textarea>
                <div id="id" class="form-text">Separar las caracteristicas por saltos de linea (ENTERS)</div>
            </div>
            <button type="submit" class="btn btn-primary">Subir</button>
            <form method="POST" action="{{ route('producto.destroy', $key) }}">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>
@endsection
