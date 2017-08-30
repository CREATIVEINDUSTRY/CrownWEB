<?php
    $servername = "localhost";
    $username = "crindmx";
    $password = "mW6aasNr8\yg";
    $dbname = "crindmx_crown_bd";
    // Create connection
    $GLOBALS['conection'] = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($GLOBALS['conection']->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        echo 'fuck';
    }

    $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $parts = parse_url($url);
    parse_str($parts['query'], $query);
    $typeFilter = $query['typeFilter'];
    
    $sql = 'SELECT * FROM Neighborhoods';
    $result = $GLOBALS['conection']->query($sql);
    $rows = array();
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $rows['Neighborhoods'][] = $row;
        }

    } 

    $sql = 'SELECT * FROM Operation';
    $result = $GLOBALS['conection']->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $rows['Operations'][] = $row;
        }

    } 

    $sql = 'SELECT * FROM Types';
    $result = $GLOBALS['conection']->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $rows['Types'][] = $row;
        }

    } 


    echo json_encode( $rows);

    $GLOBALS['conection']->close();    
?>