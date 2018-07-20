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
    <link href="css/half-slider.css" rel="stylesheet">
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
          @include('usuario.consumidor-sidebar')
          <!-- Sidebar Navidation Menus--><span class="heading">Menu</span>
          <ul class="list-unstyled">
            <li ><a href="/dashboard-consumidor"> <i class="icon-home"></i>Página principal </a></li>        
            <li ><a href="/minhas-assinaturas"> <i class="icon-list"></i>Minhas Assinaturas</a></li>
            <li class="active"><a href="/dados-consumidor"> <i class="icon-user"></i>Meus Dados</a></li>
            <li ><a href="/enderecos-consumidor"> <i class="icon-form"></i>Meus Endereços</a></li>
            <li ><a href="/cartoes-consumidor"> <i class="icon-bars"></i>Meus Cartões</a></li>
            <li ><a href="/mensagens-consumidor"> <i class="icon-mail"></i>Mensagens</a></li>         
          </ul>
        </nav>
        <div class="content-inner">    
          
          <div class="container">
            <div class="ml-3 mt-4 mr-3">
              <form action="">
              <div class="row">
                <div class="form-group col-5">
                  <label for="">Nome:</label>
                  <input type="text"class="form-control" value="João">
                </div>
                <div class="form-group col-5">
                  <label for="">Sobrenome:</label>
                  <input type="text" value="Silva" class="form-control">
                </div>
                <div class="form-group col-5">
                  <label for="">Telefone:</label>
                  <input type="text" class="form-control" value="7599192912">
                </div>
                <div class="form-group col-5">
                  <label for="">CPF:</label>
                  <input type="text" class="form-control" value="07399192912" readonly>
                </div>
                <div class="form-group col-5">
                  <label for="">Email:</label>
                  <input type="text" class="form-control" value="joao@gmail.com" readonly >
                </div>
                  
                </div>
              </form>
              <button class="btn btn-success col-5">Salvar Alterações</button>
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