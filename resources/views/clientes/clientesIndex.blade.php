@extends('layouts.tabler')
@section('content')
<div class="page-title">
    <div class="title_left">
        <h3>Listado de clientes</h3>
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
                <th>Sexo</th>
                <th>Nacimiento</th>
                <th>Telefono</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
                <tr>
                    <td>{{$cliente->id}}</td>
                    <td>{{$cliente->nombre." ".$cliente->apellido}}</td>
                    <td>{{(strcmp($cliente->sexo,"m")===0) ? "Masculino": "Femenino"}}</td>
                    <td>{{$cliente->nacimiento}}</td>
                    <td>{{$cliente->telefono}}</td>
                    <td>
                        <button class="btn btn-info btn-sm" type="button">info</button>
                        <button class="btn btn-danger btn-sm" type="button">eliminar</button>
                        <button class="btn btn-warning btn-sm" type="button">editar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>


    
@endsection