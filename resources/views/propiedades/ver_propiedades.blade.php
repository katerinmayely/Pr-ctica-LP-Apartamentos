<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>--Propiedades--</title>
</head>
<body>
    <h1 style="color: blueviolet">Estas son las propiedades:</h1>

    <div class="table responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Piso</th>
                    <th>Area</th>
                    <th>Dueño</th>
                    <th>Color</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($propiedades as $propiedad)
                    <tr>
                        <td>{{$propiedad->id}}</td>
                        <td>{{$propiedad->piso}}</td>
                        <td>{{$propiedad->area}}</td>
                        <td>{{$propiedad->idDuenio}}</td>
                        <td>{{$propiedad->color}}</td>
                        <td>{{$propiedad->estado}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>