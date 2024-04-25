<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumno</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    


    <?php $currentPage='alumnos'; require __DIR__ . '\..\layout\menu.php'; ?>

    <a class="btn btn-success mt-2" href="AlumnoController.php?nuevo">Nuevo Alumno</a>


    <div class="t-container">
    <table class="tabla mt-2">
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

                         echo '<td><a class="btn btn-warning" href="AlumnoController.php?editar='. $alumno->getId() .'">Editar</a></td>';
                         echo '<td><button class="btn btn-danger" onClick="eliminar('.$alumno->getId().')">Eliminar</button></td>';
                        echo '</tr>';
                    }
                ?>
            
        </tbody>
    </table>
    </div>


    <div id="confirmarEliminarModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Confirmar Eliminación</h2>
            </div>
            <div class="modal-body">
                <p>¿Estás seguro de que quieres eliminar este elemento?</p>
            </div>
            <div class="modal-footer">
                <!-- Botón de confirmar eliminación -->
                <button id="confirmarEliminarBtn" class="btn btn-danger">Eliminar</button>
                <!-- Botón para cerrar el modal -->
                <button id="cancelarEliminarBtn" class="btn btn-warning">Cancelar</button>
            </div>
        </div>
    </div>


    <script>
        const modal = document.getElementById('confirmarEliminarModal')
        const btnCancel = document.getElementById('cancelarEliminarBtn')
        const btnConfirm = document.getElementById('confirmarEliminarBtn')
        let del_id = 0;

        function eliminar (id) {
            modal.style.display = 'block'
            del_id = id
        }

        btnConfirm.onclick = function() {
            if (del_id !== 0)
            window.location.href = 'AlumnoController.php?eliminar=' + del_id
        }

        btnCancel.onclick = function() {
            modal.style.display = 'none'
        }

        window.onclick = function(event) {
            if(event.target == modal) {
                modal.style.display = 'none'
            }
        }


    </script>
</body>
</html>