<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo</title>
</head>
<body>
    <?php include __DIR__ . '\..\layout\menu.php' ?>

    <h1>Nuevo Alumno</h1>

    <form action="#" method="POST">
        <label>Nombre</label>
        <input type="text" required name="nombre"  />

        <label>Apellido</label>
        <input type="text" required name="apellido" />

        <label>Correo Electronico</label>
        <input type="email" required name="email" />

        <label>Fecha de nacimiento</label>
        <input type="date" required name="fecha_nacimiento" />

        <br>
        <br>
        <input type="submit" value="Guardar" name="guardar">
    </form>
</body>
</html>