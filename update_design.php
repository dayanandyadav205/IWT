<?php include("connection.php");
error_reporting(0);


session_start();

$id = $_GET['id'];

$userprofile = $_SESSION['user_name'];

if ($userprofile == true) {
} else {
    header('location:login.php');
}

$query = "SELECT * FROM form WHERE id='$id'";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);

$language   = $result['language'];
$language1  = explode(",", $language)

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
    <title>Update User Details</title>
    <link rel="stylesheet" href="/css/forms.css">
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

    <form action="#" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Update Details</legend>
            <table>
                <tr>
                    <td><input type="text" value="<?php echo $result['fname']; ?>" name="fname" placeholder="First Name" required></td>
                </tr>

                <tr>
                    <td> <input type="text" value="<?php echo $result['lname']; ?>" name="lname" placeholder="Last Name" required></td>
                </tr>

                <tr>
                    <td> <input type="password" value="<?php echo $result['password']; ?>" name="password" id="pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                            placeholder="Password"
                            title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                            required onclick="showpwd()"></td>
                    <br>
                    <td>

                    </td>
                </tr>

                <tr>
                    <td><input type="password" value="<?php echo $result['cpassword']; ?>" name="cpassword" id="cpwd" placeholder="Confirm Password" required></td>
                </tr>

                <tr>
                    <td><span id="pwdmsg"></span></td>
                </tr>

                <tr>
                    <td> <input type="email" value="<?php echo $result['email']; ?>" name="email" placeholder="Email" required></td>
                </tr>

                <tr>
                    <td> <input type="submit" value="Update Details" class="btn" name="update"></td>
                </tr>

            </table>
        </fieldset>
    </form>

    <?php include './include/footer.php'; ?>
</body>

</html>

<?php
if ($_POST['update']) {
    $fname           = $_POST['fname'];
    $lname           = $_POST['lname'];
    $pwd             = $_POST['password'];
    $cpwd            = $_POST['cpassword'];
    $email           = $_POST['email'];

    $query = "UPDATE form set fname='$fname',lname='$lname',password='$pwd',cpassword='$cpwd',
              email='$email' WHERE id='$id'";

    $data = mysqli_query($conn, $query);

    if ($data) {
        echo "<script >alert('Record Updated')</script>";
?>
        <meta http-equiv="refresh" content="0;url = /display_admin.php" />
<?php
    } else {
        echo "Failed to Update";
    }
}

?>