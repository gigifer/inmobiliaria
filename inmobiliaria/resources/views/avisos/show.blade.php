@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Aviso {{ $aviso->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/avisos') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Volver</button></a>
                        <a href="{{ url('/avisos/' . $aviso->id . '/edit') }}" title="Edit aviso"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                        <form method="POST" action="{{ url('avisos' . '/' . $aviso->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete aviso" onclick="return confirm(&quot;¿Confirma borrar?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Borrar</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $aviso->id }}</td>
                                    </tr>
                                    <tr>
                                      <th> Foto </th><td> <img src="{{ asset('storage').'/'.$aviso->foto}}" alt="" width="200"> </td>
                                    </tr>
                                    <tr>
                                      <th> Titulo </th><td> {{ $aviso->titulo }} </td>
                                    </tr>
                                    <tr>
                                      <th> Descripcion </th><td> {{ $aviso->descripcion }} </td>
                                    </tr>
                                    <tr>
                                      <th> Precio </th><td> {{ $aviso->precio }} </td>
                                    </tr>
                                    <tr>
                                      <th> Categoria </th><td> {{ $aviso->categoria->nombre }}</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
