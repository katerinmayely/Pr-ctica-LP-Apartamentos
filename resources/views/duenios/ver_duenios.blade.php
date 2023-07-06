<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>--Ver Dueños--</title>
</head>
<body>
    <h1 style="color:blueviolet">Estos son los propietarios:</h1>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($duenios as $duenio)
                    <tr>
                        <td>{{$duenio->id}}</td>
                        <td>{{$duenio->nombre}}</td>
                        <td>{{$duenio->apellido}}</td>
                        <td>{{$duenio->correo}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>