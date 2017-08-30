<?php
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
            
            echo '<div class="CR-Description-box  xs-w90 xs-flex xs-flex-wrap xs-jc-space-between">';
            echo '<h2 class="xs-w85">'.$row["title"].'</h2>  <a href="javascript:window.print();"  class="print xs-w15 hidden-print"><i class="fa fa-print fa-2x"></i></a> ' ;
            echo '<div class="CR-Description-slides xs-w100 xs-flex xs-flex-wrap xs-jc-space-between">';

            $sql = 'SELECT * FROM Images WHERE itemID = '.$row["itemID"].'';
            $result = $GLOBALS['conection']->query($sql);
            if ($result->num_rows > 0) {
                $counter = 1;
                while($rowImage = $result->fetch_assoc()) {
                    if ($counter == 1 && $rowImage["videoUrl"] != "") {
                        echo '<iframe width="420" height="315" src="https://www.youtube.com/embed/'.$rowImage["videoUrl"].'" class="mySlides fade CR-Description-img xs-w100 mySlides"> </iframe>';
                    } else {
                        echo '<img src="'.$rowImage["urlString"].'" alt="" onclick="openModal();currentSlide('.$counter.')" class="mySlides fade CR-Description-img xs-w100 mySlides">';
                    }
                    $counter = $counter + 1;    
                }
                echo '<button class="Arrow-left fa fa-arrow-circle-left fa-2x hidden-print" onclick=" plusDivs(-1)">';
                echo '</button>';
                echo '<button  class="Arrow-right fa fa-arrow-circle-right fa-2x hidden-print" onclick=" plusDivs(1)">';
                echo '</button>';
                echo '</div>';
                echo '<div class="Dots-img xs-w100 xs-flex xs-flex-wrap xs-jc-space-between">';

                $sql = 'SELECT * FROM Images WHERE itemID = '.$row["itemID"].'';
                $result = $GLOBALS['conection']->query($sql);
                $counter = 1;

                while($rowImage = $result->fetch_assoc()) {
                    echo '<div class="xs-w24" onclick="currentSlide('.$counter.')">';
                    echo '<img src="'.$rowImage["urlString"].'"';
                    echo 'alt="" class="Thumbnails xs-w100">';
                    echo '</div> ';
                    $counter = $counter + 1;
                }
            }else {
                echo '<img src="" alt="" class="mySlides fade CR-Description-img xs-w100">';
                echo '<img src="" alt="" class="mySlides fade CR-Description-img xs-w100">';
                echo '<img src="" alt="" class="mySlides fade CR-Description-img xs-w100">';
                 echo '<button class="Arrow-left fa fa-arrow-circle-left fa-2x" onclick=" plusDivs(-1)">';
                echo '</button>';
                echo '<button  class="Arrow-right fa fa-arrow-circle-right fa-2x" onclick=" plusDivs(1)">';
                echo '</button>';
                echo '</div>';
                echo '<div class="Dots-img xs-w100 xs-flex xs-flex-wrap xs-jc-space-between">';
                echo '<div class="xs-w24" onclick="currentSlide(1)">';
                echo '<img src="http://www.myhomeimprovementmag.com/wp-content/uploads/2016/10/71.jpg"';
                echo 'alt="" class="Thumbnails xs-w100">';
                echo '</div> ';
                echo '<div class="xs-w24" onclick="currentSlide(2)">';
                echo '<img src="" alt="" class="Thumbnails xs-w100">';
                echo '</div>';
                echo '<div class="xs-w24" onclick="currentSlide(3)">';
                echo '<img src="" alt="" class="Thumbnails xs-w100">';
                echo '</div> ';
                echo '<div class="xs-w24" onclick="currentSlide(4)">';
                echo '<img src="" alt="" class="Thumbnails xs-w100">';
                echo '</div> ';
            }
            echo '</div> ';
            echo '</div> ';
            
            
            echo '<div class="CR-Description-boxTitle xs-w90"> $ '.number_format($row["price"], 2).' </div>';
            echo '<div class="CR-Desarollo-content xs-w90 xs-flex xs-flex-wrap xs-jc-space-between">';
            echo '<h4 class="xs-w100">'.$row["title"].' </h4>';
            echo '<p class="xs-w75">'.$row["description"].'</p>';
            echo '<div class="CR-Icons xs-w20 xs-flex xs-flex-wrap">';
            echo '<div class="ic xs-w90 xs-flex xs-flex-wrap">'.$row["area"].'<div class="u-area-icon"></div>';
            echo '<div class="ic xs-w90 xs-flex xs-flex-wrap">'.$row["rooms"].'<div class="u-rooms-icon"></div></div>';
            echo '<div class="ic xs-w90 xs-flex xs-flex-wrap">'.$row["bathrooms"].'<div class="u-bath-icon"></div></div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            
            echo '<div id="myModalA" class="modalA" >';
            echo '<span class="close cursor" onclick="closeModal()">&#935;</span>';
            echo '<div class="modal-contentA">';
            
            $sql = 'SELECT * FROM Images WHERE itemID = '.$row["itemID"].'';
                $result = $GLOBALS['conection']->query($sql);
                $counter = 1;

                while($rowImage = $result->fetch_assoc()) {
                    echo '<div class="mySlidesA">';
                    echo '<div class="numbertextA">1 / 4</div>';
                    echo '<img src="'.$rowImage["urlString"].'" style="width:100%">';
                    echo '</div> ';
                    $counter = $counter + 1;
                }
            echo '<a class="closeA" onclick="closeModal()">&#935;</a>';
            echo '<a class="prevA" onclick="plusSlidesDetail(-1)">&#10094;</a>';
            echo '<a class="nextA" onclick="plusSlidesDetail(1)">&#10095;</a>';
            echo '<div class="caption-containerA">';
            echo '<p id="captionA"></p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            
            print '
            
            
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
            echo '<script>';
            echo 'function initMap() {';
            echo 'var uluru = {lat: '.$row["loc_x"].', lng: '.$row["loc_y"].'};';
            echo 'var map = new google.maps.Map(document.getElementById("map"), {';
            echo 'zoom: 15,';
            echo 'center: uluru';
            echo '});';
            echo 'var marker = new google.maps.Marker({';
            echo 'position: uluru,';
            echo 'map: map';
            echo '});';
            echo '}';
            echo '</script>';
            echo '<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAuLWXc3ox9cSaat3FxyVmAeCCA6_dWGbA&callback=initMap">';
            echo '</script>';
            
        }
    } else {
        //need to change 
        echo "0 results";
    }
    $GLOBALS['conection']->close();     
?>