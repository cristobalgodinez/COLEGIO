<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiantes</title>
    <link rel="stylesheet" href="../css/estudiantesM.css">
</head>

<body class="body">
    <section class="conexion"><!--Conexion-->
        <?php
        include "../controllers/conexion.php";
        ?>
    </section>

    <!--PENDIENTE DE QUITAR CUANDO SE AGREGUE SU CONTROLADOR PORQUE EL CONTROLADOR TIENE QUE LLEVAR EL session_start-->
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








                        <section class="MostrarEstudiantes">

                            <div class="container-fluid"><!--Mostrar estudiantes-->
                                <div class="row">
                                    <section class="titulo">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-2">
                                                    <div class="text-center my-3">
                                                        <h1 class="text-light">Sección de Estudiantes</h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                    <section><!--Boton del modal para agregar estudiante-->
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="d-grid col-12 col-sm-12 col-md-12 col-lg-12 mt-2 px-5">
                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AgregarEstudiante" data-bs-backdrop="#staticBackdrop">
                                                        AGREGAR
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </section>


                                    <section class="modalAgregar"><!--Modal para agregar estudiantes-->
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-2">
                                                    <div class="ContenidoModal">
                                                        <div class="modal fade" id="AgregarEstudiante" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-scrollable modal-xl">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h1 class="modal-title" id="staticBackdropLabel">Ingresar Datos del Escolar</h1>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="container-fluid">
                                                                            <form action="consultas/recibirDatos.php" method="post">
                                                                                <div class="row">
                                                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-2"><!--EL IDE ES INDICADO POR EL USUARIO PARA QUE SEA A SU CONVENIENCIA CREARLO, NO ESTA COMO AUTOINCREMENTAL-->
                                                                                        <input type="number" class="form-control" name="idEstudiantes" id="idEstudiantes" placeholder="Id" required>
                                                                                    </div>
                                                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-2">
                                                                                        <input type="text" class="form-control" name="nombresEstudiantes" id="nombresEstudiantes" placeholder="Nombres" required>
                                                                                    </div>
                                                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-2">
                                                                                        <input type="text" class="form-control" name="apellidosEstudiantes" id="apellidosEstudiantes" placeholder="Apellidos" required>
                                                                                    </div>
                                                                                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 mb-2">
                                                                                        <select class="form-select" name="gradoEstudiantes" id="gradoEstudiantes" aria-label="Default select example" required>
                                                                                            <!-- <option selected>Grado</option> -->
                                                                                            <option value="">Grado</option>
                                                                                            <option value="primero">Primero</option>
                                                                                            <option value="segundo">Segundo</option>
                                                                                            <option value="tercer">Tercero</option>
                                                                                            <option value="cuarto">Cuarto</option>
                                                                                            <option value="quinto">Quinto</option>
                                                                                            <option value="sexto">Sexto</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 mb-2">
                                                                                        <select class="form-select" name="seccionEstudiantes" id="seccionEstudiantes" aria-label="Default select example" required>
                                                                                            <!-- <option selected>Sección</option> -->
                                                                                            <option value="">Sección</option>
                                                                                            <option value="seccionA">A</option>
                                                                                            <option value="seccionB">B</option>
                                                                                            <option value="SeccionC">C</option>
                                                                                            <option value="SeccionD">D</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-2">
                                                                                        <input type="number" class="form-control" name="cuiEstudiantes" id="cuiEstudiantes" placeholder="Cui" required>
                                                                                    </div>
                                                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-4">
                                                                                        <input type="text" class="form-control" name="generoEstudiantes" id="generoEstudiantes" placeholder="Género" required>
                                                                                    </div>
                                                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-2">
                                                                                        <input type="text" class="form-control" name="noApEncarEstudiantes" id="noApEncarEstudiantes" placeholder="Nombre y Apellido del Encargado" required>
                                                                                    </div>
                                                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-2">
                                                                                        <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Teléfono" required>
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
                                                                                        <button type="submit" class="btn btn-success">Guardar Datos</button>
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


                                    <section class="modalEditar"><!--Modal para editar estudiantes-->
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-2">
                                                    <div class="ContenidoModal">
                                                        <div class="modal fade" id="EditarEstudiante" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-scrollable modal-xl">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h1 class="modal-title" id="staticBackdropLabel">Editar Datos del Escolar</h1>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="container-fluid">
                                                                            <form action="consultas/recibirDatos.php" method="post">
                                                                                <div class="row">
                                                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-4">
                                                                                        <input type="number" class="form-control" name="idEstudiantes" id="idEstudiantes" placeholder="Id del estudiante a editar">
                                                                                    </div>

                                                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-2"><!--EL IDE ES INDICADO POR EL USUARIO PARA QUE SEA A SU CONVENIENCIA CREARLO, NO ESTA COMO AUTOINCREMENTAL-->
                                                                                        <input type="number" class="form-control" name="idEstudiantes" id="idEstudiantes" placeholder="Id">
                                                                                    </div>
                                                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-2">
                                                                                        <input type="text" class="form-control" name="nombresEstudiantes" id="nombresEstudiantes" placeholder="Nombres">
                                                                                    </div>
                                                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-2">
                                                                                        <input type="text" class="form-control" name="apellidosEstudiantes" id="apellidosEstudiantes" placeholder="Apellidos">
                                                                                    </div>
                                                                                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 mb-2">
                                                                                        <select class="form-select" name="gradoEstudiantes" id="gradoEstudiantes" aria-label="Default select example">
                                                                                            <option selected>Grado</option>
                                                                                            <option value="primero">Primero</option>
                                                                                            <option value="segundo">Segundo</option>
                                                                                            <option value="tercer">Tercero</option>
                                                                                            <option value="cuarto">Cuarto</option>
                                                                                            <option value="quinto">Quinto</option>
                                                                                            <option value="sexto">Sexto</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 mb-2">
                                                                                        <select class="form-select" name="seccionEstudiantes" id="seccionEstudiantes" aria-label="Default select example">
                                                                                            <option selected>Sección</option>
                                                                                            <option value="seccionA">A</option>
                                                                                            <option value="seccionB">B</option>
                                                                                            <option value="SeccionC">C</option>
                                                                                            <option value="SeccionD">D</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-2">
                                                                                        <input type="number" class="form-control" name="cuiEstudiantes" id="cuiEstudiantes" placeholder="Cui">
                                                                                    </div>
                                                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-4">
                                                                                        <input type="text" class="form-control" name="generoEstudiantes" id="generoEstudiantes" placeholder="Género">
                                                                                    </div>
                                                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-2">
                                                                                        <input type="text" class="form-control" name="noApEncarEstudiantes" id="noApEncarEstudiantes" placeholder="Nombre y Apellido del Encargado">
                                                                                    </div>
                                                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-2">
                                                                                        <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Teléfono">
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
                                                                                        <button type="submit" class="btn btn-success">Guardar Datos</button>
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
                                                        <div class="modal fade" id="EliminarEstudiante" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm">
                                                                <div class="modal-content" style="background-color: #1f2937;">
                                                                    <div class="modal-header text-white">
                                                                        <h5 class="modal-title text-center" id="staticBackdropLabel">Eliminar Estudiante</h5>
                                                                        <h2 class="ps-2">CPES</h2>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="container-fluid">
                                                                            <form action="../../controllers/usuarios/usuarioDelete.php" method="post">
                                                                                <div class="row">
                                                                                    <div class="text-center">
                                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-2">
                                                                                            <strong class="text-light mb-3">Id del estudiante a elminar</strong>
                                                                                        </div>
                                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-1">
                                                                                            <input type="number" class="form-control" name="idAntiguoUsuario" id="idAntiguoUsuario" placeholder="" required>
                                                                                        </div>
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
                                                                                        <button type="submit" class="btn btn-success" name="eliminarEstudiante">Eliminar</button>
                                                                                    </div>
                                                                                    <div class="d-grid col-6 col-sm-6 col-md-6 col-lg-6">
                                                                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
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
                                                                <th scope="col">Nombres</th>
                                                                <th scope="col">Apellidos</th>
                                                                <th scope="col">Grado</th>
                                                                <th scope="col">Sección</th>
                                                                <th scope="col">Cui</th>
                                                                <th scope="col">Género</th>
                                                                <th scope="col">N. Encargado</th>
                                                                <th scope="col">Teléfono</th>
                                                                <th scope="col">Acción</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col">
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#EditarEstudiante" data-bs-backdrop="#staticBackdrop"><i class=" fa-solid fa-pencil"></i></a>
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#EliminarEstudiante" data-bs-backdrop="#staticBackdrop"><i class="fa-solid fa-trash"></i></a>
                                                                </th>
                                                            </tr>
                                                            <!--CONTENIDO DE PRUEBA-->
                                                            <tr>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col">
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#EditarEstudiante" data-bs-backdrop="#staticBackdrop"><i class=" fa-solid fa-pencil"></i></a>
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#EliminarEstudiante" data-bs-backdrop="#staticBackdrop"><i class="fa-solid fa-trash"></i></a>
                                                                </th>
                                                            </tr>
                                                            <!--CONTENIDO DE PRUEBA-->
                                                            <tr>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col">
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#EditarEstudiante" data-bs-backdrop="#staticBackdrop"><i class=" fa-solid fa-pencil"></i></a>
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#EliminarEstudiante" data-bs-backdrop="#staticBackdrop"><i class="fa-solid fa-trash"></i></a>
                                                                </th>
                                                            </tr>
                                                            <!--CONTENIDO DE PRUEBA-->
                                                            <tr>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col">
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#EditarEstudiante" data-bs-backdrop="#staticBackdrop"><i class=" fa-solid fa-pencil"></i></a>
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#EliminarEstudiante" data-bs-backdrop="#staticBackdrop"><i class="fa-solid fa-trash"></i></a>
                                                                </th>
                                                            </tr>
                                                            <!--CONTENIDO DE PRUEBA-->
                                                            <tr>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col">
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#EditarEstudiante" data-bs-backdrop="#staticBackdrop"><i class=" fa-solid fa-pencil"></i></a>
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#EliminarEstudiante" data-bs-backdrop="#staticBackdrop"><i class="fa-solid fa-trash"></i></a>
                                                                </th>
                                                            </tr>
                                                            <!--CONTENIDO DE PRUEBA-->
                                                            <tr>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col">
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#EditarEstudiante" data-bs-backdrop="#staticBackdrop"><i class=" fa-solid fa-pencil"></i></a>
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#EliminarEstudiante" data-bs-backdrop="#staticBackdrop"><i class="fa-solid fa-trash"></i></a>
                                                                </th>
                                                            </tr>
                                                            <!--CONTENIDO DE PRUEBA-->
                                                            <tr>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col">
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#EditarEstudiante" data-bs-backdrop="#staticBackdrop"><i class=" fa-solid fa-pencil"></i></a>
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#EliminarEstudiante" data-bs-backdrop="#staticBackdrop"><i class="fa-solid fa-trash"></i></a>
                                                                </th>
                                                            </tr>
                                                            <!--CONTENIDO DE PRUEBA-->
                                                            <tr>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col">
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#EditarEstudiante" data-bs-backdrop="#staticBackdrop"><i class=" fa-solid fa-pencil"></i></a>
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#EliminarEstudiante" data-bs-backdrop="#staticBackdrop"><i class="fa-solid fa-trash"></i></a>
                                                                </th>
                                                            </tr>
                                                            <!--CONTENIDO DE PRUEBA-->
                                                            <tr>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col">
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#EditarEstudiante" data-bs-backdrop="#staticBackdrop"><i class=" fa-solid fa-pencil"></i></a>
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#EliminarEstudiante" data-bs-backdrop="#staticBackdrop"><i class="fa-solid fa-trash"></i></a>
                                                                </th>
                                                            </tr>
                                                            <!--CONTENIDO DE PRUEBA-->
                                                            <tr>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col"></th>
                                                                <th scope="col">
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#EditarEstudiante" data-bs-backdrop="#staticBackdrop"><i class=" fa-solid fa-pencil"></i></a>
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#EliminarEstudiante" data-bs-backdrop="#staticBackdrop"><i class="fa-solid fa-trash"></i></a>
                                                                </th>
                                                            </tr>
                                                            <!--CONTENIDO DE PRUEBA-->
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
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