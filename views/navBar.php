<?php session_start();?>
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
    <title>nav</title>
</head>
<body>

    <nav class="navbar navbar-dark bg-primary navbar-expand-lg">
        <a href="#" class="navbar-brand"><h1>TITLE</h1></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a href="./dashboard.php" class="nav-link text-white">Dashboard</a></li>
                <li class="nav-item"><a href="./userTopList.php" class="nav-link text-white">Word List</a></li>
                <li class="nav-item"><a href="./addNewWord.php" class="nav-link text-white">Add New Word</a></li>
                <!-- <li class="nav-item"><a href="./category.php" class="nav-link text-dark">Menu4</a></li> -->
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="./profile.php" class="nav-link"><?= $_SESSION['name'];?></a></li>
                <a class="btn btn-danger rounded-pill font-weight-bold" style="width:90px;" href="./logout.php" >Log out</a>

            </ul>


        </div>
    </nav>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

