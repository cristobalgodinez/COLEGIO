<?php

include_once "../conexion.php";
include_once "../session/proteger.php";

if (isset($_POST['EliminarCalificacion'])) {

    if (!empty($_POST['idEliminarCalificacion'])) {

        $idEliminarCalificacion = trim(($_POST['idEliminarCalificacion']));


        $consultaCalificacionD = "DELETE FROM `calificaciones` WHERE `id_Calificacion`= '$idEliminarCalificacion'";

        $validacionCalificacionD = mysqli_query($conexion, $consultaCalificacionD);

        if ($validacionCalificacionD) {
            header("location: ../../views/calificacionesM.php?msg=Calificacion eliminada exitosamente");

        } else {
            header("location: ../../views/calificacionesM.php?msg=Calificacion eliminado exitosamente");
        }
    } else {
        header("location: ../../views/calificacionesM.php?msg=No ingreso todos los datos");
    }
}
