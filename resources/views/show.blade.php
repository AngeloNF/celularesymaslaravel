@extends('layout')
@section('cards')
    <div class="container p-5 text-white bg-black">
        <div class=" m-5 rounded">
            <div class="mb-3 text-center">
                <h2>Editar / Eliminar Producto</h2>
            </div>
            <div class="mb-3 text-center">
                <img src="{{ url('storage/' . $producto['imagenURL']) }}" class="rounded-4" width="500px">
            </div>
            <form action="{{ route("producto.update",$producto['id'])}}" enctype="multipart/form-data" method="post">
                @csrf
                @method("PUT")
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="id" name="id" aria-describedby="id"
                        value="{{ $producto['name'] }}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Categoria</label>
                    <select class="form-select" aria-label="Default select example" id="categoria" name="categoria">
                        @foreach ($categorias as $categoria)
                            <option value="{{ $categoria->id }}" @if ($producto['categoria'] == $categoria->name) selected @endif>
                                {{ $categoria->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Foto del articulo</label>
                    <input class="form-control" type="file" id="imagen" name="imagen" accept="image/*">
                </div>
                <div class="mb-3">
                    <label for="precio" class="form-label">Precio</label>
                    <input type="number" class="form-control" id="precio" name="precio" aria-describedby="precio"
                        value="{{ $producto['precio'] }}">

                    <div id="id" class="form-text">Solo numeros sin comilas ni espacios</div>
                </div>
                <div class="mb-3">
                    <label for="caracteristicas" class="form-label">Caracteristicas</label>
                    <textarea class="form-control" id="caracteristicas" name="caracteristicas" rows="5">
@foreach ($producto['caracteristicas'] as $item)
{{ $item->descripcion }}
@endforeach
</textarea>
                    <div id="id" class="form-text">Separar las caracteristicas por saltos de linea (ENTERS)</div>
                </div>
                <button type="submit" class="btn btn-primary">Subir</button>
            </form>
            <form method="POST" action="{{ route('producto.destroy', $key) }}">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>
@endsection
