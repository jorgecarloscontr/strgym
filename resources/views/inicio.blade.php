@extends('layouts.tabler')
@section('content')
<div class="page-title">
  <div class="title_left">
    <h3>Asistencias</h3>
  </div>
</div>
<div class="clearfix"></div>
  <div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <form class="form-inline" action ="{{route('asistencias.store')}}" method="POST">
        @csrf
        <div class="form-group">
          <label for="ex3">Codigo</label>
          <input type="text" id="ex3" name="codigo" class="form-control" placeholder=" ">
        </div>
          <button type="submit" class="btn btn-primary">Guardar</button>
      </form>
      <br>
      <!--tabla de asistencias-->
      <div class="col-xs-12">
      <table id="tablaDinamica" class="table table-striped table-bordered " style="width:100%">
        <thead>
          <tr>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Telefono</th>
          </tr>
        </thead>
        <tbody>
          @foreach($asistencias as $asistencia)
            <tr>
            <?php $bandera=true; ?>
            @for($i=0;$i< count($clientes) && $bandera;$i++)
              @if($clientes[$i]->id===$asistencia->cliente_id)
              <?php
                $date = new DateTime($asistencias[$i]->creado);
              ?>
                <td>{{$clientes[$i]->id}}</td>
                <td>{{$clientes[$i]->nombre}}</td>
                <td>{{$clientes[$i]->apellido}}</td>
                <td>{{$date->format('Y-m-d')}}</td>
                <td>{{$date->format('H:i:s')}}</td>
                <td>{{$clientes[$i]->telefono}}</td>
                <?php $bandera=false; ?>
              @endif
            @endfor
            </tr>
          @endforeach
        </tbody>
      </table>
      </div>
    </div>      
  </div>
</div>
@endsection