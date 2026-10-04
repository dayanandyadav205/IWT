<?php
session_start();
include("connection.php");

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $pwd = $_POST['password'];

    // FIXED: Using Prepared Statements to prevent SQL Injection
    $query = "SELECT * FROM admin WHERE email = ?";
    $stmt = mysqli_prepare($conn, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($result && mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);

            // Note: If you hash passwords using password_hash(), change this to:
            // if (password_verify($pwd, $row['password'])) {
            if ($row['password'] === $pwd) {
                $_SESSION['user_name'] = $username;
                header('location: display_admin.php');
                exit();
            } else {
                $error_msg = "Invalid Admin email or password.";
            }
        } else {
            $error_msg = "Invalid Admin email or password.";
        }
        mysqli_stmt_close($stmt);
    } else {
        $error_msg = "Database query failed: " . mysqli_error($conn);
    }
}
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
    <title>Admin Login Page</title>
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

    <!-- Form -->
    <main>


        <form action="#" method="POST" autocomplete="off">

            <fieldset>
                <legend>Admin Login</legend>
                <table>
                    <tr>
                        <td> <input type="text" name="username" placeholder="Email" required>
                        </td>
                    </tr>

                    <tr>
                        <td><input type="password" name="password" placeholder="Password" required>
                        </td>
                    </tr>

                    <tr>
                        <td> <input type="submit" name="login" value="Login"></td>
                    </tr>

                </table>
            </fieldset>
        </form>

    </main>

    <?php include './include/footer.php'; ?>
</body>

</html>

<script>
    function message() {
        alert("To password yadd kar lo bhai")
    }
</script>