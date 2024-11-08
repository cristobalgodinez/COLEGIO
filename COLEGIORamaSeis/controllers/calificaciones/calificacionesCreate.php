<?php

include_once "../conexion.php";
include_once "../session/proteger.php";

if (isset($_POST['registrarCalificacion'])) {

    if (
        !empty($_POST['EstudianteCalificacion']) && !empty($_POST['MateriaCalificacion'])
        && !empty($_POST['DocenteCalificacion'])
    ) {


        if (
            !empty($_POST['primeraCalificacion']) || !empty($_POST['segundaCalificacion']) || !empty($_POST['terceraCalificacion'])
            || !empty($_POST['cuartaCalificacion'])
        ) {


            $EstudianteCalificacion = trim($_POST['EstudianteCalificacion']);
            $MateriaCalificacion = trim($_POST['MateriaCalificacion']);
            $DocenteCalificacion = trim($_POST['DocenteCalificacion']);
            $primeraCalificacion = trim($_POST['primeraCalificacion']);
            $segundaCalificacion = trim($_POST['segundaCalificacion']);
            $terceraCalificacion = trim($_POST['terceraCalificacion']);
            $cuartaCalificacion = trim($_POST['cuartaCalificacion']);




            //CALCULAR EL PROMEDIO DE LAS CUATRO CALIFICACIONES
            if (
                !empty($_POST['primeraCalificacion']) && !empty($_POST['segundaCalificacion'])
                && !empty($_POST['terceraCalificacion']) && !empty($_POST['cuartaCalificacion'])
            ) {
                $promedio = (($primeraCalificacion + $segundaCalificacion + $terceraCalificacion + $cuartaCalificacion) / 4);
            } else if (
                !empty($_POST['primeraCalificacion']) && !empty($_POST['segundaCalificacion'])
                && !empty($_POST['terceraCalificacion'])
            ) {

                $promedio = (($primeraCalificacion + $segundaCalificacion + $terceraCalificacion) / 3);
            } else if (!empty($_POST['primeraCalificacion']) && !empty($_POST['segundaCalificacion'])) {

                $promedio = (($primeraCalificacion + $segundaCalificacion) / 2);
            } else if (!empty($_POST['primeraCalificacion'])) {

                $promedio = $primeraCalificacion;
            }









            $consultaCalificacionC = "INSERT INTO `calificaciones`(`id_Estudiante`, `id_Materia`, `id_Docente`, 
            `Calificacion_Uno`, `Calificacion_Dos`, `Calificacion_Tres`, `Calificacion_Cuatro`,`Promedio`) 
            VALUES ('$EstudianteCalificacion','$MateriaCalificacion','$DocenteCalificacion','$primeraCalificacion','$segundaCalificacion ',
            '$terceraCalificacion','$cuartaCalificacion','$promedio')";


            $validacionCalificacionC = mysqli_query($conexion, $consultaCalificacionC);

            if ($validacionCalificacionC) {
                header("location: ../../views/calificacionesM.php?msg=Calificacion realizada exitosamente");
            } else {
                header("location: ../../views/calificacionesM.php?msg=La calificacion no fue realizada");
            }
        }
    } else {
        header("location: ../../views/calificacionesM.php?msg=No ingreso todos los datos");
    }
}
