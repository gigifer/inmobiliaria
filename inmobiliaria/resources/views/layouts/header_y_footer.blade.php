<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Morelli Noriega</title>

    <!--Links -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/acf02b5d89.js" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital@1&family=Roboto:wght@300&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>

        /* Barra de navegación*/
        .navbar{
          background-color: #c11919;
          width: 100%;
          margin-bottom: 1rem;
          box-shadow: 5px 10px 8px #888888;
        }

        .nav-link{
          color: white;
          font-size: 1.5rem;
          font-family: 'Oswald', sans-serif;
        }

        .nav-link:hover{
          color:#ffd275;
        }

        .links{
          width: 100%;
          justify-content: space-around;
        }

        .navbar-brand{
          padding-left: 20px;
          margin-right: 0px;
        }

        .navbar-brand img{
          width: 7rem;
          height: 5rem;
        }

        .navbar-toggler{
          background-color: #a30000;
        }

        .colorMenu{
          color: #f9a03f;
        }

        /*Página principal*/

        .separador{
          border-top: 5px solid #a30000;
          border-radius: 5px;
        }

        .botones{
          background-color: #ff6700;
          color: white;
        }

        .tasacion{
          background-color: #23231a;
          color: #dccca3;
        }

        .titulos{
          font-weight: 600;
          font-family: 'Oswald', sans-serif;
        }

        .contacto{
          color: #a30000;
        }

        .letra{
          font-size: 1rem;
          font-family: 'Nunito', sans-serif;
        }

        .tasacion ul{
          font-size: 16px;
        }

        .letra-clara{
          font-size: .9rem;
          font-family: 'Roboto', sans-serif;
        }

        .vistas img{
          border-radius: 1rem;
        }

        .vistas .card{
          border-radius: 1rem;
        }

        .vistas .card-body{
          height: 310px;
          border-radius: 1rem;
        }

        .vistas .card-text{
          line-height: 1.5rem;
          display: -webkit-box;
          overflow:hidden;
          -webkit-line-clamp: 5;
          -webkit-box-orient: vertical;
          text-overflow: ellipsis;
        }

        .vistasTitulo{
          display: -webkit-box;
          overflow:hidden;
          -webkit-line-clamp: 2;
          -webkit-box-orient: vertical;
          text-overflow: ellipsis;
        }

        /*Footer*/
        .redes{
          background-color: #c11919;
          color: white;
          text-align: center;
          padding-top: 2rem;
          padding-bottom: 1rem;
        }

        .redes i{
          display: inline-flex;
          font-size: 1.5rem;
        }

        .redes a{
          color: white;
          text-decoration: none;
        }

        .redes p{
          padding-left: 10px;
          font-family: 'Oswald', sans-serif;
          font-size: 20px;
        }

        /*Detalle de aviso*/

        .nombreAviso{
          font-size: 1.5rem;
          font-family: 'Oswald', sans-serif;
        }

        #map {
          height: 500px;
          width: 100%;
        }

        .boxDetalle{
          border: 2px solid #a30000;
          padding-top: 10px;
          margin-left: 15px;
          margin-right: 15px;
        }

        #detalle{
          padding-left: 35px;
        }
    </style>
  </head>
  <body>
    <div class="container-fluid pl-0 pr-0">
      <nav class="navbar navbar-expand-md ">
        <a class="navbar-brand" href="{{url('/')}}"><img src="{{ asset('img/logo3.png') }}" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="colorMenu"><i class="fas fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav links">
            <a class="nav-item nav-link active" href="{{ url('/')}}">Alquiler<span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="{{ url('/ventaRuta')}}">Venta</a>
            <a class="nav-item nav-link" href="{{ url('/temporarioRuta')}}">Temporario</a>
            <a class="nav-item nav-link" href="{{ url('/')}}/#tasaciones">Tasaciones</a>
            <a class="nav-item nav-link" href="#contacto">Contacto</a>
          </div>
        </div>
      </nav>
    </div>
    <div class="container letra">
      @yield('content')
    </div>
    <div class=" container-fliud redes">
      <div class="row mr-0 ml-0">
        <div class="col-ms-4 col-md-3 col-lg-4">
          <i class="fas fa-mobile-alt"></i><p>351-531-3776</p>
        </div>
        <div class="col-ms-4 col-md-3 col-lg-4">
          <a href="https://www.facebook.com/barbara.morellinoriega.1" target="_blank"><i class="fab fa-facebook"></i></a>
          <a href="https://www.instagram.com/barbaramorellinoriega/?hl=es-la" target="_blank"><i class="fab fa-instagram"></i></a><p>Seguinos</p>
        </div>
        <div class="col-ms-4 col-md-6 col-lg-4">
          <a href="mailto:Mn.bienesinmuebles@gmail.com"><i class="fas fa-envelope-square"></i><p>Mn.bienesinmuebles@gmail.com</p></a>
        </div>
      </div>
    </div>
    <div class="" style="position: fixed; bottom: 20px; right: 20px;">
      <a href="https://api.whatsapp.com/send?phone=5493515313776&text=mensaje"> <img src="{{ asset('img/whatsapp.png') }}" alt="" style="width:70px;"> </a>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
