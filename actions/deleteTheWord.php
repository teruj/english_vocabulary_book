<?php
session_start();

if(!$_SESSION['id']){
    header(" location: loginRedirect.php");
    exit;
}

include_once "../classes/user.php";

$theWord = $_GET['selWord'];

$user = new User;

$user->deleteTheWord($theWord);



