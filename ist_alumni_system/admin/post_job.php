<?php
session_start();
require '../config/db.php';

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../auth/login.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $posted_by = $_SESSION['user_id'];

    $stmt = $pdo->prepare("INSERT INTO jobs (title, description, posted_by) VALUES (:title, :description, :posted_by)");
    $stmt->execute(['title' => $title, 'description' => $description, 'posted_by' => $posted_by]);
    $success = "Job posted successfully";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Post Job</title>
</head>
<body>
    <h2>Post Job</h2>
    <?php if (isset($success)) { echo "<p>$success</p>"; } ?>
    <form method="post" action="">
        <div>
            <label>Title</label>
            <input type="text" name="title" required>
        </div>
        <div>
            <label>Description</label>
            <textarea name="description" required></textarea>
        </div>
        <button type="submit">Post Job</button>
    </form>
</body>
</html>
