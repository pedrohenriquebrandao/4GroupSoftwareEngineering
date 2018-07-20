<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Colheita Feliz</title>
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
         @include('admin/admin-navbar')
      </header>
      <div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
              @if(Auth::guard('admin')->user()->tipo == 'master')
                <div class="avatar"><img src="produtor/img/admin-master.png" alt="..." class="img-fluid rounded-circle"></div>
              @else
                <div class="avatar"><img src="produtor/img/admin-comum.png" alt="..." class="img-fluid rounded-circle"></div>
              @endif
              @include('admin/admin-sidebar')
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Menu</span>
          <ul class="list-unstyled">                    
              <li class="active"><a href="/admin-dashboard"> <i class="icon-grid"></i>Status</a></li>
              <li ><a href="/admin-usuarios"> <i class="icon-user"></i>Usuários</a></li>
              @if(Auth::guard('admin')->user()->tipo == 'master')
                  <li ><a href="/administradores"> <i class="icon-user"></i>Administradores</a></li>
              @endif
              <li ><a href="/admin-detalhes-assinatura"> <i class="icon-list-1"></i>Assinaturas</a></li>
              <li ><a href=""> <i class="icon-interface-windows"></i>Gerar Backup do Banco de Dados</a></li>  
              <li ><a href=""> <i class="icon-website"></i>Gerar Relatório</a></li>             
          </ul>
        </nav>
        <div class="content-inner">    
          
          <!-- Dashboard Counts Section-->
          <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">
              <div class="row bg-white has-shadow">
                <!-- Item -->
                <div class="col-xl-4 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-violet"><i class="icon-user"></i></div>
                    <div class="title"><a href="/admin-usuarios"><span>Usuários</span></a>
                      <div class="progress">
                        <div role="progressbar" style="width: 25%; height: 4px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-violet"></div>
                      </div>
                    </div>
                    <div class="number"><strong>{{$totalUsuarios}}</strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-4 col-sm-6" >
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-yellow"><i class="icon-padnote"></i></div>
                    <div class="title"><a href="/admin-usuarios"><span>Produtores<br>Cadastrados</span></a>
                      <div class="progress">
                        <div role="progressbar" style="width: 70%; height: 4px;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-yellow"></div>
                      </div>
                    </div>
                    <div class="number"><strong>{{$totalProdutores}}</strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-4 col-sm-6" style="padding-left:1px">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-green"><i class="icon-mail"></i></div>
                    <div class="title"><a href="/admin-assinaturas"><span>Assinaturas</span></a>
                      <div class="progress">
                        <div role="progressbar" style="width: 50%; height: 4px; " aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-green"></div>
                      </div>
                    </div>
                    <div class="number" style="padding-right:50px"><strong>{{$totalAssinaturas}}</strong></div>
                  </div>
                </div>
                <!-- Item -->                
              </div>
            </div>
          </section>
          <!-- Dashboard Header Section    -->
          <section class="dashboard-header">
            <div class="container-fluid">
              <div class="row">                
                <!-- Line Chart            -->
                <div class="chart col-lg-8 col-12">
                  <div class="line-chart bg-white d-flex align-items-center justify-content-center has-shadow">
                    <canvas id="lineCahrt"></canvas>
                  </div>
                </div>
                <div class="chart col-lg-4 col-12">
                  <!-- Bar Chart   -->
                  <div class="bar-chart has-shadow bg-white">
                    <div class="title"><strong class="text-violet">95%</strong><br><small>Porcentagem de vendas</small></div>
                    <canvas id="barChartHome"></canvas>
                  </div>
                  <!-- Numbers-->
                  <div class="statistic d-flex align-items-center bg-white has-shadow">
                    <div class="icon bg-orange"><i class="fa fa-line-chart"></i></div>
                    <div class="text"><strong>99.9%</strong><br><small>Taxa de Sucesso</small></div>
                  </div>
                </div>
              </div>
            </div>          
          <!-- Page Footer-->
          <footer id="footer">
            @include('footer')
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