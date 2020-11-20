<?php
session_start();

include_once "../classes/user.php";

// $word = $_POST['word'];
// $word = $_POST['sel_word'];
// $id = $_POST['id'];
$mastery = $_POST['mastery'];

// print_r($mastery);

$user = new User;

$user->updateUserTopList($mastery);

