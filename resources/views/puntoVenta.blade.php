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
            <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="First Name">
            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
            </div>
            <div class="col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Email">
            <span class="fa fa-key form-control-feedback left" aria-hidden="true"></span>
            </div>
            <div class="col-xs-12 form-group has-feedback">
            <select class="form-control has-feedback-left" id="inputUser" name="inputUser">
                <option value="1">option 1</option>
                <option value="2">option 2</option>
                <option value="3">option 3</option>
            </select>
            <span class="fa fa-users form-control-feedback left" aria-hidden="true"></span>
            </div>


            <div class="col-xs-12 form-group" style="padding:0;">
              <div class="col-xs-6" style="padding-right:0;">
                <div class="input-group">
                  <span class="input-group-btn">
                    <button type="button" class="btn btn-danger"> <i class="fa fa-close"></i></button>              
                  </span>
                  <input type="text" class="form-control" id="producto1" value="producto1">
                </div>
              </div>
              <div class="col-xs-2 form-group" style="padding-right:0;">
                <input type="number" id="inputCantidad" name="inputCantidad" required="required" class="form-control" value="1">
              </div>
              <div class="col-xs-4 form-group has-feedback">
                <input type="text" class="form-control has-feedback-left" id="producto1" style="padding-right: 0;">
                <span class="fa fa-dollar form-control-feedback left" aria-hidden="true"></span>
              </div>
            </div>


            <div class="form-group" style="float:right;">
                <div class=" col-xs-2 form-group">
                  <label class="control-label" for="total">Total</label>
                </div>
                <div class="col-xs-10 form-group has-feedback">  
                    <input type="text" class="form-control has-feedback-left" id="total">
                    <span class="fa fa-dollar form-control-feedback left" aria-hidden="true"></span>
                </div>
            </div>

            <div class="col-md-9 col-sm-9 col-xs-12" style="margin-top:8px;">
            <button class="btn btn-primary" type="button" >Guardar pago</button>
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
          <tr>
            <td>Tiger Nixon</td>
            <td>System Architect</td>
            <td>Edinburgh</td>
            <td>2011/04/25</td>
            <td>
              <button class="btn btn-info btn-sm" type="button">Agregar</button>
            </td>
          </tr>
          <tr>
            <td>Garrett Winters</td>
            <td>Accountant</td>
            <td>Tokyo</td>
            <td>2011/07/25</td>
            <td>
              <button class="btn btn-info btn-sm" type="button">Agregar</button>
            </td>
          </tr>
          <tr>
            <td>Ashton Cox</td>
            <td>Junior Technical Author</td>
            <td>San Francisco</td>
            <td>2009/01/12</td>
            <td>
              <button class="btn btn-info btn-sm" type="button">Agregar</button>
            </td>
          </tr>
          <tr>
            <td>Cedric Kelly</td>
            <td>Senior Javascript Developer</td>
            <td>Edinburgh</td>
            <td>2012/03/29</td>
            <td>
              <button class="btn btn-info btn-sm" type="button">Agregar</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
</div>
</div>
@endsection
