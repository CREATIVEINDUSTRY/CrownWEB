<?php
/**
Load the selected filter result
**/
    include 'databaseconfig.php';
    if(isset($_POST["locationF"])){
        $locationID = $_POST["locationF"];
        $typeID = $_POST["typeF"];
        $operationID = $_POST["operationF"];    
    } else {
        $locationID = 4;
        $typeID = 2;
        $operationID = 1;
    }
    
    
    $sql = 'SELECT * FROM items WHERE type = '.$typeID.' AND operation = '.$operationID.' AND neighborhoodID = '.$locationID.'';
    $result = $GLOBALS['conection']->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo '<div onclick="window.open(\'descripcion.php?itemID='.$row["idcrown"].'\',\'_self\')" class="CR-Desarollos-box  xs-w75 md-w45 lg-w30">';
            echo '<div class="CR-Desarollos-boxTitle xs-w100">'.$row["neighborhood"].'</div>';
            echo '<img src="http://www.myhomeimprovementmag.com/wp-content/uploads/2016/10/71.jpg" alt="" class="CR-Desarollos-img xs-w100">';
            echo '<div class="CR-Desarollo-content xs-w90 xs-flex xs-flex-wrap xs-jc-space-between">';
            echo '<h4 class="xs-w100">'.$row["title"].'</h4>';
            echo '<p class="xs-w75">'.$row["description"].'</p>';
            echo '<div class="CR-Icons xs-w20 xs-flex xs-flex-wrap">';
            echo '<div class="xs-w90">'.$row["area"].'<div class="u-area-icon"></div>';
            echo '<div class="xs-w90">'.$row["rooms"].'<i class="fa fa-bed fa-2x" aria-hidden="true"></i></div>';
            echo '<div class="xs-w90">'.$row["bathrooms"].'<i class="fa fa-bath fa-2x"></i></div>';
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