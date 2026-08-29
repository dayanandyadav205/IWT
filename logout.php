<?php
// 1. Initialize the session framework
session_start();

// 2. Unset all session variables 
$_SESSION = array();

// 3. Clear the session cookie from the user's browser for maximum security
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(), 
        '', 
        time() - 42000,
        $params["path"], 
        $params["domain"],
        $params["secure"], 
        $params["httponly"]
    );
}

// 4. Destroy the session file on the server completely
session_destroy();

// 5. Redirect back to the entry login screen
header("Location: login_user.php");
exit();
?>
