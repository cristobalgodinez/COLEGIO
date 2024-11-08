<?php

include_once "../conexion.php";
include_once "../session/proteger.php";

if (isset($_POST['registrarMateria'])) {

    if (
        !empty($_POST['idMaterias']) && !empty($_POST['nombreMateria'])
        && !empty($_POST['gradoMateria']) && !empty($_POST['seccionMateria'])
        && !empty($_POST['docenteMateria'])
    ) {

        $idMaterias = trim($_POST['idMaterias']);
        $nombreMateria = trim($_POST['nombreMateria']);
        $gradoMateria = trim($_POST['gradoMateria']);
        $seccionMateria = trim($_POST['seccionMateria']);

        $docenteMateria = trim($_POST['docenteMateria']);


        $consultaMateriasC = "INSERT INTO `materias`(`id_Materia`, `Nombre_Materia`, `Grado`, `Seccion`, `id_Docente`)
         VALUES ('$idMaterias','$nombreMateria','$gradoMateria','$seccionMateria','$docenteMateria')";

        $validacionDocentes = mysqli_query($conexion, $consultaMateriasC);

        if ($validacionDocentes) {
            header("location: ../../views/materiasM.php?msg=Materia creada exitosamente");
        } else {

            header("location: ../../views/materiasM.php?msg=Materia creado exitosamente");
        }
    } else {
        header("location: ../../views/materiasM.php?msg=No ingreso todos los datos");
    }
}
