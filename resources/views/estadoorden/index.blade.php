@extends('layouts.layout')

@section('title', 'Listado de Estados de Orden')

@section('content')
    <div class="container my-5">
        <h1 class="text-center mb-4">Estados de Orden</h1>

        <!-- Mensaje de éxito -->
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <!-- Botón para agregar un nuevo estado -->
        <a href="{{ route('estadoorden.create') }}" class="btn btn-primary mb-3">Agregar Nuevo Estado</a>

        <!-- Tabla para listar estados -->
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($estados as $estado)
                    <tr>
                        <td>{{ $estado->id }}</td>
                        <td>{{ $estado->nombre }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2" class="text-center">No hay estados registrados.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
