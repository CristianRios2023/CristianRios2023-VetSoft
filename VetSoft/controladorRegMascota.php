<?php

include("conexionBD.php");

session_start();
	$id=$_SESSION['id_cliente'];
if (isset($_POST['guardarMascota'])) {
	if (strlen($_POST['nombre']) >= 1 &&
	strlen($_POST['raza']) >= 1 &&
	strlen($_POST['tamaño']) >=1 &&
	strlen($_POST['especie']) >=1 &&
	strlen($_POST['fecha']) >=1) {
		$nombre =trim($_POST['nombre']);
		$raza =trim($_POST['raza']);
		$tamaño=trim($_POST['tamaño']);
		$especie=trim($_POST['especie']);
		$fecha=trim($_POST['fecha']);
		$consulta = "INSERT INTO mascota( nombre, raza, tamaño, especie,fecha, fk_id_cliente) VALUES ( '$nombre', '$raza', '$tamaño', '$especie', '$fecha', $id)";
		$resultado = mysqli_query($conexion,$consulta);
		if ($resultado) {
			?>
			<h3 class="ok">¡¡Tu mascota se registro Bien!!</h3>
			<br> 
			
			<?php
		}else {
			?>
			<h3 class="bad"> Algo ocurrio mal</h3>
			<?php
		}
	}	else {
			?>
			<h3 class="bad">Completa los campos</h3>
			<?php
		}	

}

?>