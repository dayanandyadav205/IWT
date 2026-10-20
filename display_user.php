<?php
session_start();

if (!isset($_SESSION['user_name'])) {
    header('Location: login_user.php');
    exit();
}

$user_email = $_SESSION['user_name'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="/style.css">

</head>

<body>
    <?php include './include/header.php'; ?>
    <h1>Welcome <?php echo ($user_email); ?></h1>

    <a class="logout-btn" href="logout.php">Logout</a>

</body>

</html>