
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Editar Departamento</title>
</head>
<body>
    <h1>Editar Departamento</h1>
    <br>
    <form method="POST" action="{{ route('departamentos_actualizar', $departamento->id_departamentos) }}" >
        @method('PUT')
        @csrf
        <div style="margin-left:42%">
            <label for="">Nombre del departamento: </label>
            <input type="text" id="nombre" name="nombre_departamento" value="{{$departamento->nombre_departamento}}"><br>
            <label for="">País: </label>
            <select name="pais_id" id="inputPais" required>
                <option value="">{{$departamento->pais_id}}</option>
                @foreach ($paises as $pais)
                    <option value="{{ $pais['id_paises']}}">{{$pais['nombre_pais']}}</option>
                @endforeach
            </select><br>
            <button type="submit">Actualizar Departamento</button>
        </div>
        
    </form>

</body>
</html>