<?php

include_once "../conexion.php";
include_once "../session/proteger.php";

if (isset($_POST['editarMateria'])) {

    if (!empty($_POST['idMaterias']) && !empty($_POST['nombreMateria'])
        && !empty($_POST['gradoMateria']) && !empty($_POST['seccionMateria'])
        && !empty($_POST['docenteMateria']) && !empty($_POST['EditaridMaterias'])) {

        $idMaterias = trim($_POST['idMaterias']);
        $nombreMateria = trim($_POST['nombreMateria']);
        $gradoMateria = trim($_POST['gradoMateria']);
        $seccionMateria = trim($_POST['seccionMateria']);

        $docenteMateria = trim($_POST['docenteMateria']);
        $EditaridMaterias = trim($_POST['EditaridMaterias']);



        $consultaMateriasU = "UPDATE `materias` SET `id_Materia`='$idMaterias',`Nombre_Materia`='$nombreMateria',`Grado`='$gradoMateria',
        `Seccion`='$seccionMateria',`id_Docente`='$docenteMateria' WHERE `id_Materia`='$EditaridMaterias'";


        $validacionMateriasU = mysqli_query($conexion, $consultaMateriasU);

        if ($validacionMateriasU) {
            header("location: ../../views/materiasM.php?msg=Materia editada exitosamente");

        } else {

                   header("location: ../../views/materiasM.php?msg=No fue posible editar la materia");
        }
    } else {
        header("location: ../../views/materiasM.php?msg=No ingreso todos los datos");
    }
}