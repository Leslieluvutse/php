<?php

$host="localhost";
$username="root";
$password="";
$dbname= "e-tourism";

// mysqli connect() {functional or object oriented}
// pdo

$database_connection = mysqli_connect($host , $username,$password,$dbname);
// var_dump($database_connection);
if($database_connection->connect_error){
              echo "Connection failed";
}