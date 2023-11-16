<?php
	require_once("conexionBD.php");
	
	$sql = $conexion->prepare("DELETE  FROM turnos WHERE id_turno=?");
	$sql->bind_param("i", $_GET["id"]);
	$sql->execute();
	$sql->close();
	$conexion->close();
	header('location:cliente.php');
?>