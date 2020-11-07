<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <div class="p-3 mb-2 bg-success text-white">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <title>Formulario </title>
</head>
<body>
    <center><h1>Formulario de registro</h1></center>

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @if (isset($registros))
        <form action="{{ route('registros.update', [$registros])}}" method="POST">
            @method('patch')
    @else
        <form action ="{{ route('registros.store') }}" method="POST">
    @endif
        @csrf

        <label for="nombre">Nombre:</label>
        <input class="form-control" type="text" name="nombre" value="{{ old('nombre')}}"><br><br>

        <label for="apellido">Apellido:</label>
        <input class="form-control" type="text" name="apellido"  value="{{ old('apellido')}}"><br><br>

        <label for="direccion">Direccion:</label>
        <input class="form-control" type="text" name="direccion"  value="{{ old('direccion')}}"><br><br>

        <label for="telefono">Telefono:</label>
        <input class="form-control" type="tel" name="telefono"  value="{{ old('telefono')}}"><br><br>

        <label for="correo">Correo electronico:</label>
        <input class="form-control" type="text" name="correo"  value="{{ old('correo')}}"><br><br>

       <button type="submit">Guardar</button>
    </form>
</body>
</html>
