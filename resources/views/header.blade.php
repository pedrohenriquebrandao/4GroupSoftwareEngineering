<style>
    .bg-red{
        background-color: rgb(173, 30, 25);
    }
</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-red navbar-fixed-top" role="navigation">
    <div class="container">
        <div>
            <a style="margin-left: 0px" class="navbar-brand js-scroll-trigger" href="#page-top">
                
            <img src="{!! asset('image/logo.png') !!}" height= "130">
            <img src="{!! asset('image/nomelogo.png') !!}" height= "120">            
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#carrinho">
                        <i class="fa fa-cart-plus fa-2x" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#pesquisar">
                        <i class="fa fa-search fa-2x" aria-hidden="true"></i>
                    </a>
                </li>     
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="/login">
                        <i class="fa fa-user fa-2x" aria-hidden="true"></i>
                    </a>
                </li>   
            </ul>
        </div>
    </div>
    </div>
</nav>