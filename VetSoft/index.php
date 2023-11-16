<!DOCTYPE html>

<html lang="es" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VetSoft-DiseñoWeb</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos/CssJoan.css">
    <link rel="icon" href="img\Vetsoft.ico" type="image/png">
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

<!-- Historia -->
<br><br><br>
<h2 style="text-align: center;"><br>Vetsoft</h2>

<p class="text-center">
    El lugar donde el amor y la tecnología cuidan a tus mascotas <br>
</p>

<!-- Carrusel -->

<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://cdn.euroinnova.edu.es/img/subidasEditor/descubre%20la%20diferencia%20entre%20asistente%20t%C3%A9cnico%20veterinario%20y%20auxiliar%20veterinario-1603105308.webp" class="d-block w-100" alt="..." class="img-responsive">
    </div>
    <div class="carousel-item">
      <img src="https://cloudfront-us-east-1.images.arcpublishing.com/infobae/L6GI2ZSXFZGADESR57UO666ZE4.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://media.istockphoto.com/id/1171733307/es/foto/veterinario-con-perro-y-gato-cachorro-y-gatito-en-el-m%C3%A9dico.jpg?s=612x612&w=0&k=20&c=v08DSeFqYx2_VGucKz5AxeC0ZEP5B1IBfBVWotHYF3s=" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<!-- Cards con espacio en el medio -->

<div class="row justify-content-center">
  <div class="col-md-3">
    <div class="card text-center border-0">
        <img src="https://wellvet.com.ar/wp-content/uploads/2023/01/Laboratorio.png" alt="" style="width:150px; height:150px;" class="mx-auto">
        <div class="card-body">
          <h5 class="card-title">Laboratorio</h5>
            <p class="card-text">Vetsoft cuenta con un servicio de laboratorio para realizar todas las determinaciones que los pacientes necesitan.</p> 
        </div>
    </div>
  </div>


  <div class="col-md-3">
    <div class="card text-center border-0">
        <img src="https://wellvet.com.ar/wp-content/uploads/2023/05/Especialistas.png" alt="" style="width:150px; height:150px;" class="mx-auto">
        <div class="card-body">
          <h5 class="card-title">Profesionales</h5>
            <p class="card-text">Un equipo de profesionales con basta experiencia dispuestos a brindar el mejor servicio.</p> 
        </div>
    </div>
  </div>
</div>

<br> <br>

<div class="row justify-content-center">
  <div class="col-md-3">
    <div class="card text-center border-0">
        <img src="https://wellvet.com.ar/wp-content/uploads/2023/01/Cirugia.png" alt="" style="width:150px; height:150px;" class="mx-auto">
        <div class="card-body">
          <h5 class="card-title">Especialistas</h5>
            <p class="card-text">
						Contamos con un equipo de cirujanos y anestesiólogos especializados en realizar cirugías de diversas complejidades. </p> 
        </div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="card text-center border-0">
        <img src="https://wellvet.com.ar/wp-content/uploads/2023/01/24.png" alt="" style="width:150px; height:150px;" class="mx-auto">
        <div class="card-body">
          <h5 class="card-title">Urgencias</h5>
            <p class="card-text">Las 24 hs de los 365 días del año. La clínica cuenta con la mejor tecnología para atender emergencias.</p> 
        </div>
    </div>
  </div>
</div>

<br> <br>

<div class="row justify-content-center">
  <div class="col-md-3">
    <div class="card text-center border-0">
        <img src="https://wellvet.com.ar/wp-content/uploads/2023/06/diagnostico-por-imagen.png" alt="" style="width:150px; height:150px;" class="mx-auto">
        <div class="card-body">
          <h5 class="card-title">Diagnostico por imágenes</h5>
            <p class="card-text">Equipamiento de alta tecnología en diagnóstico y tratamiento con la finalidad de brindar el mejor servicio de medicina veterinaria a sus pacientes.					</p> 
        </div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="card text-center border-0">
        <img src="https://wellvet.com.ar/wp-content/uploads/2023/01/Internacion.png" alt="" style="width:150px; height:150px;" class="mx-auto">
        <div class="card-body">
          <h5 class="card-title">Internación</h5>
            <p class="card-text">Contamos con diversas áreas de internación para: perros, gatos, enfermedades infecciosas y una terapia intensiva. Además de diversos equipos de veterinarios y asistentes especializados en atención de internación. 					</p> 
        </div>
    </div>
  </div>
</div>

<h2 style="text-align: center;"><br>Ubicación</h2>

<div class = "mapa">
    <div class="row justify-content-center">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d820.9187177899859!2d-58.37473018698272!3d-34.61238214256065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccad4506b020d%3A0xb7ea985cd8c0990f!2sInap%20-%20Centro%20de%20Capacitaci%C3%B3n!5e0!3m2!1ses-419!2sar!4v1699999028369!5m2!1ses-419!2sar" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>

<section>
  <br>
</section>

<!-- FOOTER -->
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

</body>

</html>