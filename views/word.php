<?php
session_start();
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


/* #tabSwitch{
    border-radius: 5px;
}

.radio-inline__input {
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
} */
</style>
<title>Word</title>
</head>
<body>
<!-- <?php print_r($_SESSION);?>
<?php echo "<br><br>";?>
<?php print_r($row);?>
<?php echo "<br><br>";?>
<?php print_r($rowC);?> -->

<!-- <?php print_r($result)?> -->

<?php include "navBar.php"; ?>

    <header class="w-75 mx-auto">
        
    </header>


    <div class="container row mx-auto px-0">
        <div style="height: 220px;" class="rounded  bg-primary px-0 mt-5 mb-0 mx-auto col-12 row">
            <div class="col-5 h-50 align-self-center row">
                <h2 class="h2 pl-2 text-white text-center align-self-center mx-auto">
                <i class="fas fa-book-open"> </i><br> (Each Word)
                </h2>
            </div>

            <div class="col-7 row tabSwitch mr-0 bg-white h-50 text-center px-0 align-self-center" id="tabSwitch">
                <h3 class="col-12 h6 border-bottom p-1 text-primary">Mastery ( your progess for this word )</h3>

                <div class="col-8 row justify-content-around mx-auto">
                    <input id="item-1" class=" radio-inline__input" type="radio" name="accessible-radio" value="item-1" checked="checked"/>
                    <label class="radio-inline__label" for="item-1">
                    <i class="fas fa-thumbs-up"></i>  Complete
                    </label>
                    <input id="item-2" class="radio-inline__input" type="radio" name="accessible-radio" value="item-2"/>
                    <label class="radio-inline__label" for="item-2">
                    <i class="fas fa-check-double"></i>  Studying
                    </label>
                    <input id="item-3" class="radio-inline__input" type="radio" name="accessible-radio" value="item-3"/>
                    <label class="radio-inline__label" for="item-3">
                    <i class="fas fa-exclamation"></i>  Not at all
                    </label>
                </div>
                
            </div>
        </div>

        <div class="col-12 row mx-auto px-0 ">
            <div class="card col-5 p-3 mt-0">
                <div style="width: 90%;" class="mx-auto">
                    <img src="img/<?= $row['avatar'] ?>" alt="Photo" class="card-img-top" >

                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">

                            <div class="custom-file mb-2">
                                <label for="image" class="custom-file-label">Choose Photo</label>
                                <input type="file" class="custom-file-input" name="image">
                            </div>

                            <button type="submit" class="btn btn-outline-success btn-block btn-sm mx-auto" name="btnUpdate">Update</button>
                        </form>
                    </div>

                </div>
            </div>
        
            

            <div class="card col-7 pt-4 px-4 mt-0">
                <label for="PoS">Part of Speech</label>
                <div class="input-group mb-3">
                    <input type="text" id="PoS" name="PoS" value="<?= $row['PoS'] ?>" class="form-control">
                </div>

                <label for="pronunciation">Pronunciation</label>
                <div class="input-group mb-5">
                    <input type="text" id="pronunciation" name="pronunciation" placeholder="" value="<?= $row['pronunciation'] ?>" class="form-control">
                </div>
            </div>
        </div>

        <div class="card col-12 row pt-4 px-5 mx-auto">

                <div class="col-12">
                    <label for="eMean">English Meaning</label>
                    <div class="input-group mb-3">
                        <input type="text" id="eMean" name="eMean" placeholder="" value="<?= $row['eMean'] ?>" class="form-control">
                    </div>

                    <label for="mMean">Mother Tongue Meaning</label>
                    <div class="input-group mb-5">
                        <input type="tel" id="mMean" name="mMean" value="<?= $row['mMean'] ?>" class="form-control">
                    </div>
                </div>
            
        
                <div class="col-12">

                    <label for="textArea1">Example 1</label>
                    <textarea class="form-control  mb-1 " name="textArea1" id="textArea1" cols="28" rows="2" ><?= $row['bio'] ?></textarea>

                    <textarea class="form-control  mb-5 ml-2" name="textArea2"    id="textArea2" cols="28" rows="2" ><?= $row['bio'] ?></textarea>

                    <!-- <label for="textArea3">Example 2</label>
                    <textarea class="form-control mb-1 " name="textArea3" id="textArea3" cols="28" rows="2" ><?= $row['bio'] ?></textarea>

                    <textarea class="form-control mb-5 ml-2" name="textArea4"  id="textArea4"cols="28" rows="2" ><?= $row['bio'] ?></textarea> -->
                </div>


        </div>

    </div>

  <form action="" method="post">  </form>          
        






            <!-- <div class="row justify-content-around">
                <button type="submit" name="btnSave" class="btn btn-primary rounded-pill mt-3 w-25 font-weight-bold" >Save Changes</button>

                <a href="./deleteProfile.php" name="btnDelete" class="btn btn-danger rounded-pill mt-3 w-25
                "><i class="fas fa-trash-alt"></i> Delete Account</a>
            </div> -->
      
            

        </div>
    </div>



    <footer>

        <p class="text-center">
            
            <!-- <button type="button" class="btn btn-success mx-2 px-5"><i class="fas fa-lock"></i> Change Password</button> -->

            
        </p>
    </footer>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>