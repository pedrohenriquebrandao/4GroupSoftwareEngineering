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
                <h2 class="bg-primary">PAGAMENTO</h2>
                <div>
                    <form action="" class="form mt-4">
                        <div class="form-group">
                            <label for="num">Número do Cartão</label>
                            <input type="text" class="form-control col-md-4" id="num">
                        </div>
                        <div class="form-group">
                            <label for="nome">Nome do Titular</label>
                            <input type="text" class="form-control col-md-6" aria-describedby="nomeHelp" id="nome">
                            <small id="nomeHelp" class="form-text text-muted">Insira o nome como está gravado no cartão.</small>
                        </div>
                        <div class="form-group">
                            <label for="data">Data de validade</label>
                            <div class="row">
                            <select class="form-control col-md-2 ml-3" id="data">
                                <option>Mês</option>
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                                <option>04</option>
                                <option>05</option>
                                <option>06</option>
                                <option>07</option>
                                <option>08</option>
                                <option>09</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                            </select>
                            <select class="form-control col-md-2 ml-1" id="data">
                                <option>Ano</option>
                                <option>18</option>
                                <option>19</option>
                                <option>20</option>
                                <option>21</option>
                                <option>22</option>
                                <option>23</option>
                                <option>24</option>
                                <option>25</option>
                                <option>26</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="codigo">Código de Segurança</label>
                            <input type="text" class="form-control col-md-1" aria-describedby="codigoHelp" id="codigo">
                            <small id="codigoHelp" class="form-text text-muted">Encontra-se atrás do cartão.</small>
                        </div>
                        <div class="form-group">
                            <label for="duramento">Duração da Assinatura (meses)</label>
                            <select class="form-control col-md-1" id="duramento">
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                                <option>04</option>
                                <option>05</option>
                                <option>06</option>
                                <option>07</option>
                                <option>08</option>
                                <option>09</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-5">
                <h2 class="bg-dark">RESUMO DO PEDIDO</h2>
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