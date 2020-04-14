<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Morelli Noriega</title>

    <!--Links -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/acf02b5d89.js" crossorigin="anonymous"></script>
  </head>
  <body>

    <style>
      #logo{
        width: 100%;
        height: 300px;
      }

    </style>

    <div class="container-fluid">
        <div class="title m-b-md">
            <img id="logo" src="{{ asset('img/logo.jpeg') }}" alt="logo">
        </div>
    </div>

    <div class="container mb-5 mt-5">
      <div class="row">
      <div class="col-md-6" style="height: 350px;">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" style="height: 350px;" src="{{ asset('storage').'/'.$aviso->foto}}" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" style="height: 350px;" src="{{ asset('img/depa.jpg')}}" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" style="height: 350px;" src="{{ asset('img/depa.jpg')}}" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>

        <div class="card h-100 shadow-sm col-sm-6" style="height: 350px;">
          <div class="card-header bg-white text-center font-weight-bold">
            {{$aviso->titulo}}
          </div>
          <div class="card-body">
            <p class="card-text">Direccion</p>
            <p class="card-text">Localidad</p><br>
            <p class="card-text">{{$aviso->descripcion}}</p><br>
            <p class="card-text">Características:</p>
            <p>-cocina</p>
            <p>-dormitorios</p>
            <p>-baños</p>
            <p>${{$aviso->precio}}</p>
            <p>-gastos</p>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6809.492450631561!2d-64.17897164255979!3d-31.421117307068897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sar!4v1586818156602!5m2!1ses!2sar" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="col-md-6">
          @include('contactoVista')
        </div>
      </div>
    </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  {{-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> --}}
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  </body>
</html>
