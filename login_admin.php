<?php
session_start();
include("connection.php");

error_reporting(E_ALL);
ini_set('display_errors', 1);

$error_msg = ""; // Initialize error message variable

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $pwd = $_POST['password'];

    // FIXED: Using Prepared Statements to prevent SQL Injection
    $query = "SELECT * FROM admin WHERE email = ?";
    $stmt = mysqli_prepare($conn, $query);
    
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($result && mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            
            // Note: If you hash passwords using password_hash(), change this to:
            // if (password_verify($pwd, $row['password'])) {
            if ($row['password'] === $pwd) { 
                $_SESSION['user_name'] = $username;
                header('location: display_admin.php');
                exit();
            } else {
                $error_msg = "Invalid Admin email or password.";
            }
        } else {
            $error_msg = "Invalid Admin email or password.";
        }
        mysqli_stmt_close($stmt);
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
    <title>Admin Login</title>
    <link rel="stylesheet" href="/css/forms.css">

    <script>
        function message() {
            alert("To password yadd kar lo bhai")
        }
    </script>
</head>

<body>
    <?php include 'header.php'; ?>

    <!-- Form Container -->
    <div class="form_container">
        <div class="title">Admin Login</div>
        
        <!-- Display error messages if login fails -->
        <?php if (!empty($error_msg)): ?>
            <div class="error" style="color: red; margin-bottom: 15px; font-weight: bold;">
                <?php echo htmlspecialchars($error_msg); ?>
            </div>
        <?php endif; ?>
        
        <!-- FIXED: Added method="POST" to form -->
        <form class="form" action="" method="POST">
            <div class="input_field">
                <!-- FIXED: Added name="username" -->
                <input type="email" name="username" class="input" placeholder="Email" required>
            </div>
            
            <div class="input_field">
                <!-- FIXED: Added name="password" -->
                <input type="password" name="password" class="input" placeholder="Password" required>
            </div>

            <!-- FIXED: Added name="login" so isset($_POST['login']) fires -->
            <button type="submit" name="login" class="btn">Login</button>
        </form>
    </div>

    <br>
    <?php include 'footer.php'; ?>
</body>

</html>
