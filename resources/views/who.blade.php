<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
                            <strong>ID: </strong> {{ auth()->guard('admin')->user()->id }}
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
                            <strong>ID: </strong> {{ auth()->guard('consumidor')->user()->id }}
                            <br>
                            <strong>E-mail:</strong> {{auth()->guard('consumidor')->user()->email}}
                        </p>
                    @else
                        <p class="text-danger" style="color: red">
                            Você está desconectado como <strong>CONSUMIDOR!</strong>
                        </p>
                    @endif

                    <hr>
                    <br><br>

                    @forelse($listaAdm as $lista)
                        <strong>Nome: </strong> {{$lista->nome}} <br>
                        <strong>E-mail: </strong> {{$lista->email}} <br>
                        <strong>Telefone: </strong> {{$lista->telefone}} <br>
                        <strong>ID: </strong> {{$lista->id}} <br>
                        <hr>
                    @empty
                    <strong>Nenhum admin cadastrado!</strong>
                    @endforelse
                    </div>
                </div>
                </center>
            </div>
        </div>
    </div>
</body>
</html>