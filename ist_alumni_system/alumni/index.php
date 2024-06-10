<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'alumni') {
    header("Location: ../auth/login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Alumni Dashboard</title>
    <link rel="stylesheet" type="text/css" href="../public/css/styles.css">
</head>
<body>
    <header>
        <h2>Welcome, Alumni!</h2>
    </header>
    <nav>
        <ul>
            <li><a href="profile.php">Profile Management</a></li>
            <li><a href="view_jobs.php">View Jobs</a></li>
            <li><a href="../auth/logout.php">Logout</a></li>
        </ul>
    </nav>
    <section class="container">
        <h2>Alumni Dashboard</h2>
        <p>Use the navigation menu to manage your profile and view job postings.</p>
    </section>
</body>
</html>
