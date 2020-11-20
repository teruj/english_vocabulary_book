<?php
session_start();

if(!$_SESSION['id']){
    header(" location: loginRedirect.php");
    exit;
}

include_once "../classes/user.php";

$userID = $_GET['userID'];

$user = new User;
$user->deleteUser($userID);
