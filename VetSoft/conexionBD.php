<?php

    $host = "localhost";
    $user = "root";
    $clave = "";
    $bd = "bdvetsoft";
    $conexion = mysqli_connect($host,$user,$clave,$bd);

    if (mysqli_connect_errno()){
        echo "No se pudo conectar a la base de datos";
        exit();
    }

    mysqli_select_db($conexion,$bd) or die("No se encuentra la base de datos");
    mysqli_set_charset($conexion,"utf8");
    /*$host = "sql211.infinityfree.com";
    $user = "if0_35375521";
    $clave = "Hve67X2B4pS";
    $bd = "if0_35375521_db_vetsoft";*/

?>
