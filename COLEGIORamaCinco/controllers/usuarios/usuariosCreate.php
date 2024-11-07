<section class="estilo">
        <?php
        include("../../frameworks/bootstrap.php");
        include("../../frameworks/googleFonts.php");
        ?>
    </section>
<?php

include_once "../conexion.php";
include_once "../session/proteger.php";

if (isset($_POST['registrarUsuario'])) {

    if (
        !empty($_POST['nombreUsuario']) && !empty($_POST['nombreRealUsuario'])
        && !empty($_POST['apellidoUsuario']) && !empty($_POST['correoUsuario'])
        && !empty($_POST['contraseniaUsuario']) && !empty($_POST['confcontrasUsuario'])
    ) {

        $nombreUsuario = trim($_POST['nombreUsuario']);
        $nombreRealUsuario = trim($_POST['nombreRealUsuario']);
        $apellidoUsuario = trim($_POST['apellidoUsuario']);
        $correoUsuario = trim($_POST['correoUsuario']);
        $contraseniaUsuario = trim($_POST['contraseniaUsuario']);
        $confcontrasUsuario = trim($_POST['confcontrasUsuario']);

        if ($contraseniaUsuario == $confcontrasUsuario) {


            $consulta = "INSERT INTO `usuarios`(`Nombre_Usuario`, `Nombre`, `Apellido`, `Correo`, `Contrasenia`) 
                    VALUES ('$nombreUsuario','$nombreRealUsuario','$apellidoUsuario','$correoUsuario','$contraseniaUsuario')";

            $validacion = mysqli_query($conexion, $consulta);

            if($validacion){
                header("location: ../../views/usuarios/usuarios.php?msg=Usuario creado exitosamente");
            }
            else{
                echo '<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                  <strong>No fue posible crear al usuario, por favor intente denuevo</strong>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
            }

        }else{
            echo '<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
              <strong>contraseñas distintas</strong>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
              header("location: ../../views/usuarios/usuarios.php");
        }

    }

}
