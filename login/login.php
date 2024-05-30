<?php

// Define the allowed credentials
$credentials = array(
    'user1' => 'password1',
    'user2' => 'password2',
    'user3' => 'password3',
    'user4' => 'password4',
    'user5' => 'password5'
);

// Get the submitted username and password
$username = $_POST['username'];
$password = $_POST['password'];

// Check if the submitted credentials are valid
if (isset($credentials[$username]) && $credentials[$username] === $password) {
    // Start the session
    session_start();

    // Set session variables
    $_SESSION['username'] = $username;

    // Redirect to the home page or another authorized page
    header('Location: home.php');
    exit();
} else {
    // Redirect back to the login page with an error message
    header('Location: login.html?error=1');
    exit();
}
?>
