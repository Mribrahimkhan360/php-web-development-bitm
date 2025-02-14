<?php
require_once '../vendor/autoload.php';
use App\classes\Login;

use App\classes\PrimeNumber;

if (isset($_POST['btn']))
{
    $prime = new PrimeNumber($_POST);
    $result = $prime->index();
    include 'home.php';
}
else if (isset($_POST['btn-login']))
{
    $login      = new Login($_POST);
    $message    = $login->adminLogin();
    include "login.php";
}

else if (isset($_GET['status'])== 'logout')
{
    if ($_GET['status'] == 'logout')
    {
        $login = new Login();
        $login->adminLogout();
    }
}