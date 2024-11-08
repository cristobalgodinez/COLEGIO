<?php

include_once "../controllers/conexion.php";
include_once "../controllers/session/proteger.php";



$consultaAsignacionR = "SELECT `asignaciones`.`id_Asignacion`,`estudiantes`.`Nombres`,`estudiantes`.`Apellidos`,`materias`.`Nombre_Materia`,`asignaciones`.`Fecha_Asignacion`
 FROM `asignaciones` JOIN `estudiantes` ON `asignaciones`.`id_estudiante`=`estudiantes`.`id_estudiante` 
 JOIN `materias` ON `asignaciones`.`id_Materia`=`materias`.`id_Materia`";


$validacionAsignacionR= mysqli_query($conexion, $consultaAsignacionR);

// if($validacionDocentesR){

//     echo "consulta realizada";

// }
// else{
//     echo "no lo logro hacerse la consulta";
// }



?>