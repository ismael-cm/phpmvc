<?php 

require '../models/AlumnoModel.php';

$model = new empleadoModel();

$alumnos = $model->getAlumnos();



if (isset($_POST["modificar"])) {
    $alumno = new Alumno($_REQUEST["id"], $_REQUEST["nombre"], $_REQUEST["apellido"], $_REQUEST["email"], $_REQUEST["fecha_nacimiento"]);

    $model->updateAlumno($alumno);

    header("Location: AlumnoController.php");
    exit();
}
else if(isset($_POST['guardar'])) {
    $alumno = new Alumno(0, $_REQUEST["nombre"], $_REQUEST["apellido"], $_REQUEST["email"], $_REQUEST["fecha_nacimiento"]);
    $model->storeAlumno($alumno);

    header("Location: AlumnoController.php");
    exit();
}
else if (isset($_GET['nuevo'])) {
    require '../views/alumnos/nuevo.php';
}
else if (isset($_GET['eliminar'])) {

    $id = $_GET['eliminar'];

    $model->deleteAlumno($id);

    header("Location: AlumnoController.php");
}
else if (isset($_GET['editar'])){
    $alumno = $model->findAlumno($_GET['editar']);
    require '../views/alumnos/editar.php';
}
else{
    require '../views/alumnos/index.php';
}


