<?php
require_once '../vendor/autoload.php';

use App\classes\Student;

if (isset($_POST['btn']))
{
    $student = new Student($_POST);
    $student->index();
}