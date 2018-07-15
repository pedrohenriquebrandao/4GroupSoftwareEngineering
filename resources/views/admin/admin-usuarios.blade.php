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
              <li class="active"><a href="/admin-usuarios"> <i class="icon-user"></i>Usuários</a></li>
              @if(Auth::guard('admin')->user()->tipo == 'master')
                  <li ><a href="/administradores"> <i class="icon-user"></i>Administradores</a></li>
              @endif
              <li ><a href="/admin-detalhes-assinatura"> <i class="icon-list-1"></i>Assinaturas</a></li>
              <li ><a href=""> <i class="icon-interface-windows"></i>Gerar Backup do Banco de Dados</a></li>  
              <li ><a href=""> <i class="icon-website"></i>Gerar Relatório</a></li>             
          </ul>
        </nav>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Usuários</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="/dashboard-produtor">Página principal</a></li>
              <li class="breadcrumb-item active">Usuários        </li>
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
                      <h3 class="h4">Usuários</h3>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive-xl">                       
                        <table class="table table-striped table-hover">                        
                          <thead>
                            <tr>
                              <th scope="col">ID</th>
                              <th scope="col">Usuário</th>
                              <th scope="col">CPF</th>
                              <th scope="col">E-mail</th>
                              <th scope="col">Sexo</th>
                              <th scope="col">Telefone</th>
                              <th scope="col">Status</th>                              
                              <th scope="col">Banir</th>                             
                            </tr>
                          </thead>
                          @forelse($listaUsuarios as $lista)
                            <tbody>
                              <tr>
                                <th scope="row">{{$lista->id}}</th>
                                <td>{{$lista->nome}}</td>
                                <td>{{$lista->cpf}}</td>
                                <td>{{$lista->email}}</td>
                                <td>{{$lista->sexo}}</td>
                                <td>{{$lista->telefone}}</td>
                                <td><b>Usuário: </b>Ativo</td>
                                <td><a href="" class="a-btn-edit"><button type="button" id="closeCard3" data-toggle="collapse" aria-haspopup="true" aria-expanded="false" class="btn btn-danger btn-sm"><i class="fa fa-ellipsis-v"></i>Banir</button></a>
                              @empty
                                <th scope="row">1</th>
                                <td><b>User: </b>@joaopedro</td>
                                <td>Consumidor</td>
                                <td>joaopedro@gmail.com</td>
                                <td><b>Usuário: </b>Ativo</td>
                                <td><a href="" class="a-btn-edit"><button type="button" id="closeCard3" data-toggle="collapse" aria-haspopup="true" aria-expanded="false" class="btn btn-danger btn-sm"><i class="fa fa-ellipsis-v"></i>Banir</button></a>
                              </tr>
                              <tr>                            
                            </tbody>
                          @endforelse
                        </table>
                      </div>
                    </div>              
                   </div>
                </div>                
              </div>
            </div>
          </section>
          <!-- Page Footer-->
          <footer class="main-footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <p>Colheita Feliz &copy; 2018</p>
                  </div>
                  <div class="col-sm-6 text-right">
                    <p>Design by <a href="https://bootstrapious.com/admin-templates" class="external">4 Group Software Engineering</a></p>
                  <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
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

                  