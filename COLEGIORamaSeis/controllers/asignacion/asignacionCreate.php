<?php

include_once "../conexion.php";
include_once "../session/proteger.php";

if (isset($_POST['registrarAsignacion'])) {

    if (!empty($_POST['idAsigarEstudiante']) && !empty($_POST['idAsignarMateria'])
    && !empty($_POST['fechaAsignacion'])) {


        $idAsigarEstudiante = trim($_POST['idAsigarEstudiante']);
        $idAsignarMateria = trim($_POST['idAsignarMateria']);
        $fechaAsignacion = trim($_POST['fechaAsignacion']);



        $consultaAsignarC ="INSERT INTO `asignaciones`(`id_Estudiante`, `id_Materia`, `Fecha_Asignacion`) 
        VALUES ('$idAsigarEstudiante','$idAsignarMateria','$fechaAsignacion')";



        $validacionAsignarC = mysqli_query($conexion, $consultaAsignarC);

        if ($validacionAsignarC) {
            header("location: ../../views/asignacionM.php?msg=Asignacion realizada exitosamente");
        } else {
            header("location: ../../views/asignacionM.php?msg=No logro realizarse la asignacion");
        }
    } else {
        header("location: ../../views/asignacionM.php?msg=No ingreso todos los datos");
    }
}
