<!DOCTYPE html>
<html lang="en">
<head>
              <meta charset="UTF-8">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <title>Login Page</title>
              <form action="login.php"method="post">
                            <div class="form-input">
                                 <input type="text" name="name:" placeholder="Enter Name">         
                            </div>
                            <div class="form-input">
                                 <input type="text" name="email:" placeholder="Enter Email">         
                            </div>
                            <div class="form-input">
                                 <input type="text" name="role:" placeholder="Enter Role">         
                            </div>
                            <div class="form-input">
                                 <button type="submit">Add User</button>         
                            </div>
              </form>
</head>

</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Role = $_POST['role'];

    // Validate input
    if (empty($name) || empty($email) || empty($role)) {
        echo "All fields are required.";
        exit;
    }

    // Database connection
//     $conn = new mysqli('localhost', 'username', 'password', 'dbname');
//     if ($conn->connect_error) {
//         die("Connection failed: " . $conn->connect_error);
//     }
 // connect to db
 include 'database-connection.php';

    // Insert user into database
    $stmt = $conn->prepare("INSERT INTO work (name, email, role) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $role);

    if ($stmt->execute()) {
        echo "User added successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>