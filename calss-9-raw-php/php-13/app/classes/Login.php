<?php


namespace App\classes;


class Login
{
    private $email;
    private $password;
    private $userEmail;
    private $userPassword;

    public function __construct($data = null)
    {
        if ($data)
        {
            $this->email = $data['email'];
            $this->password = $data['password'];
        }
    }
    public function index()
    {
        header('Location: pages/login.php');
    }

    public function adminLogin()
    {
        $this->userEmail = 'admin@admin.com';
        $this->userPassword = '123';

        if ($this->email == $this->userEmail && $this->password == $this->userPassword)
        {
            session_start();
            $_SESSION['id'] = rand(0,100);

            header('Location: home.php');
        }
        else{
            return 'Sorry... Email address or password invalid!';
        }
    }
    public function adminLogout()
    {
        session_start();
        unset($_SESSION['id']);
        header('Location: ../index.php');
    }
}