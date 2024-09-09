<!DOCTYPE html>
<html>
<head>
    <title>Productos</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Formulario productos</h1>
    <form action="{{ route('productos.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="descripcion">Descripción:</label>
        <input type="text" id="descripcion" name="descripcion" required><br><br>

        <label for="pais">País de origen:</label>
        <input type="text" id="pais" name="pais_origen" required><br><br>

        <label for="presentacion">Presentación del producto:</label>
        <input type="text" id="presentacion" name="presentacion" required><br><br>

        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio" required><br><br>

        <label for="stock">Stock:</label>
        <input type="number" id="stock" name="stock" required><br><br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>
