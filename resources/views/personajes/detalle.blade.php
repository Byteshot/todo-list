<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Personaje {{$personaje->nombre}}</title>
</head>
<body>
    <a href="{{ route('personaje.index') }}">Volver</a>
    <img src="{{ $personaje->imagen }}" alt="{{ $personaje->nombre }}" width="100">

    <h1>Personaje {{$personaje->nombre}}</h1>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Especie</th>
                    <th>Estatus</th>
                    <th>id Api</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $personaje->id }}</td>
                    <td>{{ $personaje->nombre }}</td>
                    <td>{{ $personaje->especie }}</td>
                    <td>{{ $personaje->estatus }}</td>
                    <td>{{ $personaje->api_id }}</td>
                </tr>
            </tbody>
        </table>

    </div>

</body>
</html>
