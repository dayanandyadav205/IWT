<?php
session_start();
include("connection.php");

// Enable error reporting to catch hidden bugs
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $pwd = $_POST['password'];

    // Secure practice note: Real-world apps should hash passwords instead of plain-text
    $query = "SELECT * FROM form WHERE email ='$username' AND password = '$pwd'";
    $data = mysqli_query($conn, $query);

    if ($data) {
        $total = mysqli_num_rows($data);
        if ($total == 1) {
            $_SESSION['user_name'] = $username;
            header('location: display_user.php');
            exit(); // ALWAYS call exit() after a header redirect
        } else {
            $error_msg = "Invalid email or password.";
        }
    } else {
        $error_msg = "Database query failed: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="/css/forms.css">
 
    <script>
        function message() {
            alert("To password yadd kar lo bhai")
        }
    </script>
    <title>User Login</title>
    
     <script>
        function message() {
            alert("To password yadd kar lo bhai")
        }
    </script>

    <title>Admin Login</title>
 <style>
   
   </style>
</head>

<body>
<?php include 'header.php'; ?>

    <!-- Form -->
    <div class="form_container">
        <div class="title">
            User Login
        </div>

        <!-- Inline error output alert box -->
        <?php if (isset($error_msg)): ?>
            <div class="error_box"><?php echo $error_msg; ?></div>
        <?php endif; ?>

        <form action="#" method="POST" autocomplete="off">
            <div class="form">
                <div class="input_field">
                    <input type="text" class="input" name="username" placeholder="Email" required>
                </div>

                <div class="input_field">
                    <input type="password" class="input" name="password" placeholder="Password" required>
                </div>

                <div class="forgotpass">
                    <a href="#" class="link" onclick="message()">Forgot Password?</a>
                </div>

                <div class="input_field">
                    <input type="submit" name="login" value="Login" class="btn">
                </div>
            </div>
        </form>
    </div>

<br>

    <?php include 'footer.php'; ?>
</body>
</html>
