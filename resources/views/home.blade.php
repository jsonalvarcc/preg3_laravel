@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <h1 class="text-center mb-4">Bienvenido a la Gestión de Compras</h1>

        <div class="row">
            <!-- Sección Proveedores y Órdenes de Compra -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Proveedores y Órdenes de Compra</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Proveedores:</strong> Gestiona los proveedores que proveen productos y servicios.</p>
                        <p><strong>Órdenes de Compra:</strong> Administra las órdenes de compra realizadas a tus proveedores.</p>
                        <a href="{{ route('proveedores.index') }}" class="btn btn-info mb-2">Ver Proveedores</a>
                        <a href="{{ route('orden_compras.index') }}" class="btn btn-info">Ver Órdenes de Compra</a>
                    </div>
                </div>
            </div>

            <!-- Sección Productos y Estados de Orden -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Productos y Estados de Orden</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Productos:</strong> Gestiona los productos disponibles para la venta o compra.</p>
                        <p><strong>Estados de Orden:</strong> Configura los diferentes estados que pueden tener las órdenes de compra.</p>
                        <a href="{{ route('productos.index') }}" class="btn btn-info mb-2">Ver Productos</a>
                        <a href="{{ route('estadoorden.index') }}" class="btn btn-info">Ver Estados de Orden</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
