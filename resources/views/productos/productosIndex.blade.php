@extends('layouts.tabler')
@section('content')
<div class="page-title">
    <div class="title_left">
        <h3>Listado de productos</h3>
    </div>
</div>
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
    <div class="x_title">
        <h2>Tabla de productos</h2>
        <div class="clearfix"></div>
    </div>
    <!--tabla de usuarios-->
    <form action="{{ route('productos.index') }}" method="POST">
        @csrf
        <label for="filtro_nombre">Buscar Producto</label>
        <input type="text" name="filtro_nombre">
        <input type="submit" value="Filtrar">
    </form>
    <table  class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Stock</th>
                <th>Precio</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productos as $producto)
                <tr>
                    <td>{{$producto->id}}</td>
                    <td>{{$producto->nombre}}</td>
                    <td>{{$producto->tipo}}</td>
                    <td>{{$producto->stock}}</td>
                    <td>{{$producto->precio}}</td>
                    <td>
                        <button class="btn btn-info btn-sm" type="button">info</button>
                        <form action="{{ route('productos.destroy',$producto->id) }}" method="POST" style="display:inline-table;">
                            <input type="hidden" name="_method" value="DELETE">
                            @csrf
                            <button class="btn btn-danger btn-sm" type="submit">eliminar</button>
                        </form>
                        <a class="btn btn-warning btn-sm" href="{{ route('productos.edit',$producto->id) }}">editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$productos->links()}}
    </div>
</div>


    
@endsection