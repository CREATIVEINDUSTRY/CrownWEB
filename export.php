<?php 

// include autoloader
require './export/dompdf/autoload.inc.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
//$dompdf->loadHtml(ob_get_clean());

//$page =  file_get_contents ('../description.php?itemID=7');

$output = '
<head>
   
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_slider.css">
    <link rel="stylesheet" media="print" href="css/print.css">
    <style>
    body {
        -webkit-print-color-adjust: exact;
        color: #000;
      }

      .hidden-print {
        display: none;
    }

    .CR-head {
        display: block;
        color: #000;
        margin: auto;
    }

    .CR-head .logo {
        height: 1.5rem;
    }

    .u-margin-top {
        margin-top: -1rem;
    }

    .CR-Description-box h2 {
        font-size: 1.2rem;
    }



    .CR-Description-slides {
        width: 70%;
        height: 20rem;
    }

    .CR-Description-img {
        width: 100%;
        height: 20rem;
    }

    .Dots-img {
        width: 28%;
    }

    .Dots-img div {
        width: 47%;
    }

    .Thumbnails {
        height: 5rem;
        opacity: 1;
    }

    .CR-Description-boxTitle {
        width: 100%;
    }


    .overflow h2 {
        font-size: .9rem;
    }

    .CR-Desarollo-content {
        width: 50%;
        align-content: flex-start;
    }

    .ubic {
        width: 45%;
    }

    #map {
        width: 100%;
        height: 200px;
    }


    .Contacto {
        display: block;
        width: 100%;
    }

    .Contacto p {
        font-size: .8rem;
    }
    
    .Contacto span {
        font-weight: bold;
    }

    .CR-ServiceLine {
        display: block;
    }
  </style>
</head>
<body>
	<div class="CR-head xs-flex xs-flex-wrap hidden-screen xs-w90">
		<a href="index.php" class="logo xs-w35"><img src="img/head.png" alt="" class="xs-w100"></a>
</div>
<main class="CR-Main container u-margin-top xs-w100 xs-flex xs-flex-wrap">';

include 'databaseconfig.php';

$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$parts = parse_url($url);
parse_str($parts['query'], $query);
$itemID = $query['itemID'];
$sql = 'SELECT * FROM items WHERE idcrown = '.$itemID.'';
$result = $GLOBALS['conection']->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $output = 
        '<div class="CR-Description-box  xs-w90 xs-flex xs-flex-wrap xs-jc-space-between">
                    <h2 class="xs-w85">'.$row["title"].'</h2>  <a href="javascript:window.print();"  class="print xs-w15 hidden-print"><i class="fa fa-print fa-2x"></i></a> <div class="CR-Description-slides xs-w100 xs-flex xs-flex-wrap xs-jc-space-between">';

        $sql = 'SELECT * FROM Images WHERE itemID = '.$row["itemID"].'';
        $result = $GLOBALS['conection']->query($sql);
        
        if ($result->num_rows > 0) {
            $counter = 1;
            while($rowImage = $result->fetch_assoc()) {
                $output .= '<img src="'.$rowImage["urlString"].'" alt="" class="mySlides fade CR-Description-img xs-w100 mySlides">';
                $counter = $counter + 1;
            }
            $output .= '<button class="Arrow-left fa fa-arrow-circle-left fa-2x hidden-print" onclick=" plusDivs(-1)"></button>
            <button  class="Arrow-right fa fa-arrow-circle-right fa-2x hidden-print" onclick=" plusDivs(1)"></button>
            </div><div class="Dots-img xs-w100 xs-flex xs-flex-wrap xs-jc-space-between">';

            $sql = 'SELECT * FROM Images WHERE itemID = '.$row["itemID"].'';
            $result = $GLOBALS['conection']->query($sql);
            $counter = 1;

            while($rowImage = $result->fetch_assoc()) {
                $output .= '<div class="xs-w24" onclick="currentSlide('.$counter.')"><img src="'.$rowImage["urlString"].'"alt="" class="Thumbnails xs-w100"></div> ';
                $counter = $counter + 1;
            }
        }else {
            $output .= '<img src="" alt="" class="mySlides fade CR-Description-img xs-w100">
            <img src="" alt="" class="mySlides fade CR-Description-img xs-w100">
           <img src="" alt="" class="mySlides fade CR-Description-img xs-w100">
            <button class="Arrow-left fa fa-arrow-circle-left fa-2x" onclick=" plusDivs(-1)">
            </button>
            <button  class="Arrow-right fa fa-arrow-circle-right fa-2x" onclick=" plusDivs(1)">
            </button>
            </div>
            <div class="Dots-img xs-w100 xs-flex xs-flex-wrap xs-jc-space-between">
            <div class="xs-w24" onclick="currentSlide(1)">
            <img src="http://www.myhomeimprovementmag.com/wp-content/uploads/2016/10/71.jpg"
            alt="" class="Thumbnails xs-w100">
            </div>
            <div class="xs-w24" onclick="currentSlide(2)">
            <img src="" alt="" class="Thumbnails xs-w100">
           </div>
            <div class="xs-w24" onclick="currentSlide(3)">
            <img src="" alt="" class="Thumbnails xs-w100">
            </div>
            <div class="xs-w24" onclick="currentSlide(4)">
            <img src="" alt="" class="Thumbnails xs-w100">
            </div> ';
        }
        $output .= '</div> 
       </div> ';
        
        
       $output .= '<div class="CR-Description-boxTitle xs-w90"> $ '.number_format($row["price"], 2).'.00 </div>
        <div class="CR-Desarollo-content xs-w90 xs-flex xs-flex-wrap xs-jc-space-between">
        <h4 class="xs-w100">'.$row["title"].' </h4>
        <p class="xs-w75">'.$row["description"].'</p>
        <div class="CR-Icons xs-w20 xs-flex xs-flex-wrap">
        <div class="ic xs-w90 xs-flex xs-flex-wrap">'.$row["area"].'<div class="u-area-icon"></div>
        <div class="ic xs-w90 xs-flex xs-flex-wrap">'.$row["rooms"].'<div class="u-rooms-icon"></div></div>
        <div class="ic xs-w90 xs-flex xs-flex-wrap">'.$row["bathrooms"].'<div class="u-bath-icon"></div></div>
        </div>
        </div>
        </div>
        
        <div id="myModalA" class="modalA" >
        <span class="close cursor" onclick="closeModal()">&#935;</span>
        <div class="modal-contentA">';
        
        $sql = 'SELECT * FROM Images WHERE itemID = '.$row["itemID"].'';
            $result = $GLOBALS['conection']->query($sql);
            $counter = 1;

            while($rowImage = $result->fetch_assoc()) {
                $output .= '<div class="mySlidesA">
                <div class="numbertextA">1 / 4</div>
                <img src="'.$rowImage["urlString"].'" style="width:100%">
                </div> ';
                $counter = $counter + 1;
            }
            $output .='<a class="closeA" onclick="closeModal()">&#935;</a>
        <a class="prevA" onclick="plusSlidesDetail(-1)">&#10094;</a>
        <a class="nextA" onclick="plusSlidesDetail(1)">&#10095;</a>
        <div class="caption-containerA">
        <p id="captionA"></p>
        </div>
        </div>
       </div>';
        
       $output .= '
        
        
        <div class="ubic xs-flex xs-flex-wrap xs-w100 xs-jc-space-between">
            <div class="overflow xs-w100">
                 <div class="section-heading-outer m-b-15">
                    <div class="col-lg-12 text-center">
                       <h2 class="section-heading xs-w100">Ubicación</h2>
                    </div>
                  </div>
                </div>
              
                <div id="map" class="xs-w100 lg-w35"></div>
                <article class="CR-Form Service container xs-w100 lg-w61 xs-flex xs-flex-wrap xs-jc-space-between hidden-print">
                <div class="CR-Form-text xs-w95 lg-w35">
                    <h2>¡Contáctanos!</h2>
                    <div class="CR-ServiceLine"></div>
                    <div class="xs-w100">
                        <p>¿Desea más información de nuestros servicios? Mándenos un correo con sus datos para referirlo con un de nuestros asesores. <br><br>
                        Agradecemos su preferencia, en Crown Bienes Raíces, estamos para servirle.<br> <br>
                        Línea de Soporte: <br>
                        <span>9015 3623</span>
                        </p>
                    </div>
                </div>

                <form role="form" id="feedbackForm" class="xs-w95 md-w60">   
                    <div class="xs-w90  form-group xs-flex xs-flex-wrap">
                        <input type="text" class="CR-Form-input form-control xs-w100" id="name" name="name" placeholder="Introduzca su nombre*"  pattern="[A-Za-zÑñÁáÉéÍíÓóÚúÜü\s]+">
                          <span class="help-block xs-w100" style="display: none;">Por favor, escriba su nombre.</span>
                    </div>
        
                    <div class="xs-w90  form-group  xs-flex xs-flex-wrap">
                        <input type="email" class="CR-Form-input form-control xs-w100" id="email" name="email" placeholder="Introduzca su correo electrónico*" >
                        <span class="help-block xs-w100" style="display: none;">Por favor, introduzca una dirección de correo electrónico válida.</span>
                    </div>
                     
                    <div class="xs-w90 form-group xs-flex xs-flex-wrap">
                        <input name="reason" class="CR-Form-input form-control xs-w100" placeholder="Introduzca su asunto*"/>
                        <span class="help-block xs-w100" style="display: none;">Por favor, introduzca el motivo por el que nos contacta.</span>
                    </div>
        
                     <div class="xs-w90 form-group">
                        <textarea class="CR-Form-input form-control xs-w100" id="message" name="message" placeholder="Introduzca su mensaje*"  rows="7" required ></textarea> 
                          <span class="help-block xs-w100" style="display: none;">Por favor, introduzca un mensaje.</span>
                    </div>
        
                    <div class="CR-Form-img xs-w90 xs-flex md-flex-wrap">
                        <img class="xs-w70 md-w50" id="captcha" src="./img/library/vender/securimage/securimage_show.php" alt="CAPTCHA Image" />
                        <a href="#" onclick="document.getElementById("captcha").src = "./img/library/vender/securimage/securimage_show.php?" + Math.random(); return false" class="button-refresh xs-w25 xs-w20 xs-as-flex-start"><i class="fa fa-refresh fa-2x"></i></a>
                    </div>
        
                    <div class="xs-w90 form-group xs-flex xs-flex-wrap" style="margin-top: 10px;" >
                        <input type="text" class="CR-Form-input form-control xs-w100" name="captcha_code" id="captcha_code" placeholder="Por favor ingrese el código que aparece en el cuadro." />
                        <span class="help-block xs-w100" style="display: none;">Por favor introduce el código que aparece en la imagen.</span>
                    </div>
                    
                    <button type="submit" id="feedbackSubmit" class=" button xs-w100 md-w45 "  data-loading-text="Enviando..." >Enviar</button>

                    <input type="hidden" name="proyecto_id" value="' .$row["itemID"]. '">
                    
                    <a href="./export/export.php?= ' .$row["itemID"]. '">Descargar</a>
                  </form>
        
                
            </article>
                <div class="Contacto xs-w40 hidden-screen xs-flex xs-flex-wrap">
                <p>¿Desea más información de nuestros servicios? Mándenos un correo con sus datos para referirlo con un de nuestros asesores. <br><br>
                Agradecemos su preferencia, en Crown Bienes Raíces, estamos para servirle.<br> <br>
                Línea de Soporte: <br>
                <span>9015 3623</span>
                </p>
                </div>
    </div>
        
        
        ';
        $output .= '<script>
       function initMap() {
        var uluru = {lat: '.$row["loc_x"].', lng: '.$row["loc_y"].'};
        var map = new google.maps.Map(document.getElementById("map"), {
        zoom: 15,
        center: uluru
        });
       var marker = new google.maps.Marker({
        position: uluru,
        map: map
        });
      }
        </script>
       <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAuLWXc3ox9cSaat3FxyVmAeCCA6_dWGbA&callback=initMap">
       </script>

       </body>
       </html>
       ';
        
    }
} else {
    //need to change 
    echo "0 results";
}
$GLOBALS['conection']->close();     

    

$dompdf->loadHtml($output);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('Letter', 'portrait');

// Render the HTML as PDF
$dompdf->render();

$filename = 'crownbienesraices.pdf';

// Output the generated PDF to Browser
$dompdf->stream($filename, array("Attachment" => 0));


?>