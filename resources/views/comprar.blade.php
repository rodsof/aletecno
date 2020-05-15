<!DOCTYPE html>
<html lang="en">
<head>
	<title>Comprar</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset('images/icons/cart.ico') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/iconic/css/material-design-iconic-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
<!--===============================================================================================-->
<!--===============================================================================================-->
	<script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/daterangepicker/moment.min.js') }}"></script>
	<script src="{{ asset('vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('js/main.js') }}"></script>

</head>
<body style="background-color: #999999;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('images/product.png');   background-size: auto;
"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form action="{{url('sendemail/send')}}" method="post" class="login100-form validate-form">
				{{ csrf_field() }}
					<span class="login100-form-title p-b-59">
						Formulario de consulta
					</span>

						@if (count($errors) > 0)
		<div class="alert alert-danger">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<ul>
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
		</ul>
		</div>
	@endif
	@if ($message = Session::get('success'))
	<div class="alert alert-success alert-block">
		<button type="button" class="close" data-dismiss="alert">×</button>
			<strong>{{ $message }}</strong>
	</div>
	@endif

					<div class="wrap-input100 validate-input" data-validate="Se requiere el nombre">
						<span class="label-input100">Nombre</span>
						<input class="input100" type="text" name="nombre" placeholder="Nombre...">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input">
						<span class="label-input100">Apellido</span>
						<input class="input100" type="text" name="apellido" placeholder="Apellido...">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input">
						<span class="label-input100">Empresa</span>
						<input class="input100" type="text" name="empresa" placeholder="Empresa a la que pertenece...">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" >
						<span class="label-input100">Ciudad - País</span>
						<input class="input100" type="text" name="ubicacion" placeholder="Ubicación...">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Correo electrónico...">
						<span class="focus-input100"></span>
					</div>
						<div class="wrap-input100 validate-input" >
						<span class="label-input100">Cantidades</span>
						<input class="input100" type="number" name="cantidad">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" >
						<span class="label-input100">Mensaje</span>
						<input class="input100" type="textarea" name="mensaje">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-m w-full p-b-33">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="enviar" type="checkbox" name="enviar">
							<label class="label-checkbox100" for="enviar">
								<span class="txt1">
									Haga click aquí para habilitar el envío del
									<a href="#" class="txt2 hov1">
										mensaje
									</a>
								</span>
							</label>
						</div>

						
					</div>
<!-- //modal -->
					<div id="testmodal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Transferencia bancaria</h4>
            </div>
            <div class="modal-body">
            	    
             <li>
      <div class="copy-content">DATOS
        <br> <span class="cbu">CBU 56547888</span>
        <br> Cuit 7896154
        <br> Nombre
      </div>
      <button class="copy-btn">COPIAR DATOS</button>
    </li>
 

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

</div>
<!-- // end modal-->
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn" >
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn show-modal" id="comprar" disabled>
								Consultar
							</button>
						</div>

						<a href={{ '/' }} class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Volver 
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
</body>
</html>