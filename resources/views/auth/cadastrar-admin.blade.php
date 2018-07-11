<!DOCTYPE html>
<html lang="en">
<head>
	<title>Colheita Feliz</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	
<!--===============================================================================================-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="produtor/fonts/iconic/css/material-design-iconic-font.min.css" >
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="produtor/css/util.css">
	<link rel="stylesheet" type="text/css" href="produtor/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<!--  imagem de fundo será adicionada no final -->
	<div class="limiter">
		<div class="container-login100" style="background-image: url({!! asset('image/bgCadastro.jpg') !!});">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" action="{{ url('/cadAdmin') }}" method="POST">
					{{csrf_field()}}
					<center><img style=""  src="{!! asset('image/logocadastrar.png') !!}" height= "130"></center>
					<span class="login100-form-title p-b-49" >					
						<!--Entrar-->
                    </span>

					<div class="wrap-input100 m-b-23 {{$errors->has('email') ? 'has-error' : ''}}">
						<span class="label-input100">E-mail</span>
						@if($errors->has('email'))
							<span class="label-input100 help-block" style="color: red">
								{{$errors->first('email')}}
							</span>
						@endif
						<span class="focus-input100" data-symbol="&#xf206;"></span>
						<input class="input100" type="email" name="email" value="{{old('email')}}" placeholder="Digite seu e-mail">
					</div>

					<div class="wrap-input100 {{$errors->has('password') ? 'has-error' : ''}}">
						<span class="label-input100">Senha</span>
						@if($errors->has('password'))
							<span class="label-input100 help-block" style="color: red">
								{{$errors->first('password')}}
							</span>
						@endif
						<input class="input100" type="password" name="password" value="{{old('password')}}" placeholder="Digite sua senha">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>

					<div class="wrap-input100 {{$errors->has('confirmasenha') ? 'has-error' : ''}}">
						<span class="label-input100">Confirmar Senha</span>
						@if($errors->has('confirmasenha'))
							<span class="label-input100 help-block" style="color: red">
								{{$errors->first('confirmasenha')}}
							</span>
						@endif
						<input class="input100" type="password" name="confirmasenha" placeholder="Confirme sua senha">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>

		
					<div class="wrap-input100 m-b-23 {{$errors->has('email') ? 'has-error' : ''}}">
						<span class="label-input100">Nome</span>
						@if($errors->has('nome'))
							<span class="label-input100 help-block" style="color: red">
								{{$errors->first('nome')}}
							</span>
						@endif
						<input class="input100" type="text" name="nome" value="{{old('nome')}}" placeholder="Digite seu nome">
						<span class="focus-input100" data-symbol="&#xf20d;"></span>
					</div>
								
					<div class="wrap-input100 m-b-23 {{$errors->has('telefone') ? 'has-error' : ''}}">
						<span class="label-input100">Telefone</span>
						@if($errors->has('telefone'))
							<span class="label-input100 help-block" style="color: red">
								{{$errors->first('telefone')}}
							</span>
						@endif
						<input class="input100" type="text" name="telefone" value="{{old('telefone')}}" placeholder="Digite seu número de telefone">
						<span class="focus-input100" data-symbol="&#xf2bc;"></span>
					</div>					
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Cadastrar
							</button>
						</div>
					</div>	

										 
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	@include('footer')
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="produtor/js/main.js"></script>
  	
</body>
</html>