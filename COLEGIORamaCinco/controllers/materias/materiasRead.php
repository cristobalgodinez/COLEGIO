<?php

include_once "../controllers/conexion.php";
include_once "../controllers/session/proteger.php";



$consultaMateriasR = "SELECT `materias`.`id_Materia`,`materias`.`Nombre_Materia`,`materias`.`Grado`,`materias`.
`Seccion`,`docentes`.`Nombres`,`docentes`.`Apellidos` 
FROM `materias` JOIN `docentes` ON `materias`.`id_docente`=`docentes`.`id_docente`";


$validacionMateriasR= mysqli_query($conexion, $consultaMateriasR);

// if($validacionMaterias){

//     echo "consulta realizada";

// }
// else{
//     echo "no lo logro hacerse la consulta";
// }



?>