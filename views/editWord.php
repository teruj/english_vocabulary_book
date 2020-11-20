<?php
session_start();

if(!$_SESSION['id']){
    header("location: loginRedirect.php");
    exit;
}

$myWord = $_GET['selWord'];
// echo $myWord;

include_once "../classes/user.php";

$theWord = new User;
// $myword = $theWord->escapeString($myWord);
$theWordArray = $theWord->getTheWord($myWord);


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
    <title>Edit Word</title>
</head>
<body>
<?php include "navBar.php" ?>

    <form action="../actions/editWord.php" method="post">
        <div class="container row mx-auto" style="width: 95%;">
            <div style="height: 220px;" class="col-12 row rounded  bg-success px-0 mt-5 mb-0 mx-auto ">
                <div class="col-5 h-50  align-self-center my-0 px-2 mx-auto">
                    
                        <div class="d-flex h-100 bg-white p-0 py-2 mx-auto text-center rounded">

                            
                            <p class="w-100 m-0 mt-2 font-weight-bold align-self-center" style="font-size: 40px;"><?= $theWordArray['sel_word'] ?></p>
                            
                            
                        
                    
                            <input type="hidden" class="form-control-lg d-block h-25 w-100 text-center font-weight-bold align-self-center" name="word" required   id="newWord" style="font-size: 35px;" value="<?= $theWordArray['sel_word'] ?>">
                        
                        </div>
                
                    
                </div>

                <div class="col-6 row mx-auto bg-white h-50 text-center pl-0 pr-0 align-self-center rounded " id="">
                    <h3 class="col-12 h6 border-bottom pb-2 text-primary align-self-center">Mastery ( your progess for this word )</h3>

                    <div class="col-10 row justify-content-around mx-auto">
                        <input id="item-1" class=" radio-inline__input" type="radio" name="accessible-radio" value="C" <?php if($theWordArray['mastery']== 'C'){echo "checked";} ?> >
                        <label class="radio-inline__label" for="item-1">
                        <i class="fas fa-thumbs-up"></i>  Complete
                        </label>
                        <input id="item-2" class="radio-inline__input" type="radio" name="accessible-radio" value="S" <?php if($theWordArray['mastery']== 'S'){echo "checked";} ?> >
                        <label class="radio-inline__label" for="item-2">
                        <i class="fas fa-check-double"></i>  Studying
                        </label>
                        <input id="item-3" class="radio-inline__input" type="radio" name="accessible-radio" value="N" <?php if($theWordArray['mastery']== 'N'){echo "checked";} ?> >
                        <label class="radio-inline__label" for="item-3">
                        <i class="fas fa-exclamation"></i>  Not at all
                        </label>
                    </div>
                </div>
            </div>



            <div class="col-12 row mx-auto px-0 ">
                <div class="card col-6 pt-4 mt-0">

                    <label for="PoS" class="ml-5">Part of Speech</label>
                    <div class="input-group mb-3 w-75 mx-auto">
                        <input type="text" id="PoS" name="PoS" value="<?= $theWordArray['sel_PoS']?>" class="form-control-lg d-block w-100" maxlength="100">
                    </div>

                </div>

                <div class="card col-6 pt-4 px-4 mt-0">
                    <label for="pronunciation" class="ml-5">Pronunciation</label>
                    <div class="input-group mb-5 w-75 mx-auto">
                        <input type="text" id="pronunciation" name="pronunciation" placeholder="" value="<?= $theWordArray['sel_pronunciation']?>" class="form-control-lg d-block w-100" maxlength="100">
                    </div>
                </div>
            </div>

            <div class="card col-12 row pt-4 px-5 mx-auto">

                <div class="col-12">
                    <label for="eMean">English Meaning</label>
                    <div class="input-group mb-3">
                        <input type="text" id="eMean" name="eMean" value="<?= $theWordArray['sel_e_meaning'] ?>" class="form-control-lg d-block ml-1 w-100"  maxlength="255">
                    </div>

                    <label for="mMean">Mother Tongue Meaning</label>
                    <div class="input-group mb-5">
                        <input type="text" id="mMean" name="mMean" value="<?= $theWordArray['sel_m_meaning'] ?>" class="form-control-lg d-block ml-1 w-100"  maxlength="255">
                    </div>
                </div>

                <div class="col-12 ">
                    <label for="">Example</label>
                    <textarea style="border:2px solid;"  class="form-control-lg d-block mb-1 w-100" name="eSentence" id="eSentence" cols="" rows="" ><?= $theWordArray['sel_e_sentence'] ?></textarea>

                    <textarea style="border:2px solid;" class="form-control-lg d-block mb-5 w-100" name="mSentence"    id="mSentence" cols="" rows="" ><?= $theWordArray['sel_m_sentence'] ?></textarea>
                </div>

                <div class="d-flex justify-content-around mb-5">
                    <button type="submit" name="submit" class=" w-50 btn btn-lg btn-success rounded-pill form-control">Save changes</button>
                    <button type="button" name="" class="w-25 btn btn-lg btn-dark rounded-pill form-control" onclick="history.back()">Back</button>
                </div>

            </div>
        </div>
    </form>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>