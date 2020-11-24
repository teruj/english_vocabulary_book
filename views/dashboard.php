<?php
session_start();

if(!$_SESSION['id']){
    header("location: loginRedirect.php");
    exit;
}


include_once "../classes/user.php";

$user = new User;
$userList = $user->getUsers();


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
    <title>Dashboard</title>
</head>
<body>
<?php include "navBar.php" ?>
        

        <div class="container">
            <p class="text-center  mt-5">
                <a class="w-25 btn btn-danger mx-2 px-5 rounded-pill"  href="addNewWord.php"><i class="fas fa-plus" ></i> Add New Word</a>

                <a class="w-25 btn btn-success mx-2 px-5 rounded-pill" href="userTopList.php"> Edit My Word List</a>

                <a class="w-25 btn btn-primary mx-2 px-5 rounded-pill" href="addNewUser.php"><i class="fas fa-plus"></i> Add New User</a>
            </p>
            <table class="table table-striped text-center table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>User ID</th>
                        <th>User</th>
                        <th>Username</th>
                        <th>Nationality</th>
                        <th>Mother Tongue</th>
                        <th>Student</th>
                        <th>Role</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody >
                    <?php
                        while($userDetails = $userList->fetch_assoc()){
                    ?>

                    <tr>
                        <td><?= $userDetails['id'] ?></td>
                        <td><?= $userDetails['first_name']."&emsp;".$userDetails['last_name']; ?></td>
                        <td><?= $userDetails['username'] ?></td>
                        <td><?= $userDetails['nationality'] ?></td>
                        <td><?= $userDetails['mother_tongue'] ?></td>
                        <td><?= $userDetails['student'] ?></td>
                        <td><?= $userDetails['role'] ?></td>

                        <td>
                            <a class="btn btn-sm btn-outline-success" href="./editUser.php?userID=<?= $userDetails['id'] ?>">Edit</a>
                            
                            <a class="btn btn-sm btn-outline-secondary" href="../actions/deleteUser.php?userID=<?= $userDetails['id'] ?>"></i>Delete</a>
                        </td>

                    </tr>

                    <?php
                        }
                    ?>

                </tbody>

            </table>
        </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>