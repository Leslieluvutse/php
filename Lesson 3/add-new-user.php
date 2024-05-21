<div class="add-new-user">
    <form action="dashboard.php?id=add-new-user" method="post">
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
            <select name="role">
                <option>Alumni</option>
                <option>Admin</option>
            </select>
        </div>
        <div class="form-input">
            <input type="submit" name="save" value="Save">
        </div>
    </form>
</div>
<?php
if (isset($_POST['save'])) {
    // Get input values
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    // echo $username. " " . $email . " " . $password . " " . $role;

    // Connect to the database
    include_once "database-connection.php";

    // Write a query
    $sql = "INSERT INTO users(username, email, password, role) VALUES('$username','$email', '$password', '$role')";

    // Execute the query]
    $result = $database_connection->query($sql);

    // Check the status
    if ($result) {
        header('Location: dashboard.php?id=users');
    } else {
        echo "Operation failed";
    }
}
?>