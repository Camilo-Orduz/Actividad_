<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <title>Inicio departamentos</title>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item ">
                <a class="nav-link" href="{{ route('iniciopaises') }}">Paises <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('inicioDep') }}">Departamentos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('inicioMunicipios') }}">Municipios</a>
            </li>
            </ul>
        </div>
    </nav>
    <div class='container'>
        <table>
            <thead>
                <tr>
                    <td>id_departamentos</td>
                    <td>Nombre del Departamento</td>
                    <td>País</td>
                    <td>Acciones</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($departamentos as $departamento)
                <tr>
                    <td>{{ $departamento -> id_departamentos }}</td>
                    <td>{{ $departamento -> nombre_departamento }}</td>
                    <td>{{ $departamento -> pais_id}}</td>
                    <td>
                        <form action="{{ route('departamentos_eliminar', $departamento -> id_departamentos) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <!--<a href="#" class="btn btn-sm btn-info">Detalles</a>-->
                            <a href="{{ route('departamentos_editar', $departamento -> id_departamentos) }}" class="btn btn-sm btn-warning">Editar</a>
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