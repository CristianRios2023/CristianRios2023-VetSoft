<!DOCTYPE html>
<html>
<head>
	<title>Registrar Mascota</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="style/estilo.css">
	
</head>
<body>
	
	<div>

        <br><br>

        <nav >
            <a href="usuario.php" >Volver</a>
        </nav>

    </div>

	
	<form method="post">
		<h1>Registrar Mascota</h1>
		<p>
			<label for="nombre">Nombre </label>
			<input type="text" name="nombre" placeholder="Nombre">
		</p>
		<p>
			<label for="raza">Raza</label>
			<input type="text" name="raza" placeholder="Raza">
		</p>
		<p>
			<br>
			<label for="tamaño">Tamaño</label>
			<select name="tamaño">
				<option name="tamaño">Chico </option>
				<option name="tamaño">Mediano </option>
				<option name="tamaño">Grande </option>
			</select>
			<br><br>
		</p>
		<p> 
			<label for="especie">Especie</label>
			<select name="especie">
				<option name="especie">Canino</option>
				<option name="especie">Felino</option>
				<option name="especie">Otros</option>
			</select>
			<br><br>
		</p>
		<p>
			<label for="fecha">Fecha de Nacimiento</label>
			<input type="date" name="fecha" placeholder="Fecha de Nacimiento">
		</p>
		
		
		<p>
			<input type="submit" name="register" value="Registrar">
		</p>
	
	</form>
	<?php
	include("registrarM.php")
	?>

</body>
</html>