<?php
if (isset($_GET['page'])){
    if ($_GET['page']=='home'){
        include 'pages/home.php';
    }
    else{
        echo 'Not found page!';
    }
}