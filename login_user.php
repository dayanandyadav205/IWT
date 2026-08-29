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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <script>
        function message() {
            alert("To password yadd kar lo bhai")
        }
    </script>
    <title>User Login</title>
   
</head>
<body>
    <!-- Header -->
    <div class="header">
        <div><img src="images/cdgi.jpg" alt="CDGI Logo" /></div>
        <div>
            <h1>Chameli Devi Group of Institutions, Indore (MP)</h1><br>
            <h2>Internet & Web Technology</h2><br>
            <h4>B.Tech-CSE, V Semester</h4>
        </div>
    </div>

    <!-- Navigation Bar -->
    <div class="navbar">
    <a href="index.html"><i class="fa-solid fa-house"></i></a>
    
    <!-- Changed from file:///C:\xampp\htdocs\IWT\... to clean relative folder paths -->
    <a href="IWT HTML Code/" target="_blank">HTML Code</a>
    <a href="IWT CSS Code/" target="_blank">CSS Code</a>
    <a href="IWT JavaScript Code/" target="_blank">JavaScript Code</a>
    <a href="Unit IV XML Code (IWT)/" target="_blank">XML Code</a>
    <a href="Unit IV PHP Code (IWT)/" target="_blank">PHP Code</a>
    
    <a href="contact.html">Our Contact</a>
    <a href="form.php">Sign Up</a>
    <a href="login_user.php">User Login</a>
    <a href="login_admin.php">Admin Login</a>
</div>


    <!-- Form -->
    <div class="form_container" style="width: 400px;">
        <div class="title">User Login</div>
        
        <!-- Display Login Error directly inside the UI if it fails -->
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
                <div class="signup">New Member?<a href="form.php" class="link"> Sign Up Here</a></div>
            </div>
        </form>
    </div>

    <!-- Footer -->
    <footer>
        <div class="footer">
            <p>&copy; Designed & Developed by Dayanand Yadav, Assistant Professor, CSE Department, CDGI, Indore</p>
        </div>
    </footer>
</body>
</html>
