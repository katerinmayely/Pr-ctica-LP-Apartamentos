<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mostrar Dueño</title>
</head>
<body>
    <table class="table">
        <thead>
            <tr>
                <th><h1 style="color: blueviolet">Datos del propietario:</h1></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>Nombre</th>
                <td>{{$duenio->nombre}}</td>
            </tr>
            <tr>
                <th>Apellido</th>
                <td>{{$duenio->apellido}}</td>
            </tr>
            <tr>
                <th>Correo</th>
                <td>{{$duenio->correo}}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>