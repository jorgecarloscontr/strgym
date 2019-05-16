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
        <form class="form-horizontal input_mask">
          <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="First Name">
            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
          </div>
          <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
            <input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Email">
            <span class="fa fa-key form-control-feedback left" aria-hidden="true"></span>
          </div>
          <div class="col-md-7 col-sm-7 col-xs-12 form-group has-feedback">
            <select class="form-control has-feedback-left" id="inputUser" name="inputUser">
              <option value="1">option 1</option>
              <option value="2">option 2</option>
              <option value="3">option 3</option>
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
                  <input type="number" id="inputCantidad" name="inputCantidad" required="required" class="form-control">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-7 col-sm-7 col-xs-12" style="padding:0;">
              <div class="form-horizontal input_mask col-md-4" style="float:right; position:relative;">
              <div clas=" form-group has-feedback">
                  <input type="text" class="form-control has-feedback-left" id="total">
                  <span class="fa fa-dollar form-control-feedback left" aria-hidden="true"></span>
              </div>
              </div>
          </div>
          <div class="col-md-9 col-sm-9 col-xs-12" style="margin-top:8px;">
            <button class="btn btn-primary" type="button" >Guardar pago</button>
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
              <th>Name</th>
              <th>Position</th>
              <th>Office</th>
              <th>Age</th>
              <th>Start date</th>
              <th>Salary</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Tiger Nixon</td>
              <td>System Architect</td>
              <td>Edinburgh</td>
              <td>61</td>
              <td>2011/04/25</td>
              <td>$320,800</td>
            </tr>
            <tr>
              <td>Garrett Winters</td>
              <td>Accountant</td>
              <td>Tokyo</td>
              <td>63</td>
              <td>2011/07/25</td>
              <td>$170,750</td>
            </tr>
            <tr>
              <td>Ashton Cox</td>
              <td>Junior Technical Author</td>
              <td>San Francisco</td>
              <td>66</td>
              <td>2009/01/12</td>
              <td>$86,000</td>
            </tr>
            <tr>
              <td>Cedric Kelly</td>
              <td>Senior Javascript Developer</td>
              <td>Edinburgh</td>
              <td>22</td>
              <td>2012/03/29</td>
              <td>$433,060</td>
            </tr>
          </tbody>
        </table>
      </div>      
    </div>


    
@endsection