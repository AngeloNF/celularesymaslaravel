@extends('layout')
@section('cards')
    <div class="container p-5 text-white bg-black">
        <form method="POST" action="{{ route('categoria.store') }}" class=" m-5 rounded">
            @csrf
            <div class="mb-3 text-center">
                <h2>Lista de categorias</h2>
            </div>
            <div class="mb-3">
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
                                        <form action="{{ route('categoria.destroy',$categoria->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-primary">Editar</button>
                                        </form>
                                        <form action="{{ route('categoria.destroy',$categoria->id) }}" method="POST">
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

        </form>
    </div>
@endsection
