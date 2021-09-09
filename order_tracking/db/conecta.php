<?php

$db_host = "107.161.179.91";
$db_nombre = "ciguce_gfsm";
$db_user = "ciguce_administrador";
$db_pass = 'Su99ortSistemas';

        $conexion = new mysqli($db_host, $db_user, $db_pass, $db_nombre);

        if (mysqli_connect_errno()){

            echo "Fallo al conectar con la BBDD11";
            exit;

        }

        mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BBDD");

        mysqli_set_charset($conexion, "utf8");
        
    ?>

