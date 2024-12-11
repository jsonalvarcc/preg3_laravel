@extends('layouts.app')

@section('content')
    <h1>Crear Orden de Compra</h1>

    <form action="{{ route('orden_compras.store') }}" method="POST">
        @csrf
        <div>
            <label for="proveedor_id">Proveedor</label>
            <select name="proveedor_id" id="proveedor_id" required>
                @foreach ($proveedores as $proveedor)
                    <option value="{{ $proveedor->id }}">{{ $proveedor->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="fecha">Fecha</label>
            <input type="date" name="fecha" id="fecha" required>
        </div>

        <div>
            <label for="total">Total</label>
            <input type="number" name="total" id="total" step="0.01" required>
        </div>

        <div>
            <label for="estado_id">Estado</label>
            <select name="estado_id" id="estado_id" required>
                @foreach ($estados as $estado)
                    <option value="{{ $estado->id }}">{{ $estado->nombre }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit">Guardar</button>
    </form>
@endsection
