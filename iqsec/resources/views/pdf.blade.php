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
    

    <title>IQSEC - Perfil</title>
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

          <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Menu
                </a>
                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDarkDropdownMenuLink">
                  <li><a class="dropdown-item" href="{{route('privada')}}">Perfil</a></li>
                  <li><a class="dropdown-item" href="{{ route('private') }}">Contratatar Beneficios</a></li>
                  <li><a class="dropdown-item" href="{{ route('mis-beneficios') }}">Mis Beneficios</a></li>
                  <li><a class="dropdown-item" href="#">Descagar reporte</a></li>
                </ul>
              </li>
            </ul>
          </div>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            </ul>
            <a href="{{ route('logout') }}">
              <button class="btn btn-primary btn-primary-outline-success" type="button">Salir</button>
            </a>
            </div>
        </div>
      </nav>
   <!--========================================================== -->
                        <!--SERVICIOS CONTRATADOS-->
    <!--========================================================== -->


<section class="w-100">
    <div class="row w-75 mx-auto" id="servicios-fila-1">       
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Beneficio</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $contratado)
          <tr>
            <th scope="row">{{ $contratado->idBeneficio }}</th>
            <td>{{ $contratado->idCliente }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>

         
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