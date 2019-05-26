@extends('layouts.tabler')
@section('content')
<div class="page-title">
    <div class="title_left">
        <h3>Listado de ejercicios</h3>
    </div>
</div>
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
    <div class="x_title">
        <h2>Tabla de ejercicios</h2>
        <div class="clearfix"></div>
    </div>
    <!--tabla de usuarios-->
    <table id="tablaDinamica" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Grupo musular</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ejercicios as $ejercicio)
                <tr>
                    <td>{{$ejercicio->id}}</td>
                    <td>{{$ejercicio->nombre}}</td>
                    <td>{{$ejercicio->grupo}}</td>
                    <td>
                        <button class="btn btn-info btn-sm" type="button">info</button>
                        <form action="{{ route('ejercicios.destroy',$ejercicio->id) }}" method="POST" style="display:inline-table;">
                            <input type="hidden" name="_method" value="DELETE">
                            @csrf
                            <button class="btn btn-danger btn-sm" type="submit">eliminar</button>
                        </form>
                        <a class="btn btn-warning btn-sm" href="{{ route('ejercicios.edit',$ejercicio->id) }}">editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>


    
@endsection