<?php
session_start();

if(!$_SESSION['id']){
    header("location: loginRedirect.php");
    exit;
}
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
<style>

    /* .radio-inline__input {
        clip: rect(1px, 1px, 1px, 1px);
        position: absolute !important;
    }

    .radio-inline__label {
        display: inline-block;
        margin: 0px 9px;
        border-radius: 5px;
        transition: all .2s;
        background: lightgrey;
        width: 25%;
        height: 60px;
        line-height: 30px;
    }

    .radio-inline__input:checked + .radio-inline__label {
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

    #newWord::placeholder{
        font-style: normal;
    } */
</style>
<title>Add New Word</title>
</head>
<body>

<?php include "navBar.php"; ?>

    <form action="../actions/addWord.php" method="post">
        <div class="container row mx-auto" style="width: 95%;">
            <div style="height: 220px;" class="col-12 row rounded  bg-danger px-0 mt-5 mb-0 mx-auto ">

                <div class="col-5 row h-50 align-self-center m-0">
                    <div class="row h2 h-100 px-2 text-center  mx-auto">
                    <input type="text" class="form-control-lg d-block h-75 w-100 text-center font-weight-bold align-self-center" name="word"  required autofocus placeholder="ex. wonderful*" id="newWord" style="font-size: 35px;">
                    </div>
                </div>

                <div class="col-7 row mr-0 bg-white h-50 text-center px-0 align-self-center rounded">

                    <h3 class="col-12 h6 border-bottom pb-2 text-danger align-self-center">Mastery ( your progess for this word )</h3>

                    <div class="col-10 row justify-content-around mx-auto">
                        <input id="item-1" class="radio-inline__input" type="radio" name="accessible-radio" value="C">
                        <label class="radio-inline__label" for="item-1" ><i class="fas fa-thumbs-up"></i>Complete</label>

                        <input id="item-2" class="radio-inline__input" type="radio" name="accessible-radio" value="S">
                        <label class="radio-inline__label" for="item-2" ><i class="fas fa-check-double"></i>Studying</label>

                        <input id="item-3" class="radio-inline__input" type="radio" name="accessible-radio" value="N" checked>
                        <label class="radio-inline__label" for="item-3" ><i class="fas fa-exclamation"></i>Not at all</label>
                    </div>

                </div>
            </div>

            <div class="col-12 row mx-auto px-0">
                <div class="card col-6 pt-4 mt-0">
                    <label for="PoS" class="ml-5">Part of Speech</label>
                    <div class="input-group mb-2 mb-3 w-75 mx-auto">
                        <input type="text" id="PoS" name="PoS" class="form-control-lg d-block w-100" placeholder="ex. adj" maxlength="100">
                    </div>
                </div>

                <div class="card col-6 pt-4 px-4 mt-0">
                    <label for="pronunciation" class="">Pronunciation</label>
                    <div class="input-group mb-5 w-75 mx-auto">
                        <input type="text" id="pronunciation" name="pronunciation" placeholder="ex. wˈʌndɚf(ə)l" class="form-control-lg d-block w-100" maxlength="100">
                    </div>
                </div>

                <div class="card col-12 row pt-4 px-5 mx-auto">
                    <div class="col-12">
                        <label for="eMean">English Meaning</label>
                        <div class="input-group mb-3">
                            <input type="text" id="eMean" name="eMean" class="form-control-lg d-block ml-1 w-100" placeholder="ex. extraordinarily good or great" maxlength="255">
                        </div>

                        <label for="mMean">Mother Tongue Meaning*</label>
                        <div class="input-group mb-5">
                            <input type="text" id="mMean" name="mMean" class="form-control-lg d-block ml-1 w-100" placeholder="例：非常に良い、非常に大きい" maxlength="255" required>
                        </div>
                    </div>

                    <div class="col-12 ">

                        <label for="">Example</label>
                        <textarea style="border:2px solid;"  class="form-control-lg d-block mb-1 w-100" name="eSentence" id="eSentence" cols="" rows="" placeholder="ex. We had wonderful weather during the holidays."></textarea>

                        <textarea style="border:2px solid" class="form-control-lg d-block mb-5 w-100 " name="mSentence"    id="mSentence" cols="" rows="" placeholder="例：休暇中はすばらしいお天気だった。"></textarea>

                        <div class="d-flex justify-content-around mb-5">
                            <button type="submit" name="submit" class=" w-50 btn btn-lg btn-danger rounded-pill form-control">New word  &ensp;  submit</button>
                            <button type="button" name="" class="w-25 btn btn-lg btn-dark rounded-pill form-control" onclick="history.back()">Back</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>





    <!-- <footer> -->

        <!-- <p class="text-center">
            <button type="button" class="btn btn-success mx-2 px-5"><i class="fas fa-lock"></i> Change Password</button>
        </p> -->

    <!-- </footer> -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>