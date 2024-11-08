<?php

include_once "../controllers/conexion.php";
include_once "../controllers/session/proteger.php";



$consultaCalificacionesR = "SELECT * FROM `calificaciones`";


$validacionCalificacionR= mysqli_query($conexion, $consultaCalificacionesR);

// if($validacionEstudiantes){

//     echo "consulta realizada";

// }
// else{
//     echo "no lo logro hacerse la consulta";
// }



?>