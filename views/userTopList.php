<?php
session_start();

if(!$_SESSION['id']){
    header("location: loginRedirect.php");
    exit;
}

include_once "../classes/user.php";
$user = new User;
$userList = $user->getMyList();


if(isset($_POST['sortType'])){
    $sortType = $_POST['sortType'];

    // echo $sortType;

    $userList = $user->getMyOrderedList($sortType);// no need 'return $userList' ;

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
    
        <div class="container mt-5">
            <p class="text-right small">
                <a class="btn btn-outline-primary mx-2 px-5 rounded-pill small" href="addNewWord.php"><i class="fas fa-plus"></i> Add New Word</a>
            
                <!-- <button class="btn btn-primary mx-2 px-5 rounded-pill small"><i class="fas fa-plus"></i> Save Mastery Change</button> -->
               
            </p>
            <table class="table table-striped table-bordered small">
                
            
                <thead class="table-dark text-center px-0">
                    <tr class="row align-middle mx-0">

                        <form action="" method="post">
                            <th class="col-1 align-middle mt-1 border-0">
                                <p class="mb-3">Word</p> 
                                
                                <!-- <a href="../actions/sortByWord.php?sortType=ASC" class="btn btn-sm">ASC</a>
                                <a href="../actions/sortByWord.php?sortType=DESC" class="btn btn-sm">DESC</a> -->
                                <button name="sortType" value="ASC" class="btn btn-sm btn-light text-primary py-0 px-0 w-100 rounded-pill" style="font-size: 4px;">
                                <?php if($sortType == 'ASC'){echo "<i class=\"fas fa-angle-double-up\"></i><br>";} ?>ASC</button>
                                <button name="sortType" value="DESC" class="btn btn-sm btn-light text-primary py-0 px-0 w-100 rounded-pill mt-1" style="font-size: 4px;">
                                DESC<?php if($sortType == 'DESC'){echo "<br><i class='fas fa-angle-double-down'></i>";} ?></button>
                            </th>
                        </form>

                        <th class="col-1 align-middle mt-1 border-0 ">PoS</th>
                        <th class="col-3 align-middle border-0">
                            Meaning 
                            <br>
                            <i class="small">( max:255char. ) </i>
                            <!-- <span class="small">(English / Mother Tongue)</span> -->

                        </th>
                        <th class="col-3 align-middle border-0">Example
                            <!-- <span class="small">(sentence / phrase)</span> -->

                        </th>
                        <!-- <th class="align-middle">Memo</th> -->
                        <th class="col-1 align-middle border-0 mt-1">Actions</th>
                        <th class="col-3 align-middle border-0 pb-0">Mastery <br><span class="small">(your progess for this word)
                            </span> 
    <form action="../actions/updateUserTopList.php" method="post">
                            <button class="btn btn-sm btn-primary rounded-pill mt-2"><i class="fas fa-plus"></i> Save Mastery Change</button>
                        </th>
                    </tr>
                </thead>




                <?php
                while ($userDetails = $userList->fetch_assoc()) {
                ?>
                    <tbody>
                        <tr class="row text-center mx-0">
                            <td class="col-1 align-middle text-left">
                                <strong><?= $userDetails['sel_word'] ?></strong>　
                                <br>
                                <span class="small">(<?= $userDetails['sel_pronunciation'] ?>)</span>
                            </td>
                            <td class="col-1 align-middle"><?= $userDetails['sel_PoS'] ?></td>
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
                            <!-- <td class="align-middle">AAA</td> -->
                            <td class="col-1 align-middle text-center">
                                <a href="editWord.php?selWord=<?= $user->escapeString($userDetails['sel_word'])  ?>">Edit</a>
                                <br>
                                <a href="../actions/deleteTheWord.php?selWord=<?= $user->escapeString($userDetails['sel_word']) ?>">Delete</a>
                            </td>
                            <td class="col-3 p-0 d-flex align-items-center justify-content-around  tabSwitch mr-0 px-0" id="tabSwitch">



                                <!-- <div> -->
                                <!-- <input id="item-1-<?= $userDetails['id'] ?>" class="" type="radio" name="mastery[<?= $userDetails['id'] ?>]" value="C"  -->
                                <input id="item-1-<?= $userDetails['id'] ?>" class="" type="radio" name="mastery[<?= $userDetails['sel_word'] ?>]" value="C" 
                                <?php if ($userDetails['mastery'] == 'C') {echo "checked";} ?> >
                                <label class="small" style="margin-left: -20px;" for="item-1-<?= $userDetails['id'] ?>">
                                    <i class="fas fa-thumbs-up"></i> <br> Complete
                                </label>
                                <!-- </div> -->

                                <!-- <div> -->
                                <!-- <input id="item-2-<?= $userDetails['id'] ?>" class="" type="radio" name="mastery[<?= $userDetails['id'] ?>]" value="S"  -->
                                <input id="item-2-<?= $userDetails['id'] ?>" class="" type="radio" name="mastery[<?= $userDetails['sel_word'] ?>]" value="S" 
                                <?php if ($userDetails['mastery'] == 'S') {echo "checked";} ?> >
                                <label class=" small" style="margin-left: -20px;" for="item-2-<?= $userDetails['id'] ?>">
                                    <i class="fas fa-check-double"></i> <br> Studying
                                </label>
                                <!-- </div> -->

                                <!-- radio-inline__input radio-inline__label , personal_list[<?= $userDetails['id'] ?>]-->

                                <!-- <div> -->
                                <!-- <input id="item-3-<?= $userDetails['id'] ?>" class="" type="radio" name="mastery[<?= $userDetails['id'] ?>]" value="N"  -->
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
        </div>
    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>