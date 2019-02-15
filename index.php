<?php include 'partials/head.php'; ?>

	<!-- Hero section start -->
	<section class="hero-section">
		<!-- left social link ber -->
		<div class="left-bar">
			<div class="left-bar-content">
				<div class="social-links">
					<a href="#"><i class="fa fa-pinterest"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
				</div>
			</div>
		</div>
		<!-- hero slider area -->
		<div class="hero-slider">
			<div class="hero-slide-item set-bg" data-setbg="img/bg1.jpg">
				<div class="slide-inner">
					<div class="slide-content">
					<h2 class="title">Carpinteria <br>en Obras <br> </h2>
					<a href="#proyectos" class="site-btn sb-light">Ver Proyectos</a>
					</div>	
				</div>
			</div>	
			<div class="hero-slide-item set-bg" data-setbg="img/bg2.jpg">
				<div class="slide-inner">
					<div class="slide-content">
					<h2 class="title">Carpinteria <br>en Hogares <br> </h2>
					<a href="#proyectos" class="site-btn sb-light">Ver Proyectos</a>
					</div>	
				</div>
			</div>	
		</div>
		<div class="slide-num-holder" id="snh-1"></div>
		<div class="hero-right-text">carpinteria</div>
	</section>
	<!-- Hero section end -->


	<!-- Intro section start -->
	<section class="intro-section pt100 pb50">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 intro-text mb-5 mb-lg-0">
					<h2 class="sp-title">Somos un <span>taller</span> creativo de carpinteria </h2>
					<p> Nos gustaria presentarnos como fabricantes de muebles que cuentan con mas de 80 años de experiencia y el orgullo de 3 generaciones 
						especializados en el desarrollo mobiliario moderno y antiguo. <br> 
						Nuestra empresa busca decorar hogares con los diseños o ideas que imaginas y hacerlos realidad, para ello te ofrecemos:
						calidad y diseño inigualable, estrategia de precios competitivos, sistema de planificación meticuloso, enfoque orientado al cliente, sistema
						de entrega a tiempo, servicio de logística  y la amplia experiencia en la industria que nos provee de un vasto conocimiento.
						<br>
						Tras años de dedicación e incansable esfuerzo hemos ampliado nuestra línea de producción
						llegando hoy al diseño y colocación de trabajos en obras de todo el país. <br>
						Este resultado es la combinación de una constante búsqueda de calidad, innovación, funcionalidad y servicio. <br> 
						Nuestro logro, es la satisfacción de tus necesidades.
					</p>
					<a href="portfolio.php" class="site-btn sb-dark">Veer Projectos</a>
				</div>
				<div class="col-lg-5 pt-4">
					<img src="img/int.png" alt="">
				</div>
			</div>
		</div>
	</section>
	<!-- Intro section end -->


	<!-- Service section start -->
	<?php include 'partials/servicios.php'; ?>
	<!-- Service section end -->



	<!-- CTA section start -->
	<section class="cta-section pt100 pb50">
		<div class="cta-image-box"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-7 pl-lg-0 offset-lg-5 cta-content">
					<h2 class="sp-title">Atrevete a soñar con <span>muebles</span> de diseño.</h2>
					<p>Y hacer realidad lo que imaginas.  Contacta con nosotros que siempre estamos dispuesto 
					   a ayudarte manteniendo estándares de excelencia al proporcionarte la mejor calidad con múltiples
					   productos y servicios en el mercado de muebles. </p>
					<div class="cta-icons">
						<div class="cta-img-icon">
							<img src="img/icon/light/1.png" alt="">
						</div>
						<div class="cta-img-icon">
							<img src="img/icon/light/2.png" alt="">
						</div>
						<div class="cta-img-icon">
							<img src="img/icon/color/3.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- CTA section end -->


	<!-- Milestones section Start -->
	<section class="milestones-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="milestone">
						<h2>+80</h2>
						<p>Años <br>de Experiencia</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="milestone">
						<h2>457</h2>
						<p>Projectos <br>Tomados este año</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="milestone">
						<h2>111</h2>
						<p>Obras <br>Terminadas</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="milestone">
						<h2>1000</h2>
						<p>Clientes <br>ganados</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Milestones section end -->


	<!-- Projects section start -->
	<div class="projects-section pb50" id="proyectos">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="section-title">
						<h1>Proyectos</h1>
					</div>
				</div>
				<div class="col-lg-9">
					<ul class="projects-filter-nav">
						<li class="btn-filter" data-filter="*">Todo</li>
						<li class="btn-filter" data-filter=".rest">De Exterior</li>
						<li class="btn-filter" data-filter=".build">De Hogar</li>
						<li class="btn-filter" data-filter=".apart">Placares</li>
						<li class="btn-filter" data-filter=".coci">Cocinas</li>
					</ul>
				</div>
			</div>
		</div>                      
		<div id="projects-carousel" class="projects-slider">
			<div class="single-project set-bg rest" data-setbg="img/projects/e1.jpg">
				<div class="project-content">
					<h2>De <br> Exterior</h2>
					<p>dic 18, 2018</p>
					<a href="portfolio.php" class="seemore">Ver Projectos </a>
				</div>
			</div>
			<div class="single-project set-bg build" data-setbg="img/projects/h2.jpg">
				<div class="project-content">
					<h2>De <br> Hogar</h2>
					<p>Ene 19, 2019</p>
					<a href="portfolio.php" class="seemore">Ver Projectos </a>
				</div>
			</div>
			<div class="single-project set-bg apart" data-setbg="img/projects/p1.jpg">
				<div class="project-content">
					<h2>Bonitos  <br> Placares</h2>
					<p>Nov 5, 2018</p>
					<a href="portfolio.php" class="seemore">Ver Projectos </a>
				</div>
			</div>
			<div class="single-project set-bg coci" data-setbg="img/projects/c2.jpg">
				<div class="project-content">
					<h2>Agradables <br> Cocinas</h2>
					<p>Jun 23, 2018</p>
					<a href="portfolio.php" class="seemore">Ver Projectos </a>
				</div>
			</div><!--
			<div class="single-project set-bg coci" data-setbg="img/projects/5.0.jpg">
				<div class="project-content">
					<h2>Nuevas <br> Tendencias</h2>
					<p>Oct 4, 2018/p>
					<a href="portfolio.php" class="seemore">Ver Projectos </a>
				</div>
			</div>-->
		</div>
	</div>
	<!-- Projects section end -->


	<!-- Clients section start -->
	<div class="client-section spad">
		<div class="container">
			<div id="client-carousel" class="client-slider">
				<div class="single-brand">
					<a href="http://gruporamm.com.ar/quienes-somos/" target="_blank">
						<img src="img/clients/1.1.png" alt="logo grupo ramm constructora">
					</a>
				</div>
				<div class="single-brand">
					<a href="https://www.multiplacas.com.ar/" target="_blank">
						<img src="img/clients/2.2.png" alt="logo multiplacas ">
					</a>
				</div>
				<div class="single-brand">
					<a href="http://www.aserraderoguatambu.com/" target="_blank">
						<img src="img/clients/3.3.png" alt="logo aserradero guatambu">
					</a>
				</div>
				<div class="single-brand">
					<a href="http://grupoeurosa.com/2015/index.html" target="_blank">
						<img src="img/clients/4.4.png" alt="logo ">
					</a>
				</div>
				<div class="single-brand">
					<a href="https://instagram.com/carpinteria_ch2v?utm_source=ig_profile_share&igshid=dm1qaejmj3cf" target="_blank">
						<img src="img/clients/5.png" alt="" target="_blank">
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- Clients section end -->


	<!-- Footer section start -->
	<?php include 'partials/foot.php'; ?>
	<!-- Footer section end -->




	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/isotope.pkgd.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.owl-filter.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/script.js"></script>
</body>
</html>