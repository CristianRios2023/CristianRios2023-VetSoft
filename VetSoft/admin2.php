<!DOCTYPE html>
<html>

<head>
    <title>CrudPage</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="estilos/style_pag2.css">
    <link rel="icon" href="img\Vetsoft.ico" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body style="background-image: url(img/fondoII.jpg);">

    <div class="head">
        <div class="logo">
            <a class="navbar-brand" href="index.php">
            <img src="img\Vetsoft.png" alt="Logo" width="60" height="60" class="d-inline-block align-text-top"></a>
        </div>
        <nav class="navbar">
            <a href="cerrarSesion.php">Cerrar Sesión</a>
        </nav>
    </div >
	
    <?php
        session_start();
        $usuario = $_SESSION['nombre'];
        $id = $_SESSION['id_cliente'];
    ?>
    <br><br><br><br>
    <header >
            <h2 style="text-align: center;">¡¡Bienvenido Administrador <?php echo  $usuario; ?>!!</h2>
            
    </header>

    <div>
        <div class="container" >
            <br><br><br>
            <h1 class="text-center" style=" border-width: 2px;  border-style: solid;  border-color: grey; background-color: grey; color: white">Clientes</h1>
            <br>
        </div>
        <div class="container">
            <table class="table" style=" border-width: 2px;  border-style: solid;  border-color: grey;">
                <thead>
                    <tr>
                        <th scope="col">N°</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Acciones</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        require ("conexionBD.php");
                        $sql = $conexion ->query("SELECT * FROM clientes");
                        $cont=0;
                            while ($dcliente = $sql->fetch_assoc()) {
                    ?>
                                <?php if($dcliente['fk_tipo_usuario']==3){ ?>
                                <tr>
                                <th scope="row"><?php $cont=$cont+1; echo $cont?></th>
                                <th scope="row"><?php echo $dcliente [ 'nombre' ]?></th>
                                <th scope="row"><?php echo $dcliente ['apellido' ]?></th>
                                <th><a  href="editarUsuario.php?id=<?php echo $dcliente["id_cliente"];?>" class="btn btn-secondary" type="submit" id="editar" name="editar">Editar</a></th>
                                <th><a  href="borrarUsuario.php?id=<?php echo $dcliente["id_cliente"];?>" class="btn btn-secondary" onclick="return confirm('Desea eliminar?')" type="submit" id="borrar" name="borrar">Borrar</a></th>
                    <?php
                                }
                            }
                        
                    ?>
                </tbody>
            </table>
            <br><br><br>
        </div>
    </div>


    <div>
        <div class="container" >
            <br>
            <h1 class="text-center" style=" border-width: 2px;  border-style: solid;  border-color: grey; background-color: grey; color: white">Especialistas</h1>
            <br>
        </div>
        <div class="container">
            <table class="table" style=" border-width: 2px;  border-style: solid;  border-color: grey;">
                <thead>
                    <tr>
                        <th scope="col">N°</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Acciones</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        require ("conexionBD.php");
                        $sql = $conexion ->query("SELECT * FROM clientes");
                        $cont=0;
                            while ($dcliente = $sql->fetch_assoc()) {
                    ?>
                                <?php if($dcliente['fk_tipo_usuario']==2){ ?>
                                <tr>
                                <th scope="row"><?php $cont=$cont+1; echo $cont?></th>
                                <th scope="row"><?php echo $dcliente [ 'nombre' ]?></th>
                                <th scope="row"><?php echo $dcliente ['apellido' ]?></th>
                                <th><a  href="editarUsuario.php?id=<?php echo $dcliente["id_cliente"];?>" class="btn btn-secondary" type="submit" id="editar" name="editar">Editar</a></th>
                                <th><a  href="borrarUsuario.php?id=<?php echo $dcliente["id_cliente"];?>" class="btn btn-secondary" onclick="return confirm('Desea eliminar?')" type="submit" id="borrar" name="borrar">Borrar</a></th>
                    <?php
                                }
                            }
                        
                    ?>
                </tbody>
            </table>
            <br><br><br>
        </div>
    </div>
    <?php
            include("footer.php");
    ?>
    
</body>
</html>