@extends('layouts.layout')

@section('title', 'Editar Producto')

@section('content')
    <div class="container my-5">
        <h1 class="text-center mb-4">Editar Producto</h1>

        <!-- Formulario para editar el producto -->
        <form action="{{ route('productos.update', $producto) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre del Producto:</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $producto->nombre }}" required>
            </div>

            <div class="mb-3">
                <label for="precio" class="form-label">Precio:</label>
                <input type="text" name="precio" id="precio" class="form-control" value="{{ $producto->precio }}" required>
            </div>

            <div class="mb-3">
                <label for="categoria_id" class="form-label">Categoría:</label>
                <select name="categoria_id" id="categoria_id" class="form-select" required>
                    @foreach($categorias as $categoria)
                        <option value="{{ $categoria->id }}" {{ $producto->categoria_id == $categoria->id ? 'selected' : '' }}>
                            {{ $categoria->nombre }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar Producto</button>
        </form>
    </div>
@endsection
