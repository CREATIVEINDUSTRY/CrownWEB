<?php

function filterLoader($typeFilter) {
    include 'databaseconfig.php';
    
    $table = "Neighborhoods";
    $tableId = "neighborhoodID";
    $tableName = "neighborhoodName";
    $nameCamp = "Desarrollo";

    if($typeFilter == '2'){
        $table = "Operation";
        $tableId = "operationID";
        $tableName = "operationName";
        $nameCamp = "Oferta";

    }else if($typeFilter == '3'){
        $table = "Types";
        $tableId = "typeID";
        $tableName = "typeName";
        $nameCamp = "Tipo";
    }
        
        $sql = 'SELECT * FROM '.$table.'';
        $result = $GLOBALS['conection']->query($sql);
        if ($result->num_rows > 0) {
            echo '<option value="0">'.$nameCamp.'</option>';
            while($row = $result->fetch_assoc()) {
                echo '<option value="'.$row[$tableId].'">'.$row[$tableName].'</option>';
            }
        } else {
            echo "0 results";
        }
        $GLOBALS['conection']->close();     
}
        
?>