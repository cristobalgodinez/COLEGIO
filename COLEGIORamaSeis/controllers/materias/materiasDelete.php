<?php

include_once "../conexion.php";
include_once "../session/proteger.php";

if (isset($_POST['EliminarMateria'])) {

    if (!empty($_POST['idEliminarMateria'])) {

        $idEliminarMateria = trim(($_POST['idEliminarMateria']));

        $consultaMateriaD = "DELETE FROM `materias` WHERE `id_Materia`='$idEliminarMateria'";


        $validacionMateriaD = mysqli_query($conexion, $consultaMateriaD);

        if ($validacionMateriaD) {            
            header("location: ../../views/materiaM.php?msg=Materia eliminada exitosamente");

        } else {
            header("location: ../../views/materiaM.php?msg=No fue posible eliminar la materia");
        }

    } 
    else {
        header("location: ../../views/materiasM.php?msg=No ingreso todos los datos");
    }
}
