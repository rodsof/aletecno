@extends('usuario.layout')

@section('content')
  <!--main content start-->  

  <div class="row">
    <div class="col-lg-12">
      <h3 class="page-header"><i class="icon_info_alt"></i> Veterinaria</h3>
      <ol class="breadcrumb">
        <li><i class="fa fa-home"></i><a href="/home">Inicio</a></li>        
        <li><i class="icon_info_alt"></i>Veterinaria</li>        
      </ol>
    </div>
  </div> 

  <div class="row">
    <div class="col-lg-12">
      <div class="col-lg-6">
        <div class="panel" >
          <header class="panel-heading" style="text-align: center"><i class="fa fa-user-md"></i> 
            <b>Médico Veterinario Carina S. Martini</b>
          </header>
          <div class="panel-body" style="text-align: center">            
            <p>Especialización en Clínica de Pequeños Animales
            <p>Número de Matrícula: 0767
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="panel">
          <header class="panel-heading" style="text-align: center"><i class="fa fa-user-md"></i> 
            <b>Médico Veterinario Raúl E. Rivero</b>
          </header>
          <div class="panel-body" style="text-align: center">            
            <p>Especialización en Clínica de Grandes Animales
            <p>Número de Matrícula: 0550
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-12">
      <div class="col-lg-6">
        <div class="panel">
          <header class="panel-heading"><i class="icon_phone"></i>  Teléfonos</header>
          <div class="panel-body">
            <p><b> Teléfono Fijo:</b> (02302) 422230
            <p><b> Celular Carina:</b> (02302) 15440443 
            <p><b> Celular Raúl:</b> (02302) 15419170 
            <p>
          </div>
        </div>
        <div class="panel">
          <header class="panel-heading"><i class="icon_clock_alt"></i> Horarios</header>
          <div class="panel-body">            
            <p><b> Mañana:</b> 8:00 a 12:00 hs 
            <p><b> Tarde:</b> 16:30 a 20:30 hs
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.4956952585007!2d-63.74473994135997!3d-35.66479468536217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95c37d69a0d37f19%3A0x50232c75664dafec!2sCalle%2024%201418%2C%20Gral.%20Pico%2C%20La%20Pampa!5e0!3m2!1ses!2sar!4v1585080353311!5m2!1ses!2sar" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>    
      </div>      
    </div>
  </div>
@endsection
