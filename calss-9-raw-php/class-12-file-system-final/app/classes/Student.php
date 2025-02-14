<?php


namespace App\classes;


class Student
{
    private $name;
    private $email;
    private $mobile;

    public function __construct($data=null)
    {
        if ($data)
        {



            $this->name = $data['name'];
            $this->email = $data['email'];
            $this->mobile = $data['mobile'];
        }
    }

    public function index()
    {
        echo $this->name.' , '.$this->email.' , '.$this->mobile;
    }
}