<?php

include_once "../conexion.php";
include_once "../session/proteger.php";

if (isset($_POST['editarEstudiante'])) {

    if (
        !empty($_POST['idEstudiantes']) && !empty($_POST['nombresEstudiantes'])
        && !empty($_POST['apellidosEstudiantes']) && !empty($_POST['gradoEstudiantes'])
        && !empty($_POST['seccionEstudiantes']) && !empty($_POST['cuiEstudiantes'])
        && !empty($_POST['generoEstudiantes']) && !empty($_POST['nombreAEEstudiantes'])
        && !empty($_POST['telefonoEstudiantes']) && !empty($_POST['cuiEstudiantes'])
        && !empty($_POST['idEditarEstudiantes'])
    ) {

        //idEditarEstudiantes
        $idEstudiantes = trim($_POST['idEstudiantes']);
        $nombresEstudiantes = trim($_POST['nombresEstudiantes']);
        $apellidosEstudiantes = trim($_POST['apellidosEstudiantes']);
        $gradoEstudiantes = trim($_POST['gradoEstudiantes']);
        $seccionEstudiantes = trim($_POST['seccionEstudiantes']);
        $cuiEstudiantes = trim($_POST['cuiEstudiantes']);
        $generoEstudiantes = trim(($_POST['generoEstudiantes']));
        $nombreAEEstudiantes = trim(($_POST['nombreAEEstudiantes']));
        $telefonoEstudiantes = trim(($_POST['telefonoEstudiantes']));

        $idEditarEstudiantes = trim(($_POST['idEditarEstudiantes']));




        $consultaEstudiantesU= "UPDATE `estudiantes` SET `id_Estudiante`='$idEstudiantes',`Nombres`='$nombresEstudiantes',
        `Apellidos`='$apellidosEstudiantes',`Grado`='$gradoEstudiantes',`Seccion`='$seccionEstudiantes',`Cui`='$cuiEstudiantes',
        `Genero`='$generoEstudiantes',`Nom_Encargado`='$nombreAEEstudiantes',`Telefono`='$telefonoEstudiantes' 
        WHERE `id_Estudiante`= '$idEditarEstudiantes'";


        $validacionEstudiantesU = mysqli_query($conexion, $consultaEstudiantesU);

        if ($validacionEstudiantesU) {
            echo '<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                   <strong>Estudiante registrado</strong>
                   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                   </div>';
            header("location: ../../views/estudiantesM.php?msg=Usuario editado exitosamente");
        } else {
            echo '<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                   <strong>No fue posible crear al usuario, por favor intente denuevo</strong>
                   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                   </div>';
        }
    } else {
        header("location: ../../views/estudiantesM.php?msg=No ingreso todos los datos");
    }
}
