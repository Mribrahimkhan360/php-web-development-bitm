<?php


namespace App\classes;


class HelloWorld
{
    public $message;
    public function __construct()
    {
        $this->message = 'Message';
    }
    public function index()
    {
        header('location:action.php?page=home');
        echo $this->message;
    }
}