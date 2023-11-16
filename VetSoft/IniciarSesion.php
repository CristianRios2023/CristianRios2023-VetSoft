<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link href="estilos/style_IniciarSesion.css" type="text/css" rel="stylesheet" />
	<title>Iniciar Sesion</title>
    <link rel="icon" href="img\Vetsoft.ico" type="image/png">
</head>

<body>
<header>
	<div class="head">
		<div class="logo" >
			<a class="navbar-brand" href="index.php">
			<img src="img\Vetsoft.png" alt="logo" width="60" height="60" class="d-inline-block align-text-top"></a>
		</div>
		<nav class="navbar">
			<a href="servicios.php">Servicios</a>
			<a href="preguntasFrecuentes.php">Preguntas Frecuentes</a>
			<a href="nosotros.php">Nosotros</a>
			<a href="contacto.php">Contacto</a>
			<a href="IniciarSesion.php">Iniciar Sesión</a>
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
								<a class="active" id="login-form-link">Iniciar sesión</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="text" name="usuario" id="usuario" tabindex="1" class="form-control" placeholder="Usuario" value="">
									</div>
									<div class="form-group">
										<input type="password" name="contraseña" id="contraseña" tabindex="2" class="form-control" placeholder="Contraseña">
									</div>
									<div class="form-group text-center">
										<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
										<label for="remember"> Recordarme</label>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Iniciar sesión">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="contraseñaOlvidada.php" tabindex="5" class="forgot-password">¿Has olvidado tu contraseña?</a>
												</div>
												<div class="text-center">
													<a href="registrarPersona.php" tabindex="5" class="forgot-password">Registrarse</a>
												</div>
											</div>
										</div>
									</div>
									<?php
									include("conexionBD.php");
									include("controladorIniciarSesion.php");
									?>
								</form>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>

	<br><br><br><br><br><br><br><br><br><br><br><br>
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