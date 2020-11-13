<?php

class Database{
    private $servername = "localhost";
    private $username = "root";
    private $password = "root";
    private $dbName = "vocabulary_book";

    protected $conn;

    public function __construct(){
        $this->conn = new mysqli($this->servername,$this->username,$this->password,$this->dbName);

        if($this->conn->connect_error){
            die("Unable to connect to database".$this->dbName.": ".$this->conn->connect_error);
        }
    }

}



?>