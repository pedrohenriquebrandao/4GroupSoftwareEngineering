<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Lojas</title>

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
							<li class="active"><a href="/index-promocoes">Lojas</a></li>
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
					<div id="hot-deal" class="section">
						<!-- container -->
						<div class="container">
							<!-- row -->
							<div class="row">
								<div class="col-md-12">
									<div class="hot-deal">									
										<h2 class="text-uppercase">LOJAS DE FRUTAS</h2>
										<p>Frutas por até 50% de desconto</p>
										<a class="primary-btn cta-btn" href="/loginConsumidor">Assine agora</a>
									</div>
								</div>
							</div>
							<!-- /row -->
						</div>
						<!-- /container -->
					</div>
					<!-- ASIDE -->
					<div id="aside" class="col-md-3">
					
						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Vendidos por</h3>
							<div class="checkbox-filter">

								<div class="input-checkbox">
									<input type="checkbox" id="category-1">
									<label for="category-1">
										<span></span>
										Kilo-gramas
										<small>(120)</small>
									</label>
								</div>

								<div class="input-checkbox">
									<input type="checkbox" id="category-2">
									<label for="category-2">
										<span></span>
										Caixa
										<small>(740)</small>
									</label>
								</div>

								<div class="input-checkbox">
									<input type="checkbox" id="category-3">
									<label for="category-3">
										<span></span>
										Gramas
										<small>(1450)</small>
									</label>
								</div>

								<div class="input-checkbox">
									<input type="checkbox" id="category-4">
									<label for="category-4">
										<span></span>
										Unidade
										<small>(578)</small>
									</label>
								</div>								
							</div>
						</div>
						<!-- /aside Widget -->
						
						<!-- aside Widget -->
						
						<!-- /aside Widget -->

						<!-- aside Widget -->
						
						<!-- /aside Widget -->

						<!-- aside Widget -->
						
						<!-- /aside Widget -->
					</div>
					<!-- /ASIDE -->

					<!-- STORE -->
					<div id="store" class="col-md-9">
						<!-- store top filter -->
						<div class="store-filter clearfix">
							<div class="store-sort">
								<label>
									Filtrar por:
									<select class="input-select">
										<option value="0">Mais popular</option>
										<option value="1">Menor preço</option>
									</select>
								</label>
								
							</div>
							
						</div>
						<!-- /store top filter -->

						<!-- store products -->
						<div class="row">
							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="index/img/frutas.jpg" alt="">										
									</div>
									<div class="product-body">
									<p class="product-category">Frutas</p>
									<h3 class="product-name"><a href="#">Loja Fazenda Verde</a></h3>
									<div class="product-rating">
										
									</div>										
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn">Visitar loja</button>
									</div>
								</div>
							</div>
							<!-- /product -->

							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="index/img/frutas.jpg" alt="">										
									</div>
									<div class="product-body">
									<p class="product-category">Frutas</p>
									<h3 class="product-name"><a href="#">Loja Fazenda Verde</a></h3>
									<div class="product-rating">
										
									</div>										
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn">Visitar loja</button>
									</div>
								</div>
							</div>
							<!-- /product -->

							<div class="clearfix visible-sm visible-xs"></div>

							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="index/img/frutas.jpg" alt="">										
									</div>
									<div class="product-body">
									<p class="product-category">Frutas</p>
									<h3 class="product-name"><a href="#">Loja Fazenda Verde</a></h3>
									<div class="product-rating">
										
									</div>										
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn">Visitar loja</button>
									</div>
								</div>
							</div>
							<!-- /product -->

							<!-- /product -->
						</div>
						<!-- /store products -->

						<!-- store bottom filter -->
						<div class="store-filter clearfix">
							
							<ul class="store-pagination">
								<li class="active">1</li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
							</ul>
						</div>
						<!-- /store bottom filter -->
					</div>
					<!-- /STORE -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

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
