<?php

include_once "../conexion.php";
include_once "../session/proteger.php";

if (isset($_POST['editarAsignacion'])) {

    if (!empty($_POST['idAsigarEstudiante']) && !empty($_POST['idAsignarMateria'])
    && !empty($_POST['fechaAsignacion']) && !empty($_POST['idAsignarEditar'])) {



        $idAsigarEstudiante = trim($_POST['idAsigarEstudiante']);
        $idAsignarMateria = trim($_POST['idAsignarMateria']);
        $fechaAsignacion = trim($_POST['fechaAsignacion']);

        $idAsignarEditar = trim($_POST['idAsignarEditar']);


        $consultaAsignarU = "UPDATE `asignaciones` SET `id_Estudiante`='$idAsigarEstudiante ',
        `id_Materia`='$idAsignarMateria',`Fecha_Asignacion`='$fechaAsignacion' WHERE `id_Asignacion`='$idAsignarEditar'";



        $validacionAsignarU = mysqli_query($conexion, $consultaAsignarU);

        if ($validacionAsignarU) {
            header("location: ../../views/asignacionM.php?msg=Asignacion editada exitosamente");
        } else {
            header("location: ../../views/asignacionM.php?msg=No logro realizarse la edicion");
        }
    } else {
        header("location: ../../views/asignacionM.php?msg=No ingreso todos los datos");
    }
}
