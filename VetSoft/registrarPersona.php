<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="estilos/styleContacto.css" type="text/css" rel="stylesheet" />
	<link rel="icon" href="img\Vetsoft.ico" type="image/png">
        <title>Registrar Persona</title>
	
</head>

<body>
    <header>
    
    <div class="head">
        <div class="logo" >
            <a class="navbar-brand" href="index.php">
            <img src="img\Vetsoft.png" alt="Logo" width="60" height="60" class="d-inline-block align-text-top"></a>
    
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
<br><br><br><br><br>
<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div>
								<a class="active" id="login-form-link">Registrar Usuario</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form method="post" role="form" >
									<div class="form-group">
                                        <label for="nombre">Nombres</label>
										<input type="text" name="nombre" id="nombre" tabindex="1" class="form-control" placeholder="Nombres"required>
									</div>
                                    <div class="form-group">
                                        <label for="apellido">Apellidos</label>
										<input type="text" name="apellido" id="apellido" tabindex="2" class="form-control" placeholder="Apellidos">
									</div>
                                    <div class="form-group">
                                        <label for="usuario">Usuario</label>
										<input type="text" name="usuario" id="usuario" tabindex="3" class="form-control" placeholder="Ej: Fulanito"required>
									</div>
									<div class="form-group">
                                        <label for="contraseña">Contraseña</label>
										<input type="password" name="contraseña" id="contraseña" tabindex="4" class="form-control" placeholder="*******" required>
									</div>
                                    <div class="form-group">
                                        <label for="email">Correo electrónico</label>
										<input type="text" name="email" id="email" tabindex="4" class="form-control" placeholder="ejemplo@hotmail.com" required>
									</div>
                                    <div class="text-center">
                                        <input type="submit"name="enviar" class="btn btn-primary" value="Enviar Formulario">
                                    </div>
										
									</div>
								</form>
								<?php
                                    include("controladorregistrousuario.php");
                                ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <br><br><br><br><br>
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
                        <li><a href="IniciarSesion.php">Home</a></li>
                        <li><a href="nosotros.php">Nosotros</a></li>
                        <li><a href="servicios.php">Servicios</a></li>
                        <li><a href="contacto.php">Contacto</a></li>
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
    
    
</body>

</html>
    <script>
        document.getElementById('login-form').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevenir el comportamiento por defecto del botón de enviar
            // Simular el envío del correo electrónico
            //var email = document.getElementById('email').value;
            // Mostrar alerta de confirmación
            //alert('¡Gracias por contactarnos! En breve estaremos respondiendo su consulta' + email);
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoJtK </body>
