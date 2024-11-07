<?php

include_once "../conexion.php";
include_once "../session/proteger.php";

if (isset($_POST['registrarDocente'])) {

    if (
        !empty($_POST['idDocentes']) && !empty($_POST['nombresDocentes'])
        && !empty($_POST['apellidosDocentes']) && !empty($_POST['dpiDocentes'])
        && !empty($_POST['generoDocentes']) && !empty($_POST['correoDocentes'])
        && !empty($_POST['telefonoDocentes']) || !empty($_POST['informacionDocentes'])
    ) {

        $idDocentes = trim($_POST['idDocentes']);
        $nombresDocentes = trim($_POST['nombresDocentes']);
        $apellidosDocentes = trim($_POST['apellidosDocentes']);
        $dpiDocentes = trim($_POST['dpiDocentes']);
        $generoDocentes = trim($_POST['generoDocentes']);
        $correoDocentes = trim($_POST['correoDocentes']);
        $telefonoDocentes = trim(($_POST['telefonoDocentes']));
        $informacionDocentes = trim(($_POST['informacionDocentes']));




        $consultaDocentes = "INSERT INTO `docentes`(`id_Docente`, `Nombres`, `Apellidos`, `Dpi`, `Genero`, `Correo`, `Telefono`, `Informacion`) 
        VALUES  ('$idDocentes','$nombresDocentes','$apellidosDocentes','$dpiDocentes','$generoDocentes','$correoDocentes',
              '$telefonoDocentes','$informacionDocentes')";

        $validacionDocentes = mysqli_query($conexion, $consultaDocentes);

        if ($validacionDocentes) {
            header("location: ../../views/DocentesM.php?msg=Docente creado exitosamente");
        } else {
            echo '<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                   <strong>No fue posible crear al docente, por favor intente denuevo</strong>
                   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                   </div>';
        }
    } else {
        header("location: ../../views/estudiantesM.php?msg=No ingreso todos los datos");
    }
}
