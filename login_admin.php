<?php
session_start();
include("connection.php");

// Enable error reporting to instantly reveal database or query bugs
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $pwd = $_POST['password'];

    // Standardized to standard SQL 'AND' operator
    $query = "SELECT * FROM admin WHERE email ='$username' AND password = '$pwd'";
    $data = mysqli_query($conn, $query);

    if ($data) {
        $total = mysqli_num_rows($data);
        if ($total == 1) {
            $_SESSION['user_name'] = $username;
            header('location: display_admin.php');
            exit(); // CRUCIAL: Stops script processing so the redirect completes
        } else {
            $error_msg = "Invalid Admin email or password.";
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

    <!-- Form -->
    <div class="form_container">
    <div class="title">Admin Login</div>
    
    <form class="form">
        <div class="input_field">
            <input type="email" class="input" placeholder="Email">
        </div>
        
        <div class="input_field">
            <input type="password" class="input" placeholder="Password">
        </div>

        <!-- MOVE BUTTON HERE (Inside the form wrapper) -->
        <button type="submit" class="btn">Login</button>
    </form>
</div>


<br>
  
 <?php include 'footer.php'; ?>
</body>

</html>
