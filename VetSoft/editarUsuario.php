<?php
require_once("conexionBD.php");
if (isset($_POST['guardar'])) {
    $sql = $conexion->prepare("UPDATE clientes SET nombre=? , apellido=? , usuario=? , contraseña=?,email=?, direccion=?, telefono=?, fk_estado=?, fk_tipo_usuario=?, fk_especialidad=?, fk_localidad=?  WHERE id_cliente=?");
    $nombre=$_POST['nombre'];
    $apellido = $_POST['apellido'];
    $usuario= $_POST['usuario'];
    $contraseña= $_POST['contraseña'];
    $email= $_POST['email'];
    $direccion= $_POST['direccion'];
    $tel= $_POST['telefono'];
    $estado= $_POST['estado'];
    $tipoUsuario= $_POST['tipoUsuario'];
    $especialidad= $_POST['especialidad'];
    $localidad= $_POST['localidad'];
    //echo $nombre." ".$apellido." ". $usuario." ".$contraseña." ".$email." ".$direccion." ".$tel." ".$estado." ". $tipoUsuario." ".$especialidad."  ".$localidad;
    $sql->bind_param("ssssssiiiiii",$nombre, $apellido, $usuario,$contraseña,$email,$direccion,$tel,$estado, $tipoUsuario,$especialidad,$localidad,$_GET["id_cliente"]);
    
    if($sql->execute()) {
        //header("location:admin2.php");
    } else {
        $error_message = "Error al modificar registro";
    }
}
?>
<?php
require_once("conexionBD.php");
$sql = $conexion->prepare("SELECT * FROM clientes WHERE id_cliente=?");
	$sql->bind_param("i",$_GET["id"]);
	$sql->execute();
	$result = $sql->get_result();
	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
	}
?>
<!doctype html>
<html lang="es">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="estilos/style_AgregarCliente.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="img\Vetsoft.ico" type="image/png">
    <title>Editar Usuario</title>
    </head>
    <body style="background-image: url(img/fondoII.jpg);">

    <div class="head">
        <div class="logo" >
            <a class="navbar-brand" href="index.php">
            <img src="img\Vetsoft.png" alt="Logo" width="60" height="60" class="d-inline-block align-text-top"></a>
        </div>
        <nav class="navbar">
            <a href="cerrarSesion.php">Cerrar Sesión</a>
            <a href="admin2.php">Volver</a>
        </nav>
    </div>
    <br><br><br><br>
    <h1 class="p-2 text-black text-center">Formulario Edicion </h1>
        <br>
    <div class="container">
    <form method="post" class="row g-3" action="">
		<div >
			<label for="nombre" class="form-label">Nombre Completo</label>
			<input type="text" class="form-control" name="nombre" value="<?php echo $row["nombre"]?>">
        </div>
		<div >
			<label for="apellido">Apellidos</label>
			<input type="text" class="form-control" name="apellido" value="<?php echo $row["apellido"]?>">
        </div>
		<div>
			<label for="usuario"class="form-label">Usuario</label>
			<input type="text" class="form-control" name="usuario" value="<?php echo $row["usuario"]?>">
		</div>
        <div>
			<label for="contraseña"class="form-label">Contraseña</label>
			<input type="text" class="form-control" name="contraseña" value="<?php echo $row["contraseña"]?>">
		</div>
        <div>
			<label for="email"class="form-label">Correo Electronico</label>
			<input type="text" class="form-control" name="email" value="<?php echo $row["email"]?>">
		</div>
        <div>
			<label for="direccion"class="form-label">Direccion</label>
			<input type="text" class="form-control" name="direccion" value="<?php echo $row["direccion"]?>">
		</div>
        <div>
			<label for="telefono"class="form-label">Telefono</label>
			<input type="text" class="form-control" name="telefono" value="<?php echo $row["telefono"]?>">
		</div>
        <div>
			<label class="form-label">Estado Cliente</label>
            <select name="estado">
                <?php
                    $id=$row['id_cliente'];
                    $estado=$row['fk_estado'];
                    switch ($estado) {
                        case 1:
                            $estado="Activo";
                            break;
                        case 2:
                            $estado="Inactivo";
                            break;
                        case 3:
                            $estado="Eliminado";
                            break;
                    }
                    echo "<option value = $id> $estado</option> ";
                ?>
                <option value="1">Activo</option>
                <option value="2">Inactivo</option>
                <option value="3">Eliminar</option>
            </select>
		</div>
        <div>
			<label class="form-label">Tipo de Usuario</label>
            <select name="tipoUsuario">
                <?php
                    $id=$row['id_cliente'];
                    $tipoUsuario=$row['fk_tipo_usuario'];
                    switch ($tipoUsuario) {
                        case 2:
                            $tipoUsuario="Especialista";
                            break;
                        case 3:
                            $tipoUsuario="Cliente";
                            break;
                    }
                    echo "<option value = $id> $tipoUsuario</option> ";
                ?>
                <option value="2">Especialista</option>
                <option value="3">Cliente</option>
            </select>
		</div>
        <div>
			<label class="form-label">Especialidades</label>
            <select name="especialidad">
                <?php
                    $num=$row['fk_especialidad'];
                    $sql=$conexion->query("select * from especialidades");
                    if ($sql=$sql->fetch_assoc()) {
                        $nombres=$sql['nombre_especialidad'];
                        echo "<option value = $num> $nombres</option> ";
                    }
                ?>
                <option value="1">Cirugia</option>
                <option value="2">Dermatologia</option>
                <option value="3">Cardiologia</option>
                <option value="4">Neurologia</option>
                <option value="5">Oftalmologia</option>
                <option value="6">Oncologia</option>
                <option value="7">Ortopedia</option>
                <option value="8">Odontologia</option>
                <option value="9">Endocrinologia</option>
                <option value="10">Gastroenterologia</option>
                <option value="11">Nefrologia</option>
                <option value="12">Urologia</option>
                <option value="13">Ginecologia</option>
                <option value="14">Obstetricia</option>
                <option value="16">Anestesiologia</option>
                <option value="17">Vacunas</option>
                <option value="19">Guardia</option>
            </select>
        </div>
        <div>
			<label>Localidad</label>
            <select name="localidad">
                <?php

                    $id=$row['fk_localidad'];
                    $consul=$conexion->query("select * from localidad");
                    if ($fila = $consul->fetch_assoc()) {
                        $nombre=$fila['nombre_localidad'];
                        echo "<option value = $id> $nombre</option> ";
                    }
                    

                    $sql=$conexion->query("select * from localidad");
                    while ($fila = $sql->fetch_assoc()) {
                        $id= $fila['id_localidad'];
                        $nombre = $fila['nombre_localidad'];
                        echo "<option value = $id> $nombre</option> ";
                        }
                ?>
            </select>
		</div>
		<div class="boton" style="text-align: center;">
            <button type="submit"name="guardar"style="display: inline-block;margin: 0 auto;" class="btn btn-primary ">Guardar</button>
        </div>
		
	</form>
    <?php
    //    include("controladorEditar.php");
    ?>
    <br><br><br><br><br><br><br>
    </div>

    <?php
            include("footer.php");
    ?>

    </body>

</html>

