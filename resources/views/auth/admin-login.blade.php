<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin</title>
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
		<div class="container-login100" style="background-image: url({!! asset('image/bgAdmin.png') !!});">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" method="POST" action="{{ route('admin.login.submit') }}">
				{{ csrf_field() }}
					<center><img style=""  src="{!! asset('image/logoAdmin.png') !!}" height= "130"></center>
					<span class="login100-form-title p-b-49" >					
						<!--Entrar-->
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Campo obrigatório">
						<span class="label-input100">E-mail</span>
						<input class="input100 {{ $errors->has('email') ? ' is-invalid' : '' }}" type="text" name="email" value="{{ old('email') }}" placeholder="Digite seu e-mail">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
						@if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
					</div>

					<div class="wrap-input100 validate-input" data-validate="Campo obrigatório">
						<span class="label-input100">Senha</span>
						<input class="input100 {{ $errors->has('password') ? ' is-invalid' : '' }}" type="senha" name="password" value="{{ old('password') }}" placeholder="Digite sua senha">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
						@if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
					</div>
					
					<div class="text-right p-t-8 p-b-13">
						<a href="/recuperar-senha">
							Esqueceu a senha?
						</a>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Entrar
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
</body>
</html>