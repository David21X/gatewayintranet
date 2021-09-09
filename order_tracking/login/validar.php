<?php
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    session_start();

    $_SESSION['usuario'] = $usuario;
    $conexion = mysqli_connect("107.161.179.91","ciguce_administrador","Su99ortSistemas","ciguce_gfsm");
    $consulta = "SELECT * FROM usuarios WHERE usuario = '$usuario' and clave ='$contrasena' ";
    $resultado = mysqli_query($conexion, $consulta);
    $filas = mysqli_fetch_array($resultado);

    if($filas['rol'] == 2 ) {

        $_SESSION['id_usuario'] = $filas['id'];
        $_SESSION['corp'] = $filas['corporativo'];
        header("location: ../usuario_operacional/pagina_principal.php");

    }else if ($filas['rol'] == 1 ) {
        $_SESSION['id_usuario'] = $filas['id'];
        $_SESSION['corp'] = $filas['corporativo'];
        header("location: ../usuario_administrador/pagina_principal.php");

    } else {
        
            include("index.html");
        
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);