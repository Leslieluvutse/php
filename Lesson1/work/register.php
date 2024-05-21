<?php
// Configuration
$dbhost = "localhost";
$dbname = "users";
$dbuser = "root";
$dbpass = "";

// Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

// Register user
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert user into database
    $query = "INSERT INTO users (username, password, email) VALUES (?,?,?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sss", $username, $hashed_password, $email);
    $stmt->execute();

    // Redirect to login page
    header("Location: login.php");
    exit;
}

// Close connection
$conn->close();
?>

<!-- Register form -->
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username"><br><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password"><br><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br><br>
    <input type="submit" name="submit" value="Register">
</form>