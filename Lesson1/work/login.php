<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <h1>Login Form</h1>
        <form action="process-login.php" method="post">
            <div class="form-input">
                <input type="text" name="username" placeholder="Enter username">
            </div>
            <div class="form-input">
                <input type="email" name="email" placeholder="Enter email">
            </div>
            <div class="form-input">
                <input type="password" name="password" placeholder="Enter password">
            </div>
            <div class="form-input">
                <input type="submit" name="login" value="Login">
            </div>
        </form>
    </div>
</body>
</html>