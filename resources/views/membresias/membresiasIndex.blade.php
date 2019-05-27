@extends('layouts.tabler')
@section('content')
  <div class="page-title">
    <div class="title_left">
      <h3>Registro de Membresias y Visitas</h3>
    </div>
  </div>
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <!-- Forumlario de ingresar membresia-->
        <div class="x_title">
            <h2>Registrar</h2>
            <div class="clearfix"></div>
        </div>
        <form id="demo-form2" data-parsley-validate class="form-horizontal input_mask" action ="{{route('membresias.store')}}" method="POST">
          @csrf
          <input type="hidden" name="user_id" value="{{$user->id}}">
          <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" id="name" name="name" placeholder="First Name" disabled value="{{$user->name}}">
            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
          </div>
          <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" id="email" placeholder="Email" name="email" disabled value="{{$user->email}}">
            <span class="fa fa-key form-control-feedback left" aria-hidden="true"></span>
          </div>
          <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
            <select class="form-control has-feedback-left" id="cliente_id" name="cliente_id">
              @foreach($clientes as $cliente)
                <option value="{{$cliente->id}}">{{$cliente->nombre." ".$cliente->apellido}}</option>
              @endforeach
            </select>
            <span class="fa fa-users form-control-feedback left" aria-hidden="true"></span>
          </div>
          <div class="col-md-7 col-sm-7 col-xs-12 form-group form-horizontal">
            <div class="form-group">
              <div class="col-sm-6 col-xs-12" style="padding: 6px 0;">
                <label class="control-label col-sm-5 col-xs-12" for="modalidad">Modalidad</label>
                <div class="col-sm-7 col-xs-12" style="padding: 0;">
                    <select class="form-control" id="modalidad" name="modalidad">
                      <option value="m">Mensualidad</option>
                      <option value="a">Anualidad</option>
                      <option value="v">Visita</option>
                    </select>
                </div>
              </div>
              <div class="col-sm-6 col-xs-12" style="padding: 6px 0;">
                <label class="control-label col-sm-5 col-xs-12" for="cantidad">Cantidad <span class="required">*</span>
                </label>
                <div class="col-sm-7 col-xs-12 px-2" style="padding: 0;">
                  <input type="number" id="cantidad" name="cantidad" required="required" class="form-control" min="1" value="1">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-7 col-sm-7 col-xs-12" style="padding:0;">
              <div class="form-horizontal input_mask col-md-4" style="float:right; position:relative;">
              <div clas=" form-group has-feedback">
                  <input type="text" class="form-control has-feedback-left" id="total" name="total" value="330" disabled>
                  <span class="fa fa-dollar form-control-feedback left" aria-hidden="true"></span>
              </div>
              </div>
          </div>
          <div class="col-md-9 col-sm-9 col-xs-12" style="margin-top:8px;">
            <button class="btn btn-primary" type="submit" >Guardar pago</button>
          </div>
        </form>
      </div>
    </div>
        <br>
        <!--tabla de asistencias-->
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
            <h2>Membresias-clientes</h2>
            <div class="clearfix"></div>
        </div>
        <table id="tablaDinamica" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Id</th>
              <th>Nombre</th>
              <th>Telefono</th>
              <th>sexo</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($clientes_membresias as $clm)
              <tr>
                <td>{{$clm->id}}</td>
                <td>{{$clm->nombre." ".$clm->apellido}}</td>
                <td>{{$clm->telefono}}</td>
                <td>{{$clm->sexo}}</td>
                <td><a class="btn btn-info btn-sm" href="{{ route('membresias.show_membresias_cliente',$clm->id) }}">Mostrar</a>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>      
    </div>
@endsection
@section('library')
     <script>
      jQuery(function($) {
        $('#cantidad').on('input', function() {
          var modalidad = $('#modalidad').val();
          if(modalidad.valueOf() == "a".valueOf()) {
            $('#total').val(3000*parseInt($('#cantidad').val()));
          }else{
            if(modalidad.valueOf() == "m".valueOf()) {
              $('#total').val(330*parseInt($('#cantidad').val()));

            }else{
              $('#total').val(50*parseInt($('#cantidad').val()));            
              }
          }    
        });
        $('#modalidad').on('input', function() {
          var modalidad = $('#modalidad').val();
          if(modalidad.valueOf() == "a".valueOf()) {
            $('#total').val(3000*parseInt($('#cantidad').val()));
          }else{
            if(modalidad.valueOf() == "m".valueOf()) {
              $('#total').val(330*parseInt($('#cantidad').val()));

            }else{
              $('#total').val(50*parseInt($('#cantidad').val()));            
              }
          }    
        });
      });
    </script>
@endsection