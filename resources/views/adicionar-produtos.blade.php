<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Adicionar produtos</title>
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
              <h1 class="h4">Joao e o pé de feijão</h1>
              <p>Fazendeiro</p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Menu</span>
          <ul class="list-unstyled">
            <li ><a href="/dashboard-produtor"> <i class="icon-home"></i>Página principal </a></li>        
            <li ><a href="/gerenciar-produtos"> <i class="icon-grid"></i>Gerenciar produtos</a></li>
            <li  class="active"><a href="/adicionar-produtos"> <i class="icon-presentation"></i>Adicionar produtos</a></li>
            <li ><a href="/assinaturas-ativas-pendentes"> <i class="icon-list-1"></i>Assinaturas ativas</a></li>
            <li ><a href="/assinaturas-pausadas-pendentes"> <i class="icon-clock"></i>Assinaturas pausadas</a></li>  
            <li ><a href="/comentarios"> <i class="icon-mail"></i>Comentários</a></li>   
            <li ><a href="/avaliacoes"> <i class=" icon-check"></i>Avaliações</a></li>      
          </ul>
        </nav>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Adicionar Produto</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="/dashboardprod">Página principal</a></li>
              <li class="breadcrumb-item active">Adicionar Produto        </li>
            </ul>
          </div>
          <section class="tables">   
            <div class="container-fluid">
              <div class="row">         
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard3" data-toggle="collapse" aria-haspopup="true" aria-expanded="false" class="btn btn-danger d-flex align-items-center btn-sm"><i class="fa fa-ellipsis-v"></i>Salvar</button>
                        
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Produto</h3>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive-xl">                       
                        <table class="table table-hover">                        
                          <thead>
                            <tr>                            
                              <th scope="col">ID</th>
                              <th scope="col">Imagem</th>
                              <th scope="col">Informações</th>
                              <th scope="col">Frete</th>                              
                              <th scope="col">Tipo de produto</th>  
                              <th scope="col">Adicionar promoção</th>                                                         
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td><img src="image/tomate.jfif" class="img-responsive" alt="...">
                                  </br></br>
                                  <input id="fileInput" type="file" class="form-control-file">
                              </td>
                              <td><input type="text" class="form-control" placeholder="Nome do produto" id="produto"></br>
                                  <input type="text" class="form-control" placeholder="Quantidade do produto" id="quantidade"></br>
                                  <input type="text" class="form-control" placeholder="Valor do produto" id="valor"></br>
                                  <input type="text" class="form-control" placeholder="Promoção do produto" id="promoção"></br>
                              </td>
                              <td>                                  
                                  <div class="i-checks">
                                    <input id="checkboxCustom1" type="checkbox" name="frete" value="" class="checkbox-template">
                                    <label for="checkboxCustom1">Grátis</label>
                                  </div> 
                                  <div><input type="text" class="form-control" placeholder="Quantidade" id="quantidade"></div>   
                                  <div class="i-checks">
                                    <input id="checkboxCustom1" type="checkbox" name="frete" value="" class="checkbox-template"><label for="checkboxCustom1">Padrão</label>
                                  </div>
                                  <div class="i-checks"> 
                                    <input id="checkboxCustom1" type="checkbox" name="frete" value="" class="checkbox-template"><label for="checkboxCustom1">Por quantidade</label>
                                  </div>
                              </td>
                              <td> 
                                <input type="text" class="form-control" placeholder="Tipo" id="tipoDeProduto">  
                              </td>        
                              <td>
                                <input type="text" class="form-control" placeholder="Promoção" id="promoção">
                              </td>                          
                            </tr>
                          </tbody>
                            <div class="card-body">
                              <div class="table-responsive">                       
                                <table class="table table-striped table-hover">                        
                                  <thead>
                                    <tr>                            
                                      <th scope="col">Descrição do produto</th> </tr>
                                  </thead>
                                  <tbody>
                                    <th scope="row"></th>
                                    <td><div class="form-group" style="padding:auto">
                                          <label for="descricao">Digite a descrição do produto</label>
                                          <textarea class="form-control" rows="5" id="descricao"></textarea>
                                        </div> 
                                    </td>
                                  </tbody>
                              </div>
                            </div>
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
                  <p>Colheita Feliz&copy; 2018</p>
                </div>
                <div class="col-sm-6 text-right">
                  <p>Design by 4 Group Software Engineering</p>
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