<?php
session_start();
require '../config/db.php';

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../auth/login.php");
    exit;
}

$user_id = $_SESSION['user_id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $stmt = $pdo->prepare("UPDATE profiles SET name = :name, email = :email, phone = :phone, address = :address WHERE user_id = :user_id");
    $stmt->execute(['name' => $name, 'email' => $email, 'phone' => $phone, 'address' => $address, 'user_id' => $user_id]);
    $success = "Profile updated successfully";
}

$stmt = $pdo->prepare("SELECT * FROM profiles WHERE user_id = :user_id");
$stmt->execute(['user_id' => $user_id]);
$profile = $stmt->fetch();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Profile</title>
</head>
<body>
    <h2>Profile</h2>
    <?php if (isset($success)) { echo "<p>$success</p>"; } ?>
    <form method="post" action="">
        <div>
            <label>Name</label>
            <input type="text" name="name" value="<?php echo $profile['name']; ?>" required>
        </div>
        <div>
            <label>Email</label>
            <input type="email" name="email" value="<?php echo $profile['email']; ?>" required>
        </div>
        <div>
            <label>Phone</label>
            <input type="text" name="phone" value="<?php echo $profile['phone']; ?>" required>
        </div>
        <div>
            <label>Address</label>
            <textarea name="address" required><?php echo $profile['address']; ?></textarea>
        </div>
        <button type="submit">Update Profile</button>
    </form>
</body>
</html>
