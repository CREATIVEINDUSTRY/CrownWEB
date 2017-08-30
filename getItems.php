<?php
/**
Load the selected filter result
**/
    include 'databaseconfig.php';
    
    $sql = 'SELECT * FROM items';
    
    $result = $GLOBALS['conection']->query($sql);
    $rows = array();

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
    } else {
        //need to change 
        echo "0 results";
    }
    echo json_encode( $rows);
    $GLOBALS['conection']->close();     
?>