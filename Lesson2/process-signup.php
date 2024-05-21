<?php

echo "Processing Form values";

echo "<br>";

$username= $_POST['username'];

$email= $_POST['email'];

$password= $_POST['password'];

// connecting to a database
include_once "database-connection.php";
// write a querry to insert the values

$sql = "INSERT INTO users(username,email,password) VALUES('$username','$email','$password')";

// Execute the query
if($database_connection->query($sql) ===TRUE){
              header('Location: login.php');
              // echo "New record created successfully";
};
