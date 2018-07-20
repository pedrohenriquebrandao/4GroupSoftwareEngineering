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
        @include('navbarprodutor')
      </header>
      <div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            @include('produtor/produtor-sidebar')
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Menu</span>
          <ul class="list-unstyled">
            <li ><a href="/dashboard-produtor"> <i class="icon-home"></i>Página principal </a></li>        
            <li class="active"><a href="/gerenciar-produtos"> <i class="icon-grid"></i>Gerenciar produtos</a></li>
            <li ><a href="/adicionar-produtos"> <i class="icon-presentation"></i>Adicionar produtos</a></li>
            <li ><a href="/assinaturas-ativas-pendentes"> <i class="icon-list-1"></i>Assinaturas ativas/pendentes</a></li>
            <li ><a href="/assinaturas-pausadas"> <i class="icon-clock"></i>Assinaturas pausadas</a></li>  
            <li ><a href="/comentarios-produtor"> <i class="icon-mail"></i>Comentários</a></li>   
            <li ><a href="/avaliacoes-produtor"> <i class=" icon-check"></i>Avaliações</a></li>      
          </ul>
        </nav>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Estoque</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="/dashboard-produtor">Página principal</a></li>
              <li class="breadcrumb-item active">Estoque         </li>
            </ul>
          </div>
          <section class="tables">   
            <div class="container-fluid">
              <div class="row">         
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">    
                      <a href="/adicionar-produtos" class="a-btn-edit"><button type="button" id="closeCard3" data-toggle="collapse" aria-haspopup="true" aria-expanded="false" class="btn btn-success btn-sm"><i class="fa fa-ellipsis-v"></i>Adicionar Produto</button></a>                    
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Produtos</h3>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive-xl">                       
                        <table class="table table-striped table-hover">                        
                          <thead>
                            <tr>
                              <th scope="col">Imagem</th>
                              <th scope="col">Informações do Produto</th>
                              <th scope="col">Assinaturas</th>
                              <th scope="col">Avaliação</th>
                              <th scope="col">Editar produto</th>
                              <th scope="col">Excluir produto</th>
                              <th scope="col">Criar promoção</th>
                            </tr>
                          </thead>
                          <tbody>
                            @forelse($produtos as $produto)
                            <tr>
                              <td>
                                <img src="{{url('storage/imagem-produtos/'.$produto->imagem)}}" alt="{{$produto->imagem}}" class="img-responsive" style="width: 100px">
                              </td>
                              <td>
                                <b>Nome:</b> {{$produto->nome}}</br> <b>Tipo:</b> {{$produto->tipo}}</br><b>Promoção:</b></br><b>Quantidade para frete gratis: </b>{{$produto->qtd_frete_gratis}}
                                <br><b>Descrição: </b> {{$produto->descricao}}
                              </td>
                              <td>20</td>
                              <td>
                                <div class="progress">
                                  <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                    40% 
                                  </div>
                                </div>
                              </td>
                              <td>
                                <a href="{{url("/$produto->id/editar-produto")}}" class="a-btn-edit"><button type="button" id="closeCard3" data-toggle="collapse" aria-haspopup="true" aria-expanded="false" class="btn btn-warning btn-sm"><i class="fa fa-ellipsis-v"></i>Editar</button></a>
                              </td>
                              <td>
                                <a href="/editar-produto" class="a-btn-edit"><button type="button" id="closeCard3" data-toggle="collapse" aria-haspopup="true" aria-expanded="false" class="btn btn-danger btn-sm"><i class="fa fa-ellipsis-v"></i>Excluir</button></a>
                              </td>
                              <td>
                                <a href="/criar-promocao" class="a-btn-edit"><button type="button" id="closeCard3" data-toggle="collapse" aria-haspopup="true" aria-expanded="false" class="btn btn-default btn-sm"><i class="fa fa-ellipsis-v"></i>Promoção</button></a>
                              </td>
                            </tr>
                            @empty
                            @endforelse                         
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