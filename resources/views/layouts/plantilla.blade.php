<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>
<body class="ColorDeFondo">
    <div class="container-fluid">
        <!-- header -->
    <div class="row sombra justify-content-end" style="background-color: #080808;">
        <div class="col-lg-12 col-12 ">
          <nav class="navbar sticky-top  navbar-expand-lg navbar-dark">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <a class="navbar-brand texto-titulos" href="#">Silent4Business</a>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo03"><br>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link  texto-normal" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link  texto-normal" aria-current="page" href="#">Compañias</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link  texto-normal" aria-current="page" href="#">Empleados</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div><br>
    </div>
    <div class="container">
         
      
      
      
      
      
    @yield('content')
    </div>
   

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>