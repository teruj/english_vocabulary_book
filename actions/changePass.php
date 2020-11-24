<?php
session_start();
if(!$_SESSION['id']){
    header(" location: loginRedirect.php");
    exit;
}

include_once "../classes/user.php";

$ID = $_POST['userID'];

$password = $_POST['passw'];
$cPassword = $_POST['cPassw'];

// echo $ID;
// echo "<br>";
// echo $password;
// echo "<br>";
// echo $cPassword;

$user = new User;

$user->changePass($ID,$password,$cPassword);

?>