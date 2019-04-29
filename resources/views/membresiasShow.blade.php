@extends('layouts.tabler')
@section('content')
  <div class="page-title">
    <div class="title_left">
      <h3>Pagos mensualidad</h3>
    </div>
  </div>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">

        <form class="form-horizontal form-label-left">
            <div class="form-group">
                <label class="control-label col-md-3" for="first-name">First Name <span class="required">*</span>
                </label>
                <div class="col-md-7">
                    <input type="text" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                </div>
            </div>

            <div class="form-group form-inline">
            <label class="control-label" for="last-name">meses <span class="required">*</span>
            </label>
                <input type="number" id="last-name2" name="last-name" required="required" class="form-control">
            </div>
            <div class="form-group form-inline">
                <label class="control-label" for="last-name">Total <span class="required">*</span>
                </label>
                <label class="control-label" for="last-name">$900
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>

        <br>
        <!--tabla de asistencias-->
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