<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pagamento</title>
   
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
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

    <!-- Custom styles for this template -->

</head>
<body>   
    @include ('index-header')

    <section class="container space">
        <div class="row">
            <div class="col-md-7">
                <h3 class="fundo hs-pagamento">PAGAMENTO</h3>
                <div>
                    <form action="" class="form mt-4">
                        <div class="mb-3 ml-1">
                            <button type="button" class="btn btn-success col-12" data-toggle="modal" data-target="#modalCartao">Usar cartão salvo</button>
                        </div>
                            
                        <div class="form-group">
                            <label for="num"> Número do Cartão</label>
                            <input type="text" class="form-control col-6" id="num" maxlength="16" placeholder="EX: 4012001037141112">
                        </div>
                
                        <div class="form-group">
                            <label for="nome">Nome do Titular</label>
                            <input type="text" placeholder="EX: ANTÔNIO S CERQUEIRA" maxlength="30" class="form-control col-6" aria-describedby="nomeHelp" id="nome">
                            <small id="nomeHelp" class="form-text text-muted">Insira o nome como está gravado no cartão.</small>
                        </div>
                        <div class="form-group">
                            <label for="data">Data de validade</label>
                           
                                <div class="row">
                                    <select class="form-control col-2 ml-3" id="data">
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
                                    <select class="form-control col-2 ml-1" id="data">
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
                                    <label for="codigo">Código de Segurança: </label>
                                    <input type="text" maxlength="3" placeholder="EX: 111" class="form-control col-2" aria-describedby="codigoHelp" id="codigo">               
                                    <small id="codigoHelp" class="form-text text-muted">Encontra-se atrás do cartão.</small>    
                        </div>
                        <div class="form-group">
                            <label for="duramento">Duração da Assinatura (meses)</label>
                            <select class="form-control col-2" id="duramento">
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

                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="checkCartao">
                            <label class="form-check-label ml-4" for="checkCartao">Salvar cartão para futuras compras</label>
                        </div>

                        <div class="mt-1 ml-1">
                            <button class="btn btn-danger col-12">Concluir Compra</button>
                        </div>

                        
                    </form>
                </div>
            </div>
            <div class="col-md-5">
                <h3 class="fundo hs-pagamento">RESUMO DO PEDIDO</h3>

                <div class="item-cor">
                    <div class="end-pedido">
                        <h6>ENDEREÇO DE ENTREGA</h6>
                        <ul class="outside">
                            <li>Rua A, 500 - Casa</li>
                            <li>
                                <span class="negrito">Cidade: </span>Feira de Santana
                            </li>
                            <li>
                                <span class="negrito">Bairro: </span>Centro
                            </li>
                            <li>
                                <span class="negrito">CEP: </span>0000000-00
                            </li>
                        </ul>

                        <div class="linha-vertical"></div>

                        <div>
                            <p>Deseja alterar o endereço?</p>
                            <button type="button" class="btn btn-light" data-toggle="modal" data-target="#modalEnd">Alterar Enredeço</button>
                        </div>
                    </div>
                </div>

                <div class="item-pedido">
                    <table class="table">
                        <thead class="item-cor">
                            <tr>
                                <th scope="col">Item do Pedido</th>
                                <th scope="col">Qtd</th>
                                <th scope="col">Preço</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Uva</th>
                                    <td>1kg</td>
                                    <td>R$6,00</td>
                            </tr>
                            <tr>
                                <td>Maça</th>
                                    <td>5un</td>
                                    <td>R$2,00</td>

                            </tr>
                            <tr class="cor-secund">
                                <td colspan="2">FRETE</th>
                                    <td>R$2,00</td>

                            </tr>
                            <tr class="item-cor">
                                <td colspan="2">TOTAL</th>
                                    <td>R$10,00</td>

                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </section>
    
    <div class="modal fade" id="modalEnd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Endereços</h5>
                    <button type="button" class="close col-md-2" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div>
                        <button data-dismiss="modal" class="btn btn-light col-12 botaoModal">
                        <h5>Rua A, 500 - Casa</h5>
                        <p><span>Feira de Santana</span>, <span>Centro</span> - <span>00000000-00</span></p> 
                        </button>
                    </div>
                    <div>
                        <button data-dismiss="modal" class="btn btn-light col-12 botaoModal">
                        <h5>Rua A, 500 - Casa</h5>
                        <p><span>Feira de Santana</span>, <span>Centro</span> - <span>00000000-00</span></p> 
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Cartão -->
    <div class="modal fade" id="modalCartao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cartões</h5>
                    <button type="button" class="close col-md-2" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div>
                        <button data-dismiss="modal" class="btn btn-light col-12 botaoModal">
                            <h5>ANTÔNIO S CERQUEIRA - VISA</h5>
                            <p><span>4012001037141112</span>, <span>123</span> - <span>12/2022</span></p> 
                        </button>
                    </div>
                    <div>
                        <button data-dismiss="modal" class="btn btn-light col-12 botaoModal">
                         
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer id="footer">
		@include('footer')
	</footer>
    <!-- Bootstrap core JavaScript -->
    <script src="produtor/js/jquery.min.js"></script>
    <script src="produtor/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

</body>

</html>