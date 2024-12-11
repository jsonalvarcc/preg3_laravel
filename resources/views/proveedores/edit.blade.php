@extends('layouts.layout')

@section('content')
    <div class="container my-5">
        <h1 class="text-center mb-4">Editar Proveedor</h1>
        <form action="{{ route('proveedores.update', ['proveedore' => $proveedor->id]) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $proveedor->nombre }}" required>
            </div>

            <div class="mb-3">
                <label for="contacto" class="form-label">Contacto</label>
                <input type="text" name="contacto" id="contacto" class="form-control" value="{{ $proveedor->contacto }}" required>
            </div>

            <div class="mb-3">
                <label for="dirección" class="form-label">Dirección</label>
                <input type="text" name="dirección" id="dirección" class="form-control" value="{{ $proveedor->dirección }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="{{ route('proveedores.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
