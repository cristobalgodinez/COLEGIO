<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/login/login.css">
</head>

<body class="body">
    <section class="conexion"><!--Validacion de la conexion-->
        <?php
        $includeConexion = include "controllers/conexion.php";
        if ($includeConexion) {
        ?>
            <div class="alert alert-primary alert-dismissible fade show text-center" role="alert">
                Bienvenido al <strong>Centro Privado de Estudios Superación</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
        } else {
        ?>
            <div class="alert alert-primary alert-dismissible fade show text-center" role="alert">
                <strong>Lo sentimos, no ha sido posible establecer una conexión</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
        }
        ?>
    </section>

    <section class="Registro"><!--Validacion de los datos-->
        <?php
        $includeLogin = include "controllers/login.php";
        if ($includeLogin == false) {
        ?>
            <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                <strong>Datos incorrectos, por favor puede volver a interlo</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

        <?php
        }
        ?>
    </section>

    <section class="estilo">
        <?php
        include("frameworks/bootstrap.php");
        include("frameworks/googleFonts.php");
        ?>
    </section>

    <section class="EstructuraLogin"><!--Estructura general del login-->
        <div class="container mt-5">
            <div class="row g-0">
                <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">

                    <div class="container formulario_Login rounded-start-5">
                        <div class="row">
                            <div class="col-12" style="height: 600px;">
                                <div class="text-center pt-4">
                                    <img src="img/LOGO.png" alt="imagen del logo en el login">
                                </div>
                                <div class="text-center text-dark pt-3 mb-4">
                                    <h5>Centro Privado de Estudios Superación</h5>
                                </div>

                                <!--El action redirige a la carpeta controllers/login.php pero sin salirse de la carpeta actual TENER EN CUENTA-->
                                <form action="controllers/login.php" method="post">
                                    <div class="formulario px-3">
                                        <div class="text-start">
                                            <label for="nombreUsuario" class="d-block form-label ps-2">Nombre de usuario</label>
                                            <input type="text" class="form-control border-dark" name="nombreUsuario" id="nombreUsuario" required>

                                            <label for="correoUsuario" class="d-block form-label ps-2">Correo</label>
                                            <input type="email" class="form-control border-dark" name="correoUsuario" id="correoUsuario" required>

                                            <label for="contrasUsuario" class="d-block form-label ps-2 mt-1">Contraseña</label>
                                            <input type="password" class="form-control border-dark" name="contrasUsuario" id="contrasUsuario" required>
                                        </div>
                                        <div class="d-grid mt-5">
                                            <button type="submit" name="ingresar" class="btn btn-success">
                                                INGRESAR
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <div class="text-center text-primary pt-2">
                                    <hr><span>CPES</span>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-12 col-sm-4 col-md-8 col-lg-8 col-xl-8">
                    <div class="container-fluid imagen_Login">
                        <div class="row">
                            <div class="col-12">
                                <img src="img/FONDO.jpg" class="img-fluid" alt="imagen del login" style="height: 600px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>