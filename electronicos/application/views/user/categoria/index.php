<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Categoria</title>

 		<!-- Google font -->
 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

 		<!-- Bootstrap -->
 		<link type="text/css" rel="stylesheet" href="<?php echo base_url().'assets/user/css/bootstrap.min.css'?>"/>

 		<!-- Slick -->
 		<link type="text/css" rel="stylesheet" href="<?php echo base_url().'assets/user/css/slick.css'?>"/>
 		<link type="text/css" rel="stylesheet" href="<?php echo base_url().'assets/user/css/slick-theme.css'?>"/>

 		<!-- nouislider -->
 		<link type="text/css" rel="stylesheet" href="<?php echo base_url().'assets/user/css/nouislider.min.css'?>"/>

 		<!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="<?php echo base_url().'assets/user/css/font-awesome.min.css'?>">

 		<!-- Custom stlylesheet -->
 		<link type="text/css" rel="stylesheet" href="<?php echo base_url().'assets/user/css/style.css'?>"/>

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
<div id="header">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- LOGO -->
			<div class="col-md-3">
				<div class="header-logo">
					<a href="<?php echo base_url().'index.php/user'?>" class="logo">
						<img src="<?php echo base_url().'assets/user/img/logo.png'?>" alt="">
					</a>
				</div>
			</div>
			<!-- /LOGO -->

			<!-- SEARCH BAR -->
			<div class="col-md-6">
				<div class="header-search">
					<form>
						<!--
						<select class="input-select">
							<option value="0">Categorias</option>
							<option value="1">Categoria 01</option>
							<option value="1">Categoria 02</option>
						</select>
-->
						<input class="input" placeholder="Buscar">
						<button class="search-btn">Buscador</button>
					</form>
				</div>
			</div>
			<!-- /SEARCH BAR -->

			<!-- ACCOUNT -->
			<div class="col-md-3 clearfix">
				<div class="header-ctn">
					

					<!-- Cart -->
					<div class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
							<i class="fa fa-shopping-cart"></i>
							<span>Carrito</span>
						</a>
						<div class="cart-dropdown">
							<div class="cart-list">


							</div>
							<div class="cart-summary">
								
							</div>
							<div class="cart-btns">
							<a href="<?php echo base_url().'index.php/verificar_productos'?>">Ver Carrito</a>
								
							</div>
						</div>
					</div>
					<!-- /Cart -->

					<!-- Menu Toogle -->
					<div class="menu-toggle">
						<a href="#">
							<i class="fa fa-bars"></i>
							<span>Menu</span>
						</a>
					</div>
					<!-- /Menu Toogle -->
				</div>
			</div>
			<!-- /ACCOUNT -->
		</div>
		<!-- row -->
	</div>
	<!-- container -->
</div>
<!-- /MAIN HEADER -->
</header>
<!-- /HEADER -->

<!-- NAVIGATION -->
<nav id="navigation">
<!-- container -->
<div class="container">
	<!-- responsive-nav -->
	<div id="responsive-nav">
		<!-- NAV -->
		<ul class="main-nav nav navbar-nav">
		<li><a href="<?php echo base_url().'index.php/user'?>">Inicio</a></li>
			<li class="active"><a href="<?php echo base_url().'index.php/categoria_productos'?>">Categorias</a></li>

		</ul>
		<!-- /NAV -->
	</div>
	<!-- /responsive-nav -->
</div>
<!-- /container -->
</nav>
<!-- /NAVIGATION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- ASIDE -->
					<div id="aside" class="col-md-3">
						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Categorias</h3>
							<div class="checkbox-filter">

								<div class="input-checkbox">
									<input type="checkbox" id="category-2">
									<label for="category-2">
										<span></span>
										Camaras
									</label>
								</div>

								<div class="input-checkbox">
									<input type="checkbox" id="category-3">
									<label for="category-3">
										<span></span>
										Celulares
									</label>
								</div>

								<div class="input-checkbox">
									<input type="checkbox" id="category-4">
									<label for="category-4">
										<span></span>
										Diademas
									</label>
								</div>

								<div class="input-checkbox">
									<input type="checkbox" id="category-5">
									<label for="category-5">
										<span></span>
										Accessorios
									</label>
								</div>

								<div class="input-checkbox">
									<input type="checkbox" id="category-6">
									<label for="category-6">
										<span></span>
										Portatiles
									</label>
								</div>
							</div>
						</div>
						<!-- /aside Widget -->

			
					</div>
					<!-- /ASIDE -->

					<!-- STORE -->
					<div id="store" class="col-md-9">
						<!-- store top filter -->
						<div class="store-filter clearfix">
							
							<ul class="store-grid">
								<li class="active"><i class="fa fa-th"></i></li>
								<li><a href="#"><i class="fa fa-th-list"></i></a></li>
							</ul>
						</div>
						<!-- /store top filter -->

						<!-- store products -->
						<div class="row">
						<?php if(!empty($productos)):?>
                                            <?php foreach($productos as $c):?>
							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
									<img src="<?php echo base_url().'/assets/archivos/'.$c->imagen_producto;?>" alt="" height='200px'>
										<div class="product-label">
											<span class="new">Nuevo</span>
										</div>
									</div>
									<div class="product-body">
										<p class="product-category"><?php echo $c->categoria;?></p>
										<h3 class="product-name"><a href="#"><?php echo $c->nombre;?></a></h3>
										<h4 class="product-price"><?php echo $c->precio;?></h4>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<div class="product-btns">
										<p><?php echo $c->descripcion;?></p></div>
									</div>
								</div>
							</div>
							<!-- /product -->
							<?php endforeach;?>
                                            <?php endif;?>			
						</div>
						<!-- /store products -->

						<!-- store bottom filter -->
						<div class="store-filter clearfix">
							<span class="store-qty">Showing 1-20 productos</span>
							<ul class="store-pagination">
								<li class="active">1</li>
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
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!--
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Sobre nosotros</h3>
								<p>Somos un grupo de 3 estudiantes jugandose la vida en la Universidad.</p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>Colombia-Chocó-Quibdó-Universidad Claretiana</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>+021-95-51-84</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>email@email.com</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Categorias</h3>
								<ul class="footer-links">
									<li><a href="http://localhost/electronicos/index.php/categoria_productos">Las mejores ofertas</a></li>
									<li><a href="http://localhost/electronicos/index.php/categoria_productos">Portatiles</a></li>
									<li><a href="http://localhost/electronicos/index.php/categoria_productos">Celulares</a></li>
									<li><a href="http://localhost/electronicos/index.php/categoria_productos">Camaras</a></li>
									<li><a href="http://localhost/electronicos/index.php/categoria_productos">Accesorios</a></li>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Información</h3>
								<ul class="footer-links">
									<li><a href="#">Sobre nosotros</a></li>
									<li><a href="#">Contectanos</a></li>
									<li><a href="#">Política de privacidad</a></li>
									<li><a href="#">Pedidos y Devoluciones</a></li>
									<li><a href="#">Términos y condiciones</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Servicio</h3>
								<ul class="footer-links">
									<li><a href="#">Mi cuenta</a></li>
									<li><a href="http://localhost/electronicos/index.php/verificar_productos">ver carrito</a></li>
									<li><a href="#">Lista de deseos</a></li>
									<li><a href="#">Seguimiento de mi pedido</a></li>
									<li><a href="#">Ayuda</a></li>
								</ul>
							</div>
						</div>
					</div>
					 -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<ul class="footer-payments">
								<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
								<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
							</ul>
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="<?php echo base_url().'assets/user/js/jquery.min.js'?>"></script>
		<script src="<?php echo base_url().'assets/user/js/bootstrap.min.js'?>"></script>
		<script src="<?php echo base_url().'assets/user/js/slick.min.js'?>"></script>
		<script src="<?php echo base_url().'assets/user/js/nouislider.min.js'?>"></script>
		<script src="<?php echo base_url().'assets/user/js/jquery.zoom.min.js'?>"></script>
		<script src="<?php echo base_url().'assets/user/js/main.js'?>"></script>
	</body>
</html>
