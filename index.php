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
	<link rel="stylesheet" href="./css/footer.css">


</head>
<body>
    <header class="CR-Header container-fluid">
<!-- Menu Redes Sociales -->
			<nav class="CR-MenuRS xs-w100">
				<ul class="CR-Menu-listItemRS xs-w90 xs-flex xs-jc-flex-end xs-ai-center">
					<li class="CR-Menu-itemRS xs-w55 lg-w80">
						<p>Servicio al Cliente: <span>9015 3623</span> / mail:<a href="mailto:" class="CR-Menu-linkRS xs-w20">mail@</a></p>
					</li>
					<li class="CR-Menu-itemRS xs-w10 lg-w5">
						<a href="#" class="CR-Menu-linkRS xs-w20 fa fa-facebook fa-2x"></a>
					</li>
					<li class="CR-Menu-itemRS xs-w10 lg-w5">
						<a href="#" class="CR-Menu-linkRS xs-w20 fa fa-twitter fa-2x"></a>
					</li>
					<li class="CR-Menu-itemRS xs-w10 lg-w5">
						<a href="#" class="CR-Menu-linkRS xs-w20 fa fa-instagram fa-2x"></a>
					</li>
					<li class="CR-Menu-itemRS xs-w10 lg-w5">
						<a href="#" class="CR-Menu-linkRS xs-w20 fa fa-youtube-play fa-2x"></a>
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
						<a href="servicios.html" class="CR-Menu-link">Servicios</a>
					</li>
					<li class="CR-Menu-item">
						<a href="propiedades.php" class="CR-Menu-link">Propiedades</a>
					</li>
					<li class="CR-Menu-item">
						<a href="contacto.html" class="CR-Menu-link">Vende tu Propiedad</a>
					</li>
                    <li class="CR-Menu-item">
						<a href="app.html" class="CR-Menu-link">App</a>
					</li>
					<li class="CR-Menu-item">
						<a href="intranet.html" class="CR-Menu-link">Intranet</a>
					</li>
				</ul>
			</nav>
		</article>

		</section>
	</header>
<!-- Home Video -->
    <article class="CR-HomeBackground  container-fluid">

		<div class="CR-HomeFilter container xs-w50 xl-w35 xs-ac-center">
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
				<button class="xs-w50">Enviar</button>
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
		 </video>

	</article>
<!--Slider Desarrollos -->
	<article class="CR-Inversion container xs-w90 md-flex md-flex-wrap">
		<section class="container xs-w100 md-flex md-flex-wrap md-jc-space-between">
        <h2 class="xs-w100">Oportunidades de Inversión</h2>
			
           <div class="CR-Inversion-box  xs-w100 xs-flex xs-flex-wrap">
				<div class="xs-w100 lg-w60">
            		<img class="CR-Inversion-Orun  xs-w100" src="" alt="">
					<div class="CR-Inversion-alert xs-w100">Ultimos Departamentos!</div>
				</div>
					
				<div class="CR-Inversion-content xs-w90 lg-w40 xs-flex xs-flex-wrap xs-jc-space-between xs-ac-center;">
					<div class="CR-Inversion-boxTitle xs-w50 lg-w90 xs-as-center">
					<h2 class="xs-w100">Orun Palace</h2>
					<h3 class="xs-w100">Un estilo de vida</h3>
						<h4 class="xs-w100"> hecho a tu medida!</h4>
					</div>
					<div class="CR-Inversion-img xs-w30 lg-w50 lg-order--1">
            		<img class="CR-Inversion-OrunLogo  xs-w100" src="" alt="">
				</div>
				
				
				<p class="xs-w85">Departamentos desde 209m2</p>
				<p class="xs-w75"><span>Financiamiento Express</span></p>
				
				<a href="http://www.orunpalace.com/"  target="_black" class="xs-w90">Saber Más</a>
				</div>
			</div>

			 <div class="CR-Inversion-box  xs-w100 xs-flex xs-flex-wrap">
				
					
				<div class="CR-Inversion-content xs-w90 lg-w40 xs-flex xs-flex-wrap xs-jc-space-between lg-order-1">
					<div class="CR-Inversion-boxTitle xs-w50 lg-w90 xs-as-center">
					<h2 class="xs-w100">Agor <span>Interlomas</span></h2>
					</div>
					<div class="CR-Inversion-img xs-w30 lg-w50 lg-order--1">
            		<img class="CR-Inversion-AgorLogo  xs-w100" src="" alt="">
				</div>
				
				
				<p class="xs-w85">Departamentos desde 175m2</p>
				<p class="xs-w75"><span>Opciones de Financiamiento</span></p>
				<div class="CR-Inversion-alertAgor  xs-w100">Últimas oportunidades!</div>
				<a href="https://www.facebook.com/AgorInterlomas" target="_black" class="xs-w90">Saber Más</a>
				</div>

				<div class="xs-w100 lg-w60 xs-order--1 lg-order-2">
            		<img class="CR-Inversion-Agor xs-w100" src="" alt="">
					
				</div>
			</div>

   <div class="CR-Inversion-box  xs-w100 xs-flex xs-flex-wrap">
				<div class="xs-w100 lg-w60">
            		<img class="CR-Inversion-Dolmen  xs-w100" src="" alt="">
				
				</div>
					
				<div class="CR-Inversion-content xs-w90 lg-w40 xs-flex xs-flex-wrap xs-jc-space-between xs-ac-center;">
					<div class="CR-Inversion-boxTitle xs-w50 lg-w90 xs-as-center">
					<h2 class="xs-w100">Dolmen</h2>
					<h3 class="xs-w85">Proyecto de Corporativo &</h3> <h4 class="xs-w85">Residencial</h4>
					</div>
					<div class="CR-Inversion-img xs-w30 lg-w50 lg-order--1">
            		<img class="CR-Inversion-DolmenLogo  xs-w100" src="" alt="">
				</div>
				
				
				
				
					<div class="CR-Inversion-alertAgor xs-w100">Es tu oportunidad de Invertir !</div>
				
				<a href="#"  target="_black" class="xs-w90">Saber Más</a>
				</div>
			</div>

		</section>
	</article>

	
<!-- footer -->
	<footer class="CR-Contact container-fluid" id="contacto">
		<!-- redes sociales -->
		<div class="CR-Contact-rs">
				<nav class="xs-w100">
				<ul class="CR-Contact-rslistItem xs-w90 xs-flex xs-jc-flex-end">
					<li class="CR-Contact-rsitem xs-w10 lg-w5">
						<a href="#" class="CR-Contact-rslink xs-w20 fa fa-facebook fa-2x"></a>
					</li>
					<li class="CR-Contact-rsitem xs-w10 lg-w5">
						<a href="#" class="CR-Contact-rslink xs-w20 fa fa-twitter fa-2x"></a>
					</li>
					<li class="CR-Contact-rsitem xs-w10 lg-w5">
						<a href="#" class="CR-Contact-rslink xs-w20 fa fa-instagram fa-2x"></a>
					</li>
					<li class="CR-Contact-rsitem xs-w10 lg-w5">
						<a href="#" class="CR-Contact-rslink xs-w20 fa fa-youtube-play fa-2x"></a>
					</li>
					<li class="CR-Contact-rsitem xs-w10 lg-w5">
						<a href="#" class="CR-Contact-rslink xs-w20 fa fa-whatsapp fa-2x"></a>
					</li>
				</ul>
			</nav>
		</div>
		<div class="CR-Contact-box container xs-flex xs-flex-wrap xs-jc-space-between">
		<div class="CR-Contact-logo xs-w35  lg-w25 " href="#">
    
		</div>  
		<!-- Menu Footer -->
		<nav class="CR-Contact-nav xs-w60 lg-w73 xs-flex xs-flex-wrap xs-jc-space-between">
				<ul class="CR-Contact-listItem xs-w45 lg-w23">
					<li class="CR-Contact-item xs-w100">
						Tipo de Propiedad
							<ul class="CR-Contact-listItem">
							<li class="CR-Contact-item xs-w100 ">
								<a href="#" class="CR-Contact-link xs-w20">Compra</a>
							</li>
							<li class="CR-Contact-item xs-w100 lg-w5">
								<a href="#" class="CR-Contact-link xs-w20">Venta</a>
							</li>
							<li class="CR-Contact-item xs-w100 lg-w5">
								<a href="#" class="CR-Contact-link xs-w20">+</a>
							</li>
						</ul>
						</li>
				</ul>
				<ul class="CR-Contact-listItem xs-w45 lg-w23">
						<li class="CR-Contact-item xs-w100 ">
						Propiedades en Venta
						
							<ul class="CR-Contact-listItem">
							<li class="CR-Contact-item xs-w100 lg-w5">
								<a href="#" class="CR-Contact-link xs-w20">Casa</a>
							</li>
							<li class="CR-Contact-item xs-w100 lg-w5">
								<a href="#" class="CR-Contact-link xs-w20">Departamentos</a>
							</li>
							<li class="CR-Contact-item xs-w100 lg-w5">
								<a href="#" class="CR-Contact-link xs-w20">+</a>
							</li>
						 </ul> </li>
					</ul>
				
				<ul class="CR-Contact-listItem xs-w45 lg-w23">
						<li class="CR-Contact-item xs-w100">
						Zonas Destacadas
							<ul class="CR-Contact-listItem">
							<li class="CR-Contact-item xs-w100">
								<a href="#" class="CR-Contact-link xs-w20">Zona 1</a>
							</li>
							<li class="CR-Contact-item xs-w100 ">
								<a href="#" class="CR-Contact-link xs-w20">Zona 2</a>
							</li>
							<li class="CR-Contact-item xs-w100">
								<a href="#" class="CR-Contact-link xs-w20">+</a>
							</li>
						 </ul> </li>
					</ul>
				<ul class="CR-Contact-listItem xs-w45 lg-w23">
					<li class="CR-Contact-item xs-w10 lg-w5">
						<a href="#" class="CR-Contact-link xs-w20">Contacto</a>
					</li>
				</ul>
			</nav> 

		</div>	

			
		<div class="CR-Contact-copy"><p class="copy">Desarrollado por Creative Industry. &copy; 2017. Crown Bienes Raices</p></div>
		</div>
	</footer>

	 <script src="./js/navigation.js"></script>
	 <script src="./js/slider.js"></script>
</body>
</html>