<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>



    <form action="" method="post" style="text-align: center;">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-2"><!--EL IDE ES INDICADO POR EL USUARIO PARA QUE SEA A SU CONVENIENCIA CREARLO, NO ESTA COMO AUTOINCREMENTAL-->
                <input type="text" class="form-control" name="idEstudiantes" id="idEstudiantes" placeholder="Id" required>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-2">
                <input type="text" class="form-control" name="nombresEstudiantes" id="nombresEstudiantes" placeholder="Nombres" required>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-2">
                <input type="text" class="form-control" name="apellidosEstudiantes" id="apellidosEstudiantes" placeholder="Apellidos" required>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 mb-2">
                <select class="form-select" name="gradoEstudiantes" id="gradoEstudiantes" required>
                    <!-- <option selected>Grado</option> -->
                    <option value="">Grado</option>
                    <option value="primero">Primero</option>
                    <option value="segundo">Segundo</option>
                    <option value="tercero">Tercero</option>
                    <option value="cuarto">Cuarto</option>
                    <option value="quinto">Quinto</option>
                    <option value="sexto">Sexto</option>
                </select>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 mb-2">
                <select class="form-select" name="seccionEstudiantes" id="seccionEstudiantes" required>
                    <!-- <option selected>Sección</option> -->
                    <option value="">Sección</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-2">
                <input type="number" class="form-control" name="cuiEstudiantes" id="cuiEstudiantes" placeholder="Cui" required>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-4">
                <input type="text" class="form-control" name="generoEstudiantes" id="generoEstudiantes" placeholder="Género" required>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-2">
                <input type="text" class="form-control" name="nombreAEEstudiantes" id="nombreAEEstudiantes" placeholder="Nombre y Apellido del Encargado" required>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-2">
                <input type="text" class="form-control" name="telefonoEstudiantes" id="telefonoEstudiantes" placeholder="Teléfono" required>
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
                            <button type="submit" class="btn btn-success" name="registrarEstudiante">Guardar Datos</button>
                        </div>
                        <div class="d-grid col-6 col-sm-6 col-md-6 col-lg-6">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar Acción</button>
                        </div>
    </form>

    <?php
    if (
        !empty($_POST['idEstudiantes']) || !empty($_POST['nombresEstudiantes'])
        || !empty($_POST['apellidosEstudiantes']) || !empty($_POST['gradoEstudiantes'])
        || !empty($_POST['seccionEstudiantes']) || !empty($_POST['cuiEstudiantes'])
        || !empty($_POST['generoEstudiantes']) || !empty($_POST['nombreAEEstudiantes'])
        || !empty($_POST['telefonoEstudiantes']) || !empty($_POST['cuiEstudiantes'])
    ){
        echo $idEstudiantes = trim($_POST['idEstudiantes'])."<br>";
        echo $nombresEstudiantes = trim($_POST['nombresEstudiantes'])."<br>";
        echo $apellidosEstudiantes = trim($_POST['apellidosEstudiantes'])."<br>";
        echo $gradoEstudiantes = trim($_POST['gradoEstudiantes'])."<br>";
        echo $seccionEstudiantes = trim($_POST['seccionEstudiantes'])."<br>";
        echo $cuiEstudiantes = trim($_POST['cuiEstudiantes'])."<br>";
        echo $generoEstudiantes = trim(($_POST['generoEstudiantes']))."<br>";
        echo $nombreAEEstudiantes = trim(($_POST['nombreAEEstudiantes']))."<br>";
        echo $telefonoEstudiantes = trim(($_POST['telefonoEstudiantes']))."<br>";
    }
    ?>



</body>

</html>