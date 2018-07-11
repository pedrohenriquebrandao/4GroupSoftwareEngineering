<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Colheita Feliz</title>

    <!-- Bootstrap core CSS >
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    
    <!-- Custom styles for this template -->
    <link href="css/half-slider.css" rel="stylesheet">

  </head>

<body>    
    @include ('header')

    <div class="container" style="padding: 10px 0">
        <div class="row">
          <div class="col-md-4">
              <img src="https://tudoela.com/wp-content/uploads/2016/07/beneficios-da-cenoura-e1469051921958.jpg" 
              class="rounded float-left img-fluid img-thumbnail" alt="...">
          </div>
          <div class="col-md-8">
              <form>
                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-4 col-form-label">NOME</label>
                  <div class="col-sm-8">
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Cenoura">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-4 col-form-label">VENDEDOR</label>
                  <div class="col-sm-8">
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Fazenda Suprennio">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-4 col-form-label">DESCRIÇÃO</label>
                  <div class="col-sm-8">
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="A melhor cenoura da cidade inteirinha">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword" class="col-sm-4 col-form-label">FRETE</label>
                  <div class="col-sm-8">
                      <select id="inputState" class="form-control" aria-placeholder="Escolher...">
                        <option>Pago</option>
                        <option>Grátis</option>
                        <option>Retirar na loja</option>
                      </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword" class="col-sm-4 col-form-label">TIPO DE ASSINATURA</label>
                  <div class="col-sm-8">
                      <select id="inputState" class="form-control" aria-placeholder="Escolher...">
                        <option>1 mês</option>
                        <option>2 meses</option>
                        <option>6 meses</option>
                        <option>12 meses</option>
                      </select>
                  </div>
                </div>
                <div class="col-sm-12">
                  <a href="/carrinho" class="btn btn-primary">+ Adicionar ao carrinho</a>
                </div>
              </form>
          </div>
        </div>
    </div>



    <!-- Footer -->
    @include('footer')
    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>