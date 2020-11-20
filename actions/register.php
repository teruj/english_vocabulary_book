<?php

include "../classes/user.php";

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$username = $_POST['username'];
$passw =password_hash($_POST['passw'],PASSWORD_DEFAULT) ;
$nationality = $_POST['nationality'];
$MT = $_POST['MT'];
$studentYN = $_POST['studentYN'];

$origin = $_POST['btnRegister'];

$user = new User;
$user->createUser($origin,$firstName,$lastName,$username,$passw,$nationality,$MT,$studentYN);

