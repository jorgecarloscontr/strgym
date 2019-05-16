@extends('layouts.tabler')
@section('content')
    <div class="page-title">
        <div class="title_left">
        <h3>Registrar Cliente</h3>
        </div>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Datos personales</h2>
                <div class="clearfix"></div>
            </div>
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action ="{{route('clientes.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Nombre <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="nombre" name="nombre" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="apellido">Apellido <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="apellido" name="apellido" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Sexo <span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div id="sexo" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-primary">
                                <input type="radio" name="sexo" value="m" checked>Masculino
                            </label>
                            <label class="btn btn-default">
                                <input type="radio" name="sexo" value="f"> Femenino
                            </label>
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
                        <input id="telefono" class="form-control col-md-7 col-xs-12" required="required" type="number" name="telefono">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Nacimiento <span class="required">*</span> </label>
                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="date" class="form-control has-feedback-left" name="nacimiento">
                        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true" ></span>
                    </div>
                </div>
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