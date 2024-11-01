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
    <!-- <section class="sesionIniciada">
        <?php
        // include "../controllers/session/proteger.php";
        ?>
    </section> -->



    <section class="estilo">
        <?php
        include("../frameworks/bootstrap.php");
        include("../frameworks/googleFonts.php");
        ?>
    </section>



    







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
                                                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-2">
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
                                                                                        <select class="form-select" name="seccionEstudiantes" id="seccionEstudiantes" aria-label="Default select example" required>
                                                                                            <option selected>Sección</option>
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


                                    <section class="modalAgregar"><!--Modal para editar estudiantes-->
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
                                                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-2">
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


                                    <section class="Tablas">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-2 px-5">
                                                    <table class="table table-dark table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col-2">Id</th>
                                                                <th scope="col-1">Nombres</th>
                                                                <th scope="col-1">Apellidos</th>
                                                                <th scope="col-1">Grado</th>
                                                                <th scope="col-1">Sección</th>
                                                                <th scope="col-1">Cui</th>
                                                                <th scope="col-1">Género</th>
                                                                <th scope="col-1">N. Encargado</th>
                                                                <th scope="col-1">Teléfono</th>
                                                                <th scope="col-2">Acción</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="col-2"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>

                                                                <th scope="col-2">
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#EditarEstudiante" data-bs-backdrop="#staticBackdrop"><i class=" fa-solid fa-pencil"></i></a>
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#PENDIDNTE DE AGREGAR" data-bs-backdrop="#staticBackdrop"><i class="fa-solid fa-trash"></i></a>
                                                                </th>
                                                            </tr>

                                                            <tr><!--CONTENIDO DE PRUEBA-->
                                                                <th scope="col-2"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>

                                                                <th scope="col-2">
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#EditarEstudiante" data-bs-backdrop="#staticBackdrop"><i class=" fa-solid fa-pencil"></i></a>
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#PENDIDNTE DE AGREGAR" data-bs-backdrop="#staticBackdrop"><i class="fa-solid fa-trash"></i></a>
                                                                </th>
                                                            </tr>

                                                            <tr><!--CONTENIDO DE PRUEBA-->
                                                                <th scope="col-2"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>

                                                                <th scope="col-2">
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#EditarEstudiante" data-bs-backdrop="#staticBackdrop"><i class=" fa-solid fa-pencil"></i></a>
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#PENDIDNTE DE AGREGAR" data-bs-backdrop="#staticBackdrop"><i class="fa-solid fa-trash"></i></a>
                                                                </th>
                                                            </tr>

                                                            <tr><!--CONTENIDO DE PRUEBA-->
                                                                <th scope="col-2"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>

                                                                <th scope="col-2">
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#EditarEstudiante" data-bs-backdrop="#staticBackdrop"><i class=" fa-solid fa-pencil"></i></a>
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#PENDIDNTE DE AGREGAR" data-bs-backdrop="#staticBackdrop"><i class="fa-solid fa-trash"></i></a>
                                                                </th>
                                                            </tr>

                                                            <tr><!--CONTENIDO DE PRUEBA-->
                                                                <th scope="col-2"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>

                                                                <th scope="col-2">
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#EditarEstudiante" data-bs-backdrop="#staticBackdrop"><i class=" fa-solid fa-pencil"></i></a>
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#PENDIDNTE DE AGREGAR" data-bs-backdrop="#staticBackdrop"><i class="fa-solid fa-trash"></i></a>
                                                                </th>
                                                            </tr>

                                                            <tr><!--CONTENIDO DE PRUEBA-->
                                                                <th scope="col-2"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>

                                                                <th scope="col-2">
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#EditarEstudiante" data-bs-backdrop="#staticBackdrop"><i class=" fa-solid fa-pencil"></i></a>
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#PENDIDNTE DE AGREGAR" data-bs-backdrop="#staticBackdrop"><i class="fa-solid fa-trash"></i></a>
                                                                </th>
                                                            </tr>

                                                            <tr><!--CONTENIDO DE PRUEBA-->
                                                                <th scope="col-2"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>

                                                                <th scope="col-2">
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#EditarEstudiante" data-bs-backdrop="#staticBackdrop"><i class=" fa-solid fa-pencil"></i></a>
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#PENDIDNTE DE AGREGAR" data-bs-backdrop="#staticBackdrop"><i class="fa-solid fa-trash"></i></a>
                                                                </th>
                                                            </tr>

                                                            <tr><!--CONTENIDO DE PRUEBA-->
                                                                <th scope="col-2"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>

                                                                <th scope="col-2">
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#EditarEstudiante" data-bs-backdrop="#staticBackdrop"><i class=" fa-solid fa-pencil"></i></a>
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#PENDIDNTE DE AGREGAR" data-bs-backdrop="#staticBackdrop"><i class="fa-solid fa-trash"></i></a>
                                                                </th>
                                                            </tr>

                                                            <tr><!--CONTENIDO DE PRUEBA-->
                                                                <th scope="col-2"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>
                                                                <th scope="col-1"></th>

                                                                <th scope="col-2">
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#EditarEstudiante" data-bs-backdrop="#staticBackdrop"><i class=" fa-solid fa-pencil"></i></a>
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
                        </section>






    </div>
    <section class="contenidoJS"><!--Acciones de la barra de navegacion con JS-->
        <script src="../javaScript/barraNav.js"></script>
    </section>
</body>

</html>