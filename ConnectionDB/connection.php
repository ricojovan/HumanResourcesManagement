<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "inventorysystemdb";
//create connection

$con = mysqli_connect($serverName, $userName, $password, $dbName);

if(mysqli_connect_error()){
    echo "Failed to connect";
    exit();
    echo "success";
}
?>