@extends('layouts.tabler')
@section('content')
<div class="page-title">
    <div class="title_left">
        <h3>ventas</h3>
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
                <th>venta</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
                <tr>
                    <td>{{$cliente->id}}</td>
                    <td>{{$cliente->nombre}}</td>
                    <td>{{$cliente->telefono}}</td>
                    <td>{{count($cliente->ventas)>1 ? $contiene='contiene':'no contiene' }}</td>
                    <td><a class="btn btn-success btn-sm" href="{{ route('ventas.create_venta',$cliente->id) }}">Crear</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>


    
@endsection