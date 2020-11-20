<?php
session_start();

include_once "../classes/user.php";

$word = $_POST['word'];
$mastery = $_POST['accessible-radio'];
$PoS = $_POST['PoS'];
$pronunciation = $_POST['pronunciation'];
$eMean = $_POST['eMean'];
$mMean = $_POST['mMean'];
$eSentence = $_POST['eSentence'];
$mSentence = $_POST['mSentence'];

$user = new User;

// var_dump($user->escapeString($word,$PoS,$pronunciation,$eMean,$eSentence))  ;


$user->addNewWord($word,$PoS,$pronunciation,$eMean,$mMean,$eSentence,$mSentence,$mastery);

// MASTERY!