<style>
    .bg-red {
        background-color: rgb(173, 30, 25);
    }

</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-red navbar-fixed-top" role="navigation"  style="padding">
    <div class="container">
        <div>
            <a style="margin-left: 0px" class="navbar-brand js-scroll-trigger" href="<?= url('/') ?>">

                <img src="{!! asset('image/logo.png') !!}" height="80">
                <img src="{!! asset('image/nomelogo.png') !!}" height="70">
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <!-- ->
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>

                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#pesquisar">
                        <i class="fa fa-search fa-2x" aria-hidden="true"></i>
                    </a>
                </li>
                <!-- -->
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="/carrinho">
                        Carrinho
                        <i class="fa fa-cart-plus fa-2x" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/loginConsumidor" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <!-- Verifica se o usuário está logado, se estiver exibe o seu nome, caso contrário exibe e opção de login -->
                        @if(Auth::guard('consumidor')->check())
                            {{$usuario->nome}} <i class="fa fa-user fa-2x" aria-hidden="true"></i>
                        @else
                            Entrar <i class="fa fa-user fa-2x" aria-hidden="true"></i>
                        @endif
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @if(Auth::guard('consumidor')->check())
                            <a class="dropdown-item" href="{{route('consumidor.login')}}">Produtor</a>
                            <a class="dropdown-item" href="{{route('admin.login')}}">Administrador</a>
                            <a class="dropdown-item" href="{{route('consumidor.logout')}}">Logout</a>
                        @else
                            <a class="dropdown-item" href="{{route('consumidor.login')}}">Login</a>
                            <a class="dropdown-item" href="{{route('consumidor.login')}}">Produtor</a>
                            <a class="dropdown-item" href="{{route('admin.login')}}">Administrador</a>
                        @endif
                        
                    </div>
                </li>
                
            </ul>
        </div>
    </div>
    </div>
</nav>