@extends('layouts.layout')

@section('title', 'Crear Estado de Orden')

@section('content')
    <div class="container my-5">
        <h1 class="text-center mb-4">Crear Estado de Orden</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('estadoorden.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre del Estado de Orden:</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre') }}" required>

                @error('nombre')
                    <div class="text-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Crear Estado</button>
        </form>
    </div>
@endsection
