<?php


namespace App\classes;


class User
{
    public $name;
    public $email;
    private $data=[];

    public function __construct()
    {
        $this->name = 'BITM';
        $this->email = 'info@bitm.org.bd';
    }





    public function index()
    {
        return "User name is $this->name and email is $this->email";
    }
    public function getAllUser()
    {
        $this->data = [
            0=> [
                'id'        =>1,
                'name'      => 'Ibrahim Khan',
                'email'     => 'ibrahim@gmail.com',
                'password'  => '123'
            ],
            1=> [
                'id'        =>2,
                'name'      => 'eusuf Khan',
                'email'     => 'eusuf@gmail.com',
                'password'  => '123'
            ],
            2=> [
                'id'        => 3,
                'name'      => 'Miraj Khan',
                'email'     => 'miraj@gmail.com',
                'password'  => '123'
            ]
        ];
        return $this->data;


    }
}