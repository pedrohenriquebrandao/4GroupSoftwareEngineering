<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Produto</title>

 		<!-- Google font -->
 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

 		<!-- Bootstrap -->
 		<link type="text/css" rel="stylesheet" href="index/css/bootstrap.min.css"/>

 		<!-- Slick -->
 		<link type="text/css" rel="stylesheet" href="index/css/slick.css"/>
 		<link type="text/css" rel="stylesheet" href="index/css/slick-theme.css"/>

 		<!-- nouislider -->
 		<link type="text/css" rel="stylesheet" href="index/css/nouislider.min.css"/>

 		<!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="index/css/font-awesome.min.css">

 		<!-- Custom stlylesheet -->
 		<link type="text/css" rel="stylesheet" href="index/css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
		<!-- HEADER -->
		<header>
			@include('index-header')
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
			@include('index-nav')
		<!-- /NAVIGATION -->

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb-tree">
							<li><a href="/">Página inicial</a></li>
							<li class="activer"><a href="/visao-produto">Produto</a></li>							
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- Product main img -->
					<div class="col-md-5 col-md-push-2">
						<div id="product-main-img">
							<div class="product-preview">
								<img src="index/img/pera.jpg" alt="">
							</div>

							<div class="product-preview">
								<img src="index/img/pera2.jpg" alt="">
							</div>

							<div class="product-preview">
								<img src="index/img/pera3.jpg" alt="">
							</div>
							
						</div>
					</div>
					<!-- /Product main img -->

					<!-- Product thumb imgs -->
					<div class="col-md-2  col-md-pull-5">
						<div id="product-imgs">
							<div class="product-preview">
								<img src="index/img/pera.jpg" alt="">
							</div>

							<div class="product-preview">
								<img src="index/img/pera2.jpg" alt="">
							</div>

							<div class="product-preview">
								<img src="index/img/pera3.jpg" alt="">
							</div>
							
						</div>
					</div>
					<!-- /Product thumb imgs -->

					<!-- Product details -->
					<div class="col-md-5">
						<div class="product-details">
							<h2 class="product-name">Pêra</h2>
							<h2 class="product-name">VENDIDO POR: PRODUTOR JOÃOZIN</h2>
							<div>
								<div class="product-rating">
									<b>Gostei: </b>10 <br> <img src="image/like.png" class="img-responsive" width="5%" alt="...">        
                                  	<b>| Não gostei: </b>1  <br> <img src="image/unlike.png" class="img-responsive" width="5%" alt="...">      
								</div>
								<a class="review-link" href="/visao-produto">Quantidade de avaliações: 10 | Adicionar a sua</a>
							</div>
							<div>
								<h3 class="product-price">R$8.00 <del class="product-old-price">$9.00</del></h3>
								<span class="product-available">Em estoque</span>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

							<ul class="product-links">
								<li>Categoria:</li>
								<li><a href="#">Fruta</a></li>							
							</ul>	

							<ul class="product-links">
								<li>Tipo de frete:</li>
								<li><a href="#">Normal</a></li>							
							</ul>
							</br>
							<div class="add-to-cart">
								<div class="qty-label">
									Frete:
									<div class="input-number">
										<input type="number">										
									</div>
								</div>
								<button class="add-to-cart-btn"></i> Calcular frete</button>
							</div>
							<div class="add-to-cart">
								<div class="qty-label">
									Qtd:   
									<div class="input-number">
										<input type="number">										
									</div>
								</div>
								<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Adicionar ao carrinho</button>
							</div>									
						</div>
					</div>
					<!-- /Product details -->

					<!-- Product tab -->
					<div class="col-md-12">
						<div id="product-tab">
							<!-- product tab nav -->
							<ul class="tab-nav">
								<li class="active"><a data-toggle="tab" href="#tab1">Descrição</a></li>								
								
							</ul>
							<!-- /product tab nav -->

							<!-- product tab content -->
							<div class="tab-content">
								<!-- tab1  -->
								<div id="tab1" class="tab-pane fade in active">
									<div class="row">
										<div class="col-md-12">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
										</div>
									</div>
								</div>
								<!-- /tab1  -->							

								
							</div>
							<!-- /product tab content  -->
						</div>
					</div>
					<!-- /product tab -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- Section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-12">
						<div class="section-title text-center">
							<h3 class="title">Produtos parecidos</h3>
						</div>
					</div>

					<!-- product -->
					<div class="col-md-3 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="index/img/batata.jpg" alt="">
								<div class="product-label">
									<span class="sale">-30%</span>
									<span class="new">NOVO</span>
								</div>
							</div>
							<div class="product-body">
							<p class="product-category">Tubérculo</p>
							<h3 class="product-name"><a href="#">Assinatura de Batata da loja Fazenda Verde</a></h3>
							<h4 class="product-price">R$6.00 <del class="product-old-price">R$9.00</del></h4>
							<h3 class="product-name"><a href="#">assinatura por kg</a></h3>
							<div class="product-rating">
								
							</div>										
							</div>
							<div class="add-to-cart">
								<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Adicionar ao carrinho</button>
							</div>
						</div>
					</div>
					<!-- /product -->

					<!-- product -->
					<div class="col-md-3 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="index/img/batata.jpg" alt="">
								<div class="product-label">
									<span class="sale">-30%</span>
									<span class="new">NOVO</span>
								</div>
							</div>
							<div class="product-body">
							<p class="product-category">Tubérculo</p>
							<h3 class="product-name"><a href="#">Assinatura de Batata da loja Fazenda Verde</a></h3>
							<h4 class="product-price">R$6.00 <del class="product-old-price">R$9.00</del></h4>
							<h3 class="product-name"><a href="#">assinatura por kg</a></h3>
							<div class="product-rating">
								
							</div>										
							</div>
							<div class="add-to-cart">
								<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Adicionar ao carrinho</button>
							</div>
						</div>
					</div>
					<!-- /product -->

					<div class="clearfix visible-sm visible-xs"></div>

					<!-- product -->
					<div class="col-md-3 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="index/img/batata.jpg" alt="">
								<div class="product-label">
									<span class="sale">-30%</span>
									<span class="new">NOVO</span>
								</div>
							</div>
							<div class="product-body">
							<p class="product-category">Tubérculo</p>
							<h3 class="product-name"><a href="#">Assinatura de Batata da loja Fazenda Verde</a></h3>
							<h4 class="product-price">R$6.00 <del class="product-old-price">R$9.00</del></h4>
							<h3 class="product-name"><a href="#">assinatura por kg</a></h3>
							<div class="product-rating">
								
							</div>										
							</div>
							<div class="add-to-cart">
								<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Adicionar ao carrinho</button>
							</div>
						</div>
					</div>
					<!-- /product -->

					<!-- product -->
					<div class="col-md-3 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="index/img/batata.jpg" alt="">
								<div class="product-label">
									<span class="sale">-30%</span>
									<span class="new">NOVO</span>
								</div>
							</div>
							<div class="product-body">
							<p class="product-category">Tubérculo</p>
							<h3 class="product-name"><a href="#">Assinatura de Batata da loja Fazenda Verde</a></h3>
							<h4 class="product-price">R$6.00 <del class="product-old-price">R$9.00</del></h4>
							<h3 class="product-name"><a href="#">assinatura por kg</a></h3>
							<div class="product-rating">
								
							</div>										
							</div>
							<div class="add-to-cart">
								<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Adicionar ao carrinho</button>
							</div>
						</div>
					</div>
					<!-- /product -->

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /Section -->

		<!-- NEWSLETTER -->
		
		<!-- /NEWSLETTER -->

		<!-- FOOTER -->
		<footer id="footer">
		@include('footer')
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="index/js/jquery.min.js"></script>
		<script src="index/js/bootstrap.min.js"></script>
		<script src="index/js/slick.min.js"></script>
		<script src="index/js/nouislider.min.js"></script>
		<script src="index/js/jquery.zoom.min.js"></script>
		<script src="index/js/main.js"></script>

	</body>
</html>
