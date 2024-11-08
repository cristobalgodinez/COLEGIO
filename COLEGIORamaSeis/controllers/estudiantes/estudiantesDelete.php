<?php

include_once "../conexion.php";
include_once "../session/proteger.php";

if (isset($_POST['EliminarEstudiante'])) {

    if (!empty($_POST['idEliminarEstudiantes'])) {

        $idEliminarEstudiantes = trim(($_POST['idEliminarEstudiantes']));


        $consultaEstudiantesD = "DELETE FROM `estudiantes` WHERE `id_Estudiante`= '$idEliminarEstudiantes'";

        $validacionEstudiantesD = mysqli_query($conexion, $consultaEstudiantesD);

        if ($validacionEstudiantesD) {
            echo '<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                   <strong>Estudiante registrado</strong>
                   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                   </div>';
            header("location: ../../views/estudiantesM.php?msg=Estudiante eliminado exitosamente");
        } else {
            echo '<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                   <strong>No fue posible eliminar al estudiante, por favor intente denuevo</strong>
                   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                   </div>';
        }
    } else {
        header("location: ../../views/estudiantesM.php?msg=No ingreso todos los datos");
    }
}
