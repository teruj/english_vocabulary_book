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
<?php include "navBar.php"; ?>
        <p class="text-center  mt-5">
            <a class="btn btn-outline-primary mx-2 px-5 rounded-pill"  href="addNewWord.php"><i class="fas fa-plus" ></i> Add New Word</a>

            <!-- <a class="btn btn-outline-success mx-2 px-5 rounded-pill" href="#"><i class="fas fa-plus" ></i> Edit Word List</a> -->

            <a class="btn btn-outline-success mx-2 px-5 rounded-pill" href="#"><i class="fas fa-plus"></i> Save Changes</a>
        </p>

        <div class="container">
            <table class="table table-striped table-bordered border small">
                <thead class="table-dark text-center">
                    <tr class="align-middle">
                        <th class="align-middle">Word</th>
                        <th class="align-middle">PoS</th>
                        <th class="align-middle">Pronunciation</th>
                        <th class="align-middle py-0">Meaning <br><span class="small">(Mother Tongue)</span> </th>
                        <th class="align-middle py-0">Meaning <br><span class="small"> (English)</span></th>
                        <th class="align-middle">Sample</th>
                        <!-- <th class="align-middle">Memo</th> -->
                        <th class="align-middle">Edit</th>
                        <th class="align-middle">Mastery (your progess for this word)</h3></th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td class="align-middle">house</td>
                        <td class="align-middle">Noun</td>
                        <td class="align-middle">*</td>
                        <td class="align-middle">家</td>
                        <td class="align-middle">a ~</td>
                        <td class="align-middle">Your house is big.</td>
                        <!-- <td class="align-middle">AAA</td> -->
                        <td class="align-middle">
                            <a href="editWord.php">Edit</a>
                            <a href="#">Delete</a>
                        </td>
                        <td class="p-0 align-middle ">
                        <div class="d-flex justify-content-around tabSwitch mr-0 bg-white  text-center px-0 " id="tabSwitch">
                    
                            <input id="item-1" class=" radio-inline__input tex" type="radio" name="accessible-radio" value="item-1" checked="checked"/>
                            <label class="radio-inline__label small" for="item-1">
                            <i class="fas fa-thumbs-up"></i> <br> Complete
                            </label>
                            <input id="item-2" class="radio-inline__input" type="radio" name="accessible-radio" value="item-2"/>
                            <label class="radio-inline__label small" for="item-2">
                            <i class="fas fa-check-double"></i> <br> Studying
                            </label>
                            <input id="item-3" class="radio-inline__input" type="radio" name="accessible-radio" value="item-3"/>
                            <label class="radio-inline__label small" for="item-3">
                            <i class="fas fa-exclamation"></i> <br> Not at all
                            </label>
                        </div>
                            <!-- <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="mastery" id="comp" value="CMP">
                                <label for="comp" class="custom-control-label">Comp.</label>
                                <input type="radio" class="custom-control-input" name="mastery" id="OTW" value="OTW">
                                <label for="OTW" class="custom-control-label">On the Way.</label>
                                <input type="radio" class="custom-control-input" name="mastery" id="NY" value="NY">
                                <label for="NY" class="custom-control-label">Not Yet</label>

                            </div> -->
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle">sky</td>
                        <td class="align-middle">Noun</td>
                        <td class="align-middle">*</td>
                        <td class="align-middle">空</td>
                        <td class="align-middle">b ~</td>
                        <td class="align-middle">What a beautiful sky!</td>
                        <!-- <td class="align-middle">AAA</td> -->
                        <td class="align-middle">
                            <a href="editWord.php">Edit</a>
                            <a href="#">Delete</a>
                        </td>
                        <td class="p-0 align-middle ">
                        <div class="d-flex justify-content-around tabSwitch mr-0 bg-white  text-center px-0 " id="tabSwitch">
                    
                            <input id="item-1" class=" radio-inline__input tex" type="radio" name="accessible-radio2" value="item-1" checked="checked"/>
                            <label class="radio-inline__label small" for="item-1">
                            <i class="fas fa-thumbs-up"></i> <br> Complete
                            </label>
                            <input id="item-2" class="radio-inline__input" type="radio" name="accessible-radio2" value="item-2"/>
                            <label class="radio-inline__label small" for="item-2">
                            <i class="fas fa-check-double"></i> <br> Studying
                            </label>
                            <input id="item-3" class="radio-inline__input" type="radio" name="accessible-radio2" value="item-3"/>
                            <label class="radio-inline__label small" for="item-3">
                            <i class="fas fa-exclamation"></i> <br> Not at all
                            </label>
                        </div>
                            <!-- <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="mastery" id="comp" value="CMP">
                                <label for="comp" class="custom-control-label">Comp.</label>
                                <input type="radio" class="custom-control-input" name="mastery" id="OTW" value="OTW">
                                <label for="OTW" class="custom-control-label">On the Way.</label>
                                <input type="radio" class="custom-control-input" name="mastery" id="NY" value="NY">
                                <label for="NY" class="custom-control-label">Not Yet</label>

                            </div> -->
                        </td>
                    </tr>




                    <!-- <?php
                        // $result = getFromTables();
                        while($row = $result->fetch_assoc()){
                    ?> -->
                    <tr>
                        <!-- <td><?php print_r($row); ?></td> -->
                        <td><?= $row['title'] ?></td>
                        <td><?= $row['author'] ?></td>
                        <td><?= $row['date_posted'] ?></td>
                        <td><?= $row['category'] ?></td>
                        <td><a class="btn btn-outline-dark rounded-pill font-weight-bold px-4" href="./viewPost.php?id=<?=$row['post_id']?> "><i class="fas fa-angle-double-right" ></i> View</a></td>
                    </tr>
                    <!-- <?php
                    }
                    ?> -->
                </tbody>

            </table>
        </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>