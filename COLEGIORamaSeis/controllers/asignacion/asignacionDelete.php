<?php

include_once "../conexion.php";
include_once "../session/proteger.php";

if (isset($_POST['EliminarAsignacion'])) {

    if (!empty($_POST['idAsignacionE'])) {

        $idAsignacionE = trim(($_POST['idAsignacionE']));


        $consultaAsignacionD= "DELETE FROM `asignaciones` WHERE `id_Asignacion`='$idAsignacionE'";

        $validacionAsignacionD = mysqli_query($conexion,  $consultaAsignacionD);

        if ($validacionAsignacionD) {            
            header("location: ../../views/asignacionM.php?msg=Asignacion eliminada exitosamente");

        } else {
            header("location: ../../views/asignacionM.php?msg=No fue posible eliminar las asignacion");
        }

    } 
    else {
        header("location: ../../views/asignacionM.php?msg=No ingreso todos los datos");
    }
}

