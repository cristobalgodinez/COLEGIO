<?php

    include "conexion.php";

    session_start();




    if (isset($_POST['ingresar'])) {

        if (!empty($_POST['nombreUsuario']) && !empty($_POST['correoUsuario']) && !empty($_POST['contrasUsuario'])) {

            $nombreUsuario = trim($_POST['nombreUsuario']);
            $correoUsuario = trim($_POST['correoUsuario']);
            $contrasUsuario = trim($_POST['contrasUsuario']);


            $consulta = "SELECT `Nombre_Usuario`, `Correo`, `Contrasenia` FROM `usuarios` 
                        WHERE `Nombre_Usuario`= '$nombreUsuario' AND `Correo`= '$correoUsuario' 
                        AND `Contrasenia`='$contrasUsuario'";

            $validacion = mysqli_query($conexion, $consulta);

            $datosArrojados = $validacion;

            if ($datosArrojados->fetch_object()) {

                $_SESSION['registrado'] = true;

                //VARIABLE DE SESSION TEMPORAL
                $_SESSION['correoUsuario']=$correoUsuario;
                
                
                header("location: ../views/estudiantesM.php?msg=Datos correctos bienvenido");
                exit;
            } else {
                // echo '<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                //      <strong>Datos incorrectos, por favor puede volver a interlo</strong>
                //      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                //      </div>';
                header("location: ../index.php?msg=Datos incorrectos");
            }
        }

        //PENDIENTE DE AGREGAR PARA VALIR CAMPOS SIN LLENAR
        // else {
        //     echo '<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
        //     <strong>Se necesitan llenar todos los campos, por favor puede volver a interlo</strong>
        //     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        //     </div>';
        // }





    }

    //PENDIENTE DE AGREGAR VALIR SI FUE PRESIONADO EL BOTON DE INGRESAR
    // else {
    //     echo '<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
    //         <strong>Por favor llene los campos y presione ingresar</strong>
    //         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    //         </div>';
    // }
?>

