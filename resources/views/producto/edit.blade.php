@extends('layouts.app')

    @section('title')

    @yield('content')
        <h1>Edición de producto</h1>
        <form action="{{ route('productos.store') }}" method="POST">
            @csrf
            <label for="nombre">Nombre:</label><br>
            <input type="text" id="nombre" name="nombre" required><br><br>

            <label for="descripcion">Descripción:</label><br>
            <input type="text" id="descripcion" name="descripcion" required><br><br>

            <label for="pais">País de origen:</label><br>
            <input type="text" id="pais" name="pais_origen" required><br><br>

            <label for="presentacion">Presentación del producto:</label><br>
            <input type="text" id="presentacion" name="presentacion" required><br><br>

            <label for="precio">Precio:</label><br>
            <input type="number" id="precio" name="precio" required><br><br>

            <label for="stock">Stock:</label><br>
            <input type="number" id="stock" name="stock" required><br><br>

            <button type="submit">Enviar</button>
        </form>
    @endsection
</body>
</html>
