<!DOCTYPE html>
<html lang="en">
<head>
	<title>Recuperação de Senha</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<!--===============================================================================================-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="produtor/fonts/iconic/css/material-design-iconic-font.min.css" >

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="produtor/css/util.css">
	<link rel="stylesheet" type="text/css" href="produtor/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url({!! asset('image/recsenha.jpg') !!});">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form">
					<center><img style=""  src="{!! asset('image/recsenha.png') !!}" height= "130"></center>
					<span class="login100-form-title p-b-49" >					
						<!--Entrar-->
					</span>
					<div class="txt1 text-center p-t-54 p-b-20">
						<span>
							Digite sua conta de e-mail onde será enviado um link para ser definida uma nova senha.
						</span>
					</div>
					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is required">
						<span class="label-input100">E-mail</span>
						<input class="input100" type="text" name="e-mail" placeholder="Digite seu e-mail">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>					
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Confirmar
							</button>
						</div>
					</div> 
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	@include('footer')
</body>
</html>