<?php

namespace App\classes;
use App\classes\User;
use App\classes\Example;
use App\classes\Example2;

class Student extends User implements Example,Example2,Example3
{

    // student class User class inheritance get public protected
    public $mobile;

    public function __construct()
    {
        $this->mobile = '01787147988';
    }

    public function manage()
    {
        echo "Name is $this->name , email is $this->email and mobile is $this->mobile";
    }
    public function one()
    {
        echo 'Hello World 1';
    }
    public function two()
    {
        echo 'Hello World 2';
    }
    public function four()
    {
        // TODO: Implement four() method.
        echo 'TODO: Implement four() method.';
    }
    public function three()
    {
        // TODO: Implement three() method.
        echo 'TODO: Implement three() method.';
    }
    public function five()
    {
        echo 'TODO: Implement five() method.';
    }
}