<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    // header("Location: ../auth/login.php");
    header("Location:.profile.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="../public/css/styles.css">
</head>
<body>
    <header>
        <h2>Welcome, Admin!</h2>
    </header>
    <nav>
        <ul>
            <li><a href="profile.php">Profile Management</a></li>
            <li><a href="manage_users.php">Manage Users</a></li>
            <li><a href="post_job.php">Post Job</a></li>
            <li><a href="view_jobs.php">View Jobs</a></li>
            <li><a href="./auth/logout.php">Logout</a></li>
        </ul>
    </nav>
    <section class="container">
        <h2>Admin Dashboard</h2>
        <p>Use the navigation menu to manage users and job postings.</p>
    </section>
</body>
</html>
