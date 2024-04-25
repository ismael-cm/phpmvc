<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumno</title>
    <?php require __DIR__ . '\..\layout\headers.php'; ?>
</head>
<body>
    

    <?php $currentPage='alumno.index'; require __DIR__ . '\..\layout\menu.php'; ?>

    <a href="AlumnoController.php?nuevo">Nuevo Alumno</a>
    <br>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Fecha de nacimiento</th>
                <th></th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            
                <?php
                    foreach($alumnos as $alumno) {
                        echo '<tr>';
                         echo '<td>';
                         echo $alumno->getNombre();
                         echo '</td>';

                         echo '<td>';
                         echo $alumno->getApellido();
                         echo '</td>';

                         echo '<td>';
                         echo $alumno->getEmail();
                         echo '</td>';

                         echo '<td>';
                         echo $alumno->getFechaNacimiento();
                         echo '</td>';

                         echo '<td><a href="AlumnoController.php?editar='. $alumno->getId() .'">Editar</a></td>';
                         echo '<td><a href="AlumnoController.php?eliminar='. $alumno->getId() .'">Eliminar</a></td>';
                        echo '</tr>';
                    }
                ?>
            
        </tbody>
    </table>
</body>
</html>