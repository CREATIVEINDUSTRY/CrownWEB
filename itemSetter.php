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
            echo '<div class="xs-w90 xs-flex xs-flex-wrap"><div class="u-area-icon"></div>'.$row["area"].' m2';
            echo '<div class="xs-w90"><div class="u-rooms-icon"></div>'.$row["rooms"].' hab.</div>';
            echo '<div class="xs-w90"><div class="u-bath-icon"></div>'.$row["bathrooms"].' baños</div>';
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