@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <h1 class="text-center mb-4">Órdenes de Compra</h1>
        
        <a href="{{ route('orden_compras.create') }}" class="btn btn-primary mb-4">Crear Orden de Compra</a>

        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Proveedor</th>
                    <th>Fecha</th>
                    <th>Total</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ordenesCompra as $orden)
                    <tr>
                        <td>{{ $orden->id }}</td>
                        <td>{{ $orden->proveedor->nombre }}</td>
                        <td>{{ $orden->fecha }}</td>
                        <td>${{ number_format($orden->total, 2) }}</td>
                        <td>{{ $orden->estado->nombre }}</td>
                        <td>
                            <a href="{{ route('orden_compras.show', $orden->id) }}" class="btn btn-info btn-sm">Ver</a>
                            <a href="{{ route('orden_compras.edit', $orden->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('orden_compras.destroy', $orden->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar esta orden de compra?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
