<?php

namespace App\classes;
use App\classes\User;

class Auth
{
    private $email;
    private $password;
    private $users;

    public function __construct($data = null)
    {
        if ($data)
        {
            $this->email        = $data['email'];
            $this->password     = $data['password'];
        }
    }

    public function index()
    {
        session_start();
        if (isset($_SESSION['id'])) {
            header('Location: home.php');
            exit;
        }
        header('Location: pages/login.php');
        exit;
    }

    public function login()
    {
        $user = new User();
        $this->users = $user->getAllUser();
        foreach ($this->users as $item)
        {
            if ($item['email'] == $this->email && $item['password'] == $this->password)
            {
                session_start();
                $_SESSION['id']       = $item['id'];
                $_SESSION['name']     = $item['name'];
                header('Location: home.php');
                exit;  // Stop further execution after redirect
            }
        }
        return "Sorry.. Your email address or password is wrong!";
    }
    public function logout()
    {
        session_start();
        unset($_SESSION['id']);
        unset($_SESSION['name']);
        header('Location: ../index.php');
    }
}