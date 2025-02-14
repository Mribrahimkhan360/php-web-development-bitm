<?php
require_once '../vendor/autoload.php';
use App\classes\Auth;

if (isset($_POST['btn-login']))
{
    $auth = new Auth($_POST);
    $message = $auth->login();
    include 'login.php';
}
else if (isset($_GET['status']))
{
    if ($_GET['status'] == 'logout')
    {
        $auth = new Auth();
        $auth->logout();
    }
}