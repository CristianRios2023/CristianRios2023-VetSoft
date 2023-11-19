<?php

include("conexionBD.php");
if (isset($_POST['enviar'])) {
    if (strlen($_POST['nombre']) >= 1 &&
	strlen($_POST['usuario']) >=1 &&
	strlen($_POST['contraseña']) >=1) {
		$name =trim($_POST['nombre']);
		$apellido =trim($_POST['apellido']);
		$usuario=trim($_POST['usuario']);
		$contraseña=trim($_POST['contraseña']);
		$email=trim($_POST['email']);
        $consulta = "INSERT INTO clientes( nombre, apellido, usuario, contraseña, email) VALUES ( '$name','$apellido','$usuario','$contraseña','$email')";
		$resultado = mysqli_query($conexion,$consulta);
		if ($resultado) {
			?>
                <h3 class="ok"> ¡¡Te Registraste Correctamente!!</h3>
			<?php
		}else {
			?>
                <h3 class="bad"> Upps! Algo no salio bien </h3>
			<?php
		}
	}	else {
			?>
                <h3 class="bad">Completa los campos</h3>
			<?php
		}

}
?>
