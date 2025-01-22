<?php


namespace App\classes;


class Example
{
    public function __construct()
    {

    }

    public function index(){
        header('Location:pages/home.php');
    }

}