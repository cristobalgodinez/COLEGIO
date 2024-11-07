<?php

session_start();


if(!isset($_SESSION['registrado']) || $_SESSION['registrado'] !==true){

    header("location: ../../index.php");
    exit;
}


//VARIABLE PARA VALIDAR EL INGRESO DEL ADMINISTRADOR
if(isset($_SESSION['correoUsuario'])){

    $correoAdministrador=$_SESSION['correoUsuario'];
}

?>