<?php
require_once '../vendor/autoload.php';
use App\classes\Student;

if (isset($_POST['btn'])){
    $student = new Student($_POST);
    $message = $student->index();
    include "home.php";
}
if (isset($_POST['status'])){
    if ($_GET['status'] == 'manage'){
        $student = new Student();
        $student->getAllStudentInfo();
    }
}