<?php

include_once "../conexion.php";
include_once "../session/proteger.php";

if (isset($_POST['EliminarDocente'])) {

    if (!empty($_POST['idEliminarDocentes'])) {

        $idEliminarDocentes = trim(($_POST['idEliminarDocentes']));

        $consultaDocentesD = "DELETE FROM `docentes` WHERE `id_Docente`='$idEliminarDocentes'";


        $validacionDocentesD = mysqli_query($conexion, $consultaDocentesD);

        if ($validacionDocentesD) {            
            header("location: ../../views/docentesM.php?msg=Docente eliminado exitosamente");

        } else {
            header("location: ../../views/docentesM.php?msg=No fue posible eliminar al docente");
        }

    } 
    else {
        header("location: ../../views/docentesM.php?msg=No ingreso todos los datos");
    }
}
