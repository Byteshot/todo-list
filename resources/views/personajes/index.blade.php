<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Personajes</title>
</head>
<body>
    <h1>Personajes</h1>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Especie</th>
                    <th>Estatus</th>
                    <th>id Api</th>
                    <th>Imagen</th>
                </tr>
            </thead>
            <tbody>
                @foreach($personajes as $personaje)
                    <tr>
                        <td>{{ $personaje->id }}</td>
                        <td>{{ $personaje->nombre }}</td>
                        <td>{{ $personaje->especie }}</td>
                        <td>{{ $personaje->estatus }}</td>
                        <td>{{ $personaje->api_id }}</td>
                        <td>
                            <a href="{{ route('personaje.show', $personaje->id) }}">
                                <img src="{{ $personaje->imagen }}" alt="{{ $personaje->nombre }}" width="100">
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</body>
</html>
