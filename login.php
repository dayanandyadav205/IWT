<?php
session_start();
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="/style.css">
    <style>
        fieldset {
            padding: 20px;
            margin: 50px;
            width: 200px;
        }

        input {
            font-size: 20px;
        }
    </style>
</head>

<body>
    <?php include './include/header.php'; ?>
    <h1>User Login</h1>

    <form action="" method="post">
        <fieldset>
            <legend>User Login</legend>
            <br /><input type="email" name="email" placeholder="Email" required>
            <br /><br /><input type="password" name="password" placeholder="Password" required>
            <br /><br /><input type="submit" name="login" value="Login">
        </fieldset>
    </form>
</body>

</html>

<?php
if (isset($_POST['login'])) {
    $email      = $_POST['email'];
    $password   = $_POST['password'];

    $query = "SELECT * FROM signup WHERE email = '$email' AND password = '$password'";

    $data = mysqli_query($conn, $query);

    if (mysqli_num_rows($data) == 1) {
       $_SESSION['user_name'] = $email;
        header('location:display_user.php');
        exit();
    } else {
        echo "Incorrect Email or password";
    }
}
?>