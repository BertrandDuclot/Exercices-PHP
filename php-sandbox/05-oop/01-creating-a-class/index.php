<?php

class User {
    public $name;
    public $email;
    protected $status = "active";

    public function __construct($name, $email){
        $this->name = $name;
        $this->email = $email;
    }
    
    public function login(){
        echo "test";
    }
}

$user1 = new User("john", "emailtest");

////////////////////////////////////////////////////////////////////////////////////

class Admin extends User {

public $level;

public function __construct($name, $email, $level){
    $this->level = $level;
    parent::__construct($name, $email);
}

public function getStatus() {
    echo $this->status;
}

public function login(){
    echo "test2222222";
}

}

$admin1 = new Admin("Tom", "emailtest", 5);
echo $admin1->level;
$admin1->login();
$admin1->getStatus();
