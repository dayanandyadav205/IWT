<?php

session_start();

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

    <title>Admin Login</title>
</head>

<body>
    <!-- Header -->
    <div class="header">
        <div>
            <img src="images/cdgi.jpg" alt="CDGI Logo" />
        </div>

        <div>
            <h1>Chameli Devi Group of Institutions, Indore (MP)</h1><br>
            <h2>Internet & Web Technology</h2><br>
            <h4>B.Tech-CSE, V Semester</h4>
        </div>

        <div>

        </div>
    </div>

    <!-- Navigation Bar -->
    <div class="navbar">
        <a href="index.html"><i class="fa-solid fa-house"></i></a>
        <a href="file:///C:\xampp\htdocs\IWT\IWT HTML Code" target="_blank">HTML Code</a>
        <a href="file:///C:\xampp\htdocs\IWT\IWT CSS Code" target="_blank">CSS Code</a>
        <a href="file:///C:\xampp\htdocs\IWT\IWT JavaScript Code" target="_blank">JavaScript Code</a>
        <a href="file:///C:\xampp\htdocs\IWT\Unit IV XML Code (IWT)" target="_blank">XML Code</a>
        <a href="file:///C:\xampp\htdocs\IWT\Unit IV PHP Code (IWT)" target="_blank">PHP Code</a>
        <a href="contact.html">Our Contact</a>

        &nbsp;> &nbsp;>&nbsp;> &nbsp;>&nbsp;> &nbsp;>&nbsp;> &nbsp;>&nbsp;> &nbsp;>&nbsp;> &nbsp;>&nbsp;> &nbsp;>
        &nbsp;>&nbsp;> &nbsp;>&nbsp;>

        <a href="form.php">Sign Up</a>
        <a href="login_user.php">User Login</a>
        <a href="login_admin.php">Admin Login</a>
    </div>

    <!--Go to Top -->
    <div class="container-top">
        <a href="#top" class="top">Top</a>
    </div>


    <!-- The flexible grid (content) -->
    <div class="row">
        <div class="side">
            <div class="aboutMe">
                <div class="myImg">
                    <img src="images/dayanand.jpg" alt=" " />
                </div>
                <div class="myIntro">
                    <h3>About Me</h3>
                    <p>I am Dayanand Yadav, working as an Assistant Professor in Computer Science & Engineering
                        Department in
                        Chameli Devi Group of Institutions, Indore</p>
                </div>
            </div>
            <div class="myLinks">
                <h3>My Links</h3>
                <ul>
                    <li><a href="https://github.com/dayanandyadav205"><i class="fa-brands fa-github"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/dayanandyadav205"><i class="fa-brands fa-linkedin"></i></a>
                    </li>
                    <li><a href="mailto:dayanandyadav205@gmail.com" target="_top"><i
                                class="fa-solid fa-envelope"></i></a></li>
                    <li><a href="https://www.w3.org/"><i class="fa-brands fa-w3c"></i></a></li>
                </ul>
            </div>

        </div>


        <!-- Form -->
        <div class="form_container" style="width: 400px;">
            <div class="title">
                Admin Login
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
                </div>
            </form>
        </div>
        <br>

        <!-- Footer -->
        <footer>
            <div class="footer">
                <p>&copy; Designed & Developed by Dayanand Yadav, Assistant Professor, CSE Department, CDGI, Indore</p>
            </div>
        </footer>
</body>

</html>

<?php
include("connection.php");
// error_reporting(0);

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $pwd = $_POST['password'];

    $query = "SELECT * FROM admin WHERE email ='$username' && password = '$pwd'";
    $data = mysqli_query($conn, $query);

    $total = mysqli_num_rows($data);
    // echo $total;
    {
        if ($total == 1) {
            $_SESSION['user_name'] = $username;
            header('location:display_admin.php');
            // echo "Login Success";
        } else {
            echo "Login failed";
        }
    }

}
?>