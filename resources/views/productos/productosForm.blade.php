@extends('layouts.tabler')
@section('content')
    <div class="page-title">
        <div class="title_left">
        @if(isset($producto))
            <h3>Actualizar informacion del producto {{$producto->id}}</h3>
        @else
            <h3>Registrar producto</h3>
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


            @if(isset($producto))
                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action ="{{route('productos.update',$producto->id) }}" method="POST">
                <input type="hidden" name="_method" value="PATCH">
            @else
                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action ="{{route('productos.store')}}" method="POST">
            @endif
                @csrf
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Nombre <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="nombre" name="nombre" required="required" class="form-control col-md-7 col-xs-12" value="{{isset($producto) ? $producto->nombre : ''}}{{ old('nombre')}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tipo">Tipo <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="tipo" name="tipo" required="required" class="form-control col-md-7 col-xs-12" value ="{{ $producto->tipo ?? '' }}{{ old('tipo')}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Precio <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="precio" step="0.01" class="form-control col-md-7 col-xs-12" required="required" type="number" name="precio" value="{{$producto->precio ?? ''}}{{ old('Precio')}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Existencias <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="stock" class="form-control col-md-7 col-xs-12" required="required" type="number" name="stock" value="{{$producto->stock ?? ''}}{{ old('stock')}}">
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