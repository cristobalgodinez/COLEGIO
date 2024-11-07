<?php

include_once "../controllers/conexion.php";
include_once "../controllers/session/proteger.php";



$consultaDocentesR = "SELECT * FROM `docentes`";


$validacionDocentesR= mysqli_query($conexion, $consultaDocentesR);

// if($validacionDocentesR){

//     echo "consulta realizada";

// }
// else{
//     echo "no lo logro hacerse la consulta";
// }



?>