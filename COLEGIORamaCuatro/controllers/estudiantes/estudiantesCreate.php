<?php

include_once "../conexion.php";
include_once "../session/proteger.php";

if (isset($_POST['registrarEstudiante'])) {

    if (
        !empty($_POST['idEstudiantes']) && !empty($_POST['nombresEstudiantes'])
        && !empty($_POST['apellidosEstudiantes']) && !empty($_POST['gradoEstudiantes'])
        && !empty($_POST['seccionEstudiantes']) && !empty($_POST['cuiEstudiantes'])
        && !empty($_POST['generoEstudiantes']) && !empty($_POST['nombreAEEstudiantes'])
        && !empty($_POST['telefonoEstudiantes']) && !empty($_POST['cuiEstudiantes'])
    ) {

        $idEstudiantes = trim($_POST['idEstudiantes']);
        $nombresEstudiantes = trim($_POST['nombresEstudiantes']);
        $apellidosEstudiantes = trim($_POST['apellidosEstudiantes']);
        $gradoEstudiantes = trim($_POST['gradoEstudiantes']);
        $seccionEstudiantes = trim($_POST['seccionEstudiantes']);
        $cuiEstudiantes = trim($_POST['cuiEstudiantes']);
        $generoEstudiantes = trim(($_POST['generoEstudiantes']));
        $nombreAEEstudiantes = trim(($_POST['nombreAEEstudiantes']));
        $telefonoEstudiantes = trim(($_POST['telefonoEstudiantes']));




        $consulta = "INSERT INTO `estudiantes`(`id_Estudiante`, `Nombres`, `Apellidos`, `Grado`, `Seccion`, `Cui`, `Genero`, `Nom_Encargado`, `Telefono`) 
        VALUES ('$idEstudiantes','$nombresEstudiantes','$apellidosEstudiantes','$gradoEstudiantes','$seccionEstudiantes','$cuiEstudiantes',
              '$generoEstudiantes','$nombreAEEstudiantes','$telefonoEstudiantes')";

        $validacion = mysqli_query($conexion, $consulta);

        if ($validacion) {
            echo '<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                   <strong>Estudiante registrado</strong>
                   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                   </div>';
            header("location: ../../views/estudiantesM.php?msg=Usuario creado exitosamente");
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
