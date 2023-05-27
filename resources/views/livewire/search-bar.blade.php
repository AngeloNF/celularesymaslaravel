<div>
    <form class="d-flex">
        <input wire:model="search" type="search" placeholder="Escriba el nombre o el precio" class="form-control"
            aria-label="Search">
    </form>
    <div class="list-group">
        @foreach ($productos as $key => $producto)
            <a href="{{route('producto.show', $producto->id)}}" class="list-group-item list-group-item-action">{{ $producto->name}}</a>
        @endforeach
    </div>
</div>
