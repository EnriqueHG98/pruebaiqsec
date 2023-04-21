<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    

    <title>iQSEC.</title>
  </head>
  <body>
  <!--========================================================== -->
                        <!-- ENCABEZADO -->
  <!--========================================================== -->

    <nav  class="navbar navbar-expand-lg navbar-light p-3"  id="menu">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img class="favicon" src="{{ asset('img/iqsec2.jpg') }}">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contenedor-formulario">Registrate</a>
              </li>
            </ul>
            <a href="{{ route('login') }}">
              <button class="btn btn-primary btn-primary-outline-success" type="button">Ingresar</button>
            </a>
            </div>
        </div>
      </nav>

    <!--========================================================== -->
                        <!-- SLIDER DE IMAGENES-->
    <!--========================================================== -->
   
    <div id="carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="3000">
            <img src="{{ asset('img/slide1.jpg') }}" class="d-block w-100" alt="">
          </div>
          
 
          <div class="carousel-item" data-bs-interval="3000">
            <img src="{{ asset('img/slide2.jpg') }}" class="d-block w-100" alt="...">
          </div>
 

          <div class="carousel-item" data-bs-interval="3000">
            <img src="{{ asset('img/slide3.jpg') }}" class="d-block w-100" alt="...">
          </div>
 
 
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel"  data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel"  data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>    
     
        
     
    <!--========================================================== -->
                        <!-- INTRODUCCION DE SERVICIOS-->
    <!--========================================================== -->


    <section class="d-flex flex-column justify-content-center align-items-center pt-5  text-center w-50 m-auto" id="intro">
    <h1 class="p-3 fs-2 border-top border-3">Una agencia única para todas tus necesidades de <span class="text-primary">Ciberseguridad<span/></h1>
     <p class="p-3  fs-4">
         <span class="text-primary">iQSEC.</span> Somos una comunidad de especialistas orgullosamente mexicanos y apasionados por la innovación tecnológica.      
     </p>   
    </section>

   <!--========================================================== -->
                        <!-- TIPOS DE SERVICIOS-->
    <!--========================================================== -->


<section class="w-100">
    <div class="row w-75 mx-auto" id="servicios-fila-1">       
        <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start my-5 icono-wrap">
            <div>
                <h3 class="fs-5 mt-4 px-4 pb-1">Servicio de consultoría PCI-DSS</h3>
                <p class="px-4">Payment Card Industry Data Security Standard (PCI-DSS) es un estándar que establece un conjunto de medidas prácticas y herramientas de seguridad que pretenden garantizar la seguridad en el tratamiento de la información asociada a pagos con tarjeta.</p>
            </div>
        </div>

        <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start  my-5 icono-wrap">
            <div>
                <h3 class="fs-5 mt-4 px-4 pb-1 icono-wrap">PCI-DSS</h3>
                <p class="px-4">PCI-DSS busca mejorar el nivel de seguridad de los pagos realizados mediante tarjetas, promoviendo la existencia de un entorno de pago seguro para la protección de las tarjetas bancarias y sus titulares.</p>
            </div>
        </div>   
    </div>
    
    <div class="row w-75 mx-auto mb-5" id="servicios-fila-2">       
        <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start  my-5 icono-wrap">
            <div>
                <h3 class="fs-5 mt-4 px-4 pb-1">¿Que diferencia a IQSEC?</h3>
                <p class="px-4">Nuestra práctica de servicios de Consultoría y Seguridad tiene como misión, lograr en conjunto con el cliente, niveles de seguridad adecuados para proteger la información sensible de sus clientes y sistemas, a través de un porfolio integral de servicios, utilizando metodologías y herramientas probadas internacionalmente, por profesionales y especialistas de clase mundial.</p>
            </div>
        </div>

        <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start my-5 icono-wrap">
            <img src="./img/seo.png" alt="seo" width="180" height="160" >

            <div>
                <h3 class="fs-5 mt-4 px-4 pb-1">SEO</h3>
                <p class="px-4">Analizamos la eficiencia y optimizamos los sitios WEB</p>
            </div>
        </div>   
    </div>
</section>


<!--========================================================== -->
                      <!-- CONTENEDOR DEL FORMULARIO -->
<!--========================================================== -->

<section id="seccion-contacto" class="border-bottom border-secondary border-2">
  <div id="bg-contactos">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#131e40" fill-opacity="1" d="M0,32L120,42.7C240,53,480,75,720,74.7C960,75,1200,53,1320,42.7L1440,32L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg>
  </div>

  <div class="container  border-top border-primary " style="max-width: 500px" id="contenedor-formulario">
      <div class="text-center mb-4" id="titulo-formulario">
        <div><img src="./img/support.png" alt="" class="img-fluid ps-5"></div>
        <h2>Registrate</h2>
        <p class="fs-5">Estamos aqui para hacer realidad de tus proyectos</p>
      </div>

      <form method="GET" data-netlify="true">  
        @csrf    
            <div class= "mb-3">
              <label>Email:</label>           
              <input type="email" class="form-control" id="email" name="email" placeholder="nombre@ejemplo.com">
            </div>
          
            <div class="mb-3">            
              <label>Nombre:</label>
              <input type="input" class="form-control" id="name" name="name" placeholder="Enrique Herrera">
            </div>
      
            <div class="mb-3">
              <label>Contraseña:</label>  
              <input type="password" class="form-control" name="pass" id="pass" placeholder="Password">
            </div>

          <div class="mb-3">
            <input type="button" value="registrar" id="registro">
            {{-- <button type="submit" id="registro" class=" btn btn-primary w-100 fs-5">Registrar</button> --}}
          </div>
      </form>
  
  </div>
</section>


<!--========================================================== -->
                        <!--FOOTER-->
<!--========================================================== -->


<footer class="w-100  d-flex  align-items-center justify-content-center flex-wrap">
  <p class="fs-5 px-3  pt-3">iQSEC. &copy; Todos Los Derechos Reservados 2023 by HGJE</p>
  <div id="iconos" >
    <a href="https://www.facebook.com/IQsec" target="_blank"><i class="bi bi-facebook"></i></a>
    <a href="https://twitter.com/IQsec" target="_blank"><i class="bi bi-twitter"></i></a>
    <a href="https://bit.ly/WhatsApp-IQSEC" target="_blank"><i class="bi bi-whatsapp"></i></a>  
</div>
</footer>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/functions.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script> 
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script src="main.js"></script>

  </body>
</html>