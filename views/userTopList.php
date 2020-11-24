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
    <!-- <style>
        /* @import url(https://fonts.googleapis.com/css?family=Open+Sans); */

        #tabSwitch{
            border-radius: 5px;
        }

        .radio-inline__input {
            clip: rect(1px, 1px, 1px, 1px);
            position: absolute !important;
        }

        .radio-inline__label {
            display: inline-block;
            /* padding: 0.5rem 1rem; */
            margin: 3px 0px;
            border-radius: 5px;
            transition: all .2s;
            background: lightgrey;
            width: 30%;
            height: 40px;
            line-height: 20px;
        }

        .radio-inline__input:checked + .radio-inline__label {
            /* background: #B54A4A; */
            color: #fff;
            text-shadow: 0 0 1px rgba(0,0,0,.7);
        }

        #item-1:checked + .radio-inline__label {
            background: blue;
        }
        #item-2:checked + .radio-inline__label {
            background: green;

        }
        #item-3:checked + .radio-inline__label {
            background: red;
        }

        .radio-inline__input:focus + .radio-inline__label {
            outline-color: #4D90FE;
            outline-offset: -1px;
            outline-style: auto;
            outline-width: 5px;
        }
    </style> -->
    <title>User Top</title>
</head>

<body>
    <?php include "navBar.php" ?>

        <div class="container-fluid mt-5">
            <p class="text-center">
                <a class="w-25 btn btn-info mx-2 px-5 rounded-pill small" href="./quiz.php?userID=<?= $_SESSION['id'] ?>"> Quiz from your list</a>
                <a class="w-25 btn btn-danger mx-2 px-5 rounded-pill small" href="addNewWord.php"><i class="fas fa-plus"></i> Add New Word</a>
                <a class="w-25 btn btn-success mx-2 px-5 rounded-pill small" href="./editUser.php?userID=<?= $_SESSION['id'] ?>"><i class="fas fa-user-edit"></i>&emsp; Edit Profile</a>

            </p>
            <table class="table table-sm table-bordered table-hover">


                <thead class="table-dark text-center px-0">
                    <tr class="row align-middle mx-0">

                        <form action="" method="post">
                            <th class="col-2 align-middle mt-1 border-0">
                                <div class="mb-1 d-inline-block">
                                    Word&nbsp;(
                                    
                                    <button name="sortWord" value="ASC" class="d-inline-block btn btn-sm btn-light text-primary py-0 px-0 rounded-pill" style="font-size: 4px;"><?php if($sortWord == 'ASC'){echo "<i class=\"fas fa-angle-double-up\"></i>";} ?>ASC</button>

                                    <button name="sortWord" value="DESC" class="d-inline-block  btn btn-sm btn-light text-primary py-0 px-0 rounded-pill" style="font-size: 4px;">DESC<?php if($sortWord == 'DESC'){echo "<i class='fas fa-angle-double-down'></i>";} ?></button>
                                    )
                                </div>

                                <p class="small mb-1">( pronunciation )</p>

                                <div class="small mb-0">
                                    (&nbsp;PoS
                                    <button name="sortPoS" value="ASC" class="d-inline-block btn btn-sm btn-light text-success py-0 px-0 rounded-pill" style="font-size: 4px;"><?php if($sortPoS == 'ASC'){echo "<i class=\"fas fa-angle-double-up\"></i>";} ?>ASC</button>

                                    <button name="sortPoS" value="DESC" class="d-inline-block btn btn-sm btn-light text-success py-0 px-0 rounded-pill" style="font-size: 4px;">DESC<?php if($sortPoS == 'DESC'){echo "<i class='fas fa-angle-double-down'></i>";} ?></button>
                                    &nbsp;)
                                </div>

                            </th>


                            <!-- <th class="col-1 align-middle mt-1 border-0 ">
                                <p class="mb-3">PoS</p>

                                <button name="sortPoS" value="ASC" class="btn btn-sm btn-light text-primary py-0 px-0 w-100 rounded-pill" style="font-size: 4px;">
                                <?php if($sortPoS == 'ASC'){echo "<i class=\"fas fa-angle-double-up\"></i><br>";} ?>ASC</button>

                                <button name="sortPoS" value="DESC" class="btn btn-sm btn-light text-primary py-0 px-0 w-100 rounded-pill mt-1" style="font-size: 4px;">
                                DESC<?php if($sortPoS == 'DESC'){echo "<br><i class='fas fa-angle-double-down'></i>";} ?></button>

                            </th> -->
                        </form>

                            <th class="col-3 align-middle border-0">
                                Meaning
                                <br>
                                <i class="small">( max:255char. ) </i>

                            </th>

                            <th class="col-3 align-middle border-0">Example</th>

                            <th class="col-1 align-middle border-0">Actions</th>

                            <th class="col-3 align-middle border-0">
                                Mastery <br>
                                <span class="small">(your progess for this word)</span>
    <form action="../actions/updateUserTopList.php" method="post">
                                <button class="btn btn-sm btn-primary rounded-pill mt-2"><i class="fas fa-plus"></i> Save Mastery Change</button>
                            </th>
                    </tr>
                </thead>

                
                <tbody class="">
                
                <?php
                while ($userDetails = $userList->fetch_assoc()) {
                ?>
                    <tr class="row text-center mx-0">
                        <td class="col-2 text-center">
                            <div class="">
                                <h2 class="h3 mb-0"><?= $userDetails['sel_word'] ?></h2>　
                                <h4 class="h6">(<?= $userDetails['sel_pronunciation'] ?>)</h4>
                                <h4 class="h6">(<i><?= $userDetails['sel_PoS'] ?></i>)</h4>
                            </div>
                            
                        </td>

                        <!-- <td class="col-1 align-middle"><?= $userDetails['sel_PoS'] ?></td> -->

                        <td class="col-3 align-middle text-left">
                            <strong><?= $userDetails['sel_e_meaning'] ?></strong>
                            <br>
                            (<?= $userDetails['sel_m_meaning'] ?>)
                        </td>

                        <td class="col-3 align-middle text-left">
                            <strong><?= $userDetails['sel_e_sentence'] ?></strong>
                            <br>
                            (<?= $userDetails['sel_m_sentence'] ?>)
                        </td>

                        <td class="col-1 align-middle text-center">
                            <a href="editWord.php?selWord=<?= $user->escapeString($userDetails['sel_word'])  ?>" class="btn btn-sm btn-outline-success w-100 px-0 py-0 rounded-pill">Edit</a>
                            <br>
                            <a href="../actions/deleteTheWord.php?selWord=<?= $user->escapeString($userDetails['sel_word']) ?>" class="btn btn-sm btn-outline-secondary w-100 px-0 py-0 rounded-pill mt-1">Delete</a>
                        </td>

                        <td class="col-3 p-0 d-flex align-items-center justify-content-around  tabSwitch mr-0 px-0" id="tabSwitch">



                            <!-- <div> -->
                            <input id="item-1-<?= $userDetails['id'] ?>" class="" type="radio" name="mastery[<?= $userDetails['sel_word'] ?>]" value="C" 
                            <?php if ($userDetails['mastery'] == 'C') {echo "checked";} ?> >
                            <label class="small" style="margin-left: -20px;" for="item-1-<?= $userDetails['id'] ?>">
                                <i class="fas fa-thumbs-up"></i> <br> Complete
                            </label>
                            <!-- </div> -->

                            <!-- <div> -->
                            <input id="item-2-<?= $userDetails['id'] ?>" class="" type="radio" name="mastery[<?= $userDetails['sel_word'] ?>]" value="S" 
                            <?php if ($userDetails['mastery'] == 'S') {echo "checked";} ?> >
                            <label class=" small" style="margin-left: -20px;" for="item-2-<?= $userDetails['id'] ?>">
                                <i class="fas fa-check-double"></i> <br> Studying
                            </label>
                            <!-- </div> -->


                            <!-- <div> -->
                            <input id="item-3-<?= $userDetails['id'] ?>" class="" type="radio" name="mastery[<?= $userDetails['sel_word'] ?>]" value="N" 
                            <?php if ($userDetails['mastery'] == 'N') {echo "checked";} ?> >
                            <label class="small" style="margin-left: -20px;" for="item-3-<?= $userDetails['id'] ?>">
                                <i class="fas fa-exclamation"></i> <br> Not at all
                            </label>
                            <!-- </div> -->
                            <input type="text" name="hiddenWord" value="<?= $userDetails['sel_word'] ?>" hidden>
                        </td>
                    </tr>
                <?php
                }
                ?>
                
                </tbody>

            </table>
            <?php if($userList->num_rows == 0){ echo "<a href='addNewWord.php' class='btn btn-lg btn-outline-danger d-block w-75 mx-auto mt-5 '>Please add a new word first.<a>"; }  ?>
        </div>
    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>