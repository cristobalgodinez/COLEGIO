<section class="estilo">
    <?php
    include("../../frameworks/bootstrap.php");
    include("../../frameworks/googleFonts.php");
    ?>
</section>
<?php

include_once "../conexion.php";
include_once "../session/proteger.php";

if (isset($_POST['editarUsuario'])) {

    if (
        !empty($_POST['nombreUsuario']) && !empty($_POST['nombreRealUsuario'])
        && !empty($_POST['apellidoUsuario']) && !empty($_POST['correoUsuario'])
        && !empty($_POST['contraseniaUsuario']) && !empty($_POST['confcontrasUsuario'])
        && !empty($_POST['correoAntiguoUsuario'])
    ) {

        $correoAntiguoUsuario = trim($_POST['correoAntiguoUsuario']);

        $nombreUsuario = trim($_POST['nombreUsuario']);
        $nombreRealUsuario = trim($_POST['nombreRealUsuario']);
        $apellidoUsuario = trim($_POST['apellidoUsuario']);
        $correoUsuario = trim($_POST['correoUsuario']);
        $contraseniaUsuario = trim($_POST['contraseniaUsuario']);
        $confcontrasUsuario = trim($_POST['confcontrasUsuario']);

        if ($contraseniaUsuario == $confcontrasUsuario) {


            $consultaUpdate = "UPDATE `usuarios` SET `Nombre_Usuario`='$nombreUsuario',`Nombre`='$nombreRealUsuario',
                        `Apellido`='$apellidoUsuario',`Correo`='$correoUsuario',`Contrasenia`='$contraseniaUsuario' 
                        WHERE `Correo`='$correoAntiguoUsuario'";

            $validacionUpdate = mysqli_query($conexion, $consultaUpdate);

            if ($validacionUpdate) {
                header("location: ../../views/usuarios/usuarios.php");

            } else {
                echo '<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                  <strong>No fue posible realizar la modificación, por favor intente denuevo</strong>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
                header("location: ../../views/usuarios/usuarios.php");
            }
            
        } else {
            echo '<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
              <strong>contraseñas distintas</strong>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            header("location: ../../views/usuarios/usuarios.php");
        }
    }
}
