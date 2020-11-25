<?php
session_start();

if(!$_SESSION['id']){
    header("location: loginRedirect.php");
    exit;
}

include_once "../classes/user.php";
$user = new User;
$userList = $user->getMyList();


if(isset($_POST['sortWord'])){
    $sortWord = $_POST['sortWord'];

    $userList = $user->getMyOrderedWords($sortWord);// no need 'return $userList' ;

}

if(isset($_POST['sortPoS'])){
    $sortPoS = $_POST['sortPoS'];

    $userList = $user->getMyOrderedPoS($sortPoS);// no need 'return $userList' ;

}

if(isset($_POST['sortMastery'])){
    $sortMastery = $_POST['sortMastery'];

    $userList = $user->getMyOrderedMastery($sortMastery);// no need 'return $userList' ;

}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>

        .radio-button input[type="radio"] + label{
            background-color:lightskyblue ;
            border-radius: 3px;
        }

        .radio-button input[type="radio"]:checked + label {
            background-color: blue;
            border-color: pink;
            color: white;
            border-radius: 3px;
        }

    </style>
    <title>User Top</title>
</head>

<body>
    <?php include "navBar.php" ?>

        <div class="container-xl mt-5">
            <p class="text-center">
                <a class="w-25 btn btn-primary mx-2 px-5 rounded-pill small" href="./quiz.php?userID=<?= $_SESSION['id'] ?>"> Quiz from your list</a>
                <a class="w-25 btn btn-danger mx-2 px-5 rounded-pill small" href="addNewWord.php"><i class="fas fa-plus"></i> Add New Word</a>
                <a class="w-25 btn btn-success mx-2 px-5 rounded-pill small" href="./editUser.php?userID=<?= $_SESSION['id'] ?>"><i class="fas fa-user-edit"></i>&emsp; Edit Profile</a>

            </p>
            <table class="table table-sm table-bordered">


                <thead class="table-dark text-center px-0">
                    <tr class="row align-middle mx-0">

                        <form action="" method="post">
                            <th class="col-2 ">
                                <div class="pt-2 mb-1 d-inline-block">
                                    Word&nbsp;(

                                    <button name="sortWord" value="ASC" class="d-inline-block btn btn-sm btn-light text-primary py-0 px-0 rounded-pill" style="font-size: 4px;width:40px;"><?php if($sortWord == 'ASC'){echo "<i class=\"fas fa-angle-double-up\"></i>";} ?>ASC</button>

                                    <button name="sortWord" value="DESC" class="d-inline-block  btn btn-sm btn-light text-primary py-0 px-0 rounded-pill" style="font-size: 4px;width:40px;">DESC<?php if($sortWord == 'DESC'){echo "<i class='fas fa-angle-double-down'></i>";} ?></button>
                                    )
                                </div>

                                <p class="small mb-1">( pronunciation )</p>

                                <div class="small mb-0">
                                    (&nbsp;PoS
                                    <button name="sortPoS" value="ASC" class="d-inline-block btn btn-sm btn-light text-success py-0 px-0 rounded-pill" style="font-size: 4px;width:40px;"><?php if($sortPoS == 'ASC'){echo "<i class=\"fas fa-angle-double-up\"></i>";} ?>ASC</button>

                                    <button name="sortPoS" value="DESC" class="d-inline-block btn btn-sm btn-light text-success py-0 px-0 rounded-pill" style="font-size: 4px;width:40px;">DESC<?php if($sortPoS == 'DESC'){echo "<i class='fas fa-angle-double-down'></i>";} ?></button>
                                    &nbsp;)
                                </div>

                            </th>



                            <th class="col-3">
                                <h2 class="h6 font-weight-bold pt-4 mb-0">Meaning</h2>
                                <i class="small">( max:255char. ) </i>
                            </th>

                            <th class="col-3">
                                <h2 class="h6 font-weight-bold pt-4">Example</h2>
                            </th>

                            <th class="col-1">
                                <h2 class="h6 font-weight-bold pt-4">Actions</h2>
                            </th>

                            <th class="col-3">
                                <h2 class="h6 font-weight-bold mb-0">Mastery</h2> 
                                <span class="small">(your progess for this word)</span>

                                <div class="small mb-0">
                                    (&nbsp;Sort
                                    <button name="sortMastery" value="C" class="d-inline-block btn btn-sm btn-light text-info py-0 px-0 rounded-pill" style="font-size: 4px; width:65px;"><?php if($sortMastery == 'C'){echo "<span class='text-danger'><i class=\"fas fa-angle-double-up\"></i></span><br>";} ?><i class="fas fa-thumbs-up"></i>&nbsp;Complete</button>

                                    <button name="sortMastery" value="S" class="d-inline-block btn btn-sm btn-light text-info py-0 px-0 rounded-pill" style="font-size: 4px;width:65px;"><?php if($sortMastery == 'S'){echo "<span class='text-danger'><i class='fas fa-angle-double-up'></i> </span><br>";} ?><i class="fas fa-check-double"></i>&nbsp;Studying</button>

                                    <button name="sortMastery" value="N" class="d-inline-block btn btn-sm btn-light text-info py-0 px-0 rounded-pill" style="font-size: 4px;width:65px;"><?php if($sortMastery == 'N'){echo "<span class='text-danger'><i class='fas fa-angle-double-up'></i></span><br>";} ?><i class="fas fa-exclamation"></i>&nbsp;Not at all</button>
                                    )
                                </div>

                        </form>
    <form action="../actions/updateUserTopList.php" method="post">
                                <button class="btn btn-sm btn-primary rounded-pill mt-2 py-0"><i class="fas fa-plus"></i> Save Mastery Change</button>
                            </th>
                    </tr>
                </thead>


                <tbody class="">

                <?php
                while ($userDetails = $userList->fetch_assoc()) {
                ?>
                    <tr class="d-flex text-center mx-0" style="height:100px;">
                        <td class="col-2 text-center" style="height:100px;">

                            <div class="pt-1 mb-0" style="overflow:auto">
                                <a href="editWord.php?selWord=<?= $user->escapeString($userDetails['sel_word'])  ?>" class="btn btn-sm  btn-white w-100"><span class="h5 font-weight-bold"><?= $userDetails['sel_word'] ?></span> </a>

                                <br>
                                <span class="text-secondary small">(<?= $userDetails['sel_pronunciation'] ?>)</span>
                                <br>
                                <span class="text-secondary small">(<i><?= $userDetails['sel_PoS'] ?></i>)</span> 
                            </div>

                        </td>

                        <td class="col-3 text-left small p-3" style="overflow: scroll;">
                            <strong><?= $userDetails['sel_e_meaning'] ?></strong>
                            <br>
                            (<?= $userDetails['sel_m_meaning'] ?>)
                        </td>

                        <td class="col-3 text-left small p-3" style="overflow: scroll;">
                            <strong><?= $userDetails['sel_e_sentence'] ?></strong>
                            <br>
                            (<?= $userDetails['sel_m_sentence'] ?>)
                        </td>

                        <td class="col-1 d-flex align-items-center text-center">
                            <div class="actions">
                                <a href="editWord.php?selWord=<?= $user->escapeString($userDetails['sel_word'])  ?>" class="btn btn-sm  btn-outline-success w-100  rounded-pill">Edit</a>

                                <a href="../actions/deleteTheWord.php?selWord=<?= $user->escapeString($userDetails['sel_word']) ?>" class="btn btn-sm  btn-outline-secondary w-100 rounded-pill mt-1">Delete</a>
                            </div>
                        </td>

                        <td class="col-3 tabSwitch px-0 mx-auto d-flex align-items-center" 　id="tabSwitch">

                            <div class="radio-button btn-group btn-group-toggle w-100 pt-1 d-flex justify-content-around pr-1" style="height: 65px;" >
                                <input  id="item-1-<?= $userDetails['id'] ?>" class="d-inline-block w-25 " type="radio" name="mastery[<?= $userDetails['id'] ?>]" value="C"
                                <?php if ($userDetails['mastery'] == 'C') {echo "checked";} ?> >
                                <label class="radio-button-label px-1 pt-2 small" style="margin-left: -55px;width:28%;" for="item-1-<?= $userDetails['id'] ?>">
                                    <i class="fas fa-thumbs-up mb-2"></i> <br> Complete
                                </label>

                                <input id="item-2-<?= $userDetails['id'] ?>" class="d-inline-block w-25" type="radio" name="mastery[<?= $userDetails['id'] ?>]" value="S"
                                <?php if ($userDetails['mastery'] == 'S') {echo "checked";} ?> >
                                <label class="radio-button-label px-1 pt-2 small" style="margin-left: -50px;width:28%;" for="item-2-<?= $userDetails['id'] ?>">
                                    <i class="fas fa-check-double mb-2"></i> <br> Studying
                                </label>

                                <input id="item-3-<?= $userDetails['id'] ?>" class="d-inline-block w-25" type="radio" name="mastery[<?= $userDetails['id'] ?>]" value="N"
                                <?php if ($userDetails['mastery'] == 'N') {echo "checked";} ?> >
                                <label class="radio-button-label pl-1 pt-2 small mr-1" style="margin-left: -50px;width:28%;" for="item-3-<?= $userDetails['id'] ?>">
                                    <i class="fas fa-exclamation mb-2"></i> <br> Not at all
                                </label>
                            </div>

                            <input type="text" name="hiddenWord" value="<?= $userDetails['sel_word'] ?>" hidden>
                        </td>
                    </tr>
                <?php
                }
                ?>

                </tbody>

            </table>
            <?php if($userList->num_rows == 0){ echo "<a href='addNewWord.php' class='btn btn-lg btn-outline-danger d-block w-75 mx-auto mt-5 '>No word is added now. Please add a new word first.<a>"; }  ?>
        </div>
    </form>

    <?php include "footer.php" ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>