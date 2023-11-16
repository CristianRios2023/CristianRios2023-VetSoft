<!DOCTYPE html>
<html>
<head>
	<title>Especialista</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="estilos/style_pag2.css">
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
    <br><br><br><br><br>
    <header>
            <h2 class="title" style="text-align: center;">¡¡Bienvenido Dr. <?php echo  $usuario; ?>!!</h2>
            
    </header>
    
        <title>Tabla de datos</title>
        
    <div>
        <div class="container" >
            <br><br><br>
            <h1 class="text-center" style=" border-width: 2px;  border-style: solid;  border-color: grey; background-color: grey; color: white">Turnos Registrados</h1>
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
                                if($row["fk_id_especialista"]==$id_cliente){
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
                                <th><a  href="borrarTurno.php?id=<?php echo $row["id_turno"];?>" class="btn btn-secondary" onclick="return confirm('Desea eliminar?')" type="submit" id="borrar" name="borrar">Borrar</a></th>
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

    <br><br><br><br><br><br><br><br><br><br>
    <?php
    include("footer.php");
    ?>

</body>
</html>