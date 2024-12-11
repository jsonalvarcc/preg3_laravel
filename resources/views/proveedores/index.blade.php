@extends('layouts.layout')

@section('title', 'Listado de Proveedores')

@section('content')
    <div class="container my-5">
        <h1 class="text-center mb-4">Lista de Proveedores</h1>
        <div class="d-flex justify-content-between mb-3">
            <a href="{{ route('proveedores.create') }}" class="btn btn-success">Crear Nuevo Proveedor</a>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Contacto</th>
                        <th>Dirección</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($proveedores as $proveedor)
                        <tr>
                            <td>{{ $proveedor->id }}</td>
                            <td>{{ $proveedor->nombre }}</td>
                            <td>{{ $proveedor->contacto }}</td>
                            <td>{{ $proveedor->dirección }}</td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a href="{{ route('proveedores.edit', $proveedor) }}" class="btn btn-warning btn-sm">Editar</a>
                                    <form action="{{ route('proveedores.destroy', $proveedor) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este proveedor?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
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
