<?php

session_start();
echo "Welcome " . $_SESSION['user_name'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Admin</title>
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


        <?php
        include("connection.php");
        error_reporting(0);

        $userprofile = $_SESSION['user_name'];

        if ($userprofile == true) {

        } else {
            header('location:login_admin.php');
        }

        $query = "SELECT * FROM form";
        $data = mysqli_query($conn, $query);

        $total = mysqli_num_rows($data);
        // $result = mysqli_fetch_assoc($data);
        
        // echo $result;
// echo $total;
        
        if ($total != 0) {
            ?>

            <h2 style="text-align: center;"><mark>Records To Display & Edit (Admin)</mark></h2>
            <table border="3" cellspacing="5" width="95%">
                <tr>
                    <th width="5%">id</th>
                   
                    <th width="8%">First Name</th>
                    <th width="8%">Last Name</th>
                    
                    <th width="10%">Email</th>
                    
                    <th width="20%">Edit Options</th>
                </tr>

                <?php
                while ($result = mysqli_fetch_assoc($data)) {
                    echo "<tr>
                <td>" . $result['id'] . "</td>
               
                <td>" . $result['fname'] . "</td>
                <td>" . $result['lname'] . "</td>
                
                <td>" . $result['email'] . "</td>
                
                <td>
                <a href='update_design.php?id=$result[id]'><input type='submit' 
                value='Update' class='update'></a>

                <a href='delete.php?id=$result[id]'><input type='submit' 
                value='Delete' class='delete' onclick= 'return checkdelete()'></a>
                </td> 
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

<script>
    function checkdelete() {
        return confirm('Are you sure you want to delete this record?');
    }
</script>

<a href="logout.php"><input type="submit" name="" value="Logout" class="btn_logout"></a>

</html>