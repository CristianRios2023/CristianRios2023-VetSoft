<!DOCTYPE html>

<html lang="es" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VetSoft-DiseñoWeb</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="estilos/styleContraseñaOlvidada.css">
    <link rel="icon" href="\img\Vetsoft.ico" type="image/png">
</head>

<body>

<!-- Navbar -->

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
            <a href="iniciarSesion.php">Iniciar Sesión</a>
        </nav>
    </div>
</header>

<!-- Formulario -->
<br><br><br><br>

<div>
    <h2 style="text-align: center;"><br>Recuperar contraseña</h2>
    <br><br>
    <div class="container Form">
        <form id="myForm">
            <div  style="" class="mb-3 text-center">
                <label for="email" class="form-label form-label">Correo Electrónico</label>
                <input style="" type="email" class="form-control" id="email" required>
            </div>
            <div class="text-center">
                <button type="submit" name="enviar" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>
</div>


<br> <br><br> <br><br> <br><br> <br><br> <br><br><br> <br>




<!-- FOOTER -->
    <footer class="w-100 py-4 flex-shrink-0">
        <div class="container py-4">
            <div class="row gy-4 gx-5">
                <div class="col-lg-4 col-md-6">
                    <h5 class="h2 text-white">VetSoft</h5>
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
</div>


</body>

</html>

    <script>
        document.getElementById('myForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevenir el comportamiento por defecto del botón de enviar

            // Simular el envío del correo electrónico
            var email = document.getElementById('email').value;

            // Mostrar alerta de confirmación
            alert('Se envío el correo con la nueva clave a su casilla: ' + email);
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoJtK </body>