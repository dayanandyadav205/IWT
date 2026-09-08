<?php include("connection.php");
 error_reporting(0);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="icon" href="images/home.svg" type="image/x-icon" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
  <!-- Link the JavaScript file -->
    <script src="layout.js" defer></script>
</head>

<body>
  <!-- Header -->
<!-- Placeholders for injected content -->
    <div id="header-placeholder"></div>




    <!-- Form -->
    <div class="form_container">
        <div class="title">
            Sign Up
        </div>
        <form name="f1" action="form.php" method="POST" onsubmit="return checkpwd()">
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
                    <input type="password" class="input" name="password" id="pwd"
                        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                        title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                        required>
                        <div><input type="checkbox" onclick="showpwd()"> Show Password</div>
                        
                </div>

                <div class="input_field">
                    <label>Confirm Password</label>
                    <input type="password" class="input" name="cpassword" required>
                </div>

                <div class="input_field">
                    <label>Email Address</label>
                    <input type="email" class="input" name="email" required>
                </div>

                <div class="input_field">
                    <input type="submit" value="Register" class="btn" name="register">
                </div>
            </div>
        </form>
        <br>
        <p>Already registered? <a href="login_user.php">Click here to Login</a></p>
    </div>

   <!-- Footer -->

  <!-- Footer -->
  <div id="footer-placeholder"></div>

    <script>

        // function to check Password
        function checkpwd() {
            var p1 = document.f1.password.value;
            var p2 = document.f1.cpassword.value;

            if (p1 == p2) {
                return true;
            }

            else {
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
            }
            else {
                x.type = "password";
            }
        }

    </script>
</body>

</html>

<?php
if ($_POST['register']) {
  

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $pwd = $_POST['password'];
    $cpwd = $_POST['cpassword'];
  
    $email = $_POST['email'];

    $query = "INSERT INTO form (fname,lname,password,cpassword,email) 
              VALUES ('$fname','$lname','$pwd','$cpwd','$email')";

    $data = mysqli_query($conn, $query);

    if ($data) {
        echo "<script> alert ('Data Inserted into Database') </script>";
    } else {
        echo "<script> alert ('Failed to Insert') </script>";
    }
}

?>