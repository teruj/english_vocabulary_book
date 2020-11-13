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
        <p class="text-center  mt-5">
            <a class="btn btn-outline-primary mx-2 px-5 rounded-pill"  href="addNewWord.php"><i class="fas fa-plus" ></i> Add New Word</a>

            <a class="btn btn-outline-success mx-2 px-5 rounded-pill" href="userTopList.php"><i class="fas fa-plus" ></i> Edit My Word List</a>

            <a class="btn btn-outline-danger mx-2 px-5 rounded-pill" href="addNewUser.php"><i class="fas fa-plus"></i> Add New User</a>
        </p>

        <div class="container">
            <table class="table table-striped small text-center">
                <thead class="table-dark">
                    <tr>
                        <th>User ID</th>
                        <th>User</th>
                        <th>Nationality</th>
                        <th>Mother Tongue</th>
                        <th>Student</th>
                        <th>Role</th>
                        <th>Lastly Used ???</th>
                        <th># of Words</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody >
                    <tr>
                        <td>50</td>
                        <td>Takeshi Yamada</td>
                        <td>Japan</td>
                        <td>Japanese</td>
                        <td>N</td>
                        <td>U</td>
                        <td>2020-10-21</td>
                        <td>35</td>
                        <td><a href="editUser.php"><i class="fas fa-angle-double-right" ></i>Edit user</a></td>
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