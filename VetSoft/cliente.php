<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="estilos/style_pag2.css">
    <link rel="icon" href="img\Vetsoft.ico" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Agregar Cliente</title>
    </head>
<?php
    session_start();
    $nombre = $_SESSION['nombre'];
    $id = $_SESSION['id_cliente'];
?>

<body style="background-image: url(img/fondoII.jpg);">

    <header>
        <div class="head">
            <div class="logo" >
                <a class="navbar-brand" href="index.php">
                <img src="img\Vetsoft.png" alt="Logo" width="60" height="60" class="d-inline-block align-text-top"></a>
            </div>
            <nav class="navbar">
                <a href="servicios.php">Servicios</a>
                <a href="registrarMascota.php">Registrar Mascota</a>
                <a href="registrarTurno.php">Sacar Turno</a>
                <a href="cerrarSesion.php">Cerrar Sesion</a>
            </nav>
        </div>
    </header>
    <br><br><br><br>
    <div>
        <h1 class="text-center" style="color: #2d591f;">¡¡Bienvenido <?php echo  $nombre; ?>!!</h1>
            
    </div>

    <div>
        <div class="container" >
            <br>
            <h1 class="text-center" style=" border-width: 2px;  border-style: solid;  border-color: grey; background-color: grey; color: white">Tus mascotas Registradas</h1>
            <br>
        </div>
        <div class="container">
            <table class="table" style=" border-width: 2px;  border-style: solid;  border-color: grey;">
                <thead>
                    <tr>
                        <th scope="col">Nombre Mascota</th>
                        <th scope="col">Raza</th>
                        <th scope="col">Tamaño</th>
                        <th scope="col">Especie</th>
                        <th scope="col">Fecha de Nacimiento</th>
                        <th scope="col">Accion</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include("conexionBD.php");
                        $result=$conexion->query("select * from mascota where fk_id_cliente = '$id'");
                            if ($result-> num_rows > 0 ) {
                                while($row = $result->fetch_assoc()) {
                    ?>
                                <tr>
                                <th scope="row"><?php echo $row["nombre"]; ?></th>
                                <th scope="row"><?php echo $row["raza"]; ?></th>
                                <th scope="row"><?php echo $row["tamaño"]; ?></th>
                                <th scope="row"><?php echo $row["especie"]; ?></th>
                                <th scope="row"><?php echo $row["fecha"]; ?></th>
                                <th><a  href="borrarMascota.php?id=<?php echo $row["idMascota"];?>" class="btn btn-secondary" onclick="return confirm('Desea eliminar?')" type="submit" id="borrar" name="borrar">Borrar</a></th>
                    <?php
                                }
                            }
                        
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!--turnos mascotas -->
    <div>
        <div class="container" >
            <br><br><br>
            <h1 class="text-center" style=" border-width: 2px;  border-style: solid;  border-color: grey; background-color: grey; color: white">Mis Turnos</h1>
            <br>
        </div>
        <div class="container">
            <table class="table" style=" border-width: 2px;  border-style: solid;  border-color: grey;">
                <thead>
                    <tr>
                        <th scope="col">Nombre y Apellido del Dueño</th>
                        <th scope="col">Nombre de la Mascota</th>
                        <th scope="col">Motivo del Turno</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Fecha</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $id_cliente = $_SESSION['id_cliente'];

                        $conex = mysqli_connect("localhost","root","","bdvetsoft");
                        $result=$conex->query("select * from turnos");
                            if ($result-> num_rows > 0 ) {
                                while($row = $result->fetch_assoc()) {
                    ?>
                                <?php
                                    if($id_cliente==$row['fk_id_cliente']){
                                    $id=$row["fk_id_cliente"];
                                    $consultaCliente=$conex->query("select * from clientes where id_cliente='$id'");
                                    $datosCliente = $consultaCliente->fetch_assoc();
                                    $consultaMascota=$conex->query("select * from mascota where fk_id_cliente='$id'");
                                    $datosMascota = $consultaMascota->fetch_assoc();
                                ?>
                                <tr>
                                <th scope="row"><?php echo $datosCliente['nombre']." ".$datosCliente['apellido']; ?></th>
                                <th scope="row"><?php echo $datosMascota['nombre']; ?></th>
                                <th scope="row"><?php echo $row["motivo_turno"]; ?></th>
                                <th scope="row"><?php echo $row["fecha"]; ?></th>
                                <th><a  href="borrarTurnoCliente.php?id=<?php echo $row["id_turno"];?>" class="btn btn-secondary" onclick="return confirm('Desea eliminar?')" type="submit" id="borrar" name="borrar">Borrar</a></th>
                    <?php
                                    }  
                            }
                        }
                    ?>
                </tbody>
            </table>
            <br><br>
        </div>
    </div>

    <br><br><br><br><br>
    <?php
        include("footer.php");
    ?>
</body>
    
</html>
