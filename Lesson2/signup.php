<!DOCTYPE html>
<html lang="en">
<head>
              <meta charset="UTF-8">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <title>Signup</title>
              <link rel="stylesheet" href="pretty.css">
</head>
<body>
<?php include_once 'navbar.php'?>
              <!-- main content -->
              <h1>Sign up!</h1>
              <form action="process-signup.php" method="post">
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
                <input type="submit" name="signup" value="Signup">
            </div>
        </form>
              
              <!--footer  -->
              <!--include the footer  -->
              <?php include_once 'footer.php'?>
              
</body>
</html>