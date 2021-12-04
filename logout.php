
<?php session_start();

// clears session values
$_SESSION['username'] = null;
$_SESSION['firstname'] = null;
$_SESSION['lastname'] = null;

// redirects user to login page
session_destroy();
header("Location: signin.php");
