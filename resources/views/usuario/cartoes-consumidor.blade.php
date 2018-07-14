<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Perfil do Produtor</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="produtor/css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="produtor/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="produtor/css/custom.css">
    <!-- Favicon-->
    <link href="produtor/css/half-slider.css" rel="stylesheet">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page">
      <!-- Main Navbar-->
      <header class="header">
         @include('navbarprodutor')
      </header>
      <div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="produtor/img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4">Zezin</h1>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Menu</span>
          <ul class="list-unstyled">
            <li ><a href="/dashboard-consumidor"> <i class="icon-home"></i>Página principal </a></li>        
            <li ><a href="/minhas-assinaturas"> <i class="icon-list"></i>Minhas Assinaturas</a></li>
            <li ><a href="/dados-consumidor"> <i class="icon-user"></i>Meus Dados</a></li>
            <li ><a href="/enderecos-consumidor"> <i class="icon-form"></i>Meus Endereços</a></li>
            <li class="active"><a href="/cartoes-consumidor"> <i class="icon-bars"></i>Meus Cartões</a></li>
            <li ><a href="/mensagens-consumidor"> <i class="icon-mail"></i>Mensagens</a></li>         
          </ul>
        </nav>
        <div class="content-inner">    
          
        <div class="container mt-5">
          <div class="row ml-5 mr-4">
            
          <div class="col-md-5 ml-1 mr-5 mb-5 end-pedido meu-card">
              <div class="conteudo">
              <h2>ANTÔNIO S CERQUEIRA - VISA</h2>
              <p><span>	4012001037141112</span>, <span>123</span> - <span>12/2022</span></p>
              </div>
              <div class="row">
                <button class="btn btn-primary col-md-4 ml-2 mr-2 btnEnd">Alterar</button>
                <button class="btn btn-danger col-md-4 btnEnd">Excluir</button>
              </div>
            </div>
            
            <div class="col-md-5 ml-1 mr-5 mb-5 end-pedido meu-card">
              <div class="conteudo">
              <h2>ANTÔNIO S CERQUEIRA - VISA</h2>
              <p><span>	4012001037141112</span>, <span>123</span> - <span>12/2022</span></p>
              </div>
              <div class="row">
                <button class="btn btn-primary col-md-4 ml-2 mr-2 btnEnd">Alterar</button>
                <button class="btn btn-danger col-md-4 btnEnd">Excluir</button>
              </div>
            </div>

          

          </div>
        </div> 
          <!-- Page Footer-->
          <footer class="main-footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-xl-8 col-sm-6">
                  <p>4Group&copy; 2018</p>
                </div>                
              </div>
            </div>
          </footer>
        </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="produtor/jquery/jquery.min.js"></script>
    <script src="produtor/popper.js/umd/popper.min.js"> </script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="produtor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="produtor/chart.js/Chart.min.js"></script>
    <script src="produtor/jquery-validation/jquery.validate.min.js"></script>
    <script src="produtor/js/charts-home.js"></script>
    <!-- Main File-->
    <script src="produtor/js/front.js"></script>
  </body>
</html>