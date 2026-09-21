<?php include("connection.php"); 
error_reporting(0);


session_start();

$id= $_GET['id'];

$userprofile = $_SESSION['user_name'];

if($userprofile == true)
{
    
}

else
{
     header('location:login.php');
}

$query = "SELECT * FROM form WHERE id='$id'";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);

$language   = $result['language'];
$language1  = explode(",", $language)

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User Details</title>
    <link rel="stylesheet" href="/css/forms.css">
    
</head>
<body>
<?php include 'header.php'; ?>

    <div class="form_container">
        <div class="title">
         
        </div>
        <form action="#" method="post" enctype="multipart/form-data">
           <h2>Update Details</h2>  
        <div class="form">

            <div class="input_field">
                <label for="">First Name</label>
                <input type="text" value="<?php echo $result['fname'];?>" class="input" 
                name="fname" required>
            </div>

            <div class="input_field">
                <label for="">Last Name</label>
                <input type="text" value="<?php echo $result['lname'];?>" class="input" 
                name="lname" required>
            </div>

             <div class="input_field">
                <label for="">Password</label>
                <input type="password" value="<?php echo $result['password'];?>" class="input" 
                name="password" required>
            </div>

            <div class="input_field">
                <label for="">Confirm Password</label>
                <input type="password" value="<?php echo $result['cpassword'];?>" class="input" 
                name="cpassword" required>
            </div>

            <div class="input_field">
                <label for="">Email Address</label>
                <input type="email" value="<?php echo $result['email'];?>" class="input" 
                name="email" required>
            </div>

            <div class="input_field">
                <input type="submit" value="Update Details" class="btn" name="update">
            </div>
        </div>
        </form>
    </div>

  <?php include 'footer.php'; ?>
</body>

</html>

<?php
if ($_POST['update']) 
    {
        $fname           = $_POST['fname'];
        $lname           = $_POST['lname'];
        $pwd             = $_POST['password'];
        $cpwd            = $_POST['cpassword'];
        $email           = $_POST['email'];

    $query = "UPDATE form set fname='$fname',lname='$lname',password='$pwd',cpassword='$cpwd',
              email='$email' WHERE id='$id'";

    $data = mysqli_query($conn, $query);

    if ($data) 
        {
        echo "<script >alert('Record Updated')</script>";
        ?>
            <meta http-equiv="refresh" content="0;url = /display_admin.php"/>
        <?php
        } 
    else 
    {
        echo "Failed to Update";
    }
}

?> 