<!DOCTYPE html>
<html lang="es">
<!-- Archivo app.blade.php -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Pet Shop App Service')</title>
    
    <!-- Tu hoja de estilos personalizada -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Barra de navegación -->
    <header>
        <h3>CIDE Pet Shop Boys</h3>
        <nav>
            <ul>
                <li><a href="{{ url('/') }}">Inicio</a></li>
                <li><a href="{{ route('productos.create') }}">Nuevo Producto</a></li>
                <li><a href="{{ route('productos.index') }}">Ver Productos</a></li>
            </ul>
        </nav>
    </header>

    <!-- Sección donde las vistas hijas inyectarán contenido -->
    <main>
        @yield('content')
    </main>

    <!-- Pie de página -->
    <footer>
        <p>&copy; 2024 Servicio de Mascotas. Todos los derechos reservados.</p>
    </footer>

    <!-- Scripts; código de JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
