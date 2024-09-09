<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
</head>
<body>
    <header>
        <h1>Bienvenido a la Página Principal</h1>
    </header>
    <nav>
        <ul>
            <li>
                <a href="{{ route('ruta_vista1') }}">Vista1</a>
            </li>
            <li>
                <a href="{{ route('ruta_vista2') }}">Vista2</a>
            </li>
            <li>
                <a href="{{ route('ruta_vista3') }}">Vista3</a>
            </li>
            <li>
                <a href="{{ route('mostrar_calculadora') }}">Calculadora</a>
            </li>
        </ul>
    </nav>
    <main class="container">
        
        <p>Este es el contenido que se muestra en la raíz del proyecto.</p>
    </main>
    <footer>
        <p>Derechos Reservados - 2024</p>
    </footer>
</body>
</html>
