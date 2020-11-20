<?php
session_start();

if(!$_SESSION['id']){
    header(" location: loginRedirect.php");
    exit;
}

include_once "../classes/user.php";


$userID = $_GET['userID'];


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
    <title>Change Password</title>
</head>
<body>
<!-- <?= $userID ?> -->
<?php include "navBar.php" ?>

    <div class="card my-5 mx-auto " style="width: 35%;">
        <div class="card-header bg-white border-0">
            <h1 class="h3 text-center">Change Password</h1>
        </div>
        <div class="card-body">
            <form action="../actions/changePass.php" method="post">
            <!-- <form action="../actions/changePass.php?userID=<?=$userID?>" method="post"> -->


                <input type="hidden" name="userID" value="<?=$userID?>">


                <label for="passw">New password</label>
                <input type="password" name="passw" id="passw" class=" form-control mb-2" required>


                <label for="cPassw">(Again for confirmation)</label>
                <input type="password" name="cPassw" id="cPassw" class="form-control mb-5" required>

                    <!-- <a href="../actions/changePass.php" class="d-block w-50 mx-auto mb-4 btn btn-danger rounded-pill form-control">Submit</a> -->

                    <button class="d-block w-50 mx-auto mb-4 btn btn-danger rounded-pill form-control">Submit</button>

                    <button type="button" name="" class="d-block w-25 mx-auto btn btn-sm btn-outline-dark rounded-pill form-control" onclick="history.back()">Back</button>

            </form>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>