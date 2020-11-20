<?php
session_start();

require_once "database.php";

class User extends Database{
    public function createUser($origin, $firstName, $lastName, $username, $passw, $nationality, $MT, $studentYN){
        $sql = "INSERT INTO users (first_name,last_name,username,passw,nationality,mother_tongue,student) VALUES ('$firstName','$lastName','$username','$passw','$nationality','$MT','$studentYN' )";

        if ($this->conn->query($sql)) {
            if ($origin == "register") {
                header("location: ../views");
                exit;
            } elseif ($origin == "addUser") {
                header("location: ../views/dashboard.php");
                exit;
            } else {
                echo "origin not found";
            }
        } else {
            die("Error creating user: " . $this->conn->error);
        }
    }

    public function login($username, $passw){

        $sql = "SELECT * FROM users WHERE username = '$username'";

        $result = $this->conn->query($sql);

        if ($result->num_rows == 1) {
            $userDetails = $result->fetch_assoc();
            if (password_verify($passw, $userDetails['passw'])) {

                session_start();

                $_SESSION['id'] = $userDetails['id'];
                $_SESSION['username'] = $userDetails['username'];
                $_SESSION['name'] = $userDetails['first_name'] . " ". $userDetails['last_name'];
                $_SESSION['role'] = $userDetails['role'];

                if ($userDetails['role'] == 'A') {
                    header("location: ../views/dashboard.php");
                    exit;
                } elseif ($userDetails['role'] == 'U') {
                    header("location: ../views/userTopList.php");
                } else {
                    die("Error role : " . $this->conn->error);
                }
            }else
            die("Error: password is not correct. ".$this->conn->error);
        }else{
            die("Error: username is not founded. ".$this->conn->error);
        }
    }

    public function getUsers(){

        $sql = "SELECT * FROM users";

        if ($result = $this->conn->query($sql)) {
            return $result;
        } else {
            die("Error selecting users: " . $this->conn->error);
        }
    }

    public function getUser($userID){
        $sql = "SELECT * FROM users WHERE id = '$userID' ";

        if($result = $this->conn->query($sql)){
            return $result->fetch_assoc();
        }else{
            die("Error selecting the user:" .$this->conn->error);
        }
    }

    public function updateUser($firstName,$lastName,$username,$nationality,$MT,$studentYN,$userID){
        $sql = "UPDATE users SET first_name = '$firstName',last_name = '$lastName',`username` = '$username',nationality = '$nationality',student = '$studentYN',mother_tongue = '$MT'  WHERE id = '$userID' ";

        if($this->conn->query($sql)){
            header("location: ../views/editUser.php?userID=$userID");
            // header("refresh: 1"); // koreha dame
            exit;
        }else{
            die("Error: ".$this->conn->error);
        }
    }


    public function escapeString($material){
        return  $this->conn->real_escape_string($material);
    }

    public function addNewWord($word, $PoS, $pronunciation, $eMean, $mMean, $eSentence, $mSentence, $mastery){

        $word = $this->escapeString($word);
        $PoS = $this->escapeString($PoS);
        $pronunciation = $this->escapeString($pronunciation);
        $eMean = $this->escapeString($eMean);
        $eSentence = $this->escapeString($eSentence);

        $sql = "INSERT INTO words (word,PoS,pronunciation,e_meaning,m_meaning,e_sentence,m_sentence,`user_id`) VALUES ('$word','$PoS','$pronunciation','$eMean','$mMean','$eSentence','$mSentence',$_SESSION[id])";

        if ($this->conn->query($sql)) {
            $sql = "INSERT INTO personal_list (sel_word,sel_PoS,sel_pronunciation,sel_e_meaning,sel_m_meaning,sel_e_sentence,sel_m_sentence,mastery,`user_id`) VALUES ('$word','$PoS','$pronunciation','$eMean','$mMean','$eSentence','$mSentence','$mastery',$_SESSION[id])";
            if ($this->conn->query($sql)) {
                header("location: ../views/userTopList.php");
                exit;
            } else {
                die("Error adding personal word list");
            }
        } else {
            die("Error adding word: " . $this->conn->error);
        }
    }

    public function updateWord($word, $PoS, $pronunciation, $eMean, $mMean, $eSentence, $mSentence, $mastery){
        $word = $this->escapeString($word);
        $PoS = $this->escapeString($PoS);
        $pronunciation = $this->escapeString($pronunciation);
        $eMean = $this->escapeString($eMean);
        $eSentence = $this->escapeString($eSentence);

        $sql = "UPDATE personal_list SET sel_PoS = '$PoS', sel_pronunciation = '$pronunciation', sel_e_meaning = '$eMean', sel_m_meaning = '$mMean', sel_e_sentence = '$eSentence', sel_m_sentence = '$mSentence', mastery = '$mastery' WHERE `user_id` = $_SESSION[id] AND sel_word = '$word' ";

        if($this->conn->query($sql)){
            $sql = "INSERT INTO words (word,PoS,pronunciation,e_meaning,m_meaning,e_sentence,m_sentence,`user_id`) 
            VALUES ('$word','$PoS','$pronunciation','$eMean','$mMean','$eSentence','$mSentence',$_SESSION[id])";

            if($this->conn->query($sql)){
                header("location: ../views/userTopList.php");
                exit;
            }else{
                die("Error: update data2 ".$this->conn->query($sql));
            }
        }else{
            die("Error: update data ".$this->conn->query($sql));
        }

    }

    public function getMyList(){

        // $word = $this->escapeString($word);
        // $PoS = $this->escapeString($PoS);
        // $pronunciation = $this->escapeString($pronunciation);
        // $eMean = $this->escapeString($eMean);
        // $eSentence = $this->escapeString($eSentence);

        $sql = "SELECT * FROM personal_list WHERE `user_id` = $_SESSION[id]";

        if ($result = $this->conn->query($sql)) {
            return $result;
        } else {
            die("Error: " . $this->conn->error);
        }
    }

    public function getMyOrderedList($sortType){
        if($sortType == 'ASC'){
            $sql = "SELECT * FROM personal_list WHERE `user_id` = $_SESSION[id] ORDER BY sel_word ASC";
        }elseif($sortType == 'DESC'){
            $sql = "SELECT * FROM personal_list WHERE `user_id` = $_SESSION[id] ORDER BY sel_word DESC";
        }else{
            die("Error: sql".$this->conn->error);
        }


        if ($result = $this->conn->query($sql)) {
            return $result;
        } else {
            die("Error: query" . $this->conn->error);
        }
    }



    public function updateUserTopList($mastery){
        foreach($mastery as $key => $eachMastery){
            $key = $this->escapeString($key);
            $sql = "UPDATE personal_list SET mastery = '$eachMastery' WHERE sel_word = '$key' ";
            $this->conn->query($sql);
            }
            header("location: ../views/userTopList.php");
            exit;

    }
    // public function updateUserTopList($mastery){
    //     foreach($mastery as $key => $eachMastery){
    //         $sql = "UPDATE personal_list SET mastery = '$eachMastery' WHERE id = '$key' ";
    //         $this->conn->query($sql);
    //     }
    //     header("location: ../views/userTopList.php");
    //     exit;

    // }

    public function getTheWord($myWord){
        $sql = "SELECT * FROM personal_list WHERE sel_word = '$myWord' AND `user_id` = $_SESSION[id] ";
    
        if($result = $this->conn->query($sql)){
            return $result->fetch_assoc();
        }else{
            die("Error: ".$this->conn->error);
        }
    
    }

    public function deleteTheWord($theWord){
        $sql = "DELETE FROM personal_list WHERE sel_word = '$theWord' ";

        if($this->conn->query($sql)){
            header("location: ../views/userTopList.php");
            exit;
        }else{
            die("Error: deleting this word".$this->conn->error);
        }
    }

    public function deleteUser($userID){
        $sql = "DELETE FROM users WHERE id = $userID ";

        if($this->conn->query($sql)){
            header("location: ../views/dashboard.php");
            exit;
        }else{
            die("Error: deleting the user");
        }
    }


    public function changePass($userID,$password,$cPassword){
        if($password == $cPassword){

            $password = password_hash($password,PASSWORD_DEFAULT);

            $sql = "UPDATE users SET passw = '$password' WHERE id = $userID ";

            if($this->conn->query($sql)){
                header("location: ../views/editUser.php?userID=$userID");
                exit;
            }else{
                die("Error:Password is not uploaded.".$this->conn->error);
            }
        }else{
            die("Error:Confirm password is not the same.".$this->conn->error);
        }

        
    }

    // public function quizForDummy(){
    //     $sql = "SELECT word,m_meaning FROM words ";

    //     if($result = $this->conn->query($sql)){
    //         return $result;
    //     }else{
    //         die("Error: ".$this->conn->error);
    //     }
    // }
    public function quizForDummy(){
        $sql = "SELECT word,m_meaning FROM words ";

        if($result = $this->conn->query($sql)){
            return $result;
        }else{
            die("Error: ".$this->conn->error);
        }
    }

    public function quizAnsWord($userID){
        // $sql = "SELECT sel_word,sel_m_meaning FROM personal_list WHERE `user_id` = '$userID'" ;
        $sql = "SELECT sel_word,sel_m_meaning FROM personal_list WHERE `user_id` = '$userID' " ;
        if($result = $this->conn->query($sql)){
            return $result;
        }else{
            die("Error: ".$this->conn->error);
        }
    }

}

// $password = password_hash($password, PASSWORD_DEFAULT);
// password_verify($password,$XXX['password']);
