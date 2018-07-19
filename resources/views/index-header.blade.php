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

            <!-- BARRA DE PROCURA -->
            <div class="col-md-6">
                <div class="header-search">
                    <form>
                        <select class="input-select">
                            <option value="0">Categorias</option>
                            <option value="1">Frutas</option>
                            <option value="1">Verduras</option>
                            <option value="1">Tubérculos</option>
                            <option value="1">Sementes</option>
                        </select>
                        <input class="input" placeholder="Pesquise aqui">
                        <button class="search-btn">Pesquisar</button>
                    </form>
                </div>
            </div>
            <!-- /SEARCH BAR -->

            <!-- ACCOUNT -->
            <div class="col-md-3 clearfix">
                <div class="header-ctn">
                    <!-- LOGIN -->
                    <div>
                        <a href="/loginConsumidor">
                            <i class="fa fa-user"></i>
                            <span>Entre ou cadastre-se</span>										
                        </a>
                    </div>
                    <!-- /LOGIN -->

                    <!-- CARRINHO -->
                    <div class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true" href="#">
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