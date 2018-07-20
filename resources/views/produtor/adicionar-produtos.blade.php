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
            <li ><a href="/gerenciar-produtos"> <i class="icon-grid"></i>Gerenciar produtos</a></li>
            <li  class="active"><a href="/adicionar-produtos"> <i class="icon-presentation"></i>Adicionar produtos</a></li>
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
            <form method="POST" action="{{ route('produtor.adicionar') }}" enctype="multipart/form-data">
            {{ csrf_field() }}  
              <div class="container-fluid">
                <div class="row">         
                  <div class="col-lg-12">
                    <div class="card">
                      <div class="card-close">      
                        <input class="btn btn-success btn-sm" type="submit" name="adicionar" value="Salvar">
                      </div>
                      <div class="card-header d-flex align-items-center">
                        <h3 class="h4">Produto</h3>
                      </div>
                      @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                       @endif
                      <div class="card-body">
                        <div class="table-responsive-xl">                       
                          <table class="table table-hover">                        
                            <thead>
                              <tr>
                                <th scope="col">Imagem</th>
                                <th scope="col">Informações</th>
                                <th scope="col">Tipo de Frete</th>                              
                                <th scope="col">Tipo de produto</th>                                                                                      
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>
                                  <img src="image/addImagem.jpg" class="img-responsive" style="width:40%" alt="...">
                                  </br></br>
                                  <input type="file" class="form-control-file" name="imagem" value="{{old('imagem')}}" accept="image/*" />
                                  @if($errors->has('imagem'))
                                    <span class="label-input100 help-block" style="color: red">
                                      {{$errors->first('imagem')}}
                                    </span>
                                  @endif
                                </td>
                                <td>
                                  <input type="text" class="form-control" placeholder="Nome do produto" name="nome" value="{{old('nome')}}"></br>
                                  @if($errors->has('nome'))
                                    <span class="label-input100 help-block" style="color: red">
                                      {{$errors->first('nome')}}
                                    </span>
                                  @endif
                                  <input type="number" class="form-control" placeholder="Valor do produto" name="valor" value="{{old('valor')}}"></br>
                                  @if($errors->has('valor'))
                                    <span class="label-input100 help-block" style="color: red">
                                      {{$errors->first('valor')}}
                                    </span>
                                  @endif
                                  <input type="number" class="form-control" placeholder="Promoção do produto" name="promocao" value="{{old('promocao')}}"></br>
                                  @if($errors->has('promocao'))
                                    <span class="label-input100 help-block" style="color: red">
                                      {{$errors->first('promocao')}}
                                    </span>
                                  @endif
                                </td>
                                <td>
                                  <label for="checkboxCustom1">Quantidade para frete grátis</label>
                                  <input type="number" class="form-control" placeholder="" name="fretegratis" value="{{old('fretegratis')}}"></br>
                                  @if($errors->has('fretegratis'))
                                    <span class="label-input100 help-block" style="color: red">
                                      {{$errors->first('fretegratis')}}
                                    </span>
                                  @endif                             
                                    <div class="i-checks">
                                      <input id="checkboxCustom1" type="checkbox" name="frete" value="" class="checkbox-template">
                                      <label for="checkboxCustom1">Grátis</label>
                                    </div> 
                                    <div><input type="text" class="form-control" placeholder="Quantidade" id="quantidade"></div> </br>  
                                    <div class="i-checks">
                                      <input id="checkboxCustom1" type="checkbox" name="frete" value="" class="checkbox-template"><label for="checkboxCustom1">Padrão</label>
                                    </div>
                                    <div class="i-checks"> 
                                      <input id="checkboxCustom1" type="checkbox" name="frete" value="" class="checkbox-template"><label for="checkboxCustom1">Por quantidade</label>
                                    </div>
                                </td>
                                <td>		
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" name="tipo" value="fruta" checked>
                                    <label class="form-check-label" for="radioUrnaba">Fruta</label>
                                  </div>
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" name="tipo" value="legume" checked>
                                    <label class="form-check-label" for="radioRural">Legume</label>  
                                  </div>
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" name="tipo" value="verdura" checked>
                                    <label class="form-check-label" for="radioRural">Verdura</label>  
                                  </div>
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" name="tipo" value="folha" checked>
                                    <label class="form-check-label" for="radioRural">Folha</label>  
                                  </div>
                                  <div class="form-check">
                                    <input type="radio" class="form-check-input" name="tipo" value="graos" checked>
                                    <label class="form-check-label" for="radioRural">Grãos</label>  
                                  </div> 
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
                                            @if($errors->has('descricao'))
                                              <span class="label-input100 help-block" style="color: red">
                                                {{$errors->first('descricao')}}
                                              </span>
                                            @endif
                                            <textarea class="form-control" rows="5" name="descricao" value="{{old('descricao')}}"></textarea>
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
            </form>
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