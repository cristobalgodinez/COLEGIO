<?php

include_once "../controllers/conexion.php";
include_once "../controllers/session/proteger.php";



$consultaMateriasR = "SELECT `calificaciones`.`id_Calificacion`,`estudiantes`.`Nombres`,
`estudiantes`.`Apellidos`, `materias`.`Nombre_Materia`, `docentes`.`Nombres`, `docentes`.
`Apellidos`, `calificaciones`.`Calificacion_Uno`,`calificaciones`.`Calificacion_Dos`,`calificaciones`.
`Calificacion_Tres`,`calificaciones`.`Calificacion_Cuatro`, `calificaciones`.`Promedio` 
FROM `calificaciones` JOIN `estudiantes` ON `calificaciones`.`id_estudiante`=`estudiantes`.`id_estudiante` 
JOIN `materias` ON `calificaciones`.`id_materia`=`materias`=`id_materia` JOIN docentes ON `calificaciones`.
`id_Docente`=`docentes`=`id_Docente`;";


$validacionMateriasR = mysqli_query($conexion, $consultaMateriasR);

// if($validacionMaterias){

//     echo "consulta realizada";

// }
// else{
//     echo "no lo logro hacerse la consulta";
// }
