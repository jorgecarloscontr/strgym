@extends('layouts.tabler')
@section('content')
<div class="page-title">
    <div class="title_left">
        <h3>Rutinas</h3>
    </div>
</div>
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
    <div class="x_title">
        <h2>Tabla de usuarios</h2>
        <div class="clearfix"></div>
    </div>
    <!--tabla de usuarios-->
    <table id="tablaDinamica" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Rutina</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
                <tr>
                    <td>{{$cliente->id}}</td>
                    <td>{{$cliente->nombre}}</td>
                    <td>{{$cliente->telefono}}</td>
                    <td>{{isset($cliente->rutina->id) ? $contiene='contiene':'no contiene' }}</td>
                    @if(isset($cliente->rutina->id))
                        <td><a class="btn btn-warning btn-sm" href="{{ route('rutinas.edit_rutina',$cliente->id) }}">Modificar</a>
                        <button class="btn btn-info btn-sm" type="button">Mostrar</button></td>
                    @else
                        <td><a class="btn btn-success btn-sm" href="{{ route('rutinas.create_rutina',$cliente->id) }}">Asignar</a></td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>


    
@endsection