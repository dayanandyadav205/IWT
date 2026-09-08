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
 <!-- Link the JavaScript file -->
    <script src="layout.js" defer></script>
</head>

<body>
  <!-- Header -->
<!-- Placeholders for injected content -->
    <div id="header-placeholder"></div>



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
                   
                    <th width="8%">First Name</th>
                    <th width="8%">Last Name</th>
                    
                    <th width="10%">Email</th>
                    
                </tr>

                <?php
                while ($result = mysqli_fetch_assoc($data)) {
                    echo "<tr>
                <td>" . $result['id'] . "</td>
                
                <td>" . $result['fname'] . "</td>
                <td>" . $result['lname'] . "</td>
               
                <td>" . $result['email'] . "</td>
                
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
 
  <!-- Footer -->
  <div id="footer-placeholder"></div>

</body>

<a href="logout.php"><input type="submit" name="" value="Logout" class="btn_logout"></a>

</html>