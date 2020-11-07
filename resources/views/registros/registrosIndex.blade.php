<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <div class="p-3 mb-2 bg-success text-white">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <title>Registro de un cliente</title>
</head>
<body>
    <center><h1>Registro de un cliente</h1></center>
    <a href="registros/create">Registro como cliente</a>
    <br>
    <table class="table">
        <thead class="thead-light">
         <tr>
            <th scope = "col">Id cliente</th>
            <th scope = "col">Nombre</th>
            <th scope = "col">Apellido</th>
            <th scope = "col">Direccion</th>
            <th scope = "col">Correo</th>
         </tr>
        </thead>
       <tbody>
        <br>
        @foreach ($registros as $regis)
            <tr>

                <td>{{ $regis->id }}</td>
                <td>{{ $regis->nombre}}</td>
                <td><a href="/registros/{{ $regis->id}}">{{ $regis->apellido}}</a></td>
                <td>{{ $regis->direccion}}</td>
                <td>{{ $regis->correo}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
