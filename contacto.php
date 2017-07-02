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
					<li class="CR-Menu-itemRS xs-w55 lg-w80">
						<p>Servicio al Cliente: <span>9015 3623</span></p>
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
    
    <?php 
    if(isset($_POST['submit'])){
    $to = "ggomezleal@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['nombre'];
    $phone = $_POST['phone'];
    $type = $_POST['tipo_propiedad'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = "Nombre: " . $name . " \n Telefono :  " . $phone . "\n Tipo de propiedad : " . $type . "\n Mensaje: " . $_POST['descripcion'] . " \n Mail: " . $from . "";

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    }
    ?>
    
<!-- contacto -->
    <main class="CR-Contacto  container-fluid u-margin-top">
<!-- formulario de publicar -->

		<div class="container xs-w90 xs-flex xs-flex-wrap">
		
        <article class="CR-Form xs-w90 lg-w60">
       	<h3>Vendes tu propiedad?</h3>
		   <div class="CR-ServiceLine"></div>
		   <h2> Nosotros lo hacemos por tí!</h2>
        
        <form action="" method="post" class="container xs-w75 lg-w75">
		<div class="CR-Form-input xs-w90">
			<input type="text" name="nombre" title="Tu nombre" placeholder="Escribe tu nombre" pattern="[A-Za-zÑñÁáÉéÍíÓóÚúÜü\s]+" class="xs-w100" required>
		</div>
		<div class="CR-Form-input xs-w90">
			<input type="email" name="email" title="Tu email" placeholder="Escribe tu email" pattern="[\w-\.]+@([\w-]+\.)+[\w-]{2,4}" class="xs-w100"  required>
		</div class="CR-Form-input xs-w90">
		<div class="CR-Form-input xs-w90">
			<input type="number" name="phone" title="Teléfono" placeholder="Teléfono" class="xs-w100" required>
		</div>
		<div class="CR-Form-input xs-w90">
			<input type="text" name="tipo_propiedad" title="Tipo de Propiedad" placeholder="Tipo de Propiedad" class="xs-w100" required>
		</div>
		<div class="CR-Form-input xs-w90">
			<textarea name="descripcion" title="Descripción de la Propiedad" placeholder="Descripción de la Propiedad" rows="15" class="xs-w100" required></textarea>
		</div>
		<div class="CR-Form-button xs-w90 xs-flex xs-jc-flex-end">
			<input class="button xs-w30" name="submit" type="submit" value="Enviar">
		</div>
		<div class="preload  hidden">
			<i class="fa  fa-refresh  fa-spin  fa-2x"></i>
		</div>
		<div class="message  hidden">
			<p>Muchas gracias por tus preferencia</p>
		</div>
	</form>
    </article>
<!-- mapa -->
		<div class="xs-w100 lg-w40">
        <h2 class="container xs-w100">Contacto</h2>
		<div id="gmaps" class="CR-Contacto-map container xs-w90 xs-flex xs-jc-flex-end"></div>
        <!-- datos de contacto -->
        <article class="CR-Contacto-data container xs-w90">
            <section class="CR-Contacto-location xs-w75 xs-flex xs-flex-wrap">
                <div class="CR-Contacto-locationIcon xs-w100 lg-w25"><i class="fa fa-map-marker fa-4x"></i></div>
                <div class="CR-Contacto-locationText xs-w100 lg-w75">
                    <h4>Ubicación</h4>
                    <p class="xs-w95">Plaza Comercial El Trípode, Boulevard Bosque Real, Mz V, Lote 85, Local PH 1. Huixquilucan. Estado de México CP: 52774</p>
                </div>
            </section>
            <div class="xs-w100 u-line"></div>
            <section class="CR-Contacto-phone xs-w75 xs-flex xs-flex-wrap">
                <div class="CR-Contacto-phoneIcon xs-w100 lg-w25"><i class="fa fa-phone fa-4x"></i></div>
                <div class="CR-Contacto-phoneText xs-w100 lg-w75">
                    <h4>Télefonos</h4>
                    <p class="xs-w95">(55) 2789 0505</p>
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
								<a href="propiedades.php?operationF=1" class="CR-Contact-link xs-w20" >Venta</a>
							</li>
							<li class="CR-Contact-item xs-w100 lg-w5">
								<a href="propiedades.php?operationF=2" class="CR-Contact-link xs-w20">Renta</a>
							</li>
							<li class="CR-Contact-item xs-w100 lg-w5">
								<a href="propiedades.php" class="CR-Contact-link xs-w20">+</a>
							</li>
						</ul>
						</li>
				</ul>
				<ul class="CR-Contact-listItem xs-w45 lg-w23">
						<li class="CR-Contact-item xs-w100 ">
						Propiedades en Venta
						
							<ul class="CR-Contact-listItem">
							<li class="CR-Contact-item xs-w100 lg-w5">
								<a href="propiedades.php?typeF=1" class="CR-Contact-link xs-w20">Casa</a>
							</li>
							<li class="CR-Contact-item xs-w100 lg-w5">
								<a href="propiedades.php?typeF=2" class="CR-Contact-link xs-w20">Departamentos</a>
							</li>
							<li class="CR-Contact-item xs-w100 lg-w5">
								<a href="propiedades.php" class="CR-Contact-link xs-w20">+</a>
							</li>
						 </ul> </li>
					</ul>
				
				<ul class="CR-Contact-listItem xs-w45 lg-w23">
						<li class="CR-Contact-item xs-w100">
						Zonas Destacadas
							<ul class="CR-Contact-listItem">
							<li class="CR-Contact-item xs-w100">
								<a href="propiedades.php?locationF=4" class="CR-Contact-link xs-w20">Zona 1</a>
							</li>
							<li class="CR-Contact-item xs-w100 ">
								<a href="propiedades.php?locationF=6" class="CR-Contact-link xs-w20">Zona 2</a>
							</li>
							<li class="CR-Contact-item xs-w100">
								<a href="propiedades.php" class="CR-Contact-link xs-w20">+</a>
							</li>
						 </ul> </li>
					</ul>
				<ul class="CR-Contact-listItem xs-w45 lg-w23">
					<li class="CR-Contact-item xs-w10 lg-w5">
						<a href="contacto.php" class="CR-Contact-link xs-w20">Contacto</a>
					</li>
				</ul>
			</nav> 

			
		<div class="CR-Contact-copy"><p class="copy">Desarrollado por Creative Industry. &copy; 2017. Crown Bienes Raices</p></div>
		</div>
	</footer>

	 <script src="./js/navigation.js"></script>
	 <script src="./js/contacto.js"></script>

</body>
</html>