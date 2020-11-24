<?php
session_start();

if(!$_SESSION['id']){
    header("location: loginRedirect.php");
    exit;
}

$userID = $_GET['userID'];

include_once "../classes/user.php";

$user = new User;

$quiz = $user->forQuizArray($userID);

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
    <title>QUIZ</title>
</head>
<body>
<?php include "navBar.php" ?>



<div class="card mt-5 w-50 mx-auto">
    <form action="./quizAnswer.php" method="post">
        <div class="card-header">
            <h1 class="h1 text-center"><?= stripslashes($quiz[0])   ?></h1>
        </div>
        <div class="card-body">

            <div class="mt-4 w-75 mx-auto">
                <input type="text" hidden name="theWord" value="<?=stripslashes($quiz[0])?> ">
                <input type="text" hidden name="answer" value="<?=$quiz[1]?> ">



                <div class="custom-control custom-radio mb-3">
                    <input type="radio" class="custom-control-input" id="w1" name="selMeaning" value="<?= $quiz[2][0][1] ?>">
                    <label for="w1" class="custom-control-label"><?=$quiz[2][0][1]?></label>
                </div>

                <div class="custom-control custom-radio mb-3">
                    <input type="radio" class="custom-control-input" id="w2" name="selMeaning" value="<?= $quiz[2][1][1] ?>">
                    <label for="w2" class="custom-control-label"><?=$quiz[2][1][1]?></label>
                </div>

                <div class="custom-control custom-radio mb-3">
                    <input type="radio" class="custom-control-input" id="w3" name="selMeaning" value="<?=$quiz[2][2][1]?>">
                    <label for="w3" class="custom-control-label"><?=$quiz[2][2][1]?></label>
                </div>

                <div class="custom-control custom-radio mb-3">
                    <input type="radio" class="custom-control-input" id="w4" name="selMeaning" value="<?=$quiz[2][3][1]?>">
                    <label for="w4" class="custom-control-label"><?=$quiz[2][3][1]?></label>
                </div>

                <button type="submit" class="btn btn-success mt-5 rounded-pill d-block mx-auto" name="btnAns">submit</button>

            </div>

            
        </div>
    </form>

</div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php
echo "<br><br>";
echo $userID."<br><br>";

print_r($quiz);

?>