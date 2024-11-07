<?php

include_once "../controllers/conexion.php";
include_once "../controllers/session/proteger.php";



$consultaEstudiantesR = "SELECT * FROM `estudiantes`";


$validacionEstudiantesR= mysqli_query($conexion, $consultaEstudiantesR);

// if($validacionEstudiantes){

//     echo "consulta realizada";

// }
// else{
//     echo "no lo logro hacerse la consulta";
// }



?>