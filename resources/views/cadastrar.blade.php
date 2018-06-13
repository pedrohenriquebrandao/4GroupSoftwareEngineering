<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cadastro de Usuário</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	
<!--===============================================================================================-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css" >
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
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<!--  imagem de fundo será adicionada no final -->
	<div class="limiter">
		<div class="container-login100" style="background-image: url({!! asset('image/bgCadastro.jpg') !!});">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" action="{{url('cadUsuario')}}" method="POST">
					{{csrf_field()}}
					<center><img style=""  src="{!! asset('image/logocadastrar.png') !!}" height= "130"></center>
					<span class="login100-form-title p-b-49" >					
						<!--Entrar-->
					</span>

					<div class="txt1 text-center p-t-54 p-b-20">
						<span>
							Fazer cadastro por
						</span>
					</div>
					<div class="flex-c-m">
						<a href="#" class="login100-social-item bg1">
							<i class="fa fa-facebook"></i>
						</a>					

						<a href="#" class="login100-social-item bg3">
							<i class="fa fa-google"></i>
						</a>						
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is required">
						<span class="label-input100">E-mail</span>
						<input class="input100" type="text" name="email" placeholder="Digite seu e-mail">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Senha</span>
						<input class="input100" type="password" name="senha" placeholder="Digite sua senha">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Confirmar Senha</span>
						<input class="input100" type="password" name="pass" placeholder="Confirme sua senha">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="CPF is required">
						<span class="label-input100">CPF</span>
						<input class="input100" type="text" name="cpf" placeholder="Digite seu CPF">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is required">
						<span class="label-input100">Nome</span>
						<input class="input100" type="text" name="nome" placeholder="Digite seu nome">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is required">
						<span class="label-input100">Sobrenome</span>
						<input class="input100" type="text" name="sobrenome" placeholder="Digite seu sobrenome">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>		

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is required">
						<span class="label-input100">Sexo:</span>
						<select class="form-control p-b-10" name="sexo">
							<option value="masculino" name="sexo">Masculino</option>
							<option value="feminino" name="sexo">Feminino</option>								
						</select>						
					</div>				
										

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is required">
						<span class="label-input100">Telefone</span>
						<input class="input100" type="text" name="telefone" placeholder="Digite seu número de telefone">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>					
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" href="/landing">
								Cadastrar-se
							</button>
						</div>
					</div>	

										 
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
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
	<script src="js/main.js"></script>

</body>
</html>