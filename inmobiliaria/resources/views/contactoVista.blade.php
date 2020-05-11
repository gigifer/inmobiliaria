<style>
  #mensajeExito{
    font-size: 20px;
  }
</style>
<div class="container letra-clara">
  <div class="row justify-content-md-center pt-3">
    <form id="datosFormulario" class="col-md-10 ml-auto" data-route="{{ url('controladorContacto') }}" method="post">
        @csrf
        <div class="form-group col-md-10 valid-feedback" id="mensajeExito">
          <span class=" ">
            <strong>El mensaje se envió correctamente</strong>
          </span>
        </div>
      <div class="form-group col-md-10">
        <label for="nombre" class="control-label">{{'Nombre'}}</label>
        <input type="text" class="form-control shadow-sm" name="nombre" id="nombre">
          <span class="invalid-feedback" role="alert">
            <strong id='mensajeNombre'></strong>
          </span>
      </div>
      <div class="form-group col-md-10">
        <label for="email" class="control-label">{{'Email'}}</label>
        <input type="email" class="form-control shadow-sm" name="email" id="email">
            <span class="invalid-feedback" role="alert">
              <strong id="mensajeEmail"></strong>
            </span>
      </div>
      <div class="form-group col-md-10">
        <label for="asunto" class="control-label">{{'Asunto'}}</label>
        <input type="text" class="form-control shadow-sm" name="asunto" id="asunto">
            <span class="invalid-feedback" role="alert">
              <strong id="mensajeAsunto"></strong>
            </span>
      </div>
      <div class="form-group col-md-10">
        <label for="mensaje" class="control-label">{{'Mensaje'}}</label>
        <textarea class="form-control shadow-sm" name="mensaje" id="mensaje" rows="7"></textarea>
            <span class="invalid-feedback" role="alert">
              <strong id="mensajeMensaje"></strong>
            </span>
      </div>
      <div class="form-goup col-md-10 mt-4 mb-5">
        <button type="submit" class="btn btn-block botones" name="button">Enviar</button>
      </div>
    </form>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="{{asset('js/datosContacto.js')}}" type="text/javascript"></script>
