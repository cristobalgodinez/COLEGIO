<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barra de navegación</title>
    <link rel="stylesheet" href="barraNav.css">
</head>

<body class="body">

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
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link text-decoration-none">
                            <i class="fa-solid fa-graduation-cap fa-xl"></i> Estudiantes
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link text-decoration-none">
                            <i class="fa-solid fa-person-chalkboard fa-xl"></i> Docentes
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed text-decoration-none" data-bs-toggle="collapse"
                            data-bs-target="#cursoAgregar" aria-expanded="false" aria-controls="cursoAgregar">
                            <i class="fa-solid fa-book fa-xl pe-2"></i> Materias
                        </a>
                        <ul id="cursoAgregar" class="sidebar-dropdown list-unstyled collapse"
                            data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link text-decoration-none">Grado y Sección</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link text-decoration-none">Califiaciones</a>
                            </li>

                        </ul>
                    </li>
                    <li class="sidebar-header mt-5">
                        Nuevo usuario
                    </li>
                    <li class="sidebar-item mb-5">
                        <a href="#" class="sidebar-link text-decoration-none">
                            <i class="fa-solid fa-user-plus fa-xl"></i> Usuarios
                        </a>
                    </li>
                    <div class="text-center">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link text-decoration-none">
                                <i class="fa-solid fa-arrow-left fa-xl"></i> salir
                            </a>
                        </li>
                    </div>

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