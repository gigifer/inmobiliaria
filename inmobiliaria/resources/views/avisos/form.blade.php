<script>
var geocoder;
var map;
function initialize() {
  geocoder = new google.maps.Geocoder();
  var latlng = new google.maps.LatLng(-31.4156461, -64.1891382);
  var mapOptions = {
    zoom: 15,
    center: latlng
  }
  map = new google.maps.Map(document.getElementById('map'), mapOptions);
}
function codeAddress() {
  var address = document.getElementById('address').value;
  geocoder.geocode( { 'address': address}, function(results, status) {
    if (status == 'OK') {
      map.setCenter(results[0].geometry.location);
      var marker = new google.maps.Marker({
          map: map,
          position: results[0].geometry.location
      });
      $("input[name=lat]").val(results[0].geometry.location.lat());
      $("[name=lng]").val(results[0].geometry.location.lng());
    } else {
      alert('Geocode was not successful for the following reason: ' + status);
    }
  });
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgxx-vOpN29ZQSKLAHVnOdLW1mUosGsLU" async defer></script>

<body onload="initialize()">

<div class="form-group {{ $errors->has('foto') ? 'has-error' : ''}}">
    <label for="foto" class="control-label">{{ 'Foto' }}</label>
    <input class="form-control" name="foto[]" multiple type="file" id="foto" value="{{ isset($aviso->foto) ? $aviso->foto : ''}} {{ old('foto')}}" >
</div>
<div class="form-group {{ $errors->has('titulo') ? 'has-error' : ''}}">
    <label for="titulo" class="control-label">{{ 'Titulo' }}</label>
    <input class="form-control" name="titulo" type="text" id="titulo" value="{{ isset($aviso->titulo) ? $aviso->titulo : ''}} {{ old('titulo')}}" >
</div>
<div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}}">
    <label for="descripcion" class="control-label">{{ 'Descripcion' }}</label>
    <textarea class="form-control" name="descripcion" id="descripcion" rows="7" value="{{ isset($aviso->descripcion) ? $aviso->descripcion : ''}}">{{ old('descripcion')}}</textarea>
</div>
<div class="form-group {{ $errors->has('direccion') ? 'has-error' : ''}}">
    <label for="direccion" class="control-label">{{ 'Dirección' }}</label>
    <input class="form-control" name="direccion" type="text" id="direccion" value="{{ isset($aviso->direccion) ? $aviso->direccion : ''}} {{ old('direccion')}}" >
</div>
<div class="form-group {{ $errors->has('localidad') ? 'has-error' : ''}}">
    <label for="localidad" class="control-label">{{ 'Localidad' }}</label>
    <input class="form-control" name="localidad" type="text" id="localidad" value="{{ isset($aviso->localidad) ? $aviso->localidad : ''}} {{ old('localidad')}}" >
</div>
<div class="form-group {{ $errors->has('cocina') ? 'has-error' : ''}}">
    <label for="cocina" class="control-label">{{ 'Cocina' }}</label>
    <input class="form-control" name="cocina" type="text" id="cocina" value="{{ isset($aviso->cocina) ? $aviso->cocina : ''}} {{ old('cocina')}}" >
</div>
<div class="form-group {{ $errors->has('dormitorios') ? 'has-error' : ''}}">
    <label for="dormitorios" class="control-label">{{ 'Dormitorios' }}</label>
    <input class="form-control" name="dormitorios" type="text" id="dormitorios" value="{{ isset($aviso->dormitorios) ? $aviso->dormitorios : ''}} {{ old('dormitorios')}}" >
</div>
<div class="form-group {{ $errors->has('banios') ? 'has-error' : ''}}">
    <label for="banios" class="control-label">{{ 'Baños' }}</label>
    <input class="form-control" name="banios" type="text" id="banios" value="{{ isset($aviso->banios) ? $aviso->banios : ''}} {{ old('banios')}}" >
</div>
<div class="form-group {{ $errors->has('gastos') ? 'has-error' : ''}}">
    <label for="gastos" class="control-label">{{ 'Gastos' }}</label>
    <input class="form-control" name="gastos" type="text" id="gastos" value="{{ isset($aviso->gastos) ? $aviso->gastos : ''}} {{ old('gastos')}}" >
</div>
<div class="form-group {{ $errors->has('precio') ? 'has-error' : ''}}">
    <label for="precio" class="control-label">{{ 'Precio' }}</label>
    <input class="form-control" name="precio" type="number" min="0" step="any" id="precio" value="{{ isset($aviso->precio)?number_format((float)$aviso->precio, 2, '.', ''):number_format((float)old('Precio'), 2, '.', '') }}" >
</div>

<div class="form-group">
    <label for="id_categoria" class="control-label">{{ 'Categoria' }}</label>
    <select name="id_categoria" id="id_categoria" class="form-control {{$errors->has('id_categoria')?'is-invalid':''}}" value="{{ isset($aviso->id_categoria)?$aviso->categoria->nombre:old('id_categoria')}}">
        @foreach($categorias as $categoria)
        <option name="id_categoria" value="{{$categoria->id}}">{{$categoria->nombre}}</option>
        @endforeach
    </select>
    {!! $errors-> first('id_categoria','<div class="invalid-feedback">:message</div>') !!}
</div>
<div id="map" style="width: 400px; height: 480px;"></div>
<div class="form-group">
  <input id="address" type="textbox" value="Plaza San Martin Cordoba">
    <input type="hidden" name="lat" id="lat" value="">
    <input type="hidden"  name="lng" id="lng" value="">
    <input type="button" value="Buscar" onclick="codeAddress()">
</div>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>

</body>
