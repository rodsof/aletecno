@extends('usuario.layout')

@section('content')
  
  <!--main content start-->
  
  <!--overview start-->
  <div class="row">
    <div class="col-lg-12">
      <h3 class="page-header"><i class="fa fa-home"></i> Inicio</h3>
      <ol class="breadcrumb">
        <li><i class="fa fa-home"></i><a href="/home">Inicio</a></li>        
      </ol>
    </div>
  </div> 

  <!-- Función para cambiar el color de los divs de forma random-->
  <?php
    function cambiarColor() {
      $strings = array('teal', 'blue', 'orange', 'brown', 'dark', 'purple');
      $key = array_rand($strings);
      echo "<div class='info-box ".$strings[$key]."-bg'>";
    }    
  ?>
 
  <div class="row">     
    <!-- Muestro las mascotas que tiene el usuario -->          
    @foreach ($mascotasUsuario as $mascota)          
      <div class="col-lg-2 col-xs-6">
        <?php cambiarColor()?>       
          <div style="text-align:center">              
            <a href= {{'/getMascota/'.(string)$mascota->id_mascota}}>

              <!-- Coloco la imagen del animal según su especie -->
              @if ($mascota->especie == 'felino')
                <img alt="logo animal" src="{{ asset('template/img/cathead.png') }}" width="80" height="80">              
              @else
                <img alt="logo animal" src="{{ asset('template/img/doghead.png') }}" width="80" height="80">
              @endif

            </a>
          </div>
          <div style="text-align:center">{{$mascota->nombre}}</div>
        </div>
        <!--/.info-box-->
      </div>
      <!--/.col-->
    @endforeach     
  </div>

  <div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-6 portlets">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h2><strong>Calendario</strong></h2>
          <div class="panel-actions">
            <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
            <a href="#" class="wclose"><i class="fa fa-times"></i></a>
          </div>

        </div><br><br><br>
        <div class="panel-body">          
          <div id="calendar"></div>
        </div>
      </div>
    </div>
    <div class="col-lg-3"></div>
  </div>

@endsection
