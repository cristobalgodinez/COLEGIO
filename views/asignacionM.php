<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grado y Sección</title>
    <link rel="stylesheet" href="../css/asignacionesM.css">
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
                                            <h1 class="text-light">Sección de Asignaciones</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section><!--Boton del modal para agregar estudiante-->
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="d-grid col-12 col-sm-12 col-md-12 col-lg-12 mt-2 px-5">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AgregarGradSec" data-bs-backdrop="#staticBackdrop">
                                            AGREGAR
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </section>


                        <section class="modalAgregar"><!--Modal para agregar grados y secciones-->
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-2">
                                        <div class="ContenidoModal">
                                            <div class="modal fade" id="AgregarGradSec" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-scrollable modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title" id="staticBackdropLabel">Ingresar grado y sección</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="container-fluid">
                                                                <form action="crearEstudiante.php" method="get">
                                                                    <div class="row">
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-2">
                                                                            <input type="text" class="form-control" name="Id" id="Id" placeholder="Id" required>
                                                                        </div>
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-2">
                                                                            <input type="text" class="form-control" name="GradoNombre" id="GradoNombre" placeholder="Nombre del grado" required>
                                                                        </div>
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-2">
                                                                            <input type="text" class="form-control" name="LetraSeccion" id="LetraSeccion" placeholder="Letra de la sección" require>
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
                                                                            <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Guardar Datos</button>
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


                        <section class="modalAgregar"><!--Modal para editar grados y secciones-->
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-2">
                                        <div class="ContenidoModal">
                                            <div class="modal fade" id="EditarGradSec" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-scrollable modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title" id="staticBackdropLabel">Editar grado y sección</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="container-fluid">
                                                                <form action="crearEstudiante.php" method="get">
                                                                    <div class="row">
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-2">
                                                                            <input type="text" class="form-control" name="Id" id="Id" placeholder="Id" required>
                                                                        </div>
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-2">
                                                                            <input type="text" class="form-control" name="GradoNombre" id="GradoNombre" placeholder="Nombre del grado" required>
                                                                        </div>
                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-2">
                                                                            <input type="text" class="form-control" name="LetraSeccion" id="LetraSeccion" placeholder="Letra de la sección" require>
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
                                                                            <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Guardar Datos</button>
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
                                                    <th scope="col-3">Id</th>
                                                    <th scope="col-3">Nombre del grado</th>
                                                    <th scope="col-3">Letra de la sección</th>
                                                    <th scope="col-3">Acción</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="col-3"></th>
                                                    <th scope="col-3"></th>
                                                    <th scope="col-3"></th>
                                                    <th scope="col-3">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#EditarGradSec" data-bs-backdrop="#staticBackdrop"><i class=" fa-solid fa-pencil"></i></a>
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#PENDIDNTE DE AGREGAR" data-bs-backdrop="#staticBackdrop"><i class="fa-solid fa-trash"></i></a>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th scope="col-3"></th>
                                                    <th scope="col-3"></th>
                                                    <th scope="col-3"></th>
                                                    <th scope="col-3">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#EditarGradSec" data-bs-backdrop="#staticBackdrop"><i class=" fa-solid fa-pencil"></i></a>
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#PENDIDNTE DE AGREGAR" data-bs-backdrop="#staticBackdrop"><i class="fa-solid fa-trash"></i></a>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th scope="col-3"></th>
                                                    <th scope="col-3"></th>
                                                    <th scope="col-3"></th>
                                                    <th scope="col-3">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#EditarGradSec" data-bs-backdrop="#staticBackdrop"><i class=" fa-solid fa-pencil"></i></a>
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#PENDIDNTE DE AGREGAR" data-bs-backdrop="#staticBackdrop"><i class="fa-solid fa-trash"></i></a>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th scope="col-3"></th>
                                                    <th scope="col-3"></th>
                                                    <th scope="col-3"></th>
                                                    <th scope="col-3">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#EditarGradSec" data-bs-backdrop="#staticBackdrop"><i class=" fa-solid fa-pencil"></i></a>
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#PENDIDNTE DE AGREGAR" data-bs-backdrop="#staticBackdrop"><i class="fa-solid fa-trash"></i></a>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th scope="col-3"></th>
                                                    <th scope="col-3"></th>
                                                    <th scope="col-3"></th>
                                                    <th scope="col-3">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#EditarGradSec" data-bs-backdrop="#staticBackdrop"><i class=" fa-solid fa-pencil"></i></a>
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#PENDIDNTE DE AGREGAR" data-bs-backdrop="#staticBackdrop"><i class="fa-solid fa-trash"></i></a>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th scope="col-3"></th>
                                                    <th scope="col-3"></th>
                                                    <th scope="col-3"></th>
                                                    <th scope="col-3">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#EditarGradSec" data-bs-backdrop="#staticBackdrop"><i class=" fa-solid fa-pencil"></i></a>
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#PENDIDNTE DE AGREGAR" data-bs-backdrop="#staticBackdrop"><i class="fa-solid fa-trash"></i></a>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th scope="col-3"></th>
                                                    <th scope="col-3"></th>
                                                    <th scope="col-3"></th>
                                                    <th scope="col-3">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#EditarGradSec" data-bs-backdrop="#staticBackdrop"><i class=" fa-solid fa-pencil"></i></a>
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#PENDIDNTE DE AGREGAR" data-bs-backdrop="#staticBackdrop"><i class="fa-solid fa-trash"></i></a>
                                                    </th>
                                                </tr>
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