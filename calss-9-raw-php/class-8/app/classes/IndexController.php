<?php


namespace App\classes;


class IndexController
{
    public function index()
    {
        header('Location:pages/home.php');
    }


}