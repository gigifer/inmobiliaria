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
        <p class="font-weight-bold">Detalle <img src="{{ asset('img/billetera.ico') }}" alt="" style="width:40px;"></p>
        <hr>
        <p><strong>-Dirección: </strong>{{ $aviso['direccion'] }}</p>
        <p><strong>-Localidad: </strong>{{ $aviso['localidad'] }}</p>
        <p><strong>-Cocina: </strong>{{ $aviso['cocina'] }}</p>
        <p><strong>-Dormitorios: </strong>{{ $aviso['dormitorios'] }}</p>
        <p><strong>-Baños: </strong>{{ $aviso['banios'] }}</p>
        <p><strong>-Precio: </strong>${{ $aviso['precio'] }}</p>
        <p><strong>-Gastos: </strong>{{ $aviso['gastos'] }}</p>
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
          <div class="" id="map"></div>
          <input type="hidden" name="lat" value="{{ $aviso['lat']}}">
          <input type="hidden" name="lng" value="{{ $aviso['lng']}}">
          <script>
            var map;
            function initMap() {
              map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: parseFloat($("[name=lat]").val()), lng: parseFloat($("[name=lng]").val())},
                zoom: 16
              });
              var marker = new google.maps.Marker({
                  map: map,
                  position: {lat: parseFloat($("[name=lat]").val()), lng: parseFloat($("[name=lng]").val())}
              });
            }
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgxx-vOpN29ZQSKLAHVnOdLW1mUosGsLU&callback=initMap" async defer></script>
        </div>

        <div class="col-sm-12 col-md-6 pt-3">
          <p class="letra font-weight-bold text-center">¿Querés saber más?</p>
          @include('contactoVista')
        </div>
      </div>
    </div>

  @stop
