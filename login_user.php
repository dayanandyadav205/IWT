<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <script>
        function message() {
            alert("To password yadd kar lo bhai")
        }
    </script>

    <title>User Login</title>
</head>

<body>
    <!-- Header JS -->
    <script src="js/header.js"></script>
    <my-header></my-header>

    <!-- Form -->
    <div class="form_container" style="width: 400px;">
        <div class="title">
            User Login
        </div>
        <form action="#" method="POST" autocomplete="off" enctype="multipart/form-data">
            <div class="form">
                <div class="input_field">
                    <input type="text" class="input" name="username" placeholder="Email">
                </div>

                <div class="input_field">
                    <input type="password" class="input" name="password" placeholder="Password">
                </div>

                <div class="forgotpass">
                    <a href="#" class="link" onclick="message()">Forgot Password?</a>
                </div>

                <div class="input_field">
                    <input type="submit" name="login" value="Login" class="btn">
                </div>
                <div class="signup">New Member?<a href="form.php" class="link"> Sign Up Here</a></div>
            </div>
        </form>
    </div>

    <!-- Footer JS -->
    <script src="js/footer.js"></script>
    <my-footer></my-footer>
</body>

</html>

<?php
include("connection.php");
// error_reporting(0);

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $pwd = $_POST['password'];

    $query = "SELECT * FROM form WHERE email ='$username' && password = '$pwd'";
    $data = mysqli_query($conn, $query);

    $total = mysqli_num_rows($data);
    // echo $total;
    {
        if ($total == 1) {
            $_SESSION['user_name'] = $username;
            header('location:display_user.php');
            // echo "Login Success";
        } else {
            echo "Login failed";
        }
    }

}
?>