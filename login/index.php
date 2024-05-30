<?php

// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect to the login page
    header('Location: login.html');
    exit();
}

// Display the home page content
echo "<h2>Welcome, {$_SESSION['username']}!</h2>";
echo "<p>This is the home page.</p>";
echo "<a href='logout.php'>Logout</a>";

?>
