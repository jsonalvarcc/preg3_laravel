@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <h1 class="text-center mb-4">Editar Orden de Compra</h1>

        <form action="{{ route('orden_compras.update', $ordenCompra->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="proveedor_id">Proveedor</label>
                <select name="proveedor_id" id="proveedor_id" class="form-control" required>
                    @foreach ($proveedores as $proveedor)
                        <option value="{{ $proveedor->id }}" {{ $proveedor->id == $ordenCompra->proveedor_id ? 'selected' : '' }}>
                            {{ $proveedor->nombre }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="fecha">Fecha</label>
                <input type="date" name="fecha" id="fecha" class="form-control" value="{{ $ordenCompra->fecha }}" required>
            </div>

            <div class="form-group">
                <label for="total">Total</label>
                <input type="number" name="total" id="total" class="form-control" step="0.01" value="{{ $ordenCompra->total }}" required>
            </div>

            <div class="form-group">
                <label for="estado_id">Estado</label>
                <select name="estado_id" id="estado_id" class="form-control" required>
                    @foreach ($estados as $estado)
                        <option value="{{ $estado->id }}" {{ $estado->id == $ordenCompra->estado_id ? 'selected' : '' }}>
                            {{ $estado->nombre }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-success mt-3">Actualizar</button>
            <a href="{{ route('orden_compras.index') }}" class="btn btn-secondary mt-3 ml-2">Cancelar</a>
        </form>
    </div>
@endsection
