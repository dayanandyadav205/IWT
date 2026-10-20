<?php include("connection.php");
echo "Connection Ok";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <!-- UTF-8 stands for Unicode Transformation Format – 8-bit. Unicode: A universal library that assigns a unique number (called a code point) to nearly every character, symbol, and emoji in all world languages. -->
    <meta charset="UTF-8">

    <!-- Define a description of your web page: -->
    <meta name="description" content="IWT5 is an educational web development and programming resource platform created by Dayanand Yadav, an Assistant Professor in the Computer Science & Engineering Department at Chameli Devi Group of Institutions (CDGI) in Indore, India.">

    <!-- Define keywords for search engines: -->
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP, MySQL">

    <!-- Define the author of a page: -->
    <meta name="author" content="Dayanand Yadav">

    <!-- Refresh document every 30 seconds: -->
    <!-- <meta http-equiv="refresh" content="30"> -->

    <!-- Setting the viewport to make your website look good on all devices: -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        fieldset {
            padding: 20px;
            width:20%
        }

        input {
            width: 350px;
            height: 50px;
            font-size: 20px;
        }
    </style>
</head>

<body>

    <?php include './include/header.php'; ?>

    <main>
        <form name="f1" action="" method="POST" onsubmit="return checkpwd()">
            <fieldset>
                <legend>Sign Up</legend>
                <input type="text" name="fname" placeholder="First Name" required>
                <br /><br /><input type="text" name="lname" placeholder="Last Name" required>
                <br /><br /><input type="email" name="email" placeholder="Email" required>
                <br /><br /><input type="password" name="password" id="pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,4}" 
                placeholder="Password" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                <input type="checkbox" onclick="showpwd()" class="chkbox">
                <br /><br /> <input type="password" name="cpassword" id="cpwd" placeholder="Confirm Password" required>
                <span id="pwdmsg"></span>
                <br /><br /><input type="submit" value="Register" name="register">
                <br /><br />
                <p>Already registered? <a href="login_user.php">Click here to Login</a></p>
            </fieldset>
        </form>
    </main>

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

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $pwd = $_POST['password'];
        $cpwd = $_POST['cpassword'];


        $query = "INSERT INTO signup (fname, lname, email, password, cpassword) VALUES ('$fname', '$lname', '$email','$pwd', '$cpwd')";

        $data = mysqli_query($conn, $query);

        if ($data) {
            echo "Data Inserted into Database";
        } else {
            echo "Failed to Insert";
        }
    }
    ?>



    <?php include './include/footer.php'; ?>
</body>

</html>