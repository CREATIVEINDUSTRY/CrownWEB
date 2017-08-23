<!DOCTYPE html> 
<html lang="es-MX">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Crown Bienes Raices</title>

    <meta name="description" content="PRIMER Y ÚNICA INMOBILIARIA
ESPECIALIZADA EN BOSQUE REAL con Más de 25 años de experiencia en el ramo inmobiliario">

	<link rel="shortcut icon" type="image/x-icon" href="./img/crown.ico">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hamburgers/0.7.0/hamburgers.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="./css/navigation.css">
    <link rel="stylesheet" href="./css/my_framework.css">
    <link rel="stylesheet" href="./css/style.css">
	<link rel="stylesheet" href="./css/style_slider.css">
	<link rel="stylesheet" href="./css/modal_index.css">
	<link rel="stylesheet" href="./css/footer.css">
	
</head>
<body>
 <header class="CR-Header container-fluid">
<!-- Menu Redes Sociales -->
			<nav class="CR-MenuRS xs-w100">
				<ul class="CR-Menu-listItemRS xs-w90 xs-flex xs-jc-flex-end xs-ai-center">
					<li class="CR-Menu-itemRS xs-w90 lg-w90">
						<p>Servicio al Cliente: <span>9015 3623</span></p>
					</li>
					<li class="CR-Menu-itemRS xs-w10 lg-w5">
						<a href="https://www.facebook.com/CROWNbrbr" class="CR-Menu-linkRS xs-w20 fa fa-facebook fa-2x" target="_black"></a>
					</li>
					<li class="CR-Menu-itemRS xs-w10 lg-w5">
						<a href="https://www.youtube.com/channel/UCJCcmUnOO1bQ3IxU3l0AsmQ" class="CR-Menu-linkRS xs-w20 fa fa-youtube-play fa-2x" target="_black"></a>
					</li>
				</ul>
			</nav>
<!-- Menu de Navegación -->
	<section class="CR-Header-container container  xs-w100 lg-flex lg-flex-wrap">
			<h1 class="CR-Logo lg-w20">
				<a href="index.php" class="CR-Logo-link xs-flex">Logo</a>
			</h1>
			<span class="CR-Panel-button">
				<button class="hamburger  hamburger--elastic" type="button">
			    <span class="hamburger-box">
				<span class="hamburger-inner"></span>
				</span>
				</button>
			</span>
		<article class="CR-Panel xs-w100 lg-w75">
			<nav class="CR-Menu xs-w100">
				<ul class="CR-Menu-listItem">
					<li class="CR-Menu-item">
						<a href="index.php" class="CR-Menu-link">Inicio</a>
					</li>
					<li class="CR-Menu-item">
						<a href="servicios.php" class="CR-Menu-link">Servicios</a>
					</li>
					<li class="CR-Menu-item">
						<a href="propiedades.php" class="CR-Menu-link">Propiedades</a>
					</li>
					<li class="CR-Menu-item">
						<a href="contacto.php" class="CR-Menu-link">Vende tu Propiedad</a>
					</li>
                    <li class="CR-Menu-item">
						<a href="app.php" class="CR-Menu-link">App</a>
					</li>
					<li class="CR-Menu-item">
						<a href="intranet.php" class="CR-Menu-link">Intranet</a>
					</li>
				</ul>
			</nav>
		</article>

		</section>
	</header>
<!-- Home Video -->
    <article class="CR-HomeBackground  container-fluid">
	
		<div class="CR-HomeFilter container xs-w55 xl-w35 xs-ac-center">
			<form method="POST" action="propiedades.php" id="filterForm" class="xs-w100 xs-flex xs-flex-wrap xs-jc-space-around">

				<select name="locationF" id="locationF" placeholder="Localizacion" class="xs-w90 lg-w32">
                     <?php 
                        include 'FilterLoader.php'; 
                        filterLoader('1');
                    ?>

                </select>
				<select name="operationF" id="operationF" placeholder="Compra/Venta" class="xs-w90 lg-w32">
                   <?php 
                        filterLoader('2');
                    ?>
                </select>
				<select name="typeF" id="typeF" placeholder="Tipo de Propiedad" class="xs-w90 lg-w32">
                    <?php 
                        filterLoader('3');
                    ?>
                </select>
				<button class="xs-w50">Buscar</button>
			</form>
		</div>
	
		
		<div class="CR-HomeBanner  xs-w100 xs-ac-center">
            <div class="container">
			<h4> Primera y única inmobiliaria especializada en Bosque Real</h4>
			<h3>con más de <span>25 años</span> de experiencia en el ramo inmobiliario</h3>
            </div>
		</div>
		 <video class="CR-HomeBackground-video  u-xs-none  u-lg-block" poster="./media/DJI_0021.png" autoplay muted loop>
			<source src="./media/DJI_0021.webm" type="video/webm">
			<source src="./media/DJI_0021.mp4" type="video/mp4">
			<source src="./media/DJI_0021.ogv" type="video/ogg">
		 </video>

	</article>
<!--Slider Desarrollos -->
	<article class="CR-Inversion container xs-w90 md-flex md-flex-wrap">
		<section class="container xs-w100 md-flex md-flex-wrap md-jc-space-between">
        <h2 class="xs-w100">Oportunidades de Inversión</h2>

		<div class="CR-Inversion-box  xs-w100 xs-flex xs-flex-wrap">
			<div class="xs-w100 lg-w60">
            	<div class="CR-Inversion-Life  xs-w100"></div>
			</div>
					
			<div class="CR-Inversion-content xs-w100 lg-w40 xs-flex xs-flex-wrap xs-jc-space-around xs-ac-center">
				<div class="CR-Inversion-boxTitle xs-w100 lg-w90 xs-as-center">
					<h2 class="xs-w100">Life by Bosque Real</h2>
					<h6 class="xs-w90">Magníficos Lotes Residenciales</h6> <h5 class="xs-w85">desde 300 m2 hasta 800 m2</h5>
				</div>
				<div class="CR-Inversion-img xs-w90 lg-w50 xs-order--1">
            		<div class="CR-Inversion-LifeLogo  xs-w100"></div>
				</div>
				<div class="CR-Inversion-alertLife xs-w100">Include Everything In Your Life</div>
				<a href="https://www.youtube.com/watch?v=myqN_iqdt4E&feature=youtu.be" role="button" class="Video xs-w45"><i class="fa fa-video-camera fa-2x"></i></a>
				<a href="http://lifebosquereal.com/" class="xs-w45" target="_black">Saber Más</a>
			</div>
		</div>

		<div class="CR-Inversion-box  xs-w100 xs-flex xs-flex-wrap">
			<div class="xs-w100 lg-w60">
            	<div class="CR-Inversion-Dolmen  xs-w100"></div>
			</div>
			<div class="CR-Inversion-content xs-w100 lg-w40 xs-flex xs-flex-wrap xs-jc-space-between  lg-order--1">
				<div class="CR-Inversion-boxTitle xs-w100 lg-w90 xs-as-center">
					<h2 class="xs-w100">Dolmen</h2>
					<h3 class="xs-w85">Proyecto Corporativo &</h3> <h4 class="xs-w85">Residencial</h4>
				</div>
				<div class="CR-Inversion-img xs-w90 lg-w50 xs-order--1">
            		<div class="CR-Inversion-DolmenLogo  xs-w100"></div>
				</div>
				<div class="CR-Inversion-alertAgor xs-w100">Es tu oportunidad de Invertir!</div>
				<a href="https://www.youtube.com/watch?v=yYvo75eQhX0&feature=youtu.be" class="Video xs-w45" role="button"><i class="fa fa-video-camera fa-2x"></i></a>
				<a href="contacto.html" class="xs-w45">Saber Más</a>
			</div>
		</div>
			
        <div class="CR-Inversion-box  xs-w100 xs-flex xs-flex-wrap  xs-ai-flex-end">
			<div class="xs-w100 lg-w60">
            	<div class="CR-Inversion-Orun  xs-w100"></div>
				<div class="CR-Inversion-alert xs-w100">Ultimos Departamentos!</div>
			</div>
			<div class="CR-Inversion-content xs-100 lg-w40 xs-flex xs-flex-wrap xs-jc-space-between xs-ac-center">
				<div class="CR-Inversion-boxTitle xs-w100 lg-w100 xs-as-center">
					<h2 class="xs-w100">OrúnPalace</h2>
				</div>
				<div class="CR-Inversion-img xs-w90 lg-w50 xs-order--1">
            		<div class="CR-Inversion-OrunLogo  xs-w100"></div>
				</div>
				<h3 class="xs-w85">¡Un estilo de vida hecho a tu medida!</h3>
				<p class="xs-w75"><span>Departamentos desde 209m2</span></p>
				<div class="CR-Inversion-alertAgor  xs-w100">Financiamiento Express</div>
				<a href="https://www.youtube.com/watch?v=wB4aHyWpJc4" role="button" class="Video xs-w45"><i class="fa fa-video-camera fa-2x"></i></a>
				<a href="http://www.orunpalace.com/"  target="_black" class="xs-w45">Saber Más</a>
				</div>
			</div>

		<div class="CR-Inversion-box  xs-w100 xs-flex xs-flex-wrap">
			<div class="CR-Inversion-content xs-w100 lg-w40 xs-flex xs-flex-wrap xs-jc-space-between lg-order-1">
				<div class="CR-Inversion-boxTitle xs-w100 lg-w100 xs-as-center">
					<h2 class="xs-w100">Agor <span>Interlomas</span></h2>
				</div>
				<div class="CR-Inversion-img xs-w90 lg-w50 xs-order--1">
            		<div class="CR-Inversion-AgorLogo  xs-w100"></div>
				</div>
				<p class="xs-w85">Departamentos desde 175m2</p>
				<p class="xs-w75"><span>Opciones de Financiamiento</span></p>
				<div class="CR-Inversion-alertAgor  xs-w100">Últimas oportunidades!</div>
				<a href="https://www.youtube.com/watch?v=DQRp_1YPGBE" role="button" class="Video xs-w45"><i class="fa fa-video-camera fa-2x"></i></a>
				<a href="contacto.html" class="xs-w45">Saber Más</a>
			</div>
			<div class="xs-w100 lg-w60 xs-order--1 lg-order-2">
            	<div class="CR-Inversion-Agor xs-w100"></div>
			</div>
		</div>

		</section>
	</article>

<!-- Video / Generic Modal -->
<div class="modal fadde " id="mediaModal" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-body">
      <!-- content dynamically inserted -->
    </div>
  </div>
</div>
</div>
	
<!-- footer -->
	<footer class="CR-Contact container-fluid" id="contacto">
		<!-- redes sociales -->
		<div class="CR-Contact-rs xs-w90">
				<nav class="xs-w100">
				<ul class="CR-Contact-rslistItem xs-w90 xs-flex xs-jc-flex-end">
					<li class="CR-Contact-rsitem xs-w10 lg-w5">
						<a href="https://www.facebook.com/CROWNbrbr" class="CR-Contact-rslink xs-w20 fa fa-facebook fa-2x" target="_black"></a>
					</li>
					<li class="CR-Contact-rsitem xs-w10 lg-w5">
						
						<a href="https://www.youtube.com/channel/UCJCcmUnOO1bQ3IxU3l0AsmQ" class="CR-Contact-rslink xs-w20 fa fa-youtube-play fa-2x" target="_black"></a>
					</li>
				</ul>
			</nav>
		</div>
		<div class="CR-Contact-box container xs-flex xs-flex-wrap xs-jc-space-around xs-ai-center">
			<div class="CR-Contact-logo xs-w90  sm-w25 md-w25 " href="index.php"></div>  


<!-- Menu Footer -->
			<nav class="CR-Contact-nav xs-w90 sm-w73 md-w73 xs-flex xs-flex-wrap xs-jc-space-between xs-ai-center">
				<ul class="CR-Contact-listItem xs-w90 sm-w30 ">
					<li class="CR-Contact-itemV xs-w100 sm-flex">
						<a href="servicios.php#contacto" class="CR-Contact-linkV xs-w100">Contáctanos!</a>
					</li>
				</ul>
				<ul class="CR-Contact-listItem xs-w90 sm-w30">
					<li class="CR-Contact-itemV xs-w100 sm-flex">
						<a href="contacto.php" class="CR-Contact-linkV xs-w100">¿Quieres vender tu propiedad?</a>
					</li>
				</ul>
				<ul class="CR-Contact-listItem xs-w90 sm-w30">
					<li class="CR-Contact-itemV xs-w100 sm-flex">
						<a href="app.php" class="CR-Contact-linkV xs-w100">¡Descarga nuestra App!</a>
					</li>
				</ul>
			</nav> 
		</div>	

			
		<div class="CR-Contact-copy">
			<p class="copy">Desarrollado por <a href="http://www.360.ci" target="_black">Creative Industry</a>.<br> &copy; 2017. Crown Bienes Raices</p>
		</div>
		
	</footer>

	<script src="./js/navigation.js"></script>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
	<script src="./js/index.js"></script>
</body>
</html>
