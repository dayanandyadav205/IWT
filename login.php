<?php
session_start();
include 'connection.php';

// 1. Process the login logic BEFORE any HTML is sent
if (isset($_POST['login'])) {
    $email      = $_POST['email'];
    $password   = $_POST['password'];

    // Note: This query is vulnerable to SQL injection (see security notice below)
    $query = "SELECT * FROM signup WHERE email = '$email' AND password = '$password'";
    $data = mysqli_query($conn, $query);

    if (mysqli_num_rows($data) == 1) {
        $_SESSION['user_name'] = $email;
        header('location:display_user.php');
        exit(); // Always use exit after a redirect
    } else {
        // Store the error message in a variable to display inside the HTML
        echo "Incorrect Email or password";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <!-- <link rel="stylesheet" href="/style.css"> -->
    <style>
        fieldset {
            padding: 20px;
            width: 20%
        }

        input {
            width: 300px;
            height: 50px;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <?php include './include/header.php'; ?>
    <main>
        <form action="" method="post">
            <fieldset>
                <legend>User Login</legend>
                <br /><input type="email" name="email" placeholder="Email" required>
                <br /><br /><input type="password" name="password" placeholder="Password" required>
                <br /><br /><input type="submit" name="login" value="Login">
            </fieldset>
        </form>
    </main>
</body>

</html>