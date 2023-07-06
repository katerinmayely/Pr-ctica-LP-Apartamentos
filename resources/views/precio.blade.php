<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>--Precio--</title>
</head>
<body>

    @php

        if($total == 0){
            echo 'Ingreso un piso inválido.';
        }else{
            echo "<h1>Se encuentra en el piso $piso, este el total a Pagar:</h1>";
            echo "<div style='background-color: indianred'>$total</div>";
        }

    @endphp
    
</body>
</html>