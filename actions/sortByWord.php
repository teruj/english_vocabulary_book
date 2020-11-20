<?php
session_start();

if(!$_SESSION['id']){
    header(" location: loginRedirect.php");
    exit;
}

include_once "../classes/user.php";

$sortType = $_GET['sortType'];
// $userID = $_GET['userID'];

echo $sortType;
echo "<br>";


$user = new User;
$user->getMyOrderedList($sortType);
