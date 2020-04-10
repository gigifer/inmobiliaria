<div class="form-group {{ $errors->has('foto') ? 'has-error' : ''}}">
    <label for="foto" class="control-label">{{ 'Foto' }}</label>
    <input class="form-control" name="foto" type="file" id="foto" value="{{ isset($aviso->foto) ? $aviso->foto : ''}} {{ old('foto')}}" >
</div>
<div class="form-group {{ $errors->has('titulo') ? 'has-error' : ''}}">
    <label for="titulo" class="control-label">{{ 'Titulo' }}</label>
    <input class="form-control" name="titulo" type="text" id="titulo" value="{{ isset($aviso->titulo) ? $aviso->titulo : ''}} {{ old('titulo')}}" >
</div>
<div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}}">
    <label for="descripcion" class="control-label">{{ 'Descripcion' }}</label>
    <textarea class="form-control" name="descripcion" id="descripcion" rows="7" value="{{ isset($aviso->descripcion) ? $aviso->descripcion : ''}}">{{ old('descripcion')}}</textarea>
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


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
