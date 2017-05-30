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
            
            echo '<div class="CR-Description-box  xs-w90">';
            echo '<h2 class="xs-w100">'.$row["title"].'</h2>';
            echo '<div class="CR-Description-slides xs-w100 xs-flex xs-flex-wrap xs-jc-space-between">';
           
            
            
            $sql = 'SELECT * FROM Images WHERE itemID = '.$row["itemID"].'';
            $result = $GLOBALS['conection']->query($sql);
            if ($result->num_rows > 0) {
                $counter = 1;
                while($rowImage = $result->fetch_assoc()) {
                    echo '<img src="'.$rowImage["urlString"].'" alt="" onclick="openModal();currentSlide('.$counter.')" class="mySlides fade CR-Description-img xs-w100 mySlides">';
                    $counter = $counter + 1;
                }
                echo '<button class="Arrow-left fa fa-arrow-circle-left fa-2x" onclick=" plusDivs(-1)">';
                echo '</button>';
                echo '<button  class="Arrow-right fa fa-arrow-circle-right fa-2x" onclick=" plusDivs(1)">';
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
            
            
            echo '<div class="CR-Description-boxTitle xs-w90"> $ '.number_format($row["price"], 2).'.00 </div>';
            echo '<div class="CR-Desarollo-content xs-w90 xs-flex xs-flex-wrap xs-jc-space-between">';
            echo '<h4 class="xs-w100">'.$row["title"].' </h4>';
            echo '<p class="xs-w75">'.$row["description"].'</p>';
            echo '<div class="CR-Icons xs-w20 xs-flex xs-flex-wrap">';
            echo '<div class="xs-w90 xs-flex xs-flex-wrap">'.$row["area"].'<div class="u-area-icon"></div>';
            echo '<div class="xs-w90">'.$row["rooms"].'<div class="u-rooms-icon"></div></div>';
            echo '<div class="xs-w90">'.$row["bathrooms"].'<div class="u-bath-icon"></div></div>';
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
            
            echo '<div class="overflow">';
            echo '<div class="section-heading-outer m-b-15">';
            echo '<div class="col-lg-12 text-center">';
            echo '<h2 class="section-heading">Ubicación</h2>';
            echo '</div></div></div>';
            echo '<style>';
            echo '#map {';
            echo 'width: 100%;';
            echo 'height: 400px;';
            echo 'background-color: grey;';
            echo '}';
            echo '</style>';
            echo '<div id="map"></div>';
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