@extends('layouts.tabler')
@section('content')
<div class="page-title">
    <div class="title_left">
        <h3>Listado de empleados</h3>
    </div>
</div>
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
    <div class="x_title">
        <h2>Tabla de empleados</h2>
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
                <th>puesto</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($empleados as $empleado)
                <tr>
                    <td>{{$empleado->id}}</td>
                    <td>{{$empleado->nombre." ".$empleado->apellido}}</td>
                    <td>{{(strcmp($empleado->sexo,"m")===0) ? "Hombre": "Mujer"}}</td>
                    <td>{{$empleado->nacimiento}}</td>
                    <td>{{$empleado->telefono}}</td>
                    <td>{{$empleado->puesto}}</td>
                    <td>
                        <button class="btn btn-info btn-sm" type="button">info</button>
                        <form action="{{ route('empleados.destroy',$empleado->id) }}" method="POST" style="display:inline-table;">
                            <input type="hidden" name="_method" value="DELETE">
                            @csrf
                            <button class="btn btn-danger btn-sm" type="submit">eliminar</button>
                        </form>
                        <a class="btn btn-warning btn-sm" href="{{ route('empleados.edit',$empleado->id) }}">editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>


    
@endsection