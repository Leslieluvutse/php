<?php
session_start();
require '../config/db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: ../auth/login.php");
    exit;
}

$stmt = $pdo->prepare("SELECT * FROM jobs");
$stmt->execute();
$jobs = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Jobs</title>
</head>
<body>
    <h2>Job Listings</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Posted By</th>
        </tr>
        <?php foreach ($jobs as $job) { ?>
        <tr>
            <td><?php echo $job['id']; ?></td>
            <td><?php echo $job['title']; ?></td>
            <td><?php echo $job['description']; ?></td>
            <td><?php echo $job['posted_by']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
