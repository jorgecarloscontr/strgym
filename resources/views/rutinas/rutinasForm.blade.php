@extends('layouts.tabler')
@section('content')
<div class="page-title col-md-12 col-sm-12 col-xs-12">
    <div class="title_left">
        <h3>Asignar rutinas</h3>
    </div>
</div>
<div class="row">
    <div class="col-md-15 col-sm-12 col-xs-12">
        <div class="x_panel">
        <!-- Forumlario de ingresar membresia-->
            <div class="x_title">
                <h2>Ejercicios</h2>
                <div class="clearfix"></div>
            </div>
            <table id="tablaDinamica" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Grupo muscular</th>
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
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Agregar</button>
                            <!-- Modal -->
                            <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">
                            
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Guardar ejercicio</h4>
                                    </div>
                                    
                                    <div class="modal-body">
                                        @if(isset($rutina))
                                           <form class="form-horizontal form-label-left" action ="{{route('rutinas.insertar_ejercicio',$rutina->id) }}" method="POST">
                                        @else
                                            <form  class="form-horizontal input_mask" action ="{{route('rutinas.store')}}" method="POST">
                                        @endif
                                        @csrf
                                        <input type="hidden" name="cliente_id" value="{{$cliente->id}}">
                                        <input type="hidden" name="ejercicio_id" value="{{$ejercicio->id}}">
                                        <input type="hidden" name="ejercicio_nombre" value="{{$ejercicio->nombre}}">
                                        <div class="col-xs-12 form-group" style="margin-bottom: 10px;">
                                            <label for="series"  class="control-label col-xs-4">Series</label>
                                            <div class="col-xs-8">
                                                <input type="number" id="series" name="series" required="required" class="form-control" value="1">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 form-group" style="margin-bottom: 10px;">
                                            <label for="repeticiones"  class="control-label col-xs-4">repeticiones</label>
                                            <div class="col-xs-8">
                                                <input type="number" id="repeticiones" name="repeticiones" required="required" class="form-control" value="1">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 form-group" style="margin-bottom: 10px;">
                                            <label for="dias"  class="control-label col-xs-4">Dias</label>
                                            <div class="col-xs-8">
                                                <select name="dias[]" id="dias" multiple class="select2_multiple form-control" style="width: 58%;">
                                                    <option value="L">Lunes</option>
                                                    <option value="M">Martes</option>
                                                    <option value="I">Miercoles</option>
                                                    <option value="J">Jueves</option>
                                                    <option value="V">Viernes</option>
                                                    <option value="S">Sabado</option>
                                                </select>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
        <!-- Forumlario de ingresar membresia-->
            <div class="x_title">
                <h2>Rutina</h2>
                <div class="clearfix"></div>
            </div>
            <div class="form-horizontal input_mask">
                <div class="col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Name" disabled value="{{$cliente->nombre.' '.$cliente->apellido}}">
                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                </div>

                <?php $dias=['Lunes','Martes','Miercoles','Jueves','Viernes','Sabado'];
                    $diasChar =['L','M','I','J','V','S'];
                    $cont=0;
                ?>
                @foreach($dias as $dia)
                    <div class="col-xs-12 form-goup">
                        <p style="font-size: 16px;">{{$dia}}</p>
                    </div>
                    @if(isset($rutina))
                        @foreach($rutina->ejercicios as $ejercicio)
                            @if($ejercicio->pivot->dia===$diasChar[$cont])
                                <div class="col-xs-12 form-group" style="padding:0;">
                                    <div class="col-xs-4 col-sm-6" style="padding-right:0;">
                                        <div class="input-group">
                                        <span class="input-group-btn">
                                            <form action="{{ route('rutinas.elimina_ejercicio', $rutina->id) }}" method="POST">
                                                <input type="hidden" name="ejercicio_id" value="{{ $ejercicio->id }}">
                                                <input type="hidden" name="series" value="{{$ejercicio->pivot->series}}">
                                                <input type="hidden" name="dia" value="{{$ejercicio->pivot->dia}}">
                                                <input type="hidden" name="repeticiones" value="{{$ejercicio->pivot->repeticiones}}">
                                                <input type="hidden" name="cliente_id" value="{{$cliente->id}}">
                                                @csrf
                                                <button type="submit" class="btn btn-danger"> <i class="fa fa-close"></i></button>              
                                            </form>
                                        </span>
                                        <input type="text" class="form-control" id="producto1" value="{{$ejercicio->nombre}}">
                                        </div>
                                    </div>
                                    <div class="col-xs-3 col-sm-3 form-group form-horizontal" style="padding:0;">
                                        <label for="series"  class="control-label col-xs-4">Series</label>
                                        <div class="col-xs-8">
                                            <input type="number" id="series" name="series" required="required" class="form-control" value="{{$ejercicio->pivot->series}}">
                                        </div>
                                    </div>
                                    <div class="col-xs-5 col-sm-3 form-group form-horizontal" style="padding:0;">
                                        <label for="series"  class="control-label col-xs-5">repeticion</label>
                                        <div class="col-xs-7">
                                            <input type="number" id="series" name="series" required="required" class="form-control" value="{{$ejercicio->pivot->repeticiones}}">
                                        </div>
                                    </div>
                                </div>
                             @endif
                        @endforeach
                    @endif
                    <?php $cont+=1; ?>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
