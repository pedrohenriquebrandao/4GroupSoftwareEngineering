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
              <li ><a href="/admin-dashboard"> <i class="icon-grid"></i>Status</a></li>
              <li ><a href="/admin-usuarios"> <i class="icon-user"></i>Usuários</a></li>
              @if(Auth::guard('admin')->user()->tipo == 'master')
                  <li ><a href="/administradores"> <i class="icon-user"></i>Administradores</a></li>
              @endif
              <li class="active"><a href="/admin-detalhes-assinatura"> <i class="icon-list-1"></i>Assinaturas</a></li>
              <li ><a href=""> <i class="icon-interface-windows"></i>Gerar Backup do Banco de Dados</a></li>  
              <li ><a href=""> <i class="icon-website"></i>Gerar Relatório</a></li>             
          </ul>
        </nav>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Assinaturas ativas</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="/dashboard-produtor">Página principal</a></li>
              <li class="breadcrumb-item active">Assinaturas ativas        </li>
            </ul>
          </div>
          <section class="tables">   
            <div class="container-fluid">
              <div class="row">         
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-close">                      
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Entregas realizadas</h3>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive-xl">                       
                        <table class="table table-striped table-hover">                        
                          <thead>
                            <tr>
                              <th scope="col">ID</th>                              
                              <th scope="col">Nome do produto</th>
                              <th scope="col">Nome do assinante</th>
                              <th scope="col">Nome do produtor</th>
                              <th scope="col">Quantidade</th>
                              <th scope="col">Endereço de entrega</th>
                              <th scope="col">Detalhes da assinatura</th>                              
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td><b>Produto: </b>Maçã</td>
                              <td><b>Usuário: </b>@jota</td>
                              <td><b>Produtor: </b>@LojaVerde</td>
                              <td>10 kilos</td>
                              <td>Rua:</br>Bairro:</br>Cidade:</br>CEP:</td>
                              <td><a href="/detalhe-assinatura" class="a-btn-edit"><button type="button" id="closeCard3" data-toggle="collapse" aria-haspopup="true" aria-expanded="false" class="btn btn-default btn-sm"><i class="fa fa-ellipsis-v"></i>Ver assinatura</button></a>

                            </tr>
                            <tr>                            
                          </tbody>
                        </table>
                      </div>
                    </div>              
                   </div>
                </div>                
              </div>
            </div>
          </section>

          <section class="tables">   
            <div class="container-fluid">
              <div class="row">         
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-close">               
                                                              
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Entregas pendentes</h3>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive-xl">                       
                        <table class="table table-striped table-hover">                        
                          <thead>
                            <tr>
                              <th scope="col">ID</th>
                              <th scope="col">Imagem</th>
                              <th scope="col">Nome do produto</th>
                              <th scope="col">Nome do assinante</th>
                              <th scope="col">Quantidade</th>
                              <th scope="col">Endereço de entrega</th>
                              <th scope="col">Detalhes da assinatura</th>
                              <th scope="col">Enviar produto</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td><img src="image/tomate.jfif" class="img-responsive" alt="..."></td>
                              <td>Tomate</td>
                              <td>Eduardo Marques</td>
                              <td>10 kilos</td>
                              <td>Rua:</br>Bairro:</br>Cidade:</br>CEP:</td>
                              <td><a href="/detalhe-assinatura" class="a-btn-edit"><button type="button" id="closeCard3" data-toggle="collapse" aria-haspopup="true" aria-expanded="false" class="btn btn-default btn-sm"><i class="fa fa-ellipsis-v"></i>Ver assinatura</button></a>
                              <td><button type="button" id="closeCard3" data-toggle="collapse" aria-haspopup="true" aria-expanded="false" class="btn btn-success btn-sm"><i class="fa fa-ellipsis-v"></i>Enviar</button></td>

                            </tr>
                            <tr>                            
                          </tbody>
                        </table>
                      </div>
                    </div>              
                   </div>
                </div>                
              </div>
            </div>
          </section>
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

                  