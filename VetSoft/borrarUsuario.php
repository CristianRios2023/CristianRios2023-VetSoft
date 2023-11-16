<?php
	require_once("conexionBD.php");
	
	$sql = $conexion->prepare("DELETE  FROM clientes WHERE id_cliente=?");
	$sql->bind_param("i", $_GET["id"]);
	$sql->execute();
	$sql->close();
	$conexion->close();
	header('location:admin2.php');
?>