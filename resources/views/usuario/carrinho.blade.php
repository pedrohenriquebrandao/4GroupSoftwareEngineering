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
  <link href="produtor/css/half-slider.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->

  @include ('index-header')

  <section class="container space">
    <div class="row space">
      <div class="col-md-8">
        <h2 class="hs">Carrinho</h1>
      </div>
    </div>

    <div class="space row">
      <div class="col-md-12">
        <table class="table table-bordered " width="100%">
          <thead class="thead-light">
            <tr>
              <th scope="col" colspan=2>
                <h5 class="hs">Assinaturas</h5>
              </th>
              <th scope="col">
                <h5 class="hs">Preço</h5>
              </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td scope="row" colspan="2">
            @forelse($produtos as $produto)
                <div class="row">
                  <div class="posicao col-md-3" height: 100px;>
                    <img src="{{url('storage/imagem-produtos/'.$produto->imagem)}}" alt="{{$produto->imagem}}" width="125px">
                  </div>
                  <div class="posicao col-md-9">
                    <p class="titulo-produto">{{$produto->nome}}</p>
                    <ul class="outside">
                        @forelse($lojas as $loja)
													@if($produto->produtor_id == $loja->id)
                            <li>Vendido e Entregue por: {{$loja->nome}}</li>
													@break
													@endif
												@empty
                          <li>Vendido e Entregue por: XXX</li>
												@endforelse
                      <li>Tipo: {{$produto->tipo}}</li>
                    </ul>
                    <a href="/"><button class="btn btn-danger">Remover </button></a>
                  </div>
                </div>
                <hr>
              @empty
              @endforelse
              </td>
              <td><?php echo rand(30, 100) ?></td>
            </tr>
            <tr>
              <td scope="row">
                <div class="row">
                  <div class="posicao col-md-4">
                    <label class=f or="">Digite o cep para calcular o frete:</label>
                  </div>
                  <div class="posicao col-md-4">
                    <input type="text" class="form-control" id="frete" placeholder="Digite o frete">
                  </div>
                  <div class="posicao col-md-4">
                    <button class="btn btn-dark">Calcular Frete</button>
                  </div>
                </div>
              </td>
              <td>
                <h6 class="direita">FRETE</h6>
              </td>
              <td>XXX</td>
            </tr>
            <tr>
              <th scope="row" colspan="2">
                <h6 class="direita">TOTAL</h6>
              </th>
              <td>XXX</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

        <div class="row space">
      <div class="col-md-8">
      <a href="/"><button class="btn btn-danger">Limpar Carrinho</button></a>
      </div>
      <div class="col-md-4 direita">
        <a href="/"><button class="btn btn-danger">Continuar Comprando</button> </a>
        <a href="/pagamento"><button class="btn btn-success">Concluir</button></a>
      </div>
    </div>
  </section>

  <footer id="footer">
		@include('footer')
	</footer>

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>