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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">{{ Auth::user()->name}}</a>
        
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
            <li class="nav-item">
                <a class="nav-link" onclick="document.getElementById('form-chao').submit()">Salir</a>
            </li>
            </ul>
        </div>
    </nav>
    <div>
    <a class="nav-link" href="{{ route('crear_municipio') }}"><button type="button" class="btn btn-success">Crear Municipio</button></a>
    </div>
    <div class='container'>
        <table>
            <thead>
                <tr>
                    <td>Id_municipios</td>
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
                        <form action="{{ route('municipios_eliminar', $municipio->id_municipios) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <!--<a href="#" class="btn btn-sm btn-info">Detalles</a>-->
                            <a href="{{ route('municipios_editar', $municipio -> id_municipios) }}" class="btn btn-sm btn-warning">Editar</a>
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

<form action="{{ route('logout') }}" method="post" id="form-chao">
    @csrf

</form>
