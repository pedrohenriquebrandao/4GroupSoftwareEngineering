<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cadastro de Produtor</title>
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
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url({!! asset('image/ingred.jpg') !!});">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form">
					<center><img style=""  src="{!! asset('image/logocadastrar.png') !!}" height= "130"></center>
					<span class="login100-form-title p-b-49" >					
						<!--Entrar-->
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Name is required">
						<span class="label-input100">Nome da Empresa/Produtor</span>
                        <input class="input100" type="text" name="e-mail" placeholder="Digite o Nome de sua Empresa">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="CNPJ is required">
						<span class="label-input100">CNPJ</span>
						<input class="input100" type="senha" name="pass" placeholder="Digite o CNPJ">
						<span class="focus-input100" data-symbol="&#xf10a;"></span>
					</div>
					</br>
                    <center><h2>Endereço</h2></center>

                    <div class="wrap-input100 validate-input" data-validate="CNPJ is required">
						<span class="label-input100">Rua</span>
						<input class="input100" type="senha" name="pass" placeholder="Digite o nome da rua">
						<span class="focus-input100" data-symbol="&#xf10a;"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate="CNPJ is required">
						<span class="label-input100">Bairro</span>
						<input class="input100" type="senha" name="pass" placeholder="Digite o nome do Bairro">
						<span class="focus-input100" data-symbol="&#xf10a;"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate="CNPJ is required">
						<span class="label-input100">Cidade</span>
						<input class="input100" type="senha" name="pass" placeholder="Digite o nome da Cidade">
						<span class="focus-input100" data-symbol="&#xf10a;"></span>
					</div>

                    <div class="row">
                        <div class="wrap-input100 validate-input col-md-5" data-validate="CNPJ is required">
						    <span class="label-input100">Cidade</span>
						    <input class="input100" type="senha" name="pass" placeholder="Digite o nome da Cidade">
						    <span class="focus-input100" data-symbol="&#xf10a;"></span>
					    </div>
                        <div class="wrap-input100 validate-input col-md-7" data-validate="CNPJ is required">
						    <span class="label-input100">Cidade</span>
						    <input class="input100" type="senha" name="pass" placeholder="Digite o nome da Cidade">
						    <span class="focus-input100" data-symbol="&#xf10a;"></span>
					    </div>
                    </div>



					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
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