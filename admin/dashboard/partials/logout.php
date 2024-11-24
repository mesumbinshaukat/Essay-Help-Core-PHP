<?php
// Check if cookies are set
if (isset($_COOKIE["admin_login"])) {
    // Optionally unset the PHP variables, though not strictly necessary
    unset($_COOKIE["admin_login"]);
    unset($_COOKIE["email"]);
    // Clear cookies by setting their expiration time in the past
    setcookie("admin_login", "", time() - 3600, "/"); // Ensure the path matches where cookies were set
    setcookie("email", "", time() - 3600, "/");
}

// Redirect to login page
header("location: ../../login.php");
exit();