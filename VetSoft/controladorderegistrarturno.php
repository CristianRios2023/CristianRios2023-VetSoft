<?php

include("conexionBD.php");

$fk_tipo_usuario= $_SESSION['fk_tipo_usuario'] ;
$id_cliente= $_SESSION['id_cliente'];
if (isset($_POST['enviar'])) {
	if (strlen($_POST['idMascota']) >= 1 &&
	strlen($_POST['motivo']) >= 1 &&
	strlen($_POST['fecha']) >=1 &&
	strlen($_POST['observaciones']) >=0 &&
	strlen($_POST['especialista']) >=1) {
		$id_mascota=trim($_POST['idMascota']);
		$motivo=trim($_POST['motivo']);
		$fechaTurno=trim($_POST['fecha']);
		$observacionSegunDueño=trim($_POST['observaciones']);
		$id_especialista=trim($_POST['especialista']);
		$consulta = "INSERT INTO turnos(motivo_turno, fecha, fk_mascota, fk_id_cliente, fk_id_especialista, Observaciones) VALUES ( '$motivo','$fechaTurno','$id_mascota','$id_cliente','$id_especialista','$observacionSegunDueño')";
		$resultado = mysqli_query($conexion,$consulta);
		if ($resultado) {
			?>
			<h3 class="ok"> Te inscribiste Bien!!</h3>
			<?php
		}else {
			?>
			<h3 class="bad"> Algo no salio bien </h3>
			<?php
		}
	}	else {
			?>
			<h3 class="bad">Completa los campos</h3>
			<?php
		}

}

?>