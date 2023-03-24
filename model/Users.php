<?php
// We did this one for you too
class Users {
    private $username;
    private $password;

    public function getUsername(){
        return $this->username;   
    }

    public function setUsername($param){
        $this->username = $param;
    }

    public function getPassword(){
        return $this->password;   
    }

    public function setPassword($param){
        $this->password = $param;
    }    
}

