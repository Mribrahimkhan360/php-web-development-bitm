<?php

namespace App\classes;
class HelloWorld
{
    public $message;
    public function __construct()
    {
        $this->messsage = 'lorem ipsums';
    }
    public function index(){
        header('Location:action.php?page=home');
    }
}