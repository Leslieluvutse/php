<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
              <meta charset="UTF-8">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <title>Dashboard</title>
</head>
<body>
       <h1><?php echo $_SESSION['user']?>,Welcome back</h1>      
              
</body>
</html>