@extends('layouts.tabler')
@section('content')
    <div class="page-title">
        <div class="title_left">
        @if(isset($empleado))
            <h3>Actualizar informacion del empleado {{$empleado->id}}</h3>
        @else
            <h3>Registrar Empleado</h3>
        @endif
        </div>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Datos personales</h2>
                <div class="clearfix"></div>
            </div>
            @include('partials.formErrors')


            @if(isset($empleado))
                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action ="{{route('empleados.update',$empleado->id) }}" method="POST">
                <input type="hidden" name="_method" value="PATCH">
            @else
                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action ="{{route('empleados.store')}}" method="POST">
            @endif
                @csrf
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Nombre <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="nombre" name="nombre" required="required" class="form-control col-md-7 col-xs-12" value="{{isset($empleado) ? $empleado->nombre : ''}}{{ old('nombre')}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="apellido">Apellido <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="apellido" name="apellido" required="required" class="form-control col-md-7 col-xs-12" value ="{{ $empleado->apellido ?? '' }}{{ old('apellido')}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Sexo <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div id="sexo" class="btn-group" data-toggle="buttons">
                            @if(isset($empleado) && $empleado->sexo==='f')
                                <label class="btn btn-default"><input type="radio" name="sexo" value="m">Hombre</label>
                                <label class="btn btn-primary"><input type="radio" name="sexo" value="f" checked>Mujer</label>
                            @else   
                                <label class="btn btn-primary"><input type="radio" name="sexo" value="m" checked>Hombre</label>
                                <label class="btn btn-default"><input type="radio" name="sexo" value="f"> Mujer</label>
                            @endif
                        </div>
                    </div>
                </div>
                <script>
                    var btnContainer = document.getElementById("sexo");
                    var btns = btnContainer.getElementsByClassName("btn");
                    for(var i=0;i<btns.length;i++){
                        btns[i].addEventListener("click",function(){
                            var actual = btnContainer.getElementsByClassName("btn-primary")[0];
                            actual.className = actual.className.replace("btn-primary","btn-default");
                            this.className = this.className.replace("btn-default","btn-primary");
                        });
                    }
                </script>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Telefono <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="telefono" class="form-control col-md-7 col-xs-12" required="required" type="number" name="telefono" value="{{$empleado->telefono ?? ''}}{{ old('telefono')}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="apellido">Puesto <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="puesto" name="puesto" required="required" class="form-control col-md-7 col-xs-12" value ="{{ $empleado->puesto ?? '' }}{{ old('puesto')}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="apellido">Direccion <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="direccion" name="direccion" required="required" class="form-control col-md-7 col-xs-12" value ="{{ $empleado->direccion ?? '' }}{{ old('direccion')}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Nacimiento <span class="required">*</span> </label>
                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="date" class="form-control has-feedback-left" name="nacimiento" value="{{ $empleado->nacimiento ?? ''}}{{old('nacimiento')}}" required="required">
                        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true" ></span>
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