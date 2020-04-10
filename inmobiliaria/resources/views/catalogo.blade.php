<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @foreach ($avisosVenta as $item)
    <img src="{{$item->foto}}" class="card-img-top" alt="">
    <div class="card-body">
      <h5 class="card-title">{{$item->titulo}}</h5>
      <p class="card-text">{{$item->descripcion}}</p>
      <p>{{$item->precio}}</p>
      <a href="{{$item->id}}"><button type="button" class="btn botones">VER MÁS</button></a>
      </div>
      @endforeach

      @foreach ($avisosVenta as $item)
      <img src="{{$item->foto}}" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">{{$item->titulo}}</h5>
        <p class="card-text">{{$item->descripcion}}</p>
        <p>{{$item->precio}}</p>
        <a href="{{$item->id}}"><button type="button" class="btn botones">VER MÁS</button></a>
        </div>
        @endforeach
  </body>
</html>
