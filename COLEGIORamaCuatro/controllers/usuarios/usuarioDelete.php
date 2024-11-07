<?php

//SE ESTA TOMANDO LA DIRECCION APARTIR DE LA CARPETA USUARIO/USUARIOS.PHP PORQUE AQUI SE ESTA INCLUYENDO ESTE ARCHIVO
include_once "../../controllers/conexion.php";
include_once "../../controllers/session/proteger.php";

if (isset($_POST['eliminarUsuario'])) {

    if (!empty($_POST['correoAntiguoUsuario'])) {

        $correoAntiguoUsuario = trim($_POST['correoAntiguoUsuario']);


        $consultaDelete= "DELETE FROM `usuarios` WHERE `Correo`='$correoAntiguoUsuario'";

            $validacionDelete = mysqli_query($conexion, $consultaDelete);

            if ($validacionDelete) {
                header("location: ../../views/usuarios/usuarios.php?msg=Usuario Eliminado");
                // echo '<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                //   <strong>Usuario eliminado</strong>
                //   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                //   </div>';

            } else {
                // echo '<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                //   <strong>No fue posible eliminar el usuario, por favor intente denuevo</strong>
                //   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                //   </div>';
                header("location: ../../views/usuarios/usuarios.php?msg=No fue posible eliminar el usuario");
            }
    }
}
