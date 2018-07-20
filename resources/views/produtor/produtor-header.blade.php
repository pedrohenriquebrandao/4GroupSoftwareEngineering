<div id="header">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- LOGO -->
            <div>
                <a style="margin-left: 0px" class="navbar-brand js-scroll-trigger" href="<?= url('/') ?>">
                    <img src="{!! asset('image/logo.png') !!}" height="80">
                    <img src="{!! asset('image/nomelogo.png') !!}" height="70">
                </a>							
            </div>
            <!-- /LOGO -->

            <!-- ACCOUNT -->
            <div class="col-md-9 clearfix">
                <div class="header-ctn">
                    <!-- LOGIN -->
                    @if(Auth::guard('consumidor')->check())
                    <div class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="">
							<i class="fa fa-user"></i>
							<span>{{$usuario->nome}}</span>
						</a>
					    <div class="cart-dropdown">
							<div class="cart-list">
                                <center>
                                    <div>
                                        <a class="dropdown-item" href="{{route('consumidor.dashboard')}}"> <span>Meu Perfil</span></a>
                                        <hr>
                                        <a class="dropdown-item" href="{{route('admin.login')}}"> <span>Administrador</span></a>
                                    </div>
                                </center>
							</div>
							<div class="cart-btns">
                                <a href="{{route('produtor.dashboard')}}">Minha Loja</a>
								<a href="{{route('consumidor.logout')}}">Logout  <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
                    </div>
                    @else
                    <div class="dropdown">
						<a href="/loginConsumidor">
							<i class="fa fa-user"></i>
							<span>Entre ou cadastre-se</span>
						</a>
                    </div>
                    @endif
                <div>
            </div>
        <!-- /LOGIN -->

                    <!-- CARRINHO -->
                    <div >				    
                        <a href="/carrinho">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Carrinho de assinaturas</span>
                            <div class="qty">3</div>
                        </a>                  
                    </div>
                    <!-- /CARRINHO -->

                    <!-- Menu Toogle -->
                    <div class="menu-toggle">
                        <a href="#">
                            <i class="fa fa-bars"></i>
                            <span>Menu</span>
                        </a>
                    </div>
                    <!-- /Menu Toogle -->
                </div>
            </div>
            <!-- /ACCOUNT -->
        </div>
        <!-- row -->
    </div>
    <!-- container -->
</div>