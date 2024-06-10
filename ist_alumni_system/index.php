<?php
session_start();
if (isset($_SESSION['user_id'])) {
    if ($_SESSION['role'] == 'admin') {
        header("Location: admin/index.php");
    } elseif ($_SESSION['role'] == 'alumni') {
        header("Location: alumni/index.php");
    }
} else {
    header("Location: auth/login.php");
}
exit;

