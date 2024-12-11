@extends('layouts.layout')

@section('title', 'Crear Producto')

@section('content')
    <div class="container my-5">
        <h1 class="text-center mb-4">Crear Nuevo Producto</h1>
        
        <!-- Formulario para crear nuevo producto -->
        <form action="{{ route('productos.store') }}" method="POST">
            @csrf
            
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre del Producto:</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre') }}" required>
            </div>

            <div class="mb-3">
                <label for="precio" class="form-label">Precio:</label>
                <input type="text" name="precio" id="precio" class="form-control" value="{{ old('precio') }}" required>
            </div>

            <div class="mb-3">
                <label for="categoria_id" class="form-label">Categoría:</label>
                <select name="categoria_id" id="categoria_id" class="form-select">
                    <option value="">Seleccione una categoría existente</option>
                    @foreach($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="nueva_categoria" class="form-label">O crear una nueva categoría:</label>
                <input type="text" name="nueva_categoria" id="nueva_categoria" class="form-control" value="{{ old('nueva_categoria') }}">
            </div>

            <button type="submit" class="btn btn-primary">Crear Producto</button>
        </form>
    </div>
@endsection
