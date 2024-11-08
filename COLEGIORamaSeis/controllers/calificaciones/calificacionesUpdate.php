<?php

include_once "../conexion.php";
include_once "../session/proteger.php";

if (isset($_POST['editarCalificacion'])) {

    if (
        !empty($_POST['EstudianteCalificacion']) && !empty($_POST['MateriaCalificacion'])
        && !empty($_POST['DocenteCalificacion']) && !empty($_POST['idCalificacionEditar'])
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

            $idCalificacionEditar = trim($_POST['idCalificacionEditar']);




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



            $consultaCalificacionU= "UPDATE `calificaciones` SET `id_Estudiante`='$EstudianteCalificacion',
            `id_Materia`='$MateriaCalificacion',`id_Docente`='$DocenteCalificacion',`Calificacion_Uno`='$primeraCalificacion',
            `Calificacion_Dos`='$segundaCalificacion',`Calificacion_Tres`='$terceraCalificacion',`Calificacion_Cuatro`='$cuartaCalificacion',
            `Promedio`='$promedio' WHERE `id_Calificacion`='$idCalificacionEditar'";



            $validacionCalificacionU = mysqli_query($conexion, $consultaCalificacionU);

            if ($validacionCalificacionU) {
                header("location: ../../views/calificacionesM.php?msg=Calificacion editada exitosamente");
            } else {
                header("location: ../../views/calificacionesM.php?msg=La calificacion no fue logro editarse");
            }
        }
    } else {
        header("location: ../../views/calificacionesM.php?msg=No ingreso todos los datos");
    }
}
