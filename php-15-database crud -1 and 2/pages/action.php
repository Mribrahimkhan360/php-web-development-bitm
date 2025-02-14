<?php
require_once '../vendor/autoload.php';
use App\classes\Student;

if (isset($_POST['regSave']))
{
    $student = new Student($_POST);
    $student->save();
}
else if (isset($_GET['status']))
{
    if ($_GET['status'] == 'manage')
    {
        $student = new Student();
        $students = $student->getAllStudentInfo();
        include 'manage.php';
    }
}

else if(isset($_GET['del']))
{
    $student = new Student();
    $student->delete($_GET['del']);
    $students = $student->getAllStudentInfo();
    include 'manage.php';
}
else if(isset($_GET['edit']))
{
    $student = new Student();
    $studentInfo = $student->getStudentInfoId($_GET['edit']);
    include "edit.php";
}
else if(isset($_POST['updateBtn']))
{
    $student = new Student($_POST );
    $studentInfo = $student->update();
    $students = $student->getAllStudentInfo();
    include 'manage.php';
}
else if(isset($_POST['btn-login']))
{
    $student = new Student($_POST );
    $login = $student->login();
}