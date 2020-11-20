<?php
session_start();

if(!$_SESSION['id']){
    header(" location: loginRedirect.php");
    exit;
}

include_once "../classes/user.php";



$userID = $_POST['userID'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$username = $_POST['username'];
$nationality = $_POST['nationality'];
$MT = $_POST['MT'];
$studentYN = $_POST['studentYN'];

$_SESSION['name'] = $firstName . " ". $lastName;

$user = new User;
$user->updateUser($firstName,$lastName,$username,$nationality,$MT,$studentYN,$userID);

