<?php

$host_name = "localhost";
$database_username = "root";
$database_password = "";
$database_name = "e-tourism";

// myqsli_connect() [functional or Object oriented]
// pdo

$database_connection = mysqli_connect($host_name, $database_username, $database_password, $database_name);
// var_dump($database_connection);
if($database_connection->connect_error){
    echo "Connectio failed";
}