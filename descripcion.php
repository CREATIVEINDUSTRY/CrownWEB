<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Crown Bienes Raices - Propiedades</title>
    <meta name="description" content="Crown">
    <link rel="shortcut icon" type="image/x-icon" href="./img/crown.ico">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hamburgers/0.7.0/hamburgers.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="./css/navigation.css">
    <link rel="stylesheet" href="./css/my_framework.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/style_slider.css">
	<link rel="stylesheet" href="./css/filter.css">
	<link rel="stylesheet" href="./css/footer.css">


</head>
<body>
    <header class="CR-Header container-fluid">
		 <!-- Menu Redes Sociales -->
			<nav class="CR-MenuRS xs-w100">
				<ul class="CR-Menu-listItemRS xs-w90 xs-flex xs-jc-flex-end">
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
					<li class="CR-Menu-itemRS xs-w10 lg-w5">
						<a href="#" class="CR-Menu-linkRS xs-w20 fa fa-whatsapp fa-2x"></a>
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
						<a href="contacto.html" class="CR-Menu-link">Publicar</a>
					</li>
					<li class="CR-Menu-item">
						<a href="app.html" class="CR-Menu-link">App</a>
					</li>
				</ul>
			</nav>
		</article>
	</header>

<main class="CR-Main container u-margin-top xs-w100 xs-flex xs-flex-wrap">
<!-- Aside Filter -->
    <div class="xs-w100 xs-flex xs-flex-wrap">
    <aside class="CR-Filter xs-w90 md-w32 lg-w25">
        
			<form method="POST" action="propiedades.php" class="xs-w100 xs-flex xs-flex-wrap xs-jc-space-around">
				<select name="" id="" placeholder="Localizacion" class="xs-w90">
                    <?php 
                        include 'FilterLoader.php'; 
                        filterLoader('1');
                    ?>
                </select>
				<select name="" id="" placeholder="Compra/Venta" class="xs-w90">
                    <?php 
                        filterLoader('2');
                    ?>
                </select>
				<select name="" id="" placeholder="Tipo de Propiedad" class="xs-w90">
                    <?php 
                        filterLoader('3');
                    ?>
                </select>
				<button class="xs-w50">Enviar</button>
			</form>

    </aside>
<!--Description -->
	<article class="CR-Description xs-w90 md-w65 lg-w73 md-flex md-flex-wrap">
	
            <div class="CR-Description-box  xs-w90">
			    <h2 class="xs-w100">Nombre de la Propiedad</h2>
                <div class="CR-Description-slides xs-w100 xs-flex xs-flex-wrap xs-jc-space-between">
                <img src="http://www.myhomeimprovementmag.com/wp-content/uploads/2016/10/71.jpg" alt="" class="mySlides fade CR-Description-img xs-w100">
                <img src="" alt="" class="mySlides fade CR-Description-img xs-w100">
                <img src="" alt="" class="mySlides fade CR-Description-img xs-w100">
                <img src="" alt="" class="mySlides fade CR-Description-img xs-w100">
 				<button class="Arrow-left fa fa-arrow-circle-left fa-2x" onclick=" plusDivs(-1)"></button>
				<button  class="Arrow-right fa fa-arrow-circle-right fa-2x" onclick=" plusDivs(1)"></button> 
				</div>
 			<div class="Dots-img xs-w100 xs-flex xs-flex-wrap xs-jc-space-between">
				<div class="xs-w24" onclick="currentSlide(1)">
                    <img src="http://www.myhomeimprovementmag.com/wp-content/uploads/2016/10/71.jpg" alt="" class="Thumbnails xs-w100">
                </div> 
  				<div class="xs-w24" onclick="currentSlide(2)">
                    <img src="" alt="" class="Thumbnails xs-w100">
                </div> 
 				<div class="xs-w24" onclick="currentSlide(3)">
                    <img src="" alt="" class="Thumbnails xs-w100">
                </div> 
               <div class="xs-w24" onclick="currentSlide(4)">
                    <img src="" alt="" class="Thumbnails xs-w100">
                </div> 
			</div>
            </div>
                
				<?php 
                        include 'itemSetter.php'; 
                ?>
			</div>
			</div>
<!-- propiedades relacionadas -->
	    <section class="xs-w100 md-flex md-flex-wrap  md-jc-space-between">
            <h2 class="xs-w100">Propiedades Relacionadas</h2>
            <div class="CR-Desarollos-box  xs-w75 md-w45 lg-w30">
				<div class="CR-Desarollos-boxTitle xs-w100">Ubicación</div>
				<img src="" alt="" class="CR-Desarollos-img xs-w100">
				<div class="CR-Desarollo-content xs-w90 xs-flex xs-flex-wrap xs-jc-space-between">
				<h4 class="xs-w100">Nombre del Desarollo 1 </h4>
				<p class="xs-w75">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sit amet erat ex. Duis nunc quam, dignissim volutpat maximus in, aliquam in orci. Integer vel dolor sed purus pharetra lobortis. Vivamus dui velit, porttitor eget mi ac, blandit dignissim quam. Fusce semper elit sed dignissim porttitor.</p>
				<div class="CR-Icons xs-w20 xs-flex xs-flex-wrap">
				<div class="xs-w90">Área<div class="u-area-icon"></div>
				<div class="xs-w90">Nro Hab.<i class="fa fa-bed fa-2x" aria-hidden="true"></i></div>
				<div class="xs-w90">Nro Bañ.<i class="fa fa-bath fa-2x"></i></div>
				</div>
				</div>
				</div>
			</div>

			<div class="CR-Desarollos-box  xs-w75 u-xs-none u-md-block xs-w75 md-w45 lg-w30">
				<div class="CR-Desarollos-boxTitle xs-w100">Ubicación</div>
				<img src="" alt="" class="CR-Desarollos-img xs-w100">
				<div class="CR-Desarollo-content  xs-w90 xs-flex xs-flex-wrap xs-jc-space-between">
				<h4 class="xs-w100">Nombre del Desarollo 2</h4>
				<p class="xs-w75">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sit amet erat ex. Duis nunc quam, dignissim volutpat maximus in, aliquam in orci. Integer vel dolor sed purus pharetra lobortis. Vivamus dui velit, porttitor eget mi ac, blandit dignissim quam. Fusce semper elit sed dignissim porttitor.</p>
				<div class="CR-Icons xs-w20 xs-flex xs-flex-wrap">
				<div class="xs-w90">Área<div class="u-area-icon"></div>
				<div class="xs-w90">Nro Hab.<i class="fa fa-bed fa-2x" aria-hidden="true"></i></div>
				<div class="xs-w90">Nro Bañ.<i class="fa fa-bath fa-2x"></i></div>
				</div>
				</div>
				</div>
			</div>

			<div class="CR-Desarollos-box  xs-w75 u-xs-none u-lg-block xs-w75 md-w45 lg-w30">
				<div class="CR-Desarollos-boxTitle xs-w100">Ubicación</div>
				<img src="" alt="" class="CR-Desarollos-img xs-w100">
				<div class="CR-Desarollo-content xs-w90 xs-flex xs-flex-wrap xs-jc-space-between">
				<h4 class="xs-w100">Nombre del Desarollo 3</h4>
				<p class="xs-w75">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sit amet erat ex. Duis nunc quam, dignissim volutpat maximus in, aliquam in orci. Integer vel dolor sed purus pharetra lobortis. Vivamus dui velit, porttitor eget mi ac, blandit dignissim quam. Fusce semper elit sed dignissim porttitor.</p>
				<div class="CR-Icons xs-w20 xs-flex xs-flex-wrap">
				<div class="xs-w90">Área<div class="u-area-icon"></div>
				<div class="xs-w90">Nro Hab.<i class="fa fa-bed fa-2x" aria-hidden="true"></i></div>
				<div class="xs-w90">Nro Bañ.<i class="fa fa-bath fa-2x"></i></div>
				</div>
				</div>
				</div>
			</div>	
			
            <button href="#" class="CR-More xs-w100 xs-jc-flex-end">Ver +</button>

		</section>
	</article>
</main>
	
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
     <script src="./js/slider_descrip.js"></script>
</body>
</html>