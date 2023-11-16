<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link href="estilos/styleRegMas.css" type="text/css" rel="stylesheet" />
	<title>Iniciar Sesion</title>
    <link rel="icon" href="img\Vetsoft.ico" type="image/png">
</head>

<body style="background-image: url(img/fondoII.jpg);">
<header>
	<div class="head">
		<div class="logo" >
			<a class="navbar-brand" href="index.php">
			<img src="img\Vetsoft.png" alt="logo" width="60" height="60" class="d-inline-block align-text-top"></a>
		</div>
		<nav class="navbar">
			<a href="servicios.php">Servicios</a>
			<a href="cliente.php">Volver</a>
			<a href="cerrarSesion.php">Cerrar Sesion</a>
		</nav>
	</div>
</header>
<!------ Include the above in your HEAD tag ---------->
<br><br><br><br><br><br><br>
<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div>
								<a class="active" id="login-form-link">Registrar Mascota</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<!--Formulario-->
								<form style=" margin: 10px;justify-content: center;align-items: center; display: block; "id="login-form" method="post" role="form" >
									<div class="form-group">
										<label for="nombre"class="form-group">Nombre mascota: </label>
										<input type="text" name="nombre" tabindex="1" class="" placeholder="" >
									</div>
									<div class="form-group">
										<label for="raza" class="form-group">Raza: </label>
										<input type="text" name="raza" tabindex="2" class="" placeholder="">
									</div>
									<div class="form-group">
										<label for="tamaño"class="form-group">Tamaño: </label>
										<select name="tamaño">
											<option></option>
											<option name="tamaño">Chico </option>
											<option name="tamaño">Mediano </option>
											<option name="tamaño">Grande </option>
										</select>
									</div>
									<div class="form-group">
										<label for="especie" class="form-group">Especie: </label>
										<select name="especie">
											<option></option>
											<option name="especie">Canino</option>
											<option name="especie">Felino</option>
											<option name="especie">Otros</option>
										</select>
									</div>
									<div class="form-group">
										<label for="fecha"class="form-group">Fecha de Nacimiento: </label>
										<input type="date" name="fecha" tabindex="5" class="" placeholder="">
									</div>


									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="guardarMascota"  tabindex="6" class="form-control btn btn-login" value="Guardar Mascota">
											</div>
										</div>
									</div>
									
									<?php
									include("conexionBD.php");
									include("controladorRegMascota.php");
									?>
								</form>
								<!--fin formulario-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>

	<br><br><br><br><br><br><br><br>
	<section >
	<footer class="w-100 py-4 flex-shrink-0">
        <div class="container py-4">
            <div class="row gy-4 gx-5">
                <div class="col-lg-4 col-md-6">
                    <h5 class="h1 text-white">VetSoft</h5>
                    <h5 class="h6 text-white"> Un nuevo concepto en salud veterinaria,<br> en el corazón de la ciudad <br> Todo para el cuidado integral y la salud <br> de los animales</h5>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5 class="text-white mb-3"></h5>
                    <ul class="list-unstyled text-muted">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="nosotros.php">Nosotros</a></li>
                        <li><a href="servicios.php">Servicios</a></li>
                        <li><a href="contacto.php">Contacto</a></li>
                        <li><a href="IniciarSesion.php">Inicio de sesión</a></li>
                    </ul>
                </div>
				<div class="col-lg-2 col-md-6">
                    <h5 class="text-white mb-3"></h5>
                    <ul class="list-unstyled text-muted">
                        <li><a href="https://www.instagram.com/vetsoft">Instagram</a></li>
                        <li><a href="https://facebook.com/VetSoft.bo">Facebook</a></li>
                        <li><a href="https://www.linkedin.com/in/Vetsoft-Argentina/">Linkedin</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5 class="h4 text-white">Calle Falsa 123 - CABA <br> Teléfono: 4545-6593 </h5>
                </div>
            </div>
        </div>
    </footer>
</section>

	

</body>
</html>