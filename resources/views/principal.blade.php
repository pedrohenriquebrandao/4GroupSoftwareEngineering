<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Colheita Feliz</title>

		<!-- Google font -->
		<link href="/https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="/text/css" rel="stylesheet" href="index/css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="/text/css" rel="stylesheet" href="index/css/slick.css"/>
		<link type="/text/css" rel="stylesheet" href="index/css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="/text/css" rel="stylesheet" href="index/css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="/index/css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="/stylesheet" href="index/css/style.css"/>

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
			<!-- MAIN HEADER -->
			@include('index-header')
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		@include('index-nav')
		<!-- /NAVIGATION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="index/img/verduras.png" alt="">
							</div>
							<div class="shop-body">
								<a href="/index-lojas" class="cta-btn"><h3>Lojas de<br>Verduras</h3></a>
								<a href="/index-lojas" class="cta-btn">Assine agora <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="index/img/frutas.jpg" alt="">
							</div>
							<div class="shop-body">
								<a href="/index-lojas" class="cta-btn"><h3>Lojas de<br>Frutas</h3></a>
								<a href="/index-lojas" class="cta-btn">Assine agora<i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="index/img/tuberculos.jpg" alt="">
							</div>
							<div class="shop-body">
								<a href="/index-lojas" class="cta-btn"><h3>Lojas de<br>Tubérculos</h3></a>
								<a href="/index-lojas" class="cta-btn">Assine agora<i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- PROMOÇOES -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">PROMOÇÕES</h3>
							<div class="section-nav">
								<!--<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab1">Laptops</a></li>
									<li><a data-toggle="tab" href="#tab1">Smartphones</a></li>
									<li><a data-toggle="tab" href="#tab1">Cameras</a></li>
									<li><a data-toggle="tab" href="#tab1">Accessories</a></li>
								</ul> -->
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- PRODUTOS -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="index/img/batata.jpg" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
													<span class="new">NOVO</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Fruta</p>
												<h3 class="product-name"><a href="#">Assinatura de Batata da loja Fazenda Verde</a></h3>
												<h4 class="product-price">R$6.00 <del class="product-old-price">R$9.00</del></h4>
												<h3 class="product-name"><a href="#">assinatura por kg</a></h3>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<!--<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>-->
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Adicionar ao carrinho</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="index/img/coentro.png" alt="">
												<div class="product-label">
													<span class="sale">-50%</span>
													<span class="new">NOVO</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Fruta</p>
												<h3 class="product-name"><a href="#">Assinatura de Coentro do produtor Joao Silva</a></h3>
												<h4 class="product-price">R$5.00 <del class="product-old-price">R$10.00</del></h4>
												<h3 class="product-name"><a href="#">assinatura por kg</a></h3>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<!--<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>-->
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Adicionar ao carrinho</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="image/maca.jpg" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
													<span class="new">Nova</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Fruta</p>
												<h3 class="product-name"><a href="#">Assinatura de Maça da loja Hortifrut</a></h3>
												<h4 class="product-price">R$7.00 <del class="product-old-price">R$8.00</del></h4>
												<h3 class="product-name"><a href="#">assinatura por kg</a></h3>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<!--<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>-->
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Adicionar ao carrinho</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="index/img/coentro.png" alt="">
												<div class="product-label">
													<span class="sale">-50%</span>
													<span class="new">NOVO</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Fruta</p>
												<h3 class="product-name"><a href="#">Assinatura de Coentro do produtor Joao Silva</a></h3>
												<h4 class="product-price">R$5.00 <del class="product-old-price">R$10.00</del></h4>
												<h3 class="product-name"><a href="#">assinatura por kg</a></h3>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<!--<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>-->
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Adicionar ao carrinho</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										
										<!-- /product -->
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SUPER OFERTAS -->
		<div id="hot-deal" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="hot-deal">
							
							<h2 class="text-uppercase">CONFIRA OS MELHORES PRODUTOS DO NOSSO SITE LOGO ABAIXO </h2>
							<p>Frutas por até 50% de desconto</p>
							<a class="primary-btn cta-btn" href="/loginConsumidor">Assine agora</a>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /HOT DEAL SECTION -->

		<!-- MAIS VENDIDOS -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">MAIS VENDIDOS</h3>
							<div class="section-nav">
								<!--<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab2">Laptops</a></li>
									<li><a data-toggle="tab" href="#tab2">Smartphones</a></li>
									<li><a data-toggle="tab" href="#tab2">Cameras</a></li>
									<li><a data-toggle="tab" href="#tab2">Accessories</a></li>
								</ul> -->
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="index/img/coentro.png" alt="">
												<div class="product-label">
													<span class="sale">-50%</span>
													<span class="new">NOVO</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Fruta</p>
												<h3 class="product-name"><a href="#">Assinatura de Coentro do produtor Joao Silva</a></h3>
												<h4 class="product-price">R$5.00 <del class="product-old-price">R$10.00</del></h4>
												<h3 class="product-name"><a href="#">assinatura por kg</a></h3>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<!--<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>-->
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Adicionar ao carrinho</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="index/img/coentro.png" alt="">
												<div class="product-label">
													<span class="sale">-50%</span>
													<span class="new">NOVO</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Fruta</p>
												<h3 class="product-name"><a href="#">Assinatura de Coentro do produtor Joao Silva</a></h3>
												<h4 class="product-price">R$5.00 <del class="product-old-price">R$10.00</del></h4>
												<h3 class="product-name"><a href="#">assinatura por kg</a></h3>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<!--<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>-->
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Adicionar ao carrinho</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="index/img/coentro.png" alt="">
												<div class="product-label">
													<span class="sale">-50%</span>
													<span class="new">NOVO</span>
												</div>
											</div>
											<div class="product-body">
											  <p class="product-category">Fruta</p>
												<h3 class="product-name"><a href="#">Assinatura de Coentro do produtor Joao Silva</a></h3>
												<h4 class="product-price">R$5.00 <del class="product-old-price">R$10.00</del></h4>
												<h3 class="product-name"><a href="#">assinatura por kg</a></h3>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<!--<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>-->
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Adicionar ao carrinho</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="index/img/coentro.png" alt="">
												<div class="product-label">
													<span class="sale">-50%</span>
													<span class="new">NOVO</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Fruta</p>
												<h3 class="product-name"><a href="#">Assinatura de Coentro do produtor Joao Silva</a></h3>
												<h4 class="product-price">R$5.00 <del class="product-old-price">R$10.00</del></h4>
												<h3 class="product-name"><a href="#">assinatura por kg</a></h3>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<!--<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>-->
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Adicionar ao carrinho</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="index/img/coentro.png" alt="">
												<div class="product-label">
													<span class="sale">-50%</span>
													<span class="new">NOVO</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Fruta</p>
												<h3 class="product-name"><a href="#">Assinatura de Coentro do produtor Joao Silva</a></h3>
												<h4 class="product-price">R$5.00 <del class="product-old-price">R$10.00</del></h4>
												<h3 class="product-name"><a href="#">assinatura por kg</a></h3>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<!--<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>-->
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Adicionar ao carrinho</button>
											</div>
										</div>
										<!-- /product -->
									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- MAIS VENDIDOS SEGUNDA PARTE -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">FRUTAS</h4>
							<div class="section-nav">
								<div id="slick-nav-3" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-3">
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="index/img/pera.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">FRUTA</p>
										<p class="nome-loja">LOJA: VERDAO</p>
										<h3 class="product-name"><a href="#">PERA</a></h3>
										<h4 class="product-price">R$9.00<del class="product-old-price">R$12.00</del></h4>
										<h3 class="product-name"><a href="#">assinatura por kg</a></h3>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="index/img/pera.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">FRUTA</p>
										<p class="nome-loja">LOJA: VERDAO</p>
										<h3 class="product-name"><a href="#">PERA</a></h3>
										<h4 class="product-price">R$9.00<del class="product-old-price">R$12.00</del></h4>
										<h3 class="product-name"><a href="#">assinatura por kg</a></h3>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="index/img/pera.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">FRUTA</p>
										<p class="nome-loja">LOJA: VERDAO</p>
										<h3 class="product-name"><a href="#">PERA</a></h3>
										<h4 class="product-price">R$9.00<del class="product-old-price">R$12.00</del></h4>
										<h3 class="product-name"><a href="#">assinatura por kg</a></h3>
									</div>
								</div>
								<!-- product widget -->
							</div>

							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="index/img/pera.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">FRUTA</p>
										<p class="nome-loja">LOJA: VERDAO</p>
										<h3 class="product-name"><a href="#">PERA</a></h3>
										<h4 class="product-price">R$9.00<del class="product-old-price">R$12.00</del></h4>
										<h3 class="product-name"><a href="#">assinatura por kg</a></h3>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="index/img/pera.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">FRUTA</p>
										<p class="nome-loja">LOJA: VERDAO</p>
										<h3 class="product-name"><a href="#">PERA</a></h3>
										<h4 class="product-price">R$9.00<del class="product-old-price">R$12.00</del></h4>
										<h3 class="product-name"><a href="#">assinatura por kg</a></h3>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="index/img/pera.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">FRUTA</p>
										<p class="nome-loja">LOJA: VERDAO</p>
										<h3 class="product-name"><a href="#">PERA</a></h3>
										<h4 class="product-price">R$9.00<del class="product-old-price">R$12.00</del></h4>
										<h3 class="product-name"><a href="#">assinatura por kg</a></h3>
									</div>
								</div>
								<!-- product widget -->
							</div>
						</div>
					</div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">VERDURAS</h4>
							<div class="section-nav">
								<div id="slick-nav-4" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-4">
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="index/img/cebola.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">VERDURA</p>
										<p class="nome-loja">LOJA: VERDAO</p>
										<h3 class="product-name"><a href="#">CEBOLA</a></h3>
										<h4 class="product-price">R$9.00<del class="product-old-price">R$12.00</del></h4>
										<h3 class="product-name"><a href="#">assinatura por kg</a></h3>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="index/img/cebola.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">VERDURA</p>
										<p class="nome-loja">LOJA: VERDAO</p>
										<h3 class="product-name"><a href="#">CEBOLA</a></h3>
										<h4 class="product-price">R$9.00<del class="product-old-price">R$12.00</del></h4>
										<h3 class="product-name"><a href="#">assinatura por kg</a></h3>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="index/img/cebola.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">VERDURA</p>
										<p class="nome-loja">LOJA: VERDAO</p>
										<h3 class="product-name"><a href="#">CEBOLA</a></h3>
										<h4 class="product-price">R$9.00<del class="product-old-price">R$12.00</del></h4>
										<h3 class="product-name"><a href="#">assinatura por kg</a></h3>
									</div>
								</div>
								<!-- product widget -->
							</div>

							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="index/img/cebola.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">VERDURA</p>
										<p class="nome-loja">LOJA: VERDAO</p>
										<h3 class="product-name"><a href="#">CEBOLA</a></h3>
										<h4 class="product-price">R$9.00<del class="product-old-price">R$12.00</del></h4>
										<h3 class="product-name"><a href="#">assinatura por kg</a></h3>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="index/img/cebola.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">VERDURA</p>
										<p class="nome-loja">LOJA: VERDAO</p>
										<h3 class="product-name"><a href="#">CEBOLA</a></h3>
										<h4 class="product-price">R$9.00<del class="product-old-price">R$12.00</del></h4>
										<h3 class="product-name"><a href="#">assinatura por kg</a></h3>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="index/img/cebola.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">VERDURA</p>
										<p class="nome-loja">LOJA: VERDAO</p>
										<h3 class="product-name"><a href="#">CEBOLA</a></h3>
										<h4 class="product-price">R$9.00<del class="product-old-price">R$12.00</del></h4>
										<h3 class="product-name"><a href="#">assinatura por kg</a></h3>
									</div>
								</div>
								<!-- product widget -->
							</div>
						</div>
					</div>

					<div class="clearfix visible-sm visible-xs"></div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">TUBÉRCULOS</h4>
							<div class="section-nav">
								<div id="slick-nav-5" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-5">
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="index/img/batata.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">TUBÉRCULO</p>
										<p class="nome-loja">LOJA: VERDAO</p>
										<h3 class="product-name"><a href="#">BATATA</a></h3>
										<h4 class="product-price">R$9.00<del class="product-old-price">R$12.00</del></h4>
										<h3 class="product-name"><a href="#">assinatura por kg</a></h3>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="index/img/batata.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">TUBÉRCULO</p>
										<p class="nome-loja">LOJA: VERDAO</p>
										<h3 class="product-name"><a href="#">BATATA</a></h3>
										<h4 class="product-price">R$9.00<del class="product-old-price">R$12.00</del></h4>
										<h3 class="product-name"><a href="#">assinatura por kg</a></h3>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="index/img/batata.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">TUBÉRCULO</p>
										<p class="nome-loja">LOJA: VERDAO</p>
										<h3 class="product-name"><a href="#">BATATA</a></h3>
										<h4 class="product-price">R$9.00<del class="product-old-price">R$12.00</del></h4>
										<h3 class="product-name"><a href="#">assinatura por kg</a></h3>
									</div>
								</div>
								<!-- product widget -->
							</div>

							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="index/img/batata.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">TUBÉRCULO</p>
										<p class="nome-loja">LOJA: VERDAO</p>
										<h3 class="product-name"><a href="#">BATATA</a></h3>
										<h4 class="product-price">R$9.00<del class="product-old-price">R$12.00</del></h4>
										<h3 class="product-name"><a href="#">assinatura por kg</a></h3>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="index/img/batata.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">TUBÉRCULO</p>
										<p class="nome-loja">LOJA: VERDAO</p>
										<h3 class="product-name"><a href="#">BATATA</a></h3>
										<h4 class="product-price">R$9.00<del class="product-old-price">R$12.00</del></h4>
										<h3 class="product-name"><a href="#">assinatura por kg</a></h3>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="index/img/batata.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">TUBÉRCULO</p>
										<p class="nome-loja">LOJA: VERDAO</p>
										<h3 class="product-name"><a href="#">BATATA</a></h3>
										<h4 class="product-price">R$9.00<del class="product-old-price">R$12.00</del></h4>
										<h3 class="product-name"><a href="#">assinatura por kg</a></h3>
									</div>
								</div>
								<!-- product widget -->
							</div>
						</div>
					</div>

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
		
		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			@include('footer')
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="public/index/js/jquery.min.js"></script>
		<script src="public/index/js/bootstrap.min.js"></script>
		<script src="public/index/js/slick.min.js"></script>
		<script src="public/index/js/nouislider.min.js"></script>
		<script src="public/index/js/jquery.zoom.min.js"></script>
		<script src="public/index/js/main.js"></script>

	</body>
</html>
