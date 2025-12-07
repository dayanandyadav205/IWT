<?php

session_start();
echo "Welcome " . $_SESSION['user_name'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display User</title>
    <link rel="stylesheet" href="css/style.css">
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


        <?php
        include("connection.php");
        error_reporting(0);

        $userprofile = $_SESSION['user_name'];

        if ($userprofile == true) {

        } else {
            header('location:login_user.php');
        }

        $query = "SELECT * FROM form";
        $data = mysqli_query($conn, $query);

        $total = mysqli_num_rows($data);
        // $result = mysqli_fetch_assoc($data);
        
        // echo $result;
// echo $total;
        
        if ($total != 0) {
            ?>

            <h2 style="text-align: center;"><mark>Records To Display (Normal User)</mark></h2>
            <table border="3" cellspacing="5" width="90%">
                <tr>
                    <th width="5%">id</th>
                    <th width="5%">Image Uploaded</th>
                    <th width="8%">First Name</th>
                    <th width="8%">Last Name</th>
                    <th width="3%">Gender</th>
                    <th width="10%">Email</th>
                    <th width="10%">Phone</th>
                    <th width="5%">Caste</th>
                    <th width="10%">Language</th>
                    <th width="15%">Address</th>
                    <th width="5%">Document Uploaded</th>
                </tr>

                <?php
                while ($result = mysqli_fetch_assoc($data)) {
                    echo "<tr>
                <td>" . $result['id'] . "</td>
                <td><img src= ' " . $result['upload_img'] . "' height='100px' width='100px'></td>
                <td>" . $result['fname'] . "</td>
                <td>" . $result['lname'] . "</td>
                <td>" . $result['gender'] . "</td>
                <td>" . $result['email'] . "</td>
                <td>" . $result['phone'] . "</td>
                <td>" . $result['caste'] . "</td>
                <td>" . $result['language'] . "</td>
                <td>" . $result['address'] . "</td>
                <td><img src= ' " . $result['upload_doc'] . "' height='100px' width='100px'></td>
          </tr>
          ";
                }
            // echo "Table has records";
        } else {
            echo "No record found";
        }
        ?>

        </table>

        <!-- Footer -->
        <footer>
            <div class="footer">
                <p>&copy; Designed & Developed by Dayanand Yadav, Assistant Professor, CSE Department, CDGI, Indore</p>
            </div>
        </footer>
</body>

<a href="logout.php"><input type="submit" name="" value="Logout" class="btn_logout"></a>

</html>