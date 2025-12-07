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
    <title>Register</title>
  
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
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
          <p>I am Dayanand Yadav, working as an Assistant Professor in Computer Science & Engineering Department in
            Chameli Devi Group of Institutions, Indore</p>
        </div>
      </div>
      <div class="myLinks">
        <h3>My Links</h3>
        <ul>
          <li><a href="https://github.com/dayanandyadav205"><i class="fa-brands fa-github"></i></a></li>
          <li><a href="https://www.linkedin.com/in/dayanandyadav205"><i class="fa-brands fa-linkedin"></i></a></li>
          <li><a href="mailto:dayanandyadav205@gmail.com" target="_top"><i class="fa-solid fa-envelope"></i></a></li>
          <li><a href="https://www.w3.org/"><i class="fa-brands fa-w3c"></i></a></li>
        </ul>
      </div>

    </div>

    <div class="form_container">
        <div class="title">
            Update Details
        </div>
        <form action="#" method="post" enctype="multipart/form-data">
        <div class="form">

            <!-- <div class="input_field">
                <label>Upload Image</label>
                <input type="file" value="<?php echo $result['upload_img'];?>" name="uploadfile_img" style="width:100%;" required>
            </div> -->

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
                <label for="">Gender</label>
                <div class="custom_select">
                    <select name="gender" id="" required>
                        <option value="Not Selected">Select</option>

                        <option value="Male" 
                            <?php
                                if($result['gender'] == 'Male')
                                {
                                    echo "selected";
                                }
                            ?>
                        >
                        
                        Male</option>
                        <option value="Female"
                            <?php
                                if($result['gender'] == 'Female')
                                {
                                    echo "selected";
                                }
                            ?>
                        >
                        Female</option>
                    </select>
                </div>
            </div>

            <div class="input_field">
                <label for="">Email Address</label>
                <input type="email" value="<?php echo $result['email'];?>" class="input" 
                name="email" required>
            </div>

            <div class="input_field">
                <label for="">Phone Number</label>
                <input type="text" value="<?php echo $result['phone'];?>" class="input" 
                name="phone" required>
            </div>

             <div class="input_field">
                <label style="margin-right: 100px">Caste</label>
                <input type="radio" class="input" name="caste" value="General" required 
                
                <?php 
                     if($result['caste'] == "General")
                     {
                        echo "checked";
                     }
                ?>
                   
                >
                <label style="margin-left: -20px">General</label>

                <input type="radio" class="input" name="caste" value="OBC" required
                
                <?php 
                    if($result['caste'] == "OBC")
                    {
                    echo "checked";
                    }
                ?>
                
                >
                <label style="margin-left: -20px">OBC</label>

                <input type="radio" class="input" name="caste" value="SC" required
                
                <?php 
                    if($result['caste'] == "SC")
                    {
                    echo "checked";
                    }
                ?>
                
                >
                <label style="margin-left: -20px">SC</label>

                <input type="radio" class="input" name="caste" value="ST" required
                
                <?php 
                    if($result['caste'] == "ST")
                    {
                    echo "checked";
                    }
                ?>
                
                ><label style="margin-left: -20px">ST</label>
            </div>

            <div class="input_field">
                <label style="margin-right: 100px">Languages</label>
                <input type="checkbox" class="input" name="language[]" value="Hindi"
                
                <?php
                    if(in_array('Hindi', $language1))
                    {
                        echo "checked";
                    }
                ?>
                
                ><label style="margin-left: 5px">Hindi</label>

                <input type="checkbox" class="input" name="language[]" value="Urdu"
                
                <?php
                    if(in_array('Urdu', $language1))
                    {
                        echo "checked";
                    }
                ?>
                
                ><label style="margin-left: 5px">Urdu</label>

                <input type="checkbox" class="input" name="language[]" value="English"
                
                <?php
                    if(in_array('English', $language1))
                    {
                        echo "checked";
                    }
                ?>
                
                ><label style="margin-left: 5px">English</label>
            </div>

            <div class="input_field">
                <label for="">Address</label>
                <textarea name="address" id="" required><?php echo $result['address'];?></textarea>
            </div>

            <!-- <div class="input_field">
                <label>Upload Document</label>
                <input type="file" value="<?php echo $result['upload_doc'] ?>" name="uploadfile_doc" style="width:100%;" required>
            </div> -->

            <div class="input_field terms">
                <label for="" class="check">
                    <input type="checkbox" name="check" required>
                    <span class="checkmark"></span>
                </label>
                <p>Agree terms and conditions</p>
            </div>
            <div class="input_field">
                <input type="submit" value="Update Details" class="btn" name="update">
            </div>
        </div>
        </form>
    </div>

      <!-- Footer -->
  <footer>
    <div class="footer">
      <p>&copy; Designed & Developed by Dayanand Yadav, Assistant Professor, CSE Department, CDGI, Indore</p>
    </div>
  </footer>
</body>

</html>

<?php
if ($_POST['update']) 
    {
        $upload_img      = $_POST['upload_img'];
        $fname           = $_POST['fname'];
        $lname           = $_POST['lname'];
        $pwd             = $_POST['password'];
        $cpwd            = $_POST['cpassword'];
        $gender          = $_POST['gender'];
        $email           = $_POST['email'];
        $phone           = $_POST['phone'];
        $caste           = $_POST['caste'];

        $lang            = $_POST['language'];
        $lang1           = implode(",", $lang);

        $address         = $_POST['address'];
        $upload_doc      = $_POST['upload_doc'];

    $query = "UPDATE form set upload_img='$upload_img',fname='$fname',lname='$lname',password='$pwd',cpassword='$cpwd',gender='$gender',
              email='$email',phone='$phone',caste='$caste',language='$lang1',address='$address',upload_doc='$upload_doc' WHERE id='$id'";

    $data = mysqli_query($conn, $query);

    if ($data) 
        {
        echo "<script >alert('Record Updated')</script>";
        ?>

            <meta http-equiv="refresh" content="0;url = http://localhost/IWT/display_admin.php"/>

        <?php
        } 
    else 
    {
        echo "Failed to Update";
    }
}

?> 