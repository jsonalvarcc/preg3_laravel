@extends('layouts.layout')

@section('content')
    <div class="container my-5">
        <h1 class="mb-4 text-center">Crear Proveedor</h1>
        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('proveedores.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese el nombre del proveedor" required>
                    </div>
                    <div class="mb-3">
                        <label for="contacto" class="form-label">Contacto:</label>
                        <input type="text" name="contacto" id="contacto" class="form-control" placeholder="Ingrese el contacto del proveedor" required>
                    </div>
                    <div class="mb-3">
                        <label for="direccion" class="form-label">Dirección:</label>
                        <input type="text" name="dirección" id="direccion" class="form-control" placeholder="Ingrese la dirección del proveedor" required>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
