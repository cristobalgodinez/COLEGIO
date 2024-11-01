<?php

session_start();

session_unset(); //Elimina las variables de la sesion
header("Location: ../../index.php");

session_destroy(); //Eliminia la sesion
header("Location: ../../index.php");
exit;
