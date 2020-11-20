<?php
session_start();
if(!$_SESSION['id']){
    header(" location: loginRedirect.php");
    exit;
}

include_once "../classes/user.php";

$userID = $_POST['userID'];

$password = $_POST['passw'];
$cPassword = $_POST['cPassw'];

$user = new User;

$user->changePass($userID,$password,$cPassword);

?>