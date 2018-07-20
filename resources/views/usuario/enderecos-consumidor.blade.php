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
  
  <link rel="stylesheet" href="produtor\fonts\iconic\css\material-design-iconic-font.css.min">
  <!-- Tweaks for older IEs-->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
        
</head>

<body>
  <div class="page">
    <!-- Main Navbar-->
    <!----><header class="header">
      @include('navbarprodutor')
    </header>
    <!---->
    
    <div class="page-content d-flex align-items-stretch">
      <!-- Side Navbar -->
      <nav class="side-navbar">
        <!-- Sidebar Header-->
        @include('consumidor-sidebar')
        <!-- Sidebar Navidation Menus-->
        <span class="heading">Menu</span>
        <ul class="list-unstyled">
          <li>
            <a href="/dashboard-consumidor">
              <i class="icon-home"></i>Página principal </a>
          </li>
          <li>
            <a href="/minhas-assinaturas">
              <i class="icon-list"></i>Minhas Assinaturas</a>
          </li>
          <li>
            <a href="/dados-consumidor">
              <i class="icon-user"></i>Meus Dados</a>
          </li>
          <li class="active">
            <a href="/enderecos-consumidor">
              <i class="icon-form"></i>Meus Endereços</a>
          </li>
          <li>
            <a href="/cartoes-consumidor">
              <i class="icon-bars"></i>Meus Cartões</a>
          </li>
          <li>
            <a href="/mensagens-consumidor">
              <i class="icon-mail"></i>Mensagens</a>
          </li>
        </ul>
      </nav>
      <div class="content-inner">

        <div class="container mt-5">
          <div class="row ml-5 mr-4">
            <div class="col-md-5 ml-1 mr-5 mb-5 end-pedido meu-end">
              <h2>Casa</h2>
              <ul class="outside sizeFont">
                <li>Rua A, 500 - Casa</li>
                <li>
                  <span class="negrito">Cidade:</span> Feira de Santana
                </li>
                <li>
                  <span class="negrito">Bairro:</span> Centro
                </li>
                <li>
                  <span class="negrito">CEP:</span> 0000000-00
                </li>
              </ul>
              <div class="row">
                <button class="btn btn-primary col-md-4 ml-2 mr-2 btnEnd">Alterar</button>
                <button class="btn btn-danger col-md-4 btnEnd">Excluir</button>
              </div>
            </div>

            <div class="col-md-5 ml-1 mr-5 mb-5 end-pedido meu-end">
              <h2>Trabalho</h2>
              <ul class="outside sizeFont">
                <li>Rua A, 500 - Casa</li>
                <li>
                  <span class="negrito">Cidade:</span> Feira de Santana
                </li>
                <li>
                  <span class="negrito">Bairro:</span> Centro
                </li>
                <li>
                  <span class="negrito">CEP:</span> 0000000-00
                </li>
              </ul>
              <div class="row">
                <button class="btn btn-primary col-md-4 ml-2 mr-2 btnEnd">Alterar</button>
                <button class="btn btn-danger col-md-4 btnEnd">Excluir</button>
              </div>
            </div>

            <button class="btn btn-primary col-md-5" data-toggle="modal" data-target="#modalEnd">Adicionar Endereço</button>
            <!--<div class="col-md-5 ml-1 mr-5 mb-5 pl-0 pr-0 meu-end">
              <button class="btn btn-light btn-add"> Adicionar</button>
            </div> -->

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

  <!-- Modal Endereço -->
  <div class="modal fade" id="modalEnd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Adicionar Endereço</h5>
                    <button type="button" class="close col-md-2" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="">
                      <div class="form-group">
                        <label for="rua">Rua/Logradouro:</label>
                        <input type="text" class="form-control" id="rua" placeholder="Digite sua rua">
                      </div>
                      <div class="form-group">
                        <label for="bairro">Bairro:</label>
                        <input type="text" class="form-control" id="bairro" placeholder="Digite seu bairro">
                      </div>
                      <div class="row">
                        <div class="form-group col">
                          <label for="cep">Cep:</label>
                          <input type="text" class="form-control" id="cep" placeholder="Digite o CEP">
                        </div>
                        <div class="form-group col">
                          <label for="num">Número:</label>
                          <input type="text" class="form-control" id="num" placeholder="Digite o número">
                        </div>
                      </div>
                      <div class="form-group">
                          <label for="cidade">Cidade:</label>
                          <input type="text" class="form-control" id="cidade" placeholder="Digite a cidade">
                      </div>
                      <div class="form-group">
                          <label for="estado">Estado:</label>
                          <input type="text" class="form-control" id="estado" placeholder="Digite o Estado">
                        </div>

                        <div class="row">
                        <div class="form-group col">
                          <label for="comp">Complemento:</label>
                          <input type="text" class="form-control" id="comp" placeholder="Digite o complemento">
                        </div>
                        <div class="form-group col">
                          <label for="zona">Zona:</label>
                          <input type="text" class="form-control" id="zona" placeholder="Digite a zona">
                        </div>
                      </div>
                    </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary btn-add" data-dismiss="modal">Adicionar</button>
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