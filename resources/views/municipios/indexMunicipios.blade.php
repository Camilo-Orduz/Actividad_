<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <title>Inicio municipios</title>
</head>
<body>
    <div class='container'>
        <table>
            <thead>
                <tr>
                    <td>id_municipios</td>
                    <td>Nombre del Municipio</td>
                    <td>Departamento</td>
                    <td>Acciones</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($municipios as $municipio)
                <tr>
                    <td>{{ $municipio -> id_municipios }}</td>
                    <td>{{ $municipio -> nombre_municipio }}</td>
                    <td>{{ $municipio -> departamento_id}}</td>
                    <td>
                        <form action="#" method="POST">
                            @method('DELETE')
                            @csrf
                            <!--<a href="#" class="btn btn-sm btn-info">Detalles</a>-->
                            <a href="#" class="btn btn-sm btn-warning">Editar</a>
                            <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</body>
</html>