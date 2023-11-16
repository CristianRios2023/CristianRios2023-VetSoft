<?php
// tablacliente
include("conexionBD.php");

session_start();
	$usuario=$_SESSION['username'];

if (isset($_POST['register'])) {
	if (strlen($_POST['id_turno']) >= 1 &&
	strlen($_POST['nombre']) >= 1 &&
	strlen($_POST['mascota']) >= 1  &&
	strlen($_POST['fecha']) >= 1 &&
	strlen($_POST['especialidad']) >= 1 &&
	strlen($_POST['motivo_turno']) >= 1 &&
	strlen($_POST['observaciones']) >= 1) {
		$id = trim($POST['id']);
		$nombre = trim($POST['nombre']);
		$tipo_mascota = trim($POST['tipo_mascota']);
		$mascota = trim($POST['mascota']);
		$fecha = trim($POST['fecha']);
		$especialidad = trim($POST['especialidad']);
		$motivo_turno = trim($POST['motivo_turno']);
		$observaciones = trim($POST['observaciones']);
	
		$sql = "INSERT INTO turno(id, nombre, tipo_mascota, mascota,fecha,especialidad,motivo_turno,observaciones) VALUES ( '$id','$nombre','$tipo_mascota','$mascota','$fecha','$motivo_turno','$especialidad','$observaciones')";

		$resultado = mysqli_query($conexion,$consulta); 

		if ($resultado == True){
			header("location:../.php");
		}else{
			echo "Datos NO insertados";
		}
	
	}
	
}


?>