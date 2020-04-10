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
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>

        html, body {
                background-color: #FBFCFC;
                font-family: 'Nunito', sans-serif;
                color: #000000;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            #logo{
              width: 100%;
              height: 300px;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #000000;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }



            .destacado{
              overflow: hidden;
            }

            .destacado-derecha{
              float: left;
            }

            .destacado-izquierda{
              float: left;
            }

            .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
              background-color: #F39C12;
            }

            .nav-pills a{
              color: #F39C12;
            }

            .botones{
              background-color: #F39C12;
              color: white;
            }

            .contacto i{
              color: #F39C12;
            }

            .principal{
              margin-left: 0px;
              margin-right: 0px;
              font-family: 'Oswald', sans-serif;
            }

            .tasacion{
              background-color: khaki;
            }

            .titulos{
              font-weight: 600;
              font-family: 'Oswald', sans-serif;
            }

            .letra{
              font-size: 20px;
              font-family: 'Nunito', sans-serif;
            }

            .tasacion ul{
              font-size: 16px;
            }

            .contacto h1{
              color: khaki;
            }

        </style>
    </head>
    <body>
      <div class="container">
          <div class="title m-b-md">
              <img id="logo" src="{{ asset('img/logo.jpeg') }}" alt="logo">
          </div>
      </div>
        </div>
        <div class="container destacado mb-5">
          <div class="row">
            <div class="col-sm-3">

            </div>

            <div class="destacado-foto col-sm-5" style="height: 350px;">
              <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" style="height: 350px;" src="{{ asset('img/depa.jpg')}}" alt="First slide">
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

            <div class="card destacado-texto col-sm-4" style="height: 350px;">
              <div class="card-header bg-white text-center font-weight-bold">
                DESTACADO
              </div>
              <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn botones">ver mas </a>
              </div>
            </div>
          </div>
        </div>

        <div class="row principal">
          <div class="col-3">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link active" id="v-pills-alquiler-tab" data-toggle="pill" href="#v-pills-alquiler" role="tab" aria-controls="v-pills-alquiler" aria-selected="true">Alquiler</a>
              <a class="nav-link" id="v-pills-venta-tab" data-toggle="pill" href="#v-pills-venta" role="tab" aria-controls="v-pills-venta" aria-selected="false">Venta</a>
              <a class="nav-link" id="v-pills-temporarios-tab" data-toggle="pill" href="#v-pills-temporarios" role="tab" aria-controls="v-pills-temporarios" aria-selected="false">Temporarios</a>
              <a class="nav-link" id="v-pills-tasaciones-tab" data-toggle="pill" href="#v-pills-tasaciones" role="tab" aria-controls="v-pills-tasaciones" aria-selected="false">Tasaciones</a>
              <a class="nav-link" id="v-pills-contacto-tab" data-toggle="pill" href="#v-pills-contacto" role="tab" aria-controls="v-pills-contacto" aria-selected="false">Contacto</a>
            </div>
          </div>
          <div class="col-9">
            <div class="tab-content" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-alquiler" role="tabpanel" aria-labelledby="v-pills-alquiler-tab">
                <div class="row">
                  @foreach ($avisosAlquiler as $item)
                      <div class="card md-col-2">
                        <img src="{{ asset('storage').'/'.$item->foto}}" alt="" width="200" class="">
                        <div class="card-body">
                          <h5 class="card-title">{{$item->titulo}}</h5>
                          <p class="card-text">{{$item->descripcion}}</p>
                          <p>{{$item->precio}}</p>
                          <a href="{{$item->id}}"><button type="button" class="btn botones">VER MÁS</button></a>
                        </div>
                       </div>
                      @endforeach
                </div>
              </div>
              <div class="tab-pane fade" id="v-pills-venta" role="tabpanel" aria-labelledby="v-pills-venta-tab">
                <div class="row">
                  @foreach ($avisosVenta as $item)
                      <div class="card md-col-2">
                        <img src="{{ asset('storage').'/'.$item->foto}}" alt="" width="200" class="">
                        <div class="card-body">
                          <h5 class="card-title">{{$item->titulo}}</h5>
                          <p class="card-text">{{$item->descripcion}}</p>
                          <p>{{$item->precio}}</p>
                          <a href="{{$item->id}}"><button type="button" class="btn botones">VER MÁS</button></a>
                        </div>
                       </div>
                      @endforeach
                </div>
              </div>
              <div class="tab-pane fade" id="v-pills-temporarios" role="tabpanel" aria-labelledby="v-pills-temporarios-tab">
                <div class="row">
                  @foreach ($avisosTemporario as $item)
                      <div class="card md-col-2">
                        <img src="{{ asset('storage').'/'.$item->foto}}" alt="" width="200" class="">
                        <div class="card-body">
                          <h5 class="card-title">{{$item->titulo}}</h5>
                          <p class="card-text">{{$item->descripcion}}</p>
                          <p>{{$item->precio}}</p>
                          <a href="{{$item->id}}"><button type="button" class="btn botones">VER MÁS</button></a>
                        </div>
                       </div>
                      @endforeach
                </div>
              </div>
              <div class="tab-pane fade" id="v-pills-tasaciones" role="tabpanel" aria-labelledby="v-pills-tasaciones-tab">
                <div class="tasacion pt-4 pb-4">
                  <h1 class="titulos text-center">¿Querés vender o comprar un inmueble?</h1>
                  <p class="letra text-center p-2">La tasación, es un documento que realiza un perito tasador y tiene como objetivo establecer de forma justificada el valor de un bien, de acuerdo con unos criterios previamente establecidos de acuerdo a lo que el mercado está dispuesto a pagar al momento de la evaluación.</p>
                  <div class="letra">
                    <h4 class="text-center">Los factores que influyen en la valoración de un inmueble son:</h4>
                    <ul>
                      <li>La ubicación.</li>
                      <li>Los servicios próximos: zonas verdes, lugares de ocio, servicios escolares, médicos, supermercados...</li>
                      <li>La superficie: m2 y distribución, si tiene o no garaje o trastero...</li>
                      <li>La calidad de los materiales de construcción.</li>
                      <li>La situación del inmueble dentro del edificio: se valora más si es orientación sur y los pisos altos.</li>
                      <li>La antigüedad.</li>
                    </ul>
                  </div>
                </div>
                <div class="contacto">
                  <h1 class="text-center titulos mt-4 mb-4">¡CONTACTANOS!</h1>
                  <div class="">
                    <i class="fas fa-mobile-alt"></i>  351-531-3776  <i class="fab fa-whatsapp"></i>
                    <i class="fab fa-facebook"></i>  Seguinos
                    <i class="fas fa-envelope-square"></i> Mn.bienesinmuebles@gmail.com
                  </div>

                  @include('contacto')


                </div>

              </div>
              <div class="tab-pane fade" id="v-pills-contacto" role="tabpanel" aria-labelledby="v-pills-contacto-tab">
                <div id="contacto">
                  @include('contacto')
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>


        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
