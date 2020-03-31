@extends('usuario.layout')

@section('content')
  <!--main content start-->  

  <div class="row">
    <div class="col-lg-12">
      <h3 class="page-header"><i class="icon_heart_alt"></i> Mis Mascotas</h3>
      <ol class="breadcrumb">
        <li><i class="fa fa-home"></i><a href="/home">Inicio</a></li>        
        <li><i class="icon_heart_alt"></i>Mis Mascotas</li>  
        @foreach ($mascota as $a)      
          <li><i class="fa fa-paw"></i>{{ $a->nombre }}</li> 
        @endforeach
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
                        <!-- Muestro los datos de la mascota -->
                        @foreach ($mascota as $a) 
                          <div class="row"><label><b>Nombre: </b> {{ $a->nombre }} </label></div>
                          <div class="row"><label><b>Especie: </b> {{ $a->especie }} </label></div>
                          <div class="row"><label><b>Raza: </b> {{ $a->raza }} </label></div>
                          <div class="row"><label><b>Sexo: </b> {{ $a->sexo }}  </label></div>
                          <div class="row"><label><b>Color: </b> {{ $a->color }}  </label></div>
                          <div class="row"><label><b>Peso: </b> {{ $a->peso }} </label></div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3"></div>
    </div>

@endsection
