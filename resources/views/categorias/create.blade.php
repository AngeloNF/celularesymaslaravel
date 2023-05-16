@extends('layout')
@section('cards')
    <div class="container p-5 text-white bg-black">
        <form method="POST" action="{{ route('categoria.store') }}" class=" m-5 rounded">
            @csrf
            <div class="mb-3 text-center">
                <h2>Crear / Agregar Categoria</h2>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="name" required>
            </div>
            <div class="d-grid gap-2 col-12 mx-auto">
                <button type="submit" class="btn btn-primary">Agregar</button>
            </div>
        </form>
    </div>
@endsection
