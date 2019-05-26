@extends('layouts.tabler')
@section('content')
    <div class="page-title">
        <div class="title_left">
        @if(isset($ejercicio))
            <h3>Actualizar informacion del ejercicio {{$ejercicio->id}}</h3>
        @else
            <h3>Ingresar nuevo ejercicio</h3>
        @endif
        </div>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Informacion del ejercicio</h2>
                <div class="clearfix"></div>
            </div>
            <!--@if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif-->

            @if(isset($cliente))
                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action ="{{route('ejercicios.update',$asistencia->id) }}" method="POST">
                <input type="hidden" name="_method" value="PATCH">
            @else
                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action ="{{route('ejercicios.store')}}" method="POST">
            @endif
                @csrf
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Nombre</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="nombre" name="nombre" required="required" class="form-control col-md-7 col-xs-12" 
                            value="{{isset($ejercicio) ? $ejercicio->nombre : ''}}{{ old('nombre')}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="grupo" >Grupo muscular</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <select class="form-control" name="grupo" id="grupo" required="required">
                            <option value="">Elige una opción</option>
                            <optgroup label="Zona inferior">
                                <option value="cuadriceps">Cuadriceps</option>
                                <option value="pantorrila">Pantorrilla</option>
                                <option value="gluteo">Gluteo</option>
                                <option value="femorales">Femorales</option>
                            </optgroup>
                            <optgroup label="Zona media">
                                <option value="espalda">Espalda</option>
                                <option value="abdomen">Abdomen</option>
                                <option value="pectoral">Pectoral</option>
                                <option value="oblicuos">Oblicuos</option>
                            </optgroup>
                            <optgroup label="Zona superior">
                                <option value="bicep">Bicep</option>
                                <option value="tricep">Tricep</option>
                                <option value="antebrazo">Antebrazo</option>
                                <option value="hombro">Hombro</option>
                            </optgroup>

                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="descripcion">Descripcion</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea id="descripcion" name="descripcion" required="required" class="form-control col-md-7 col-xs-12" row="3">{{isset($ejercicio) ? $ejercicio->descripcion : ''}}</textarea>
                    </div>
                </div>
                <div class="ln_solid"></div>
                <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3" style="margin-top:20px;">
                        <button class="btn btn-primary" type="reset">Reset</button>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </div>
                </div>
            </form>        
        </div>      
    </div>
@endsection
@section('library')
     <!--parsley-->
     <script src="{{asset('/vendors/parsleyjs/dist/parsley.min.js')}}"></script>
@endsection