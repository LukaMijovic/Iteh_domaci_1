<?php

class User {
    public $email;
    public $pass;

    public function __construct($email, $pass){
        $this->email = $email;
        $this->pass = $pass;
    }
}

?>