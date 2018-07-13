<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Colheita Feliz</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="produtor/css/fontastic.css">
        
    <!-- Custom styles for this template -->
    <link href="css/half-slider.css" rel="stylesheet">

  </head>

<body>

    <!-- Navigation -->
    
@include ('header')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" style="max-height:25rem" src="https://sportlife.com.br/wp-content/uploads/2017/09/benef%C3%ADcios-da-ma%C3%A7%C3%A3-para-o-corpo-humano-iloveimg-resized.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" style="max-height:25rem" src="https://www.greenme.com.br/images/usos-beneficios/alface-beneficios.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" style="max-height:25rem" src="https://sfagro.uol.com.br/wp-content/uploads/2016/05/1005_tomate.jpg" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
    <!-- Cards-->
    <hr>
    <div class="container">
        <div class="row text-center">
          <?php
            $produtos = collect([
              (object)[
                'id'=> '1',
                'nome'=> 'Cenoura',
                'descricao'=> 'É uma raiz da cor laranja',
                'imagem'=> 'https://tudoela.com/wp-content/uploads/2016/07/beneficios-da-cenoura-e1469051921958.jpg',
              ],
              (object)[
                'id'=> '2',
                'nome'=> 'Couve flor',
                'descricao'=> 'É uma <i>frôr</i> de <i>cumê</i>. É a <i>frôr</i>, não a <i>fôia</i>',
                'imagem'=> 'https://segredodefinicaomuscular.com/wp-content/uploads/2017/09/Receita-De-Arroz-De-Couve-Flor-Low-Carb.jpg',
              ],
              (object)[
                'id'=> '3',
                'nome'=> 'Chuchu',
                'descricao'=> 'Chuchu é você meu bem',
                'imagem'=> 'https://tudoela.com/wp-content/uploads/2016/09/conheca-os-beneficios-e-as-propriedade-do-chuchu.jpg',
              ],
              (object)[
                'id'=> '4',
                'nome'=> 'Tomate',
                'descricao'=> 'Vermelho pra dá uma cor',
                'imagem'=> 'https://www.naturalcura.com.br/wp-content/uploads/2018/02/benef%C3%ADcio-do-tomate.jpg',
              ],
            ]);

          ?>
          @each('card', $produtos, 'produto')
        </div>
    </div>
    <hr>
    <!-- Page Content >
    <section class="py-5">
      <div class="container">
        <h1>Half Slider by Start Bootstrap</h1>
        <p>The background images for the slider are set directly in the HTML using inline CSS. The rest of the styles for this template are contained within the
          <code>half-slider.css</code>
          file.</p>
      </div>
    </section>
    <!-- -->

    <!-- Footer -->
    @include('footer')
    
    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>