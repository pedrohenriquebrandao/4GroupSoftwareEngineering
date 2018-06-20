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
      <div class="col-md-5">
        <a href="/">Continuar Comprando</a>
        <button class="btn btn-success">Concluir</button>
      </div>

      <div col-md-12>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">
                <h4>Assinaturas</h4>
              </th>
              <th scope="col"><h4>Preço</h4></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
            </tr>
            <tr>
              <th scope="row" colspan="2">Larry the Bird</th>
              <td>Larry the Bird</td>
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