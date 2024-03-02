<?php
// Start session to access session variables
session_start();

// Check if user is logged in, redirect to login page if not
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login.php");
    exit;
}

// Retrieve user information from session
$username = $_SESSION['username'];
$email = $_SESSION['email'];
$photo = $_SESSION['photo'];
$age = $_SESSION['age'];

// Display dashboard HTML
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .dashboard-container {
            display: flex;
            background-color: #f7f7f7;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 800px;
            max-width: 100%;
        }

        .sidebar {
            background-color: #333;
            color: #fff;
            border-radius: 10px 0 0 10px;
            padding: 20px;
            width: 200px;
        }

        .sidebar h2 {
            margin-bottom: 20px;
            color: #fff;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar li {
            margin-bottom: 10px;
        }

        .sidebar a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .sidebar a:hover {
            color: #007bff;
        }

        .content {
            flex-grow: 1;
            padding: 0 20px;
        }

        .dashboard-container h1 {
            margin-bottom: 20px;
            color: #333;
        }

        .dashboard-container p {
            margin-bottom: 10px;
            color: #666;
        }

        .dashboard-container img {
            max-width: 100%;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .dashboard-container a {
            display: block;
            color: #007bff;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .dashboard-container a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <div class="sidebar">
            <h2>Menu</h2>
            <ul>
                <li><a href="account_settings.php   ">Account Settings</a></li>
                <li><a href="#">Content Management</a></li>
            </ul>
        </div>
        <div class="content">
            <h1>Welcome to your Dashboard, <?php echo $username; ?>!</h1>
            <p>Email: <?php echo $email; ?></p>
            <p>Age: <?php echo $age; ?></p>
            <?php if ($photo): ?>
                <img src="<?php echo $photo; ?>" alt="User Photo">
            <?php endif; ?>
            <a href="logout.php">Logout</a>
        </div>
    </div>
</body>
</html>
