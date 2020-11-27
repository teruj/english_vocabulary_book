<?php
session_start();

if(!$_SESSION['id']){
    header("location: loginRedirect.php");
    exit;
}

include_once "../classes/user.php";

$quiz = new User;





$theWord = $_POST['theWord'];

$selected = trim($_POST['selMeaning']);
$answer =trim($_POST['answer']);

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
    <title>Quiz Answer</title>
</head>
<body>
<?php include "navBar.php" ?>


    <div class="card w-50 mt-5 mx-auto">
        <div class="card-header <?php if($selected == $answer){ echo 'bg-primary';}else{ echo 'bg-danger';}?> ">
            <h1 class="display-4 font-weight-bold text-light text-center mb-0"><?= $theWord ?></h1>
        </div>

        <div class="card-body">
            <div class="mt-4 w-75 mx-auto">
                <?php $quiz->displayColor($selected,$answer)?>

                <?php $quiz->displayCorrect($selected,$answer) ?>
            </div>

            <a href="./quiz.php?userID=<?= $_SESSION['id'] ?>" name="back" class="w-50 btn btn-success rounded-pill form-control d-block mt-5 mx-auto">Next Word Quiz</a>

            <a href="../views/<?php if($_SESSION['role'] == 'A'){echo "dashboard.php";}else{echo "userTopList.php";} ?>"  type="button" name="" class="d-block mt-3 w-25 mx-auto btn btn-sm btn-outline-dark rounded-pill form-control" >Home</a>

            <!-- <button type="button" name="" class="w-25 btn btn-outline-dark rounded-pill form-control d-block mt-4 mx-auto" onclick="history.back()">Back</button> -->
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<!-- <?php
echo "<br><br>";

echo "selected: ".$selected."<br>";
echo "answer: ".$answer."<br>";

var_dump($selected);
echo "<br>";
var_dump($answer);
echo "<br><br>";

if($selected == $answer){
    echo "Correct!";
}else{
    echo "Wrong: correct answer is [ ".$answer." ]";
}

echo "<br><br>";

?> -->