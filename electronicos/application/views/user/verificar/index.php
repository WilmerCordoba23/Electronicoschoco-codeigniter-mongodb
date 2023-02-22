<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>verificar</title>

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
						<li><a href="<?php echo base_url().'index.php/categoria_productos'?>">Categorias</a></li>

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
				<form action= "<?php echo base_url().'index.php/verificar_productos/compra'?>" method='post'>
					<div class="col-md-7">
						<!-- Billing Details -->
						<div class="billing-details">
							
							<div class="section-title">
								<h3 class="title">Pedido del usuario</h3>
							</div>
							
                                   
                                       
										
							<!--  -->
						</div>
						<!-- /Billing Details -->

						
					</div>

					<!-- Order Details -->
					<div class="col-md-5 order-details">
						<div class="section-title text-center">
							<h3 class="title">Ordene su pedido</h3>
						</div>
						<div class="cart-list">
						<?php if(!empty($productos)):?>
                                            <?php foreach($productos as $c):?>

												<div class="order-summary">
							<div class="order-col">
								<div><strong>PRODUCTO</strong></div>
								<div><strong>TOTAL</strong></div>
							</div>
							<div class="order-products">
								<div class="order-col">
									<div>1x <?php echo $c->nombre;?></div>
									<div><?php echo $c->descripcion;?></div>

									<div>$<?php echo $c->precio;?></div>
								</div>
							
							</div>
							<div class="order-col">
								<div><strong>TOTAL</strong></div>
								<div><strong class="order-total">$</strong></div>
							</div>
						</div>
											
											<?php endforeach;?>
                                            <?php endif;?>	
							
						<div class="mt-4 mb-0">
                                <div class="d-grid"><input type="submit" class="btn btn-primary btn-block" ></div>
                        </div>
					<!-- /Order Details -->
					</form>
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
