<?php
session_start();

if(!$_SESSION['id']){
    header("location: loginRedirect.php");
    exit;
}

include_once "../classes/user.php";

$quiz = new User;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Notice</title>
</head>
<body>
<?php include "navBar.php" ?>


    <div class="card w-50 mt-5 mx-auto">
        <!-- <div class="card-header">
            <h1 class="h1 text-center"></h1>
        </div> -->
        <div class="card-body px-4">
            <div class="mt-4 w-75 mx-auto">
                <p class="text-info h5">Sorry, please add more than one new word in your word list at first.</p>
            </div>

        </div>

        <div class="link mx-auto p-2">
            <a href="./addNewWord.php" name="back" class="btn btn-info rounded-pill form-control my-2">Add new word</a>

            <button type="button" name="" class="btn  btn-outline-dark rounded-pill form-control my-2" onclick="history.back()">Back</button>
        </div>



    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>