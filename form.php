<?php include("connection.php");
// Change this line temporarily to see the real crash message:
error_reporting(E_ALL);
ini_set('display_errors', 1);
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
        th,
        td {
            padding: 10px;
        }

        input {
            width: 300px;
            height: 40px;
        }
    </style>
</head>

<body>

    <?php include './include/header.php'; ?>

    <main>
        <form name="f1" action="" method="POST" onsubmit="return checkpwd()">
            <fieldset>
                <legend>Sign Up</legend>
                <table>
                    <tr>
                        <td><input type="text" name="fname" placeholder="First Name" required></td>
                    </tr>

                    <tr>
                        <td> <input type="text" name="lname" placeholder="Last Name" required></td>
                    </tr>

                    <tr>
                        <td> <input type="password" name="password" id="pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                placeholder="Password"
                                title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                                required onclick="showpwd()"></td>
                                <br>
                        <td>
                           
                        </td>
                    </tr>

                    <tr>
                        <td><input type="password" name="cpassword" id="cpwd" placeholder="Confirm Password" required></td>
                    </tr>

                    <tr>
                        <td><span id="pwdmsg"></span></td>
                    </tr>

                    <tr>
                        <td> <input type="email" name="email" placeholder="Email" required></td>
                    </tr>

                    <tr>
                        <td><input type="submit" value="Register" name="register"></td>
                    </tr>

                    <tr>
                        <td>
                            <p>Already registered? <a href="login_user.php">Click here to Login</a></p>
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </main>

    <?php include './include/footer.php'; ?>
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

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $pwd = $_POST['password'];
    $cpwd = $_POST['cpassword'];
    $email = $_POST['email'];

    $query = "INSERT INTO form (fname, lname, password, cpassword, email) 
              VALUES ('$fname', '$lname', '$pwd', '$cpwd', '$email')";

    $data = mysqli_query($conn, $query);

    if ($data) {
        echo "<script> alert ('Data Inserted into Database') </script>";
    } else {
        // Find out exactly what number your database is throwing
        $error_num = mysqli_errno($conn);

        if ($error_num == 1062) {
            echo "<script> alert ('Error: This email address is already registered!') </script>";
        } else {
            // This will now show you the exact error number so we can figure it out
            echo "<script> alert ('Failed to Insert. Error Number: " . $error_num . " - " . mysqli_error($conn) . "') </script>";
        }
    }
}
?>