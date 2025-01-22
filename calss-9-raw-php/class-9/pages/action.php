<?php
require_once '../vendor/autoload.php';

use App\classes\PasswordGenerate;

if (isset($_POST['btn'])) {
    // Ensure $_POST is properly passed to the PasswordGenerate class
    $passwordGenerate = new PasswordGenerate($_POST);
    $result = $passwordGenerate->index();
    include 'home.php';


}
?>
