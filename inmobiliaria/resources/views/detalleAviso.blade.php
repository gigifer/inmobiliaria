@extends('layouts.header_y_footer')

@section('content')
  <div class="container mb-5 mt-5">
    <div class="row">
      <div class="col-12 text-center mb-4 font-weight-bold nombreAviso">
        {{ $aviso['titulo']}}
      </div>
      <div class=" col-ms-12 col-md-6 mb-4">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
              @foreach ($fotoCarrusel as $foto)
                <div class="carousel-item {{ $loop->first ? ' active' : '' }}">
                  <img class="d-block w-100" src="{{ asset('storage').'/'.$foto['ruta']}}" alt="Third slide">
                </div>
              @endforeach
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

      <div class="col-sm-12 col-md-5 letra boxDetalle" id="detalle">
        <p class="font-weight-bold">Detalle</p>
        <hr>
        <p>-Dirección: 9 de julio 345</p>
        <p>-Localidad: Córdoba</p>
        <p>-Cocina:</p>
        <p>-Dormitorios:</p>
        <p>-Baños:</p>
        <p>-Precio: ${{$aviso['precio']}}</p>
        <p>-Gastos:</p>
      </div>
      <div class="col-sm-12 col-md-11 offset-md-1 boxDetalle letra mt-3">
        <p class="font-weight-bold">Descripción</p>
        <hr>
        <p>
          {{$aviso['descripcion']}}
        </p>
      </div>
    </div>
  </div>

    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <script>
          fetch("https://maps.googleapis.com/maps/api/geocode/json?address=1600+Amphitheatre+Parkway,+Mountain+View,+CA&key=YOUR_API_KEY")
            .then(function(response) {
            return response.json();
          })
          .then(function(json) {
          })
          </script>
          <!--The div element for the map -->
          <div id="map"></div>
          <script>
          // Initialize and add the map
          function initMap() {
            // The location of Uluru
            var uluru = {lat: -25.344, lng: 131.036};
            // The map, centered at Uluru
            var map = new google.maps.Map(
                document.getElementById('map'), {zoom: 20, center: uluru});
            // The marker, positioned at Uluru
            var marker = new google.maps.Marker({position: uluru, map: map});
          }
              </script>
              <script async defer
              src="https://maps.googleapis.com/maps/api/js?AIzaSyBDSbU8x3ZN1HaiaKNnGBQO7VvLN23VDM8&callback=initMap">
              </script>
            </div>
        <div class="col-sm-12 col-md-6 pt-3">
          <p class="letra font-weight-bold text-center">¿Querés saber más?</p>
          @include('contactoVista')
        </div>
      </div>
    </div>

  @stop
