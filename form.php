<?php 
// 1. Force the system to display hidden errors immediately
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// 2. Include the connection file
include("connection.php");

// 3. Add a fallback check for the connection variable
if (!isset($conn)) {
    die("Fatal Error: The variable '\$conn' is not defined. Check your connection.php file to see if you named it differently (like \$con or \$db).");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css" integrity="sha512-QeR2VH+lsBE5LSAe1Q5EnTBbe7XTBubt8dG93Y7gidSgdMCr8nVqKcfKAMyN96SV8KDbZVTDXChatu5G2KQGzg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="style.css">
</head>

<body>
   <?php include 'header.php'; ?>

   <!-- Form -->
<div class="form_container">
    <div class="title">Sign Up</div>
    
    <form name="f1" action="" method="POST" onsubmit="return checkpwd()">
        <div class="form">
            
            <div class="input_field">
                <label>First Name</label>
                <input type="text" class="input" name="fname" required>
            </div>
            
            <div class="input_field">
                <label>Last Name</label>
                <input type="text" class="input" name="lname" required>
            </div>
            
            <div class="input_field">
                <label>Password</label>
                <input type="password" class="input" name="password" id="pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                <div><input type="checkbox" onclick="showpwd()"> Show Password</div>
            </div>
            
            <div class="input_field">
                <label>Confirm Password</label>
                <input type="password" class="input" name="cpassword" id="cpwd" required>
                <div id="pwdmsg"></div>
            </div>
            
             <!-- Email Address Field -->
            <div class="input_field">
                <label>Email Address</label>
                <input type="email" class="input" name="email" required>
            </div>
            
            <!-- FIXED POSITION: Place this right here, right before closing the form -->
            <div class="input_field">
    <input type="submit" value="Register" class="btn" name="register">
</div>

            
        </div>
    </form>
    <br>
    <p>Already registered? <a href="login_user.php">Click here to Login</a></p>
</div>

   

     <?php include 'footer.php'; ?>
</body>
</html>
<script>
        // function to check Password
        function checkpwd() {
            var p1 = document.f1.password.value;
            var p2 = document.f1.cpassword.value;

            if (p1 == p2) {
                return true;
            } else {
                document.getElementById("pwdmsg").innerHTML = "Password Mismatch";
                document.getElementById("pwdmsg").style.color = "#f20f0fff";
                return false;
            }
        }

        // function Show Password
        function showpwd() {
            var x = document.getElementById("pwd");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>



<?php
if (isset($_POST['register'])) {
    
    // Clean string values against injection vectors
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $pwd   = mysqli_real_escape_string($conn, $_POST['password']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    // Standard raw string entry (Make sure your database has matching columns!)
    $query = "INSERT INTO form (fname, lname, password, email) 
              VALUES ('$fname', '$lname', '$pwd', '$email')";

    $data = mysqli_query($conn, $query);

    if ($data) {
        echo "<script> alert ('Data Inserted into Database') </script>";
    } else {
        // This will print out the precise SQL complaint on screen
        die("Database Query Failed: " . mysqli_error($conn));
    }
}
?>
