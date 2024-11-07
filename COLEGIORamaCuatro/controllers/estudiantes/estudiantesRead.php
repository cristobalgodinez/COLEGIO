<?php

include_once "../controllers/conexion.php";
include_once "../controllers/session/proteger.php";



$consulta = "SELECT * FROM `estudiantes`";


$validacionEstudiantes= mysqli_query($conexion, $consulta);

if($validacionEstudiantes){

    echo "consulta realizada";

}
else{
    echo "no lo logro hacerse la consulta";
}



?>