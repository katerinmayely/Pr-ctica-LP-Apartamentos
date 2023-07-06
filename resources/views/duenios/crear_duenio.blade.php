<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>--Nuevo Dueño--</title>
</head>
<body>
    <h1 style="color: blueviolet">Nuevo Dueño</h1>

    <form method="POST" action='{{ route('duenio.guardar') }}'>
        @csrf

        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre">
        </div>
        <div>
            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido">
        </div>
        <div>
            <label for="correo">Correo:</label>
            <input type="text" name="correo">
        </div>

        <button type="submit" style="background-color: blueviolet">Guardar</button>

    </form>
</body>
</html>