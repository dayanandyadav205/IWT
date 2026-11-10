<?php
session_start();

if (!isset($_SESSION['user_name'])) {
    header('Location: login.php');
    exit();
}

$user_email = $_SESSION['user_email'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <!-- <link rel="stylesheet" href=".\css\style.css"> -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php include './include/header.php'; ?>
        <main>
            <h1>Welcome <?php echo ($user_email); ?></h1>

            <a href="logout.php">Logout</a>
        </main>

</body>

</html>