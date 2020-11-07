<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title> Edicion</title>
</head>
<body>
    <center><h1>Datos cliente</h1></center>

    <br><br>
    <a href="{{ action([\App\Http\Controllers\RegistroController::class, 'create']) }}">Nuevo Registro</a>
    <br>
    <a href="{{ route('registros.edit', [$registro->id]) }}">Editar registro hecho</a>
    <br>
    <br><br>
    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope = "col">Id</th>
            <th scope = "col">Nombre</th>
            <th scope = "col">Apellido</th>
        </tr>
    </thead>
    <tbody>
        <br>
            <tr>
                <th scope="row"></th>
                <td>{{ $registro->id }}</td>
                <td>{{ $registro->nombre}}</td>
                <td>{{ $registro->apellido}}</td>
            </tr>

    </table>
    </tbody>

</body>
</html>
