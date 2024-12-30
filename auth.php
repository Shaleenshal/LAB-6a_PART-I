<?php
// Start session only if it is not already active
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Authentication logic here
// For example, check if the user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect to login page if not logged in
    header("Location: login.php");
    exit();
}
?>
