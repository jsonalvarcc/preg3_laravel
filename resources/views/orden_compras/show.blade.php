@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <h1 class="text-center mb-4">Detalles de la Orden de Compra</h1>

        <div class="card">
            <div class="card-body">
                <p><strong>ID:</strong> {{ $ordenCompra->id }}</p>
                <p><strong>Proveedor:</strong> {{ $ordenCompra->proveedor->nombre }}</p>
                <p><strong>Fecha:</strong> {{ $ordenCompra->fecha }}</p>
                <p><strong>Total:</strong> {{ $ordenCompra->total }}</p>
                <p><strong>Estado:</strong> {{ $ordenCompra->estado->nombre }}</p>

                <a href="{{ route('orden_compras.index') }}" class="btn btn-primary">Regresar</a>
            </div>
        </div>
    </div>
@endsection
