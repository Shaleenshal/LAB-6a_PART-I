<?php 
// Start session at the top of the file
session_start();

// Include auth.php file (if required)
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p>
    Welcome 
    <?php 
    // Check if 'username' is set in the session
    if (isset($_SESSION['username'])) {
        echo $_SESSION['username'];
    } else {
        echo "Guest"; // Default fallback value
    }
    ?>!
</p>
<p>This is secure area.</p>
<p><a href="dashboard.php">Dashboard</a></p>
<a href="logout.php">Logout</a>
</div>
</body>
</html>
