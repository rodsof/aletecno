<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="{{ asset('template/img/favicon.png') }}">

  <title>Veterinaria SIL-MAR</title>

  <!-- Bootstrap CSS -->
  <link href="{{ asset('template/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="{{ asset('template/css/bootstrap-theme.css') }}" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="{{ asset('template/css/elegant-icons-style.css') }}" rel="stylesheet" />
  <link href="{{ asset('template/css/font-awesome.min.css') }}" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="{{ asset('template/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css') }}" rel="stylesheet" />
  <link href="{{ asset('template/assets/fullcalendar/fullcalendar/fullcalendar.css') }}" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="{{ asset('template/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css') }}" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="{{ asset('template/css/owl.carousel.css') }}" type="text/css">
  <link href="{{ asset('template/css/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="{{ asset('template/css/fullcalendar.css') }}">
  <link href="{{ asset('template/css/widgets.css') }}" rel="stylesheet">
  <link href="{{ asset('template/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('template/css/style-responsive.css') }}" rel="stylesheet" />
  <link href="{{ asset('template/css/xcharts.min.css') }}" rel=" stylesheet">
  <link href="{{ asset('template/css/jquery-ui-1.10.4.min.css') }}" rel="stylesheet">    
</head>

<body>     
  
  <!-- container section start -->
  <section id="container" class="">   
    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="index.html" class="logo">Veterinaria <span class="lite">SIL-MAR</span></a>
      <!--logo end-->

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else    
                <!-- user login dropdown start-->
                <li class="dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                      <span class="profile-ava">
                          <img alt="" src="{{ asset('template/img/avatar.png') }}">
                      </span>
                      <span class="username">{{ Auth::user()->nombre }}</span>
                      <b class="caret"></b>
                  </a>
                  
                  <ul class="dropdown-menu extended logout">
                      <div class="log-arrow-up"></div>    
                      <li>                    
                        <a class="dropdown-item" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                            Salir
                        </a>
                      </li>   
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                      </form>        
                  </ul>
                </li>
                <!-- user login dropdown end -->                
          @endguest
          
        </ul>
        <!-- notification dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">          
          <li>
            <a class="" href="/home">
              <i class="icon_house_alt"></i>
              <span>Inicio</span>
            </a>
          </li>
          <li class="sub-menu">
            <a href="/misdatos" class="">
              <i class="icon_document_alt"></i>
              <span>Mis Datos</span>              
            </a>
          </li>
          
          <li class="sub-menu">
            <a class="">
              <i class="icon_heart_alt"></i>
              <span>Mis Mascotas</span> 
              <span class="menu-arrow arrow_carrot-right"></span>             
            </a>
            <ul class="sub">
              <?php 
                  use App\Http\Controllers\MascotasController;
                  $controlador = new mascotasController;                
                  $mascotas = $controlador->listaMascotas(Auth::user()->id);
                  foreach ($mascotas as $mascota){                      
                      echo ("<li><a class='' href='/getMascota/".(string)$mascota->id_mascota.
                            "'><i class='fa fa-paw'></i>".$mascota->nombre."</a></li>");
                  }        
              ?>
            </ul>                                                                                    
          </li>

          <li class="sub-menu">
            <a href="/veterinaria" class="">
              <i class="icon_info_alt"></i>
              <span>Veterinaria</span>              
            </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

  </section>
  <!-- container section start -->
  <section id="main-content">
    <section class="wrapper">
      @yield('content')
    </section>
  </section>

  <!-- javascripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.js"></script>  
  <script src="{{ asset('template/js/jquery.js') }}"></script>
  <script src="{{ asset('template/js/jquery-ui-1.10.4.min.') }}"></script>
  <script src="{{ asset('template/js/jquery-1.8.3.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('template/js/jquery-ui-1.9.2.custom.min.js') }}"></script>
  <!-- bootstrap -->
  <script src="{{ asset('template/js/bootstrap.min.js') }}"></script>
  <!-- nice scroll -->
  <script src="{{ asset('template/js/jquery.scrollTo.min.js') }}"></script>
  <script src="{{ asset('template/js/jquery.nicescroll.js') }}" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="{{ asset('template/assets/jquery-knob/js/jquery.knob.js') }}"></script>
  <script src="{{ asset('template/js/jquery.sparkline.js') }}" type="text/javascript"></script>
  <script src="{{ asset('template/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js') }}"></script>
  <script src="{{ asset('template/js/owl.carousel.js') }}"></script>
  <!-- jQuery full calendar -->
  <script src="{{ asset('template/js/fullcalendar.min.js') }}"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="{{ asset('template/assets/fullcalendar/fullcalendar/fullcalendar.js') }}"></script>
    <!--script for this page only-->
    <script src="{{ asset('template/js/calendar-custom.js') }}"></script>
    <script src="{{ asset('template/js/jquery.rateit.min.js') }}"></script>
    <!-- custom select -->
    <script src="{{ asset('template/js/jquery.customSelect.min.js') }}"></script>
    <script src="{{ asset('template/assets/chart-master/Chart.js') }}"></script>

    <!--custome script for all page-->
    <script src="{{ asset('template/js/scripts.js') }}"></script>
    <!-- custom script for this page-->
    <script src="{{ asset('template/js/sparkline-chart.js') }}"></script>
    <script src="{{ asset('template/js/easy-pie-chart.js') }}"></script>
    <script src="{{ asset('template/js/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('template/js/xcharts.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery.autosize.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery.placeholder.min.js') }}"></script>
    <script src="{{ asset('template/js/gdp-data.js') }}"></script>
    <script src="{{ asset('template/js/morris.min.js') }}"></script>
    <script src="{{ asset('template/js/sparklines.js') }}"></script>
    <script src="{{ asset('template/js/charts.js') }}"></script>
    <script src="{{ asset('template/js/jquery.slimscroll.min.js') }}"></script>
    @yield('scripts')
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>
  
</body>

</html>
