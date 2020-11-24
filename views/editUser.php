<?php
session_start();

if(!$_SESSION['id']){
    header("location: loginRedirect.php");
    exit;
}

$userID = $_GET['userID'];

include_once "../classes/user.php";
$user = new User;
$userInfo = $user->getUser($userID);

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
    <title>Edit User</title>
</head>
<body>
<?php include "navBar.php" ?>

    <div class="card my-5 mx-auto " style="width: 35%;">
        <div class="card-header bg-white border-0">
            <h1 class="text-center">Edit Profile</h1>
        </div>
        <div class="card-body px-5">
            <form action="../actions/editUser.php" method="post">
                <input type="hidden" name="userID" value="<?=$userInfo['id']?>">

                <label for="firstName">First Name</label>
                <input type="text" name="firstName" id="firstName" class="form-control mb-3" required autofocus value="<?=$userInfo['first_name'] ?>">

                <label for="lastName">Last Name</label>
                <input type="text" name="lastName" id="lastName" class="form-control mb-3" required value="<?=$userInfo['last_name'] ?>">

                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control mb-5" maxlength="15" required placeholder="max length: 15" value="<?=$userInfo['username'] ?>">


                <label for="nationality">Nationality</label>
                <input type="text" name="nationality" id="nationality" class="form-control mb-2" required value="<?=$userInfo['nationality'] ?>">

                <label for="MT">Mother Tongue</label>
                <input type="text" name="MT" id="MT" class="form-control mb-2" required value="<?=$userInfo['mother_tongue'] ?>">

                <label for="studentYN">Student</label>
                <br>
                <div class="row justify-content-around">
                    <div class="custom-control custom-radio d-inline px-0">
                        <input type="radio" name="studentYN" id="sYes" class="form-control-input"
                        <?php if($userInfo['student'] == 'Y'){ echo "checked";} ?> value="Y">
                        <label for="sYes" class="costom-control-label">Yes</label>
                    </div>
                    <div class="custom-control custom-radio d-inline pl-0 pr-2">
                        <input type="radio" name="studentYN" id="sNo" class="form-control-input"
                        <?php if($userInfo['student'] == 'N'){ echo "checked";} ?> value="N">
                        <label for="sNo" class="costom-control-label">No</label>
                    </div>
                </div>

                <div>
                    <button type="submit" class="d-block w-50 mx-auto mt-5 mb-4 btn btn-success rounded-pill" name="btnSave" value="saveChanges">Save changes</button>

                    <?php if($userID == $_SESSION['id']){
                        $ID = $userInfo['id'];
                        echo "<a href=\"./changePass.php?userID=$ID\" class=\"d-block w-50 mx-auto mt-2 mb-4 btn btn-outline-success rounded-pill\"  >Change PW</a>";
                        }
                    ?>
                    <button type="button" name="" class="d-block mt-5 w-25 mx-auto btn btn-sm btn-outline-dark rounded-pill form-control" onclick="history.back()">Back</button>

                </div>
            </form>
        </div>
    </div>





    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>