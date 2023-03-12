<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Crear Municipio</title>
</head>
<body>
    <h1>Crear Municipio</h1>
    <br>
    <form method="POST" action="{{ route('municipios_crear') }}" >
        @csrf
        <div style="margin-left:42%">
            <label for="">Nombre del Municipio: </label>
            <input type="text" id="nombre" name="nombre_municipio"><br>
            <label for="">Departamento: </label>
            <select name="departamento_id" id="inputDepartamento" required>
                <option value="">--Escoja el departamento--</option>
                @foreach ($departamentos as $departamento)
                    <option value="{{ $departamento['id_departamentos']}}">{{$departamento['nombre_departamento']}}</option>
                @endforeach
            </select><br>
            <button type="submit">Crear Municipio</button>
        </div>
        
    </form>

</body>
</html>