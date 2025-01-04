<?php

namespace App\classes;
class HelloWorld
{
    public $message;
    public $firstName;
    public $lastName;
    public function __construct()
    {
        $this->message = "Hello World ";
        $this->firstName = "Ibrahim ";
        $this->lastName = "Khan";
    }
    public function index(){
        echo $this->message;
        echo $this->firstName.' '.$this->lastName;
    }
}