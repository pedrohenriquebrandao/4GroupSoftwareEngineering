<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Carrinho</title>

  <!-- Bootstrap core CSS >
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>


  <!-- Custom styles for this template -->
  <link href="css/half-slider.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->

  @include ('header')

  <section class="container space">
    <div class="row">
      <div class="col-md-7">
        <h2>Carrinho</h1>
      </div>
      <div class="col-md-5 direita">
        <a href="/">Continuar Comprando</a>
        <button class="btn btn-success">Concluir</button>
      </div>
    </div>

    <div class="space">
      <div>
        <table class="table table-bordered " width="100%">
          <thead>
            <tr>
              <th scope="col" colspan=2>
                <h4>Assinaturas</h4>
              </th>
              <th scope="col">
                <h4>Preço</h4>
              </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td scope="row" colspan="2">
                <div class="produto">
                  <div class="posicao" height: 100px;>
                    <img src="{!! asset('image/logocadastrar.png') !!}" height="50" alt="">
                  </div>
                  <div class="posicao">
                    <p class="titulo-produto">Produto X</p>
                    <p class="descricao-produto">Vendido e Entregue por: XXX</p>
                    <p class="descricao-produto">Quantidade: XXX</p>
                    <a href="http://">Remover</a>
                  </div>
                </div>
              </td>
              <td>XXX</td>
            </tr>
            <tr>
              <td scope="row">
                <div>
                <div class="posicao">
                  <label class= for="">Digite o cep para calcular o frete:</label>
                </div>
                <div class="posicao">
                  <input type="text" class="form-control col-md-12" id="frete" placeholder="Digite o frete">
                </div>
                <div class="posicao">
                  <button class="btn btn-dark">Calcular Frete</button>
                </div>  
                
                  
                  
                </div>
              </td>
              <td>
                <h5 class="direita">FRETE</h5>
              </td>
              <td>XXX</td>
            </tr>
            <tr>
              <th scope="row" colspan="2">
                <h5 class="direita">TOTAL</h5>
              </th>
              <td>XXX</td>
            </tr>
          </tbody>
        </table>

      </div>
    </div>
  </section>

  <!-- Footer -->
  <!-- @include('footer')
    
    <!-- Bootstrap core JavaScript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>