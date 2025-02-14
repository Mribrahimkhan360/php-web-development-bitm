<?php
require_once '../vendor/autoload.php';
use App\classes\ImageUpload;


if (isset($_POST['btn'])){
    $imageUpload = new ImageUpload($_POST,$_FILES);
    $result = $imageUpload->index();
    extract($result);
    include "home.php";
}