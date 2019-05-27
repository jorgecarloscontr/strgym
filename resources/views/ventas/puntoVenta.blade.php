@extends('layouts.tabler')
@section('content')
<div class="page-title col-md-12 col-sm-12 col-xs-12">
    <div class="title_left">
        <h3>Punto de venta</h3>
    </div>
</div>
<div class="row">
<div class="col-md-5 col-sm-12 col-xs-12">
    <div class="x_panel">
    <!-- Forumlario de ingresar membresia-->
        <div class="x_title">
            <h2>Crear venta</h2>
            <div class="clearfix"></div>
        </div>
        <form class="form-horizontal input_mask">
            <div class="col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" disabled id="user" name="user" value="{{$user->name}}">
            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
            </div>
            <div class="col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" id="email" disabled name="email" value="{{$user->email}}">
            <span class="fa fa-key form-control-feedback left" aria-hidden="true"></span>
            </div>
            <div class="col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" disabled id="cliente" name="cliente_nombre" value="{{$cliente->nombre}}">
            <span class="fa fa-users form-control-feedback left" aria-hidden="true"></span>
            </div>

            <?php $tmp=0; ?>
            @if(isset($venta))
              @foreach($venta->productos as $producto)
              <div class="col-xs-12 form-group" style="padding:0;">
                <div class="col-xs-6" style="padding-right:0;">
                  <div class="input-group">
                    <span class="input-group-btn">
                      <form action="{{ route('ventas.elimina_producto', $venta->id) }}" method="POST">
                           @csrf
                          <input type="hidden" name="producto_id" value="{{$producto->id }}">
                          <input type="hidden" name="cantidad" value="{{$producto->pivot->cantidad}}">
                          
                          <button type="submit" class="btn btn-danger"> <i class="fa fa-close"></i></button>              
                      </form>
                    </span>
                    <input type="text" class="form-control" disabled id="producto1" value="{{$producto->nombre}}">
                  </div>
                </div>
                <div class="col-xs-2 form-group" style="padding-right:0;">
                  <input type="number" id="cantidad" name="cantidad" disabled class="form-control" value="{{$producto->pivot->cantidad}}">
                </div>
                <div class="col-xs-4 form-group has-feedback">
                   <?php $tmp=$tmp+($producto->pivot->cantidad*$producto->precio); ?>
                  <input type="text" class="form-control has-feedback-left" id="total2" name="total2" disabled style="padding-right: 0;" value="{{$producto->pivot->cantidad*$producto->precio}}">
                  <span class="fa fa-dollar form-control-feedback left" aria-hidden="true"></span>
                </div>
              </div>

              @endforeach

            @endif
            


            <div class="form-group" style="float:right;">
                <div class=" col-xs-2 form-group">
                  <label class="control-label" for="total">Total</label>
                </div>
                <div class="col-xs-10 form-group has-feedback">  
                    <input type="number" class="form-control has-feedback-left" disabled id="total" name="total" value={{$tmp}}>
                    <span class="fa fa-dollar form-control-feedback left" aria-hidden="true"></span>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="col-md-7 col-sm-12 col-xs-12">
    <div class="x_panel">
    <!-- Forumlario de ingresar membresia-->
        <div class="x_title">
            <h2>Productos</h2>
            <div class="clearfix"></div>
        </div>
        <table id="tablaDinamica" class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Imagen</th>
            <th>Categoria</th>
            <th>Stock</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($productos as $producto)
          <tr>
            <td>{{$producto->nombre}}</td>
            <td>System</td> 
            <td>{{$producto->tipo}}</td>
            <td>{{$producto->stock}}</td>
            



            <td>
              <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal{{$producto->id}}">Agregar</button>
              <!-- Modal -->
              <div class="modal fade" id="myModal{{$producto->id}}" role="dialog">
              <div class="modal-dialog">
              
                  <!-- Modal content-->
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">guardar producto</h4>
                      </div>
                      
                      <div class="modal-body">
                          @if(isset($venta))
                              <form class="form-horizontal form-label-left" action ="{{route('ventas.insertar_producto',$venta->id) }}" method="POST">
                          @else
                              <form  class="form-horizontal input_mask" action ="{{route('ventas.store')}}" method="POST">
                          @endif
                          <form  class="form-horizontal input_mask">
                          @csrf
                          <input type="hidden" name="cliente_id" value="{{$cliente->id}}">
                          <input type="hidden" name="producto_id" value="{{$producto->id}}">
                          <input type="hidden" name="user_id" value="{{$user->id}}">
                          <div class="col-xs-12 form-group" style="margin-bottom: 10px;">
                              <label class="control-label col-xs-4">Nombre</label>
                              <div class="col-xs-8">
                                  <input type="text" name="producto_nombre" class="form-control" disabled value="{{$producto->nombre}}">
                              </div>
                          </div> 

                          <div class="col-xs-12 form-group" style="margin-bottom: 10px;">
                              <label class="control-label col-xs-4">Cantidad</label>
                              <div class="col-xs-8">
                                  <input type="number" name="cantidad" required="required" class="form-control" value="1" min="1" max="{{$producto->stock}}">
                              </div>
                          </div>
                          <button type="submit" class="btn btn-primary form-control" style="float:right;">Guardar</button>

                          </form>
                      </div>
                  </div>                                
              </div>
              </div>
              </td>
          </tr>

          @endforeach
        </tbody>
      </table>
    </div>
</div>
</div>
@endsection
