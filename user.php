<?php
include "config.php";

class user{

    public $name;
    public $email;
    public $password;

    public function __construct($name, $email, $password){
        $this->name= $name;
        $this->email= $email;
        $this->password= $password;
    }

    public function getname(){
        return $this->name;
    }

    public function getemail(){
        return $this->email;
    }

    public function getpassword(){
        return $this->password;
    }

    public function insert($conn) {
        $sql = "INSERT INTO users (name, email, password) VALUES ('$this->name', '$this->email', '$this->password')";
        $stmt=$conn->prepare($sql);
        $stmt->execute([$this->name, $this->email, $this->password]);
    }
}

?>