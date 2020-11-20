<?php
session_start();

if(!$_SESSION['id']){
    header("location: loginRedirect.php");
    exit;
}

$userID = $_GET['userID'];
echo $userID."<br><br>";

include_once "../classes/user.php";

$user = new User;



$example1 = $user->quizForDummy();


echo "For dummy 3 sentences:  ALL ARRAYS<br>";
$arrayA = $example1->fetch_all();

$randA = array_rand($arrayA,3);

echo "<p class='text-danger'>";
foreach($randA as $key){
    print_r($arrayA[$key][1]) ;
    $arrayWord[] = $arrayA[$key];
    echo "<br>";
}
echo "</p>";
echo "<br>";

print_r($randA);
echo "<br><br>";
print_r($arrayWord);


echo "<br><br>---------------------------------------------------------------<br><br>";

$example2 = $user->quizAnsWord($userID);

$arrayB = $example2->fetch_all();

echo "for the ANSWER WORD";

echo "<p class='text-danger'>";

$randB = array_rand($arrayB);
echo "RANDOM: ".$randB;
echo "<br>";
print_r($arrayB[$randB][1]) ;

echo "</p>";

$arrayWord[] = $arrayB[$randB];

print_r($arrayWord);
echo "<br><br><br>";

shuffle($arrayWord);

echo "<p class='text-danger'>";
echo "SHUFFLED ALL (including the answer word)";
echo "</p>";
print_r($arrayWord);




// $example1 = $user->quizForDummy();


// echo "For dummy 3 sentences:  ALL ARRAYS<br>";
// $arrayA = $example1->fetch_all();

// $randA = array_rand($arrayA,3);

// echo "<p class='text-danger'>";
// foreach($randA as $key){
//     print_r($arrayA[$key][1]) ;
//     $arrayWord[] = $arrayA[$key];
//     echo "<br>";
// }
// echo "</p>";
// echo "<br>";

// print_r($randA);
// echo "<br><br>";
// print_r($arrayWord);


// echo "<br><br>---------------------------------------------------------------<br><br>";

// $example2 = $user->quizAnsWord($userID);

// $arrayB = $example2->fetch_all();

// echo "for the ANSWER WORD";

// echo "<p class='text-danger'>";

// $randB = array_rand($arrayB);
// echo "RANDOM: ".$randB;
// echo "<br>";
// print_r($arrayB[$randB][1]) ;

// echo "</p>";

// $arrayWord[] = $arrayB[$randB];

// print_r($arrayWord);
// echo "<br><br><br>";

// shuffle($arrayWord);

// echo "<p class='text-danger'>";
// echo "SHUFFLED ALL (including the answer word)";
// echo "</p>";
// print_r($arrayWord);

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

<div class="card mt-5 w-75 mx-auto">
    <form action="" method="post">
        <div class="card-body">
            <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input " id="w1" name="theWord" value="meaning1">
                <label for="w1" class="custom-control-label">W1</label>
            </div>

            <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input " id="w2" name="theWord" value="meaning2">
                <label for="w2" class="custom-control-label">W2</label>
            </div>

            <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input " id="w3" name="theWord" value="meaning3">
                <label for="w3" class="custom-control-label">W3</label>
            </div>

            <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input " id="w4" name="theWord" value="meaning4">
                <label for="w4" class="custom-control-label">W4</label>
            </div>

            <button type="submit" class="btn btn-sm btn-success" name="btnAns">submit</button>

        </div>
    </form>
        
</div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>