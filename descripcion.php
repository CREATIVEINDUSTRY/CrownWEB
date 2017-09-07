<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1,  minimum-scale=1, maximum-scale=1">
    <meta charset="UTF-8">
    <title>Crown Bienes Raíces - Propiedades</title>
    <meta name="description" content="PRIMER Y ÚNICA INMOBILIARIA
ESPECIALIZADA EN BOSQUE REAL CON MÁS DE 25 AÑOS DE EXPERIENCIA EN EL RAMO INMOBILIARIO">
    <link rel="shortcut icon" type="image/x-icon" href="./img/crown.ico">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hamburgers/0.7.0/hamburgers.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="./css/navigation.css">
    <link rel="stylesheet" href="./css/my_framework.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/style_slider.css">
	<link rel="stylesheet" href="./css/filter.css">
	<link rel="stylesheet" href="./css/footer.css">
	<link rel="stylesheet" href="./css/modal_box.css">
	<link rel="stylesheet" href="./css/formularios-desc.css">
	<link rel="stylesheet" media="print" href="./css/print.css">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.1.2/css/swiper.min.css">



</head>
<body>
<header class="CR-Header container-fluid hidden-print">
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
			<span class="CR-Panel-button hidden-print">
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
	<div class="CR-head xs-flex xs-flex-wrap hidden-screen xs-w90">
		<a href="index.php" class="logo xs-w35"><img src="./img/head.png" alt="" class="xs-w100"></a>
</div>
<main class="CR-Main container u-margin-top xs-w100 xs-flex xs-flex-wrap">
	
<!-- Aside Filter -->
    <div class="xs-w100 xs-flex xs-flex-wrap">
    <aside class="CR-Filter xs-w90 md-w32 lg-w25 hidden-print">
        
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
				<button class="xs-w50">Buscar</button>
			</form>

    </aside>
<!--Description -->
	<article class="CR-Description xs-w90 md-w65 lg-w73 xs-flex xs-flex-wrap">
                
				<?php 
                        include 'itemSetter.php'; 
                ?>
			</div>
			</div>

	</article>
</main>
	
<!-- footer -->
<footer class="CR-Contact container-fluid hidden-print" id="contacto">
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
					<a href="servicios.php#contacto" class="CR-Contact-linkV xs-w100">¡Contáctanos!</a>
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
	<p class="copy">Desarrollado por <a href="http://www.360.ci" target="_black">Creative Industry</a>.<br> &copy; 2017. Crown Bienes Raíces</p>
</div>

</footer>

	
     <!-- Initialize Swiper -->
    <script>
        
        function openModal() {
          document.getElementById('myModalA').style.display = "block";
        }
        function closeModal() {
          document.getElementById('myModalA').style.display = "none";
        }
        var slideIndex = 1;
        showSlidesDetail(slideIndex);
        function plusSlidesDetail(n) {
          showSlidesDetail(slideIndex += n);
        }
        function currentSlideDetail(n) {
          showSlidesDetail(slideIndex = n);
        }
        function showSlidesDetail(n) {
          var i;
          var slides = document.getElementsByClassName("mySlidesA");
          var dots = document.getElementsByClassName("demoA");
          var captionText = document.getElementById("captionA");
          if (n > slides.length) {slideIndex = 1}
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
          }
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";
          dots[slideIndex-1].className += " active";
          captionText.innerHTML = dots[slideIndex-1].alt;
        }
	</script>


    <script src="https://hammerjs.github.io/dist/hammer.js">
         
    </script>
    <script>
        var myElement = document.getElementById('myModalA');
        // create a simple instance
        // by default, it only adds horizontal recognizers
        var mc = new Hammer(myElement);
        // let the pan gesture support all directions.
        // this will block the vertical scrolling on a touch-device while on the element
        
        mc.on("swipeleft", function(ev) {
            plusSlidesDetail(1);
        });     
        
        mc.on("swiperight", function(ev) {
            plusSlidesDetail(-1);
        });     
    </script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.1.2/js/swiper.min.js"></script>
	<script src="./js/navigation.js"></script>
	<script src="./js/slider_descrip.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<script src="./js/assets/vender/intl-tel-input/js/intlTelInput.min.js"></script>
    <script src="./js/assets/js/contact-form.js"></script>
</body>
</html>
