
<div class="container">
  <div class="row row justify-content-md-center">
    <form class="col-md-10" action="{{ url('contacto') }}" method="post">
        @csrf
      <div class="form-group col-md-10">
        <label for="nombre" class="control-label">{{'Nombre'}}</label>
        <input type="text" class="form-control shadow-sm @error ('nombre') is-invalid @enderror" name="nombre" id="nombre" value="{{ old('nombre')}}">
        @error ('nombre')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
      <div class="form-group col-md-10">
        <label for="email" class="control-label">{{'Email'}}</label>
        <input type="email" class="form-control shadow-sm @error ('email') is-invalid @enderror" name="email" id="email" value="{{ old('email')}}">
          @error ('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
      </div>
      <div class="form-group col-md-10">
        <label for="asunto" class="control-label">{{'Asunto'}}</label>
        <input type="text" class="form-control shadow-sm @error ('asunto') is-invalid @enderror" name="asunto" id="asunto" value="{{ old('asunto')}}">
          @error ('asunto')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
      </div>
      <div class="form-group col-md-10">
        <label for="mensaje" class="control-label">{{'Mensaje'}}</label>
        <textarea class="form-control shadow-sm @error ('mensaje') is-invalid @enderror" name="mensaje" id="mensaje" rows="7">{{ old('mensaje')}}</textarea>
          @error ('mensaje')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
      </div>
      <div class="form-goup col-md-10 mt-4 mb-5">
        <button type="submit" class="btn btn-block botones" name="button">Enviar</button>
      </div>
    </form>
  </div>
</div>
