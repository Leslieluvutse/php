<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashbaord</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
    <div class="container">
        <!-- Navigation -->
        <nav>
            <div class="top-nav">
                <ul>
                    <li><a href="dashboard.php?id=dashboard">Dashboard</a></li>
                    <li><a href="dashboard.php?id=profile">Profile</a></li>
                    <li><a href="dashboard.php?id=users">Manage User</a></li>
                    <li><a href="dashboard.php?id=reports">Reports</a></li>
                    <li><a href="dashboard.php?id=settings">Settings</a></li>
                    <li><a href="dashboard.php?id=logout">Logout</a></li>
                </ul>

            </div>
        </nav>

        <!-- Main Content -->
        <main>
            <div class="main-content">
                <?php
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    switch ($id) {
                        case 'dashboard':
                            echo "Welcome to the dashboard";
                            break;
                        case 'profile':
                            echo "Welcome to the profile";
                            break;
                        case 'users':
                            include_once "manage-user.php";
                            break;
                        case 'reports':
                            echo "Welcome to the reports";
                            break;
                        case 'settings':
                            echo "Welcome to the settings";
                            break;
                        case 'add-new-user':
                            include_once "add-new-user.php";
                            break;
                        case 'logout':
                            echo "Welcome to the logout";
                            break;
                        default:
                            echo "404 Page not found";
                            break;
                    }
                }
                ?>
            </div>
        </main>

        <!-- Footer -->
    </div>
</body>

</html>