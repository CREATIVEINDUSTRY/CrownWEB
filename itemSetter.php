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
            echo '<div class="CR-Description-boxTitle xs-w90">'.$row["neighborhood"].'</div>';
            echo '<div class="CR-Desarollo-content xs-w90 xs-flex xs-flex-wrap xs-jc-space-between">';
            echo '<h4 class="xs-w100">'.$row["title"].' </h4>';
            echo '<p class="xs-w75">'.$row["description"].'</p>';
            echo '<div class="CR-Icons xs-w20 xs-flex xs-flex-wrap">';
            echo '<div class="xs-w90 xs-flex xs-flex-wrap">'.$row["area"].'<div class="u-area-icon"></div>';
            echo '<div class="xs-w90">'.$row["rooms"].'<i class="fa fa-bed fa-2x"></i></div>';
            echo '<div class="xs-w90">'.$row["bathrooms"].'<i class="fa fa-bath fa-2x"></i></div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
                    
        }
    } else {
        //need to change 
        echo "0 results";
    }
    $GLOBALS['conection']->close();     
?>