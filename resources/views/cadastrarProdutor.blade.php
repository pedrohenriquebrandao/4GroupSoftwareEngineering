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
		<div class="container-login100" style="background-image: url({!! asset('image/ingred.png') !!});">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" action="{{url('cadProdutor')}}" method="POST">
				{{csrf_field()}}
					<center><img style=""  src="{!! asset('image/logocadastrar.png') !!}" height= "130"></center>
					<span class="login100-form-title p-b-49" >					
						<!--Entrar-->
					</span>

					<div class="wrap-input100 m-b-23 {{$errors->has('nome') ? 'has-error' : ''}}">
						<span class="label-input100">Nome da Empresa/Produtor</span>
                        @if($errors->has('nome'))
							<span class="label-input100 help-block" style="color: red">
								{{$errors->first('nome')}}
							</span>
						@endif
						<input class="input100" type="text" name="nome" value="{{old('nome')}}" placeholder="Digite o Nome de sua Empresa">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 {{$errors->has('cnpj') ? 'has-error' : ''}}">
						<span class="label-input100">CNPJ</span>
						@if($errors->has('cnpj'))
							<span class="label-input100 help-block" style="color: red">
								{{$errors->first('cnpj')}}
							</span>
						@endif
						<input class="input100" type="text" name="cnpj" value="{{old('cnpj')}}" placeholder="Digite o CNPJ">
						<span class="focus-input100" data-symbol="&#xf2c3;"></span>
					</div>
					</br>
					
                    <span class="label-input100">Endereço:</span>

                    <div class="wrap-input100 {{$errors->has('rua') ? 'has-error' : ''}}">
						<span class="label-input100">Rua</span>
						@if($errors->has('rua'))
							<span class="label-input100 help-block" style="color: red">
								{{$errors->first('rua')}}
							</span>
						@endif
						<input class="input100" type="text" name="rua" value="{{old('rua')}}" placeholder="Digite o nome da rua">
						
					</div>

                    <div class="wrap-input100 {{$errors->has('bairro') ? 'has-error' : ''}}">
						<span class="label-input100">Bairro</span>
						@if($errors->has('bairro'))
							<span class="label-input100 help-block" style="color: red">
								{{$errors->first('bairro')}}
							</span>
						@endif
						<input class="input100" type="text" name="bairro" value="{{old('bairro')}}" placeholder="Digite o nome do Bairro">
						
					</div>

                    <div class="wrap-input100 {{$errors->has('cep') ? 'has-error' : ''}}">
						<span class="label-input100">CEP</span>
						@if($errors->has('cep'))
							<span class="label-input100 help-block" style="color: red">
								{{$errors->first('cep')}}
							</span>
						@endif
						<input class="input100" type="text" name="cep" value="{{old('cep')}}" placeholder="Digite o CEP">
						
					</div>

                    <div class="wrap-input100 {{$errors->has('numero') ? 'has-error' : ''}}">
						<span class="label-input100">Número</span>
						@if($errors->has('cidade'))
							<span class="label-input100 help-block" style="color: red">
								{{$errors->first('cidade')}}
							</span>
						@endif
						<input class="input100" type="text" name="numero" value="{{old('numero')}}" placeholder="Digite o número">
						
					</div>

                    <div class="wrap-input100 {{$errors->has('cidade') ? 'has-error' : ''}}">
						<span class="label-input100">Cidade</span>
						@if($errors->has('cidade'))
							<span class="label-input100 help-block" style="color: red">
								{{$errors->first('cidade')}}
							</span>
						@endif
						<input class="input100" type="text" name="cidade" value="{{old('cidade')}}" placeholder="Digite o nome da Cidade">
						
					</div>

                    <div class="wrap-input100 {{$errors->has('estado') ? 'has-error' : ''}}">
						<span class="label-input100">Estado</span>
						@if($errors->has('estado'))
							<span class="label-input100 help-block" style="color: red">
								{{$errors->first('estado')}}
							</span>
						@endif
						<input class="input100" type="text" name="estado" value="{{old('estado')}}" placeholder="Digite o Estado">
						
					</div>

                    <div class="wrap-input100 {{$errors->has('complemento') ? 'has-error' : ''}}">
						<span class="label-input100">Complemento</span>
						@if($errors->has('complemento'))
							<span class="label-input100 help-block" style="color: red">
								{{$errors->first('complemento')}}
							</span>
						@endif
						<input class="input100" type="text" name="complemento" value="{{old('complemento')}}" placeholder="Digite o Complemento">
						
					</div>
					<span class="label-input100">Área:</span>			
                    <div class="row">
                        <div class="form-check col-sm-6 p-t-10 p-b-10 p-l-10">
                            <input type="radio" class="form-check-input" name="zona" id="radioUrbana" value="urbana" checked>
                            <label class="form-check-label" for="radioUrnaba">Zona Urbana</label>
                        </div>
                        <div class="form-check col-sm-6 p-l-10">
                            <input type="radio" class="form-check-input" name="zona" id="radioRural" value="rural" checked>
                            <label class="form-check-label" for="radioRural">Zona Rural</label>  
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
	<script src="js/main.js"></script>

</body>
</html>