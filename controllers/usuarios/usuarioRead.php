<section class="estilo">
    <?php
    include("../../frameworks/bootstrap.php");
    include("../../frameworks/googleFonts.php");
    ?>
</section>
<?php

//TOMAR EN CUENTA QUE CUANDO SE INCLUYE ESTE ARCHIVO EN OTRO LUGAR, 
//SE TIENE QUE TOMAR LA DIRECCION PARA INGRESAR PARTIENDO DESDE EL ARCHIVO EN DONDE ESTE LLAMADO ESTE ARCHIVO NO PARTIENDO DESDE ESTE ARCHIVO

// include_once "../conexion.php";
include_once "../../controllers/conexion.php";
// include_once "../session/proteger.php";
include_once "../../controllers/session/proteger.php";


if ($conexion) {


    $consultaRead= "SELECT * FROM `usuarios`";

    $validacionRead = mysqli_query($conexion, $consultaRead);

    // if ($validacionRead) {
    //     header("location: ../../views/usuarios/usuarios.php");
    // } else {
    //     echo '<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
    //             <strong>Datos no disponibles en este momento</strong>
    //             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    //             </div>';
    //     header("location: ../../views/usuarios/usuarios.php");
    // }
}
