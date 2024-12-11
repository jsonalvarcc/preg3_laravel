<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Gestion Compras')</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Estilo adicional (si tienes un archivo CSS personalizado) -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">GESTION COMPRAS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('proveedores') }}">Proveedores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('orden_compras') }}">Órdenes de Compra</a>
                    </li>
                  
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('productos') }}">Productos</a>
                    </li>
                
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('estadoorden') }}">Estado de Órdenes</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Contenido Principal --}}
    <div class="container my-4">
        @yield('content')
    </div>

    {{-- Footer --}}
    <footer class="bg-light text-center py-3 mt-auto">
        <p>&copy; {{ date('Y') }} INF-324</p>
    </footer>

    {{-- Scripts --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
