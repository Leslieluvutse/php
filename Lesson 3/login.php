<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h1>Login Page</h1>
    <form action="login.php" method="post">
        <div class="form-input">
            <input type="text" name="username" placeholder="Enter username">
        </div>
        <div class="form-input">
            <input type="password" name="password" placeholder="Enter password">
        </div>
        <div class="form-input">
            <input type="submit" name="login" value="Login">
        </div>
    </form>
</body>
</html>
<?php
if(isset($_POST['login'])){

    // get user input
    $username = $_POST['username'];
    $password = $_POST['password'];

    // connect to database
    include 'database-connection.php';

    // query
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

    // execute the query
    $result = $database_connection->query($sql);
    // var_dump($result);
    // echo "<br>";

    // echo $result->num_rows;
    if($result->num_rows > 0){
        echo "User exists";
        $_SESSION['user'] = $username;
        header('Location: dashbard.php');
    }else{
        echo "User does not exist";
    }

    // validate user
}
?>