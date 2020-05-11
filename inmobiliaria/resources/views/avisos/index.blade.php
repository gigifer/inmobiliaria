@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Avisos</div>
                    <div class="card-body">
                        <a href="{{ url('/avisos/create') }}" class="btn btn-success btn-sm" title="Add New aviso">
                            <i class="fa fa-plus" aria-hidden="true"></i> Agregar
                        </a>

                        <form method="GET" action="{{ url('/avisos') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Buscar..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Foto</th>
                                        <th>Titulo</th>
                                        <th>Descripcion</th>
                                        <th>Precio</th>
                                        <th>Categoria</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($avisos as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td><img src="{{ asset('storage').'/'. $item->foto[0]['ruta'] }}" alt="" width="200"></td>
                                        <td>{{ $item['titulo'] }}</td>
                                        <td>{{ $item['descripcion'] }}</td>
                                        <td><?php echo number_format((float) $item['precio'], 2, '.', ''); ?></td>
                                        <td>{{ $item->categoria["nombre"] }}</td>
                                        <td>
                                          <td>
                                            <a href="{{ url('/avisos/' . $item->id) }}" title="View aviso"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                            <a href="{{ url('/avisos/' . $item->id . '/edit') }}" title="Edit aviso"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                                            <form method="POST" action="{{ url('/avisos' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete aviso" onclick="return confirm(&quot;¿Confirma borrar?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Borrar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="pagination-wrapper"> {!! array_push($avisos, ['search' => Request::get('search')]) !!} </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
