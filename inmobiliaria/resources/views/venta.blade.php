@extends('layouts.header_y_footer')
  @section('content')
  <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 vistas" id="ventas">
    @foreach ($avisosVenta as $item)
    <div class="col mb-4">
      <div class="card shadow-sm">
        <img src="{{ asset('storage').'/'.$item->foto[0]['ruta']}}" class="card-img-top" alt="..." style="height:220px">
        <div class="card-body">
          <h5 class="card-title text-center letra vistasTitulo">{{$item->titulo}}</h5>
          <p class="card-text letra-clara">{{$item->descripcion}}</p>
          <p class="letra">${{$item->precio}}</p>
          <div class="d-flex justify-content-end">
            <a href="{{ route('aviso-detalle', $item->id)}}"><button type="button" class="btn botones letra">VER MÁS</button></a>
          </div>
        </div>
      </div>
    </div>
   @endforeach
  </div>
  <div class="contacto" id="contacto">
    <h1 class="text-center titulos mt-4 mb-4">¡CONTACTANOS!</h1>
  </div>
  <div class="">
    <div>
      @include('contactoVista')
    </div>
  </div>
  @stop
