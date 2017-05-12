<?php
/**
Load the selected filter result
**/
    include 'databaseconfig.php';
    if(isset($_POST["locationF"])){
        $locationID = $_POST["locationF"];
        $typeID = $_POST["typeF"];
        $operationID = $_POST["operationF"];    
        $sql = 'SELECT * FROM items WHERE type = '.$typeID.' AND operation = '.$operationID.' AND neighborhoodID = '.$locationID.'';

    } else {
        $sql = 'SELECT * FROM items';

    }
    
    $result = $GLOBALS['conection']->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo '<div onclick="window.open(\'descripcion.php?itemID='.$row["idcrown"].'\',\'_self\')" class="CR-Desarollos-box  xs-w75 md-w45 lg-w32">';
            echo '<div class="CR-Desarollos-boxTitle xs-w100">'.$row["neighborhood"].'</div>';
            echo '<img src="'.$row["urlImage"].'" alt="" class="CR-Desarollos-img xs-w100">';
            echo '<div class="CR-Desarollo-content xs-w90 xs-flex xs-flex-wrap xs-jc-space-between">';
            echo '<h4 class="xs-w100">'.$row["title"].'</h4>';
            echo '<p class="xs-w75">'.$row["description"].'</p>';
            echo '<div class="CR-Icons xs-w20 xs-flex xs-flex-wrap">';
            echo '<div class="xs-w75"><div class="u-area-icon"></div>'.$row["area"].'m2';
            echo '<div class="xs-w75"><div class="u-rooms-icon"></div>'.$row["rooms"].' hab.</div>';
            echo '<div class="xs-w75"><div class="u-bath-icon"></div>'.$row["bathrooms"].' baños</div>';
            echo '</div>';
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