
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Editar pais</title>
</head>
<body>
    <h1>Editar País</h1>
    <br>
    <form method="POST" action="{{ route('paises_actualizar', $pais->id_paises) }}" >
        @method('PUT')
        @csrf
        <div style="margin-left:42%">
            <label for="">Nombre del País: </label>
            <input type="text" id="nombre" name="nombre_pais" value="{{$pais->nombre_pais}}">
            <button type="submit">Actualizar país</button>
        </div>
        
    </form>

</body>
</html>