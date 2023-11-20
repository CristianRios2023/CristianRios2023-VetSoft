<?php

session_start();

    if (!empty($_POST["login-submit"])){
        if(empty($_POST["usuario"])and empty($_POST["contraseña"])){
            echo '<div style = "background-color:#59B2E6 ;" ><h3>Los campos estan vacios</h3></DIV>';
        }
        else{
            $usuario=$_POST["usuario"];
            $contraseña=$_POST["contraseña"];
            $sql=$conexion->query("select * from clientes where usuario='$usuario' and contraseña='$contraseña'");
            if($datos=$sql->fetch_object()) {
            $nombre = $datos->nombre;
            $_SESSION['nombre'] = $nombre;
            $id_cliente = $datos->id_cliente;
            $_SESSION['id_cliente'] = $id_cliente;
            $fk_especialidad = $datos->fk_especialidad;
            $_SESSION['fk_especialidad'] = $fk_especialidad;
            $fk_tipo_usuario = $datos->fk_tipo_usuario;
            $_SESSION['fk_tipo_usuario'] = $fk_tipo_usuario;
            $fk_localidad = $datos->fk_localidad;
            $_SESSION['fk_localidad'] = $fk_localidad;
            $fk_tipo_usuario = $datos->fk_tipo_usuario;
            $_SESSION['fk_tipo_usuario'] = $fk_tipo_usuario;

            switch ($fk_tipo_usuario) {
                case 3:
                    header("location:cliente.php");
                    break;
                case 2:
                    header("location:especialista.php");
                    break;
                case 1:
                    header("location:admin2.php");
                    break;
            }
            }
            else {
                echo '<div  style = "background-color: #59B2E6;" ><h2>¡Contraseña Incorrecta!</h2></DIV>';
            }
            
        }
    }
    

?>
