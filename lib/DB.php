<?php

class DB{
    public $SERVER_NAME = 'localhost';
    public $USER_NAME = 'root';
    public $PASSWORD = 'sangi2529';
    public $DB_NAME = 'practice';

    protected $connection;

    public function __construct()
    {
        $this->connect();
    }

    public function connect(){
        $this->connection = new mysqli($this->SERVER_NAME,$this->USER_NAME,$this->PASSWORD,$this->DB_NAME);
        if($this->connection->connect_error){
            return false;
        }
        return true;
    }
    public function insertData($firstName,$lastName,$email,$password){
        $query = "insert into signup(firstname,lastname,email,password) values('${firstName}',${lastName},'${email}','${password}')";
        if($this->connection->query($query)==false){
            return false;
        }
        return true;
    }
    public function executeQuery($query){
        if($this->connection->query($query)==false){
            die('Oops! something went wrong executing query'.$this->connection->error);
        }
        return $this->connection->query($query);
    }
    public function __destruct(){
        $this->connection->close();
    }
}