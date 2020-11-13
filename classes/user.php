<?php
session_start();

require_once "database.php";

class User extends Database{
    public function createUser($firstName,$lastName,$username,$passw,$nationality,$MT,$studentYN){
        $sql = "INSERT INTO users (first_name,last_name,username,passw,nationality,mother_tongue,student) VALUES ('$firstName','$lastName','$username','$passw','$nationality','$MT','$studentYN' )";

        if($this->conn->query($sql)){
            header("location: ../views");
            exit;
        }else{
            die("Error creating user: " . $this->conn->error);
        }

    }

    public function login($username,$passw){
        
        $sql = "SELECT * FROM users WHERE username = '$username'";

        $result = $this->conn->query($sql);

        if($result->num_rows == 1){
            $userDetails = $result->fetch_assoc();
            if(password_verify($passw,$userDetails['passw'])){

                session_start();

                $_SESSION['id'] = $userDetails['id'];
                $_SESSION['username'] = $userDetails['username'];

                $_SESSION['name'] = $userDetails['first_name']." ".$userDetails['last_name'];

                if($userDetails['role'] == 'A'){
                    header ("location: ../views/dashboard.php");
                    exit;
                }elseif($userDetails['role'] == 'U'){
                    header ("location: ../views/userTopList.php");
                }else{
                    die ("Error role : ".$this->error);
                }

            }
        }

    }

    public function getUsers(){

        $sql = "SELECT * FROM users";

        if($result = $this->conn->query($sql)){
            return $result;
        }else{
            die("Error selecting users: ".$this->conn->error);
        }
    }



}
