<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <title>Inicio Pais</title>
</head>
<body>
    <div class='container'>
        <table>
            <thead>
                <tr>
                    <td>Id_País</td>
                    <td>Nombre del País</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($paises as $pais)
                <tr>
                    <td>{{ $pais -> id_paises }}</td>
                    <td>{{ $pais -> nombre_pais }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</body>
</html>