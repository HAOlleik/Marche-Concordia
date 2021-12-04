
<?php session_start();

// clears session values
$_SESSION['username'] = null;
$_SESSION['firstname'] = null;
$_SESSION['lastname'] = null;

// redirects user to sign in page
session_destroy();
header("Location: signIn.php");
