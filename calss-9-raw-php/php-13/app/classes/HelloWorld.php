<?php

namespace app\classes;
class HelloWorld
{
    public $message;
    public function __construct()
    {
        $this->message = 'Hello World';
    }
    public function index(){
        header('location: pages/login.php');
    }

}