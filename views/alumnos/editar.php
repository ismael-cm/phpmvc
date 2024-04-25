<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <?php $currentPage = 'alumnos'; include __DIR__ . '\..\layout\menu.php' ?>

    <h1>Editar</h1>

    <form action="#" method="POST">
        <label>Nombre</label>
        <input class="form-control mb-2" type="text" required name="nombre" 
        value="<?php echo $alumno->getNombre() != null ? $alumno->getNombre() : '' ?>" />

        <label>Apellido</label>
        <input class="form-control" type="text" required name="apellido"
        value="<?php echo $alumno->getApellido() !== null ? $alumno->getApellido() : '' ?>" />

        <label>Correo Electronico</label>
        <input class="form-control" type="email" required name="email"
        value="<?php echo $alumno->getEmail() !== null ? $alumno->getEmail() : '' ?>" />

        <label>Fecha de nacimiento</label>
        <input class="form-control" type="date" required name="fecha_nacimiento"
        value="<?php echo $alumno->getFechaNacimiento() !== null ? $alumno->getFechaNacimiento() : '' ?>" />
        <input class="form-control" type="hidden" name="id" value="<?php echo $_GET['editar'] ?>" />

        <br>
        <br>
        <input class="btn btn-warning" type="submit" value="Modificar" name="modificar">
    </form>
</body>
</html>