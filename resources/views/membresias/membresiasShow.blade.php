@extends('layouts.tabler')
@section('content')
<div class="page-title">
  <div class="title_left">
    <h3>Historial de membresias de {{$cliente->nombre}}</h3>
  </div>
</div>
<div class="clearfix"></div>
  <div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <!--tabla de asistencias-->
      <div class="col-xs-12">
      <table id="tablaDinamica" class="table table-striped table-bordered " style="width:100%">
        <thead>
          <tr>
            <th>Cliente</th>
            <th>Usuario</th>
            <th>Modalidad</th>
            <th>Cantidad</th>
            <th>Fecha</th>
          </tr>
        </thead>
        <tbody>
          @foreach($membresias as $membresia)
            <tr>
                <td>{{$cliente->nombre}}</td>
                <td>otro id</td>
                @if($membresia->modalidad==="a")
                    <td>Anualidad</td>
                @elseif($membresia->modalidad==="m")
                    <td>Mes</td>
                @else
                    <td>visita</td>
                @endif
                <td>{{$membresia->cantidad}}</td>
                <td>{{$membresia->recibido}}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
      </div>
    </div>      
  </div>
</div>
@endsection