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
      <form class="form-inline">
        <div class="form-group">
        <label for="ex3">Codigo</label>
        <input type="text" id="ex3" class="form-control" placeholder=" ">
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
</div>
@endsection