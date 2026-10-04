<?php

session_start();
echo "Welcome " . $_SESSION['user_name'];

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
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
    <title>Display Admin</title>
</head>

<body>

<?php include './include/header.php'; ?>

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

        <br>

<a href="logout.php"><input type="submit" name="" value="Logout" class="btn_logout"></a>

  <?php include './include/footer.php'; ?>

</body>

<script>
    function checkdelete() {
        return confirm('Are you sure you want to delete this record?');
    }
</script>



</html>