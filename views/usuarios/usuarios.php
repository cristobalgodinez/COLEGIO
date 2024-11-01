<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiantes</title>
    <link rel="stylesheet" href="../../css/estudiantesM.css">
</head>

<body class="body">

    <!--CONEXION-->
    <!-- <section class="conexion">
        <?php
        // include_once "../../controllers/conexion.php";
        ?>
    </section> -->

    <section class="sesionIniciada">
        <?php
        include_once "../../controllers/session/proteger.php";
        ?>
    </section>



    <section class="estilo">
        <?php
        include("../../frameworks/bootstrap.php");
        include("../../frameworks/googleFonts.php");
        ?>
    </section>



    <div class="wrapper"><!--Barra de navegacion lateral-->


        <aside id="sidebar">
            <div class="h-100">
                <div class="sidebar-logo text-center"><!--Logo-->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <img src="../../img/LOGO.png" alt="IMAGEN DEL LOGO">
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
                        <a href="../asignacionM.php" class="sidebar-link text-decoration-none">
                            <i class="fa-solid fa-pen-to-square"></i> Crear y ver asignación
                        </a>
                    </li>
                    <li class="sidebar-header">
                        Secciones
                    </li>
                    <li class="sidebar-item">
                        <a href="../estudiantesM.php" class="sidebar-link text-decoration-none">
                            <i class="fa-solid fa-graduation-cap fa-xl"></i> Estudiantes
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="../docentesM.php" class="sidebar-link text-decoration-none">
                            <i class="fa-solid fa-person-chalkboard fa-xl"></i> Docentes
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="../materiasM.php" class="sidebar-link text-decoration-none">
                            <i class="fa-solid fa-book fa-xl pe-2"></i> Materias
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="../calificacionesM.php" class="sidebar-link text-decoration-none">
                            <i class="fa-solid fa-clipboard-list fa-xl"></i> Calificaciones
                        </a>
                    </li>

                    <li class="sidebar-header pt-4 mt-4">
                        Acciones
                    </li>
                    <li class="sidebar-item">
                        <!-- <a href="usuarios.php" class="sidebar-link text-decoration-none">
                            <i class="fa-solid fa-user-plus"></i> Crear usuario
                        </a> -->
                        <section><!--Controlador para ver los usuarios-->
                            <?php
                            include_once "../../controllers/usuarioAdministrador/usuarioAdmin.php";

                            if ($validacionAdministrador) {

                                while ($fila = $validacionAdministrador->fetch_array()) {

                                    if (($correoAdministrador = $_SESSION['correoUsuario']) == $fila['Correo'])

                            ?>
                                    <a href="usuarios.php" class="sidebar-link text-decoration-none">
                                        <i class="fa-solid fa-user-plus"></i> Crear usuario
                                    </a>
                                <?php
                            }
                        } else {
                                ?>
                                <a href="#" class="sidebar-link text-decoration-none">
                                    <i class="fa-solid fa-user-plus"></i> Crear usuario
                                </a>
                            <?php
                        }
                            ?>
                        </section>

                    </li>
                    <li class="sidebar-item ps-3">
                        <a href="../../controllers/session/destruir.php" class="sidebar-link text-decoration-none">
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


            <main class="content"><!--Espacio para ingresar nuevos usaurios de los docentes-->
                <div class="container-fluid">
                    <div class="col-12">





                        <section class="MostrarEstudiantes">

                            <div class="container-fluid"><!--Mostrar estudiantes-->
                                <div class="row">
                                    <section class="titulo">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-2">
                                                    <div class="text-center my-3">
                                                        <h1 class="text-light">Crear Usuarios</h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                    <section><!--Boton para agregar nuevo docente-->
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="d-grid col-12 col-sm-12 col-md-12 col-lg-12 mt-2 px-5">
                                                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#agregarUsuario" data-bs-backdrop="#staticBackdrop">
                                                        NUEVO USUARIO
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </section>


                                    <section class="modalAgregar">
                                        <!--Modal para agregar estudiantes-->
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-2">
                                                    <div class="ContenidoModal">
                                                        <div class="modal fade" id="agregarUsuario" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                                                <div class="modal-content" style="background-color: #1f2937;">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title text-white" id="staticBackdropLabel">Crear Nuevo Usuario</h4>
                                                                        <h2 class="ps-5">CPES</h2>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="container-fluid">
                                                                            <form action="../../controllers/usuarios/usuariosCreate.php" method="post">
                                                                                <div class="row">
                                                                                    <div class="text-center">
                                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-5">
                                                                                            <input type="text" class="form-control" name="nombreUsuario" id="nombreUsuario" placeholder="Nombre de usuario" required>
                                                                                        </div>
                                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-2">
                                                                                            <input type="text" class="form-control" name="nombreRealUsuario" id="nombreRealUsuario" placeholder="Nombre" required>
                                                                                        </div>
                                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-2">
                                                                                            <input type="text" class="form-control" name="apellidoUsuario" id="apellidoUsuario" placeholder="Apellido" required>
                                                                                        </div>
                                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-2">
                                                                                            <input type="email" class="form-control" name="correoUsuario" id="correoUsuario" placeholder="Correo" required>
                                                                                        </div>
                                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-2">
                                                                                            <input type="password" class="form-control" name="contraseniaUsuario" id="contraseniaUsuario" placeholder="Contraseña / 8 caracteres como mínimo" minlength="8" required>
                                                                                        </div>
                                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-2">
                                                                                            <input type="password" class="form-control" name="confcontrasUsuario" id="confcontrasUsuario" placeholder="Confirmar contraseña" minlength="8" required>
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
                                                                                        <button type="submit" class="btn btn-success" name="registrarUsuario">Guardar Datos</button>
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
                                                        <div class="modal fade" id="EditarUsuario" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                                                <div class="modal-content" style="background-color: #1f2937;">
                                                                    <div class="modal-header text-white">
                                                                        <h4 class="modal-title text-center" id="staticBackdropLabel">Editar Usuario</h4>
                                                                        <h2 class="ps-5">CPES</h2>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="container-fluid">
                                                                            <form action="../../controllers/usuarios/usuarioUpdate.php" method="post">
                                                                                <div class="row">
                                                                                    <div class="text-center">
                                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-4">
                                                                                            <input type="email" class="form-control" name="correoAntiguoUsuario" id="correoAntiguoUsuario" placeholder="Ingrese el correo del usuario a modificar" required>
                                                                                        </div>


                                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-2">
                                                                                            <input type="text" class="form-control" name="nombreUsuario" id="nombreUsuario" placeholder="Nombre de usuario" required>
                                                                                        </div>
                                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-2">
                                                                                            <input type="text" class="form-control" name="nombreRealUsuario" id="nombreRealUsuario" placeholder="Nombre" required>
                                                                                        </div>
                                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-2">
                                                                                            <input type="text" class="form-control" name="apellidoUsuario" id="apellidoUsuario" placeholder="Apellido" required>
                                                                                        </div>
                                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-4">
                                                                                            <input type="email" class="form-control" name="correoUsuario" id="correoUsuario" placeholder="Correo" required>
                                                                                        </div>
                                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-2">
                                                                                            <strong for="contraseniaUsuario" class="text-light">Llene este campo con la contraseña antigua o nueva</strong>
                                                                                        </div>
                                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-2">
                                                                                            <input type="password" class="form-control" name="contraseniaUsuario" id="contraseniaUsuario" placeholder="Contraseña / 8 caracteres como mínimo" minlength="8" required>
                                                                                        </div>
                                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-2">
                                                                                            <input type="password" class="form-control" name="confcontrasUsuario" id="confcontrasUsuario" placeholder="Confirmar contraseña" minlength="8" required>
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
                                                                                        <button type="submit" class="btn btn-success" name="editarUsuario">Guardar Datos</button>
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
                                                        <div class="modal fade" id="EliminarUsuario" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm">
                                                                <div class="modal-content" style="background-color: #1f2937;">
                                                                    <div class="modal-header text-white">
                                                                        <h5 class="modal-title text-center" id="staticBackdropLabel">Eliminar Usuario</h5>
                                                                        <h2 class="ps-2">CPES</h2>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="container-fluid">
                                                                            <form action="../../controllers/usuarios/usuarioDelete.php" method="post">
                                                                                <div class="row">
                                                                                    <div class="text-center">
                                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-2">
                                                                                            <strong class="text-light mb-3">Correo del usuario a elminar</strong>
                                                                                        </div>
                                                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-1">
                                                                                            <input type="email" class="form-control" name="correoAntiguoUsuario" id="correoAntiguoUsuario" placeholder="" required>
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
                                                                                        <button type="submit" class="btn btn-success" name="eliminarUsuario">Eliminar</button>
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
                                        <div class="container-fluid mb-3">
                                            <div class="row">
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-2 px-5">
                                                    <table class="table table-striped" style="background-color: #48cae4;">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Id</th>
                                                                <th scope="col">Nombre de usuario</th>
                                                                <th scope="col">Nombre</th>
                                                                <th scope="col">Apellido</th>
                                                                <th scope="col">Correo</th>
                                                                <th scope="col">Acción</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            <section><!--Controlador para ver los usuarios-->
                                                                <?php
                                                                include_once "../../controllers/usuarios/usuarioRead.php";

                                                                if ($validacionRead) {

                                                                    while ($fila = $validacionRead->fetch_array()) {

                                                                ?>
                                                                        <tr>
                                                                            <th scope="col"><?php echo $fila['id_Usuarios']; ?></th>
                                                                            <th scope="col"><?php echo $fila['Nombre_Usuario']; ?></th>
                                                                            <th scope="col"><?php echo $fila['Nombre']; ?></th>
                                                                            <th scope="col"><?php echo $fila['Apellido']; ?></th>
                                                                            <th scope="col"><?php echo $fila['Correo']; ?></th>
                                                                            <th scope="col">
                                                                                <a href="#" data-bs-toggle="modal" data-bs-target="#EditarUsuario" data-bs-backdrop="#staticBackdrop"><i class=" fa-solid fa-pencil"></i></a>
                                                                                <a href="#" data-bs-toggle="modal" data-bs-target="#EliminarUsuario" data-bs-backdrop="#staticBackdrop"><i class="fa-solid fa-trash"></i></a>
                                                                            </th>
                                                                        </tr>
                                                                <?php

                                                                    }
                                                                } else {
                                                                    echo '<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                                                                                <strong>Datos no disponibles en este momento</strong>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                                                </div>';
                                                                }
                                                                ?>
                                                            </section>

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
        <script src="../../javaScript/barraNav.js"></script>
    </section>
</body>

</html>