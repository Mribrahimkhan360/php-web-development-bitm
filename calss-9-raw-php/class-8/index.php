<?php
require_once 'vendor/autoload.php';
use App\classes\IndexController;

$index = new IndexController();
$index->index();
?>