@extends('layouts.header_y_footer')
@section('content')
  <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 vistas" id="alquileres">
    @foreach ($avisosAlquiler as $item)
    <div class="col mb-4">
      <div class="card shadow-sm">
        <img src="{{ asset('storage').'/'.$item->foto[0]['ruta']}}" class="card-img-top" alt="..." style="height:220px">
        <div class="card-body">
          <h5 class="card-title text-center letra vistasTitulo">{{$item->titulo}}</h5>
          <p class="card-text letra-clara">{{$item->descripcion}}</p>
          <p class="letra">${{$item->precio}}</p>
          <div class="d-flex justify-content-end">
            <a href="{{ route('aviso-detalle', $item->id) }}"><button type="button" class="btn botones letra">VER MÁS</button></a>
          </div>
        </div>
      </div>
    </div>
   @endforeach
  </div>
  <hr class="separador">
  <br>
  <div class="tasacion p-5 shadow-md" id="tasaciones">
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
  <div class="contacto" id="contacto">
    <h1 class="text-center titulos mt-4 mb-4">¡CONTACTANOS!</h1>
  </div>
  <div class="">
    <div>
      @include('contactoVista')
    </div>
  </div>
@stop
