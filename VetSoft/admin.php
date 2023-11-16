<!DOCTYPE html>
<html>
<head>
	<title>Administrador</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    
	<link rel="stylesheet" href="style2.css">
</head>

<body>
	
	<div>

        <div >
            <a href="index.php">HOME</a>
        </div>

        <nav >
            <a href="cerrarsession.php">Cerrar Sesion</a>
        </nav>

    </div>
	<br><br>
        
    <?php
        session_start();
        $usuario = $_SESSION['nombre'];
        $id = $_SESSION['id_cliente'];

    ?>
    <header class="content header">
        <h3 class="title">¡¡Bienvenido Administrador <?php echo  $usuario; ?>!!</h3>
        <br><br>
    
    </header>


    
    <table class="tbl-qa">
        <br><br><br>
		<thead> <tr>
                <p><h2>Usuarios Clientes Registrados</h2></p>
                <th class="table-header" width="2%">ID</th>
				<th class="table-header" width="2%">Nombres</th>
				<th class="table-header" width="2%">Apellido</th>
				<th class="table-header" width="2%">Usuario</th>
				<th class="table-header" width="2%">Contraseña</th>
				<th class="table-header" width="2%">Email</th>
                <th class="table-header" width="2%">Tipo Usuario</th>
				<th class="table-header" width="2%">Direccion</th>
				<th class="table-header" width="2%">Telefono</th>
				<th class="table-header" width="2%">Estado</th>
                <th class="table-header" width="2%">Localidad</th>


		</tr>
		</thead>
        <tbody>
            <?php
            
            include("conexionBD.php");
            $result=$conexion->query("select * from clientes where fk_tipo_usuario=3");
				if ($result-> num_rows > 0 ) {
					while($row = $result->fetch_assoc()) {
			?>
            <tr class="table-row">
				<td class="table-row"><?php echo $row["id_cliente"]; ?></td>
				<td class="table-row"><?php echo $row["nombre"]; ?></td>
				<td class="table-row"><?php echo $row["apellido"]; ?></td>
				<td class="table-row"><?php echo $row["usuario"]; ?></td>
				<td class="table-row"><?php echo $row["contraseña"]; ?></td>
                <td class="table-row"><?php echo $row["email"]; ?></td>
				<td class="table-row"><?php echo $row["fk_tipo_usuario"]; ?></td>
				<td class="table-row"><?php echo $row["direccion"]; ?></td>
				<td class="table-row"><?php echo $row["telefono"]; ?></td>
				<td class="table-row"><?php
                $id=$row["fk_estado"];
                $consul=$conexion->query("select * from estado where id_estado='$id'");
                $consul2=$consul->fetch_assoc();
                echo $consul2["referencia_estado"];
                ?></td>
                <td class="table-row"><?php
                $id=$row["fk_localidad"];
                $consul=$conexion->query("select * from localidad where id_localidad='$id'");
                $consul2=$consul->fetch_assoc();
                echo $consul2["nombre_localidad"];
                ?></td>

            </tr>
        </tbody>
            <?php
					}
                }
                
            ?>


    <table class="tbl-qa">
        <br><br><br>
		<thead> <tr>
                <p><h2>Usuarios Especialistas Registrados</h2></p>
                <th class="table-header" width="2%">ID</th>
				<th class="table-header" width="2%">Nombres</th>
				<th class="table-header" width="2%">Apellido</th>
				<th class="table-header" width="2%">Usuario</th>
				<th class="table-header" width="2%">Contraseña</th>
				<th class="table-header" width="2%">Email</th>
                <th class="table-header" width="2%">Tipo Usuario</th>
                <th class="table-header" width="2%">Especialidad</th>
                <th class="table-header" width="2%">Matricula</th>
				<th class="table-header" width="2%">Direccion</th>
				<th class="table-header" width="2%">Telefono</th>
				<th class="table-header" width="2%">Estado</th>
                <th class="table-header" width="2%">Localidad</th>


		</tr>
		</thead>
        <tbody> 
            <?php
            
            include("conexionBD.php");
            $result=$conexion->query("select * from clientes where fk_tipo_usuario=2");
				if ($result-> num_rows > 0 ) {
					while($row = $result->fetch_assoc()) {
			?>
            <tr class="table-row">
				<td class="table-row"><?php echo $row["id_cliente"]; ?></td>
				<td class="table-row"><?php echo $row["nombre"]; ?></td>
				<td class="table-row"><?php echo $row["apellido"]; ?></td>
				<td class="table-row"><?php echo $row["usuario"]; ?></td>
				<td class="table-row"><?php echo $row["contraseña"]; ?></td>
                <td class="table-row"><?php echo $row["email"]; ?></td>
				<td class="table-row"><?php echo $row["fk_tipo_usuario"]; ?></td>
                <td class="table-row"><?php 
                $id=$row["fk_especialidad"]; 
                $consul=$conexion->query("select * from especialidades where id_especialidad='$id'");
                $consul2=$consul->fetch_assoc();
                echo $consul2["nombre_especialidad"]; ?></td>
                <td class="table-row"><?php echo $row["matricula"]; ?></td>
				<td class="table-row"><?php echo $row["direccion"]; ?></td>
				<td class="table-row"><?php echo $row["telefono"]; ?></td>
				<td class="table-row"><?php 
                $id=$row["fk_estado"];
                $consul=$conexion->query("select * from estado where id_estado='$id'");
                $consul2=$consul->fetch_assoc();
                echo $consul2["referencia_estado"]; ?></td>
				<td class="table-row"><?php 
                $id=$row["fk_localidad"]; 
                $consul=$conexion->query("select * from localidad where id_localidad='$id'");
                $consul2=$consul->fetch_assoc();
                echo $consul2["nombre_localidad"];
                ?></td>

            </tr>
        </tbody>
            <?php
					}
                }
                
            ?>
            
</body>