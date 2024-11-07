<?php

include_once "../conexion.php";
include_once "../session/proteger.php";

if (isset($_POST['editarDocente'])) {

    if (
        !empty($_POST['idDocentes']) && !empty($_POST['nombresDocentes'])
        && !empty($_POST['apellidosDocentes']) && !empty($_POST['dpiDocentes'])
        && !empty($_POST['generoDocentes']) && !empty($_POST['correoDocentes'])
        && !empty($_POST['telefonoDocentes']) && !empty($_POST['informacionDocentes'])
        && !empty($_POST['editarIdDocentes'])
    ) {

        $idDocentes = trim($_POST['idDocentes']);
        $nombresDocentes = trim($_POST['nombresDocentes']);
        $apellidosDocentes = trim($_POST['apellidosDocentes']);
        $dpiDocentes = trim($_POST['dpiDocentes']);
        $generoDocentes = trim($_POST['generoDocentes']);
        $correoDocentes = trim($_POST['correoDocentes']);
        $telefonoDocentes = trim(($_POST['telefonoDocentes']));
        $informacionDocentes = trim(($_POST['informacionDocentes']));

        $editarIdDocentes = trim(($_POST['editarIdDocentes']));



        $consultaDocentes = "UPDATE `docentes` SET `id_Docente`='$idDocentes',`Nombres`='$nombresDocentes',`Apellidos`='$apellidosDocentes',`Dpi`='$dpiDocentes',
        `Genero`='$generoDocentes',`Correo`='$correoDocentes',`Telefono`='$telefonoDocentes',`Informacion`=' $informacionDocentes' 
        WHERE `id_Docente`='$editarIdDocentes'";

        $validacionDocentes = mysqli_query($conexion, $consultaDocentes);

        if ($validacionDocentes) {
            header("location: ../../views/DocentesM.php?msg=Docente editado exitosamente");
        } else {
            echo '<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                   <strong>No fue posible editar al docente, por favor intente denuevo</strong>
                   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                   </div>';
        }
    } else {
        header("location: ../../views/docentesM.php?msg=No ingreso todos los datos");
    }
}
