<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Example login logic, replace with actual database verification
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role']; // 'admin' or 'alumni'

    // Dummy verification
    if ($username == 'admin' && $password == 'admin' && $role == 'admin') {
        $_SESSION['user_id'] = 1;
        $_SESSION['role'] = 'admin';
        header('Location: ../admin/index.php');
    } elseif ($username == 'alumni' && $password == 'alumni' && $role == 'alumni') {
        $_SESSION['user_id'] = 2;
        $_SESSION['role'] = 'alumni';
        header('Location: ../alumni/index.php');
    } else {
        $error = "Invalid login credentials.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../public/css/styles.css">
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <?php if (isset($error)) echo "<p style='color: red;'>$error</p>"; ?>
        <form method="POST" action="">
            <label for="username">Username:</label>
            <input type="text" name="username" required><br><br>
            <label for="password">Password:</label>
            <input type="password" name="password" required><br><br>
            <label for="role">Role:</label>
            <select name="role" required>
                <option value="admin">Admin</option>
                <option value="alumni">Alumni</option>
            </select><br><br>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>
