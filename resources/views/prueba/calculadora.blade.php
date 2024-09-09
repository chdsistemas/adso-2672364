<!DOCTYPE html>
<html>
<head>
    <title>Ejemplo de una Calculadora</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Calculadora Laravel</h1>
    <form action="{{ route('enviar_calculadora') }}" method="POST">
        @csrf
        <label for="numero1">Número 1:</label>
        <input type="text" id="numero1" name="numero1" required><br><br>

        <label for="numero2">Número 2:</label>
        <input type="text" id="numero2" name="numero2" required><br><br>

        <label for="operacion">Operación:</label>
        <select id="operacion" name="operacion">
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicación</option>
            <option value="division">División</option>
        </select><br><br>

        <button type="submit">Enviar y calcular</button>
    </form>

    @if (isset($resultado))
        <h2>Resultado: {{ $resultado }}</h2>
    @endif
</body>
</html>
