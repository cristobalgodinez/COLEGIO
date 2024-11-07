<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos</title>
    <link rel="stylesheet" href="../css/materiasM.css">
</head>

<body class="body">
    <section class="conexion"><!--Conexion-->
        <?php
        include "../controllers/conexion.php";
        ?>
    </section>


    <section class="sesionIniciada">
        <?php
        include "../controllers/session/proteger.php";
        ?>
    </section>


    <section class="estilo">
        <?php
        include("../frameworks/bootstrap.php");
        include("../frameworks/googleFonts.php");
        ?>
    </section>









    <div class="wrapper"><!--Barra de navegacion lateral-->

        <aside id="sidebar">
            <div class="h-100">
                <div class="sidebar-logo text-center"><!--Logo-->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <img src="../img/LOGO.png" alt="IMAGEN DEL LOGO">
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="sidebar-nav"><!--Barra de navegacion contenido-->
                    <div class="text-center">
                        <li class="sidebar-header">
                            CPES
                        </li>
                    </div>
                    <li class="sidebar-header">
                        Asignar
                    </li>
                    <li class="sidebar-item pb-3">
                        <a href="asignacionM.php" class="sidebar-link text-decoration-none">
                            <i class="fa-solid fa-pen-to-square"></i> Crear y ver asignación
                        </a>
                    </li>
                    <li class="sidebar-header">
                        Secciones
                    </li>
                    <li class="sidebar-item">
                        <a href="estudiantesM.php" class="sidebar-link text-decoration-none">
                            <i class="fa-solid fa-graduation-cap fa-xl"></i> Estudiantes
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="docentesM.php" class="sidebar-link text-decoration-none">
                            <i class="fa-solid fa-person-chalkboard fa-xl"></i> Docentes
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="materiasM.php" class="sidebar-link text-decoration-none">
                            <i class="fa-solid fa-book fa-xl pe-2"></i> Materias
                        </a>



                        <!--PENDIENTE DE AGREGAR MAS OPCIONES DE MATERIAS-->
                        <!-- <a href="materiasM.php" class="sidebar-link collapsed text-decoration-none" data-bs-toggle="collapse"
                            data-bs-target="#cursoAgregar" aria-expanded="false" aria-controls="cursoAgregar">
                            <i class="fa-solid fa-book fa-xl pe-2"></i> Materias
                        </a> -->
                        <!-- <ul id="cursoAgregar" class="sidebar-dropdown list-unstyled collapse"
                            data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link text-decoration-none">Grado y Sección</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link text-decoration-none">Califiaciones</a>
                            </li>
                        </ul> -->


                    </li>
                    <li class="sidebar-item">
                        <a href="calificacionesM.php" class="sidebar-link text-decoration-none">
                            <i class="fa-solid fa-clipboard-list fa-xl"></i> Calificaciones
                        </a>
                    </li>

                    <li class="sidebar-header pt-4 mt-4">
                        Acciones
                    </li>
                    <li class="sidebar-item">
                        <a href="usuarios/usuarios.php" class="sidebar-link text-decoration-none">
                            <i class="fa-solid fa-user-plus"></i> Crear usuario
                        </a>
                    </li>
                    <li class="sidebar-item ps-3">
                        <a href="../controllers/session/destruir.php" class="sidebar-link text-decoration-none">
                            <i class="fa-solid fa-arrow-left"></i> Salir
                        </a>
                    </li>
                </ul>
            </div>
        </aside>

        <div class="main">
            <nav class="navbar navbar-expand px-3"><!--Boton de la barra de navegacion-->
                <button class="btn" type="button" data-bs-theme="dark">
                    <span><i class="fa-solid fa-bars fa-2xl"></i></span>
                </button>
            </nav>

            <main class="content"><!--Ingreso a todo el contenido de las tablas-->
                <div class="container-fluid tablaEstudiantes">
                    <div class="col-12">






                        <section class="titulo">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-2">
                                        <div class="text-center my-3">
                                            <h1 class="text-light">Sección de Materias</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section><!--Boton del modal para agregar Docentes-->
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="d-grid col-12 col-sm-12 col-md-12 col-lg-12 mt-2 px-5">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AgregarCurso" data-bs-backdrop="#staticBackdrop">
                                            AGREGAR
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class="modalAgregar"><!--Modal para agregar los cursos-->
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-2">
                                        <div class="ContenidoModal">
                                            <div class="modal fade" id="AgregarCurso" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-scrollable modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title" id="staticBackdropLabel">Ingresar Datos de la Materia</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="container-fluid">
                                                                <form action="../controllers/materias/materiasCreate.php" method="post">
                                                                    <div class="row">
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-2">
                                                                            <input type="text" class="form-control" name="idMaterias" id="idMaterias" placeholder="Id" required>
                                                                        </div>
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-2">
                                                                            <input type="text" class="form-control" name="nombreMateria" id="nombreMateria" placeholder="Nombre del materia" required>
                                                                        </div>
                                                                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 mb-2">
                                                                            <select class="form-select" name="gradoMateria" id="gradoMateria" aria-label="Default select example" required>
                                                                                <!-- <option selected>Grado</option> -->
                                                                                <option value="">Grado</option>
                                                                                <option value="primero">Primero</option>
                                                                                <option value="segundo">Segundo</option>
                                                                                <option value="tercero">Tercero</option>
                                                                                <option value="cuarto">Cuarto</option>
                                                                                <option value="quinto">quinto</option>
                                                                                <option value="sexto">Sexto</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 mb-2">
                                                                            <select class="form-select" name="seccionMateria" id="seccionMateria" aria-label="Default select example" required>
                                                                                <!-- <option selected>Sección</option> -->
                                                                                <option value="">Sección</option>
                                                                                <option value="A">A</option>
                                                                                <option value="B">B</option>
                                                                                <option value="C">C</option>
                                                                                <option value="D">D</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 mb-2">
                                                                            <select class="form-select" name="docenteMateria" id="docenteMateria" aria-label="Default select example" required>
                                                                                <!-- <option selected>Sección</option> -->
                                                                                <option value="">Docente</option>
                                                                                <?php

                                                                                include "../controllers/docentes/docentesRead.php";

                                                                                while ($mostrarDocentesE = $validacionDocentesR->fetch_array()) {
                                                                                ?>
                                                                                    <option value="<?php echo $mostrarDocentesE['id_Docente']; ?>"><?php echo $mostrarDocentesE['Nombres']; ?><?php echo " ".$mostrarDocentesE['Apellidos']; ?></option>
                                                                                <?php
                                                                                }
                                                                                ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <!--La finalización del form esta abajo-->
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                                <div class="container-fluid">
                                                                    <div class="row">
                                                                        <div class="d-grid col-6 col-sm-6 col-md-6 col-lg-6">
                                                                            <button type="submit" class="btn btn-success" name="registrarMateria">Guardar Datos</button>
                                                                        </div>
                                                                        <div class="d-grid col-6 col-sm-6 col-md-6 col-lg-6">
                                                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar Acción</button>
                                                                        </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>


                        <section class="modalEditar"><!--Modal para editar los cursos-->
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-2">
                                        <div class="ContenidoModal">
                                            <div class="modal fade" id="EditarMateria" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-scrollable modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title" id="staticBackdropLabel">Editar Datos del Materia</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="container-fluid">
                                                                <form action="../controllers/materias/materiasUpdate.php" method="post">
                                                                    <div class="row">
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-4">
                                                                            <input type="text" class="form-control" name="EditaridMaterias" id="EditaridMaterias" placeholder="Id de la materia a editar" required>
                                                                        </div>
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-2">
                                                                            <input type="text" class="form-control" name="idMaterias" id="idMaterias" placeholder="Id" required>
                                                                        </div>
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-2">
                                                                            <input type="text" class="form-control" name="nombreMateria" id="nombreMateria" placeholder="Nombre del materia" required>
                                                                        </div>
                                                                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 mb-2">
                                                                            <select class="form-select" name="gradoMateria" id="gradoMateria" aria-label="Default select example" required>
                                                                                <!-- <option selected>Grado</option> -->
                                                                                <option value="">Grado</option>
                                                                                <option value="primero">Primero</option>
                                                                                <option value="segundo">Segundo</option>
                                                                                <option value="tercero">Tercero</option>
                                                                                <option value="cuarto">Cuarto</option>
                                                                                <option value="quinto">quinto</option>
                                                                                <option value="sexto">Sexto</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 mb-2">
                                                                            <select class="form-select" name="seccionMateria" id="seccionMateria" aria-label="Default select example" required>
                                                                                <!-- <option selected>Sección</option> -->
                                                                                <option value=""></option>
                                                                                <option value="A">A</option>
                                                                                <option value="B">B</option>
                                                                                <option value="C">C</option>
                                                                                <option value="D">D</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 mb-2">
                                                                            <select class="form-select" name="docenteMateria" id="docenteMateria" aria-label="Default select example" required>
                                                                                <!-- <option selected>Sección</option> -->
                                                                                <option value="">Docente</option>
                                                                                <?php

                                                                                include "../controllers/docentes/docentesRead.php";

                                                                                while ($mostrarDocentesE = $validacionDocentesR->fetch_array()) {
                                                                                ?>
                                                                                    <option value="<?php echo $mostrarDocentesE['id_Docente']; ?>"><?php echo $mostrarDocentesE['Nombres']; ?><?php echo " ".$mostrarDocentesE['Apellidos']; ?></option>
                                                                                <?php
                                                                                }
                                                                                ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <!--La finalización del form esta abajo-->
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                                <div class="container-fluid">
                                                                    <div class="row">
                                                                        <div class="d-grid col-6 col-sm-6 col-md-6 col-lg-6">
                                                                            <button type="submit" class="btn btn-success" name="editarMateria">Guardar Datos</button>
                                                                        </div>
                                                                        <div class="d-grid col-6 col-sm-6 col-md-6 col-lg-6">
                                                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar Acción</button>
                                                                        </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class="modalEliminar"><!--Modal para eliminar estudiantes-->
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-2">
                                        <div class="ContenidoModal">
                                            <div class="modal fade" id="EliminarMateria" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title" id="staticBackdropLabel">Eliminar Materia</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="container-fluid">
                                                                <form action="../controllers/estudiantes/estudiantesDelete.php" method="post">
                                                                    <div class="row">
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-3 text-center">
                                                                            <strong>Tomar en cuenta</strong>
                                                                            <span>Eliminar al docente asignado antes de eliminar esta materia</span>
                                                                        </div>
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-3">
                                                                            <input type="text" class="form-control" name="idEliminarMateria" id="idEliminarMateria" placeholder="Id de la materia a eliminar">
                                                                        </div>
                                                                    </div>
                                                                    <!--La finalización del form esta abajo-->
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                                <div class="container-fluid">
                                                                    <div class="row">
                                                                        <div class="d-grid col-6 col-sm-6 col-md-6 col-lg-6">
                                                                            <button type="submit" class="btn btn-success" name="EliminarMateria">Guardar Datos</button>
                                                                        </div>
                                                                        <div class="d-grid col-6 col-sm-6 col-md-6 col-lg-6">
                                                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar Acción</button>
                                                                        </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class="Tablas">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-2 px-5">
                                        <table class="table table-dark table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Id</th>
                                                    <th scope="col">Nombre de la materia</th>
                                                    <th scope="col">Grado</th>
                                                    <th scope="col">Sección</th>
                                                    <th scope="col">Estudiantes</th>
                                                    <th scope="col">Docente</th>
                                                    <th scope="col">Acción</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php

                                                include_once "../controllers/materias/materiasRead.php";

                                                if ($validacionMateriasR) {

                                                    while ($mostrarMaterias = $validacionMateriasR->fetch_array()) {
                                                ?>
                                                        <tr>
                                                            <th scope="col" style="color: #2a9d8f;"><?php echo $mostrarMaterias['id_Materia']; ?></th>
                                                            <th scope="col" style="color: #a4ac86;"><?php echo $mostrarMaterias['Nombre_Materia']; ?></th>
                                                            <th scope="col" style="color: #a4ac86;"><?php echo $mostrarMaterias['Grado']; ?></th>
                                                            <th scope="col" style="color: #a4ac86;"><?php echo $mostrarMaterias['Seccion']; ?></th>
                                                            <th scope="col" style="color: #a4ac86;"></th>
                                                            <th scope="col" style="color: #a4ac86;"><?php echo $mostrarMaterias['Nombres']; ?><?php echo "  " . $mostrarMaterias['Apellidos']; ?></th>
                                                            <th scope="col" style="color: #a4ac86;">
                                                                <a href="#" data-bs-toggle="modal" data-bs-target="#EditarMateria" data-bs-backdrop="#staticBackdrop"><i class=" fa-solid fa-pencil"></i></a>
                                                                <a href="#" data-bs-toggle="modal" data-bs-target="#EliminarMateria" data-bs-backdrop="#staticBackdrop"><i class="fa-solid fa-trash"></i></a>
                                                            </th>
                                                        </tr>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </section>









                    </div>
                </div>
            </main>
        </div>

    </div>
    <section class="contenidoJS"><!--Acciones de la barra de navegacion con JS-->
        <script src="../javaScript/barraNav.js"></script>
    </section>
</body>

</html>