<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Crown Bienes Raices</title>
    <meta name="description" content="PRIMER Y ÚNICA INMOBILIARIA
ESPECIALIZADA EN BOSQUE REALCON MÁS DE 25 AÑOS DE EXPERIENCIA EN EL RAMO INMOBILIARIO">
	<link rel="shortcut icon" type="image/x-icon" href="./img/crown.ico">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hamburgers/0.7.0/hamburgers.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="./css/navigation.css">
    <link rel="stylesheet" href="./css/my_framework.css">
    <link rel="stylesheet" href="./css/style.css">
	<link rel="stylesheet" href="./css/formularios.css">
	<link rel="stylesheet" href="./css/style_slider.css">
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
<!-- contacto -->
    <main class="CR-Contacto  container-fluid u-margin-top">
<!-- formulario de publicar -->

		<div class="container xs-w90 xs-flex xs-flex-wrap">
		
        <article class="CR-Form xs-w90 lg-w60">
       	<h3>¡Contáctanos!</h3>
		   <div class="CR-ServiceLine"></div>
		   
    <form role="form" id="feedbackForm" class="container xs-w100 lg-w85">
		<div class="xs-w90  form-group">
			<input type="text" name="nombre" title="Tu nombre" placeholder="Escribe tu nombre y apellido"  class="CR-Form-input form-control xs-w100" required>
			<span class="help-block xs-w100" style="display: none;">Por favor, escriba su nombre.</span>
		</div>
		<div class="xs-w90 form-group">
			<input type="email" name="email" title="Tu email" placeholder="Escribe tu email" pattern="[\w-\.]+@([\w-]+\.)+[\w-]{2,4}" class="CR-Form-input form-control xs-w100"  required>
			<span class="help-block xs-w100" style="display: none;">Por favor, introduzca una dirección de correo electrónico válida.</span>
		</div>
		<div class="xs-w90 form-group">
			<input  type="text" placeholder="Teléfono" required name="phone" pattern=".{10,}" class="CR-Form-input form-control xs-w100"><span class="help-block xs-w100" style="display: none;">Por favor, introduzca un telefono válido.</span>
		</div>
		<div class="xs-w90 form-group">
			<select name="Estado" class="CR-Form-input form-control xs-w100">
				<option value="Aguascalientes">Aguascalientes</option>
				<option value="Baja California">Baja California </option>
				<option value="Baja California Sur">Baja California Sur </option>
				<option value="Campeche">Campeche </option>
				<option value="Chiapas">Chiapas </option>
				<option value="Chihuahua">Chihuahua </option>
				<option value="Coahuila">Coahuila </option>
				<option value="Colima">Colima </option>
				<option value="Distrito Federal">Distrito Federal</option>
				<option value="Durango">Durango </option>
				<option value="Estado de México">Estado de México </option>
				<option value="Guanajuato">Guanajuato </option>
				<option value="Guerrero">Guerrero </option>
				<option value="Hidalgo">Hidalgo </option>
				<option value="Jalisco">Jalisco </option>
				<option value="Michoacán">Michoacán </option>
				<option value="Morelos">Morelos </option>
				<option value="Nayarit">Nayarit </option>
				<option value="Nuevo León">Nuevo León </option>
				<option value="Oaxaca">Oaxaca </option>
				<option value="Puebla">Puebla </option>
				<option value="Querétaro">Querétaro </option>
				<option value="Quintana Roo">Quintana Roo </option>
				<option value="San Luis Potosí">San Luis Potosí </option>
				<option value="Sinaloa">Sinaloa </option>
				<option value="Sonora">Sonora </option>
				<option value="Tabasco">Tabasco </option>
				<option value="Tamaulipas">Tamaulipas </option>
				<option value="Tlaxcala">Tlaxcala </option>
				<option value="Veracruz">Veracruz </option>
				<option value="Yucatán">Yucatán </option>
				<option value="Zacatecas">Zacatecas</option>
			</select>
			<span class="help-block xs-w100" style="display: none;">Por favor, introduzca una localidad válida.</span>
		</div>
		<div class="xs-w90 form-group">
			<input type="text" name="vender/comprar" title="Quiero vender o comprar un inmueble" placeholder="Quiero vender o comprar un inmueble" class="CR-Form-input form-control xs-w100" required>
			<span class="help-block xs-w100" style="display: none;">Por favor, introduzca el motivo por el que nos contacta.</span>
		</div>
		<div class="xs-w90 form-group">
			<textarea name="comentarios" title="Tus comentarios" placeholder="Escribe tus comentarios" rows="7" class="CR-Form-input form-control xs-w100" required></textarea>
			<span class="help-block xs-w100" style="display: none;">Por favor, introduzca un mensaje.</span>
		</div>

		<div class="CR-Form-img xs-w90 xs-flex md-flex-wrap">
            	<img class="xs-w70 md-w33" id="captcha" src="./img/library/vender/securimage/securimage_show.php" alt="CAPTCHA Image" />
				<a href="#" onclick="document.getElementById('captcha').src = './img/library/vender/securimage/securimage_show.php?' + Math.random(); return false" class="button-refresh xs-w25 xs-w20 xs-as-flex-start"><i class="fa fa-refresh fa-2x"></i></a>
		</div>
		<div class="xs-w90 form-group xs-flex xs-flex-wrap" style="margin-top: 10px;" >
            	<input type="text" class="CR-Form-input form-control xs-w100" name="captcha_code" id="captcha_code" placeholder="Por favor ingrese el código que aparece en el cuadro." />
            	<span class="help-block xs-w100" style="display: none;">Por favor introduce el código que aparece en la imagen.</span>
		</div>
		
			<button type="submit" id="feedbackSubmit" class=" button xs-w100 md-w45 "  data-loading-text="Enviando..." >Enviar</button>
		
	</form>
    </article>
<!-- mapa -->
		<div class="xs-w100 lg-w40">
        <h2 class="container xs-w100">Nuestra Ubicación</h2>
		<div id="gmaps" class="CR-Contacto-map container xs-w90 xs-flex xs-jc-flex-end"></div>
        <!-- datos de contacto -->
        <article class="CR-Contacto-data container xs-w90">
            <section class="CR-Contacto-location xs-w75 xs-flex xs-flex-wrap">
                <div class="CR-Contacto-locationIcon xs-w100 lg-w25"><i class="fa fa-map-marker fa-2x"></i></div>
                <div class="CR-Contacto-locationText xs-w100 lg-w75">
                    <p class="xs-w95">Plaza Comercial El Trípode, Boulevard Bosque Real, Mz V, Lote 85, Local PH 1. Huixquilucan. Estado de México CP: 52774</p>
                </div>
            </section>
            <div class="xs-w100 u-line"></div>
            <section class="CR-Contacto-phone xs-w75 xs-flex xs-flex-wrap">
                <div class="CR-Contacto-phoneIcon xs-w100 lg-w25"><i class="fa fa-phone fa-2x"></i></div>
                <div class="CR-Contacto-phoneText xs-w100 lg-w75">
                    <h4>Teléfono</h4>
                    <p class="xs-w95">9015 3623</p>
                </div>
            </section>
            <div class="xs-w100 u-line"></div>
        </article>
		</div>
 
	</div>
	</main>

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
	<script src="./js/contacto.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<script src="./js/assets/vender/intl-tel-input/js/intlTelInput.min.js"></script>
    <script src="./js/assets/js/contact-form.js"></script>

</body>
</html>