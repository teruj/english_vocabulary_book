<!-- <?php
session_start();

if(!$_SESSION['id']){  //if the session id is not yet set
    header("location: logout.php"); //redirect to logout.php
    exit;
}

include "connection.php";

// $id = $_GET['id'];



function getUser(){
    $conn = connection();

    $sql = "SELECT * FROM users INNER JOIN accounts ON accounts.id = users.account_id WHERE users.account_id = $_SESSION[account_id]";

    if($result = $conn->query($sql)){
        return $result;
        exit;
    }else{
        die("Error ". $conn->Error);
    }
}

$result = getuser();
$row = $result->fetch_assoc();



function uploadPhoto($imageName){
    $conn = connection();

    $sql = "UPDATE users SET avatar = '$imageName' WHERE account_id = $_SESSION[account_id] ";

    if($conn->query($sql)){
        $destination = "img/" . basename($imageName);
        if(move_uploaded_file($_FILES['image']['tmp_name'], $destination)){
            header("refresh: 1");
        }else{
            die("Error moving photo: ".$conn->error);
        }
    }else{
        die("Error uploading photo: " .$conn->error);
    }
}

if(isset($_POST['btnUpdate'])){
    $imageName = $_FILES['image']['name'];

    uploadPhoto($imageName);
}

function updateProfile($username,$password,$firstName,$lastName,$contactNumber,$address,$textArea){



    $conn = connection();
    

    $password = password_hash($password, PASSWORD_DEFAULT);

    // $sql = "DELETE FROM  users WHERE account_id = $id";
    $sql = "UPDATE accounts SET username = '$username',`password`= '$password' WHERE id = $_SESSION[account_id]";

    if($conn->query($sql)){
        $_SESSION['username'] = $username;
        // $id = $conn->insert_id;

        $sql = "UPDATE users  SET first_name = '$firstName',last_name = '$lastName', contact_number = '$contactNumber', address ='$address', bio = '$textArea' WHERE account_id = $_SESSION[account_id]";

        // print_r($sql);
        if($conn->query($sql)){
            header ("refresh: 0");
            exit;
        }else{
            die("Error2: .$conn->error");
        }
    }else{
        die("Error1: .$conn->error");
    }
}

if(isset($_POST['btnSave'])){
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $address = $_POST['address'];
    $contactNumber = $_POST['contactNumber'];
    $textArea = $_POST['textArea'];
    $username = $_POST['username'];
    // $role = $_POST['role'];

    $password = $_POST['password'];
    // $cPassword = $_POST['cPassword'];

    $conn = connection();

    $sql = "SELECT `password` FROM accounts WHERE id = $_SESSION[account_id]";

    $result = $conn->query($sql);

    // print_r($result);
    // exit;

    if($result->num_rows == 1){
        $row = $result->fetch_assoc();
        if(password_verify($password,$row['password'])){
            updateProfile($username,$password,$firstName,$lastName,$contactNumber,$address,$textArea);
        }else{
            die("Error password does not match: ".$conn->error);
        }
    }else{
        die("Error password is not found ".$conn->error);
    }
}
?> -->