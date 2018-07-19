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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


  <!-- Custom styles for this template -->
  <link href="produtor/css/half-slider.css" rel="stylesheet">

</head>

<body>
  @include ('header')

  <div class="container mt-4 mb-4">
    <div class="row">
      <div class="col-md-5">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="https://reservaprodutosorganicos.com.br/wp-content/uploads/2017/05/cenoura.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="https://www.infoescola.com/wp-content/uploads/2010/08/cenoura_250834906.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="https://www.nossopomar.com.br/wp-content/uploads/2017/12/nosso-pomar-cenoura-vermelha-sacolao-virtual-bh-hortifruti.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="col-md-7  ">
        <div>
          <h2>Cenoura - 1kg</h2>
        </div>
        <div>
          <h5 class="text-muted">Vendido por: João Pé de Feijão</h5>
        </div>
        <div class="mb-4">
          <h4 class="text-success">R$ 4,00</h4>
        </div>
        <div>
          <h6>Descrição:</h6>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo facere quidem nam maxime cumque temporibus quas
            assumenda dolor id porro ut magnam, iste a quae deserunt explicabo quis provident. Blanditiis.</p>
        </div>

        <div class="border-top">
          <form class="mt-4 form-inline">
            <div class="form-group mb-2">
              <label for="cep" class="font-weight-bold">Consultar Frete</label>
            </div>
            <div class="form-group mx-sm-3 mb-2">
              <input type="text" class="form-control" id="cep" placeholder="44444-444">
            </div>
            <button type="button" class="btn btn-dark mb-2">Consultar</button>
          </form>
        </div>

        <div class="row">
          <button class="col-md-5 btn btn-primary btn-lg ml-1 mr-4 mb-1">Adicionar ao carrinho</button>
          <button class="col-md-5 btn btn-success btn-lg ml-1 mr-4">Comprar</button>

        </div>
      </div>
    </div>
  </div>

  <div class="border-top">
    <div class="mt-2">
      <h1 class="text-center">Já Comprou? Avalie</h1>
    </div>

    <div class="text-center">
      <?php
		    if(isset($_SESSION['msg'])){
			    echo $_SESSION['msg']."<br><br>";
			    unset($_SESSION['msg']);
		    }
		  ?>
      <form method="POST" action="processa.php" enctype="multipart/form-data">
        <div class="estrelas">
          <input type="radio" id="vazio" name="estrela" value="" checked>

          <label for="estrela_um">
            <i class="fa"></i>
          </label>
          <input type="radio" id="estrela_um" name="estrela" value="1">

          <label for="estrela_dois">
            <i class="fa"></i>
          </label>
          <input type="radio" id="estrela_dois" name="estrela" value="2">

          <label for="estrela_tres">
            <i class="fa"></i>
          </label>
          <input type="radio" id="estrela_tres" name="estrela" value="3">

          <label for="estrela_quatro">
            <i class="fa"></i>
          </label>
          <input type="radio" id="estrela_quatro" name="estrela" value="4">

          <label for="estrela_cinco">
            <i class="fa"></i>
          </label>
          <input type="radio" id="estrela_cinco" name="estrela" value="5">
          <br>
          <br>

          <input type="submit" class="btn btn-secondary" value="Cadastrar">

        </div>
      </form>
    </div>

  </div>



  <!-- Footer -->
  @include('footer')
  <!-- Bootstrap core JavaScript -->
  <script src="produtor/jquery/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>