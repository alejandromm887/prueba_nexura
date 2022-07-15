@extends('empleados.layout')

@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Inicio
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/empleados/create') }}" class="btn btn-success btn-sm" title="Añadir empleados">
                            Agregar nuevo empleado
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre</th>
                                        <th>Email</th>
                                        <th>Sexo</th>
                                        <th>Area</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($empleados as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nombre }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->sexo }}</td>
                                        <td>{{ $item->area_id }}</td>
  
                                        <td>
                                            <a href="{{ url('/empleados/' . $item->id) }}" title="View empleados"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                            <a href="{{ url('/empleados/' . $item->id . '/edit') }}" title="Edit empleados"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>
  
                                            <form method="POST" action="{{ url('/empleados' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete empleados" onclick="return confirm('Estás seguro que deseas eliminar ese registro?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
  
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection