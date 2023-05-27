@extends('layout')
@section('cards')
    <div class="container p-5 text-white bg-black">

        @csrf
        <div class="mb-3 text-center">
            <h2>Lista de categorias</h2>
        </div>
        <div class="mb-3 text-center">
            <a href="{{ route('categoria.create') }}" class="btn btn-primary">
                Crear categoria</a>
        </div>
        <div class="mb-3">
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Botones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categorias as $categoria)
                        <tr>

                            <th scope="row">{{ $categoria->id }}</th>
                            <td>{{ $categoria->name }}</td>
                            <td>
                                <div class="d-grid gap-2 d-md-block">
                                    <form action="{{ route('categoria.destroy', $categoria->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
