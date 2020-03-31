@extends('usuario.layout')

@section('content')

    <!--main content start-->
    <!--overview start-->
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><i class="icon_document_alt"></i> Mis Datos</h3>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="/home">Inicio</a></li>        
                <li><i class="icon_document_alt"></i>Mis Datos</li>
            </ol>        
        </div>
    </div> 
    
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6 col-sm-6">
            <div class="panel">
                <header class="panel-heading">Datos</header>
                <div class="panel-body">
                    <div class="col-lg-6">
                        <!-- Muestro los datos del usuario
                             Falta mostrar la localidad -->
                        <div class="row"><label><b>Nombre: </b> {{ Auth::user()->nombre }} </label></div>
                        <div class="row"><label><b>Apellido: </b> {{ Auth::user()->apellido }} </label></div>
                        <div class="row"><label><b>Dirección: </b> Calle {{ Auth::user()->calle }}  n° {{ Auth::user()->numero }}</label></div>
                        <div class="row"><label><b>Cuil/Cuit: </b> {{ Auth::user()->cuit_cuil }} </label></div>                        
                        <!-- Si no tiene teléfono Fijo no lo muestro -->
                        @if ( Auth::user()->tel_fijo )      
                            <div class="row"><label><b>Teléfono Fijo: </b> {{ Auth::user()->tel_fijo }} </label></div>
                        @endif
                        <div class="row"><label><b>Teléfono Celular: </b> {{ Auth::user()->tel_celular }} </label></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3"></div>
    </div>
    
@endsection