<?php
/**
Makes the DB connection
**/
$servername = "localhost";
$username = "crindmx";
$password = "mW6aasNr8\yg";
$dbname = "crindmx_crown_bd";
// Create connection
$GLOBALS['conection'] = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($GLOBALS['conection']->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}             
    
    
?>