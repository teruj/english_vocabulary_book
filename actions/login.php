<?php

include "../classes/user.php";

$username = $_POST['username'];
$passw = $_POST['passw'];

$user = new User;
$user->login($username,$passw);