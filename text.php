<?php session_start();

$pw_file = "pw.txt";
$user_file = "users.txt";

if (isset($_POST['submit'])) {
    $user = $_POST['username'];
    $pw = $_POST['password'];
    $submit = $_POST['submit'];
}

if ($user == "" || $pw == "" && $submit == "Login") {
    $_SESSION['error'] = "Please enter an input for both feilds.";
    header("Location: signIn.php");
} else {
    if (validate($user_file, $user) !== $user || validate($pw_file, $pw) !== $pw) {

        $_SESSION['error'] = "Incorrect Username or Password";
        header("Location: signIn.php");
    } else {

        $_SESSION['username'] = $user;
        if ($user != "Admin") {
            print "Welcome $user";
            header("Location: category1_final.php");
        } else {
            print "Welcome $user";
            header("Location: final_b.php");
        }
    }
}




function validate($file, $test)
{
    if (file_exists($file)) {
        $read = fopen($file, 'r');
        $to_string = fread($read, filesize($file));
        $text_names = explode(" ", $to_string);
        if (!in_array($test, $text_names)) {
            return false;
        } else {
            return $test;
        }
    }
}
