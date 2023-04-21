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
    

    <title>IQSEC - Login</title>
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
                <a class="nav-link" aria-current="page" href="{{route('inicio')}}">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contenedor-formulario">Registrate</a>
              </li>
            </ul>
          </div>

        </div>
      </nav>


    <!--========================================================== -->
                        <!-- LOGIN FORM-->
  
    <section>
    <div class="text-center mb-4" id="titulo-formulario">
          <h2>LOGIN</h2>
        </div>
        
    <div class="login">
        <form method="POST" action="{{route('inicia-sesion')}}" data-netlify="true">  
          @csrf    
              <div class= "mb-3">
                <label>Email:</label>           
                <input type="email" class="form-control" id="email" name="email" placeholder="nombre@ejemplo.com">
              </div>
            
              <div class="mb-3">
                <label>Contraseña:</label>  
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
              </div>
  
            <div class="mb-3">
              <button type="submit" id="acceder" class=" btn btn-primary w-100 fs-5">Acceder</button>
            </div>

            <div class="mb-3">
                <p>¿No tienes cuenta? <a href="{{route('inicio')}}">Registrate</a></p>
            </div>

        </form>
    </div>
    </section>    

    <!--========================================================== -->
                        <!--FOOTER-->
    <!--========================================================== -->


    <footer class="w-100  d-flex  align-items-center justify-content-center flex-wrap" >
      <p class="fs-5 px-3  pt-3">iQSEC. &copy; Todos Los Derechos Reservados 2023 by HGJE</p>
      <div id="iconos" >
        <a href="https://www.facebook.com/IQsec" target="_blank"><i class="bi bi-facebook"></i></a>
        <a href="https://twitter.com/IQsec" target="_blank"><i class="bi bi-twitter"></i></a>
        <a href="https://bit.ly/WhatsApp-IQSEC" target="_blank"><i class="bi bi-whatsapp"></i></a>  
    </div>
    </footer>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    {{-- <script src="{{ asset('js/functions.js') }}"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script> 
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script src="main.js"></script>

  </body>
</html>