<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <?php $currentPage = 'alumnos'; include __DIR__ . '\..\layout\menu.php' ?>

    <h1>Nuevo Alumno</h1>

    <form action="#" method="POST">
        <label>Nombre</label>
        <input class="form-control" type="text" required name="nombre"  />

        <label>Apellido</label>
        <input class="form-control" type="text" required name="apellido" />

        <label>Correo Electronico</label>
        <input class="form-control" type="email" required name="email" />

        <label>Fecha de nacimiento</label>
        <input class="form-control" type="date" required name="fecha_nacimiento" />

        <br>
        <br>
        <input class="btn btn-success" type="submit" value="Guardar" name="guardar">
    </form>
</body>
</html>