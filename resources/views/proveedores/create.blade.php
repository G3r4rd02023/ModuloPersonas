@extends('adminlte::page')


@section('content_header')
    <h1>Crear Proveedor</h1>
@stop

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Crear Proveedor</div>

                    <div class="card-body">
                    <form action="{{ route('proveedores.store') }}" method="post">
            @csrf

            <!-- Campos del formulario -->
           
            <div class="form-group">
                <label for="COD_PERSONA">CODIGO PERSONA</label>
                <input type="text" name="COD_PERSONA" class="form-control">
            </div>
            <div class="form-group">
                <label for="TIP_PROVEEDOR">TIPO</label>
                <input type="text" name="TIP_PROVEEDOR" class="form-control">
            </div>
            <div class="form-group">
                <label for="NOM_PROVEEDOR">NOMBRE</label>
                <input type="text" name="NOM_PROVEEDOR" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="USR_REGISTRO">USUARIO</label>
                <input type="text" name="USR_REGISTRO" class="form-control">
            </div>
            <!-- Otros campos... -->

            <button type="submit" class="btn btn-primary">Crear Registro</button>
            <a href="{{ url('/proveedores') }}" class="btn btn-success">Cancelar</a>
        </form>
                     </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
