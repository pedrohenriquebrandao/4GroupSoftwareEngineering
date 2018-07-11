<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <center>
                    <br>
                    <div class="card-header" style="color: blue">Usuarios</div>
                    <hr>
                    <br>
                    <div class="card-body">
                    @if (Auth::guard('admin')->check())
                        <p class="text-success" style="color: green">
                            Você está logado como <strong>ADMIN!</strong>
                            <br>
                            <strong>Nome: </strong> {{ auth()->guard('admin')->user()->nome }}
                            <br>
                            <strong>E-mail:</strong> {{auth()->guard('admin')->user()->email}}
                            <br>
                            <strong>Telefone: </strong> {{ auth()->guard('admin')->user()->telefone }}
                        </p>
                    @else
                        <p class="text-danger" style="color: red">
                            Você está desconectado como <strong>ADMIN!</strong>
                        </p>
                    @endif
                    <br>
                    <hr>
                    <br>
                    @if (Auth::guard('consumidor')->check())
                        <p class="text-success" style="color: green">
                            Você está logado como <strong>CONSUMIDOR!</strong>
                            <br>
                            <strong>E-mail:</strong> {{auth()->guard('consumidor')->user()->email}}
                        </p>
                    @else
                        <p class="text-danger" style="color: red">
                            Você está desconectado como <strong>CONSUMIDOR!</strong>
                        </p>
                    @endif
                    </div>
                </div>
                </center>
            </div>
        </div>
    </div>
</body>
</html>