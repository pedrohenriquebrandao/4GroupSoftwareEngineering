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
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="produtor/img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4">Zezin</h1>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Menu</span>
          <ul class="list-unstyled">
            <li><a href="/dashboard-consumidor"> <i class="icon-home"></i>Página principal </a></li>        
            <li class="active"><a href="/minhas-assinaturas"> <i class="icon-list"></i>Minhas Assinaturas</a></li>
            <li ><a href="/dados-consumidor"> <i class="icon-user"></i>Meus Dados</a></li>
            <li ><a href="/enderecos-consumidor"> <i class="icon-form"></i>Meus Endereços</a></li>
            <li ><a href="/cartoes-consumidor"> <i class="icon-bars"></i>Meus Cartões</a></li>
            <li ><a href="/mensagens-consumidor"> <i class="icon-mail"></i>Mensagens</a></li>         
          </ul>
        </nav>
        <div class="content-inner">    
          
        <section class="tables">   
            <div class="container-fluid">
              <div class="row">         
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-close">                      
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Assinaturas Ativas</h3>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive-xl">                       
                        <table class="table table-striped table-hover">                        
                          <thead>
                            <tr>
                              <th scope="col"></th>
                              <th scope="col">Nome do produto</th>
                              <th scope="col">Fornecedor</th>
                              <th scope="col">Quantidade</th>
                              <th scope="col">Endereço de entrega</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td><img src="image/tomate.jfif" class="img-responsive" alt="..."></td>
                              <td>Tomate</td>
                              <td>Pé de pranta</td>
                              <td>10 kilos</td>
                              <td>
                                Rua:
                                </br>
                                Bairro:
                                </br>
                                Cidade:
                                </br>
                                CEP:
                                </br>
                                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalEnd">Trocar Endereço</button>

                              </td>
                            </tr>
                            <tr>                            
                          </tbody>
                        </table>
                        <a href="/detalhe-assinatura" class="a-btn-edit"><button type="button" id="closeCard3" data-toggle="collapse" aria-haspopup="true" aria-expanded="false" class="btn btn-default btn-sm"><i class="fa fa-ellipsis-v"></i>Ver assinatura</button></a>
                        <a href="/pausar-assinatura" class="a-btn-edit"><button type="button" id="closeCard3" data-toggle="collapse" aria-haspopup="true" aria-expanded="false" class="btn btn-danger btn-sm"><i class="fa fa-ellipsis-v"></i>Pausar Assinatura</button></a>
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
                      <h3 class="h4">Assinaturas Pausadas</h3>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive-xl">                       
                        <table class="table table-striped table-hover">                        
                          <thead>
                            <tr>
                              <th scope="col"></th>
                              <th scope="col">Nome do produto</th>
                              <th scope="col">Fornecedor</th>
                              <th scope="col">Quantidade</th>
                              <th scope="col">Endereço de entrega</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td><img src="image/tomate.jfif" class="img-responsive" alt="..."></td>
                              <td>Tomate</td>
                              <td>Pé de pranta</td>
                              <td>10 kilos</td>
                              <td>
                                Rua:
                                </br>
                                Bairro:
                                </br>
                                Cidade:
                                </br>
                                CEP:
                                </br>
                                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalEnd">Trocar Endereço</button>

                              </td>
                            </tr>
                            <tr>                            
                          </tbody>
                        </table>
                        <a href="/detalhe-assinatura" class="a-btn-edit"><button type="button" id="closeCard3" data-toggle="collapse" aria-haspopup="true" aria-expanded="false" class="btn btn-default btn-sm"><i class="fa fa-ellipsis-v"></i>Ver assinatura</button></a>
                        <a href="/pausar-assinatura" class="a-btn-edit"><button type="button" id="closeCard3" data-toggle="collapse" aria-haspopup="true" aria-expanded="false" class="btn btn-success btn-sm"><i class="fa fa-ellipsis-v"></i>Ativar Assinatura</button></a>
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
                <div class="col-xl-8 col-sm-6">
                  <p>4Group&copy; 2018</p>
                </div>                
              </div>
            </div>
          </footer>
        </div>
      </div>
    </div>

    <!-- Modal Endereço -->
    <div class="modal fade" id="modalEnd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">  
                    <h5 class="modal-title" id="exampleModalLabel">Endereços</h5>
                    <button type="button" class="close col-md-2" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div>
                        <button data-dismiss="modal" class="btn btn-light col-12 botaoModal">
                        <h5>Rua A, 500 - Casa</h5>
                        <p><span>Feira de Santana</span>, <span>Centro</span> - <span>00000000-00</span></p> 
                        </button>
                    </div>
                    <div>
                        <button data-dismiss="modal" class="btn btn-light col-12 botaoModal">
                        <h5>Rua A, 500 - Casa</h5>
                        <p><span>Feira de Santana</span>, <span>Centro</span> - <span>00000000-00</span></p> 
                        </button>
                    </div>
                </div>
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