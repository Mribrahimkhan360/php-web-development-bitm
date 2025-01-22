<?php
require_once '../vendor/autoload.php';
use App\classes\WordCounterCount;
$total_word='';
$total_character='';
if (isset($_POST['btn'])){
    $wordCount = new WordCounterCount($_POST);
    $result = $wordCount->index();
    extract($result);
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container">
        <a href="" class="navbar-brand">Brand</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarMenu" aria-controls="navbarMenu"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="" class="nav-link">About</a></li>
                <li class="nav-item"><a href="" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="" method="post">
                <div class="input-group mt-2 mb-2">
                    <label for="" class="col-form-label p-3">Enter input </label>
                    <textarea type="text" class="form-control" name="string"></textarea>
                    <button type="text" class="btn btn-outline-success" name="btn">Submit</button>
                </div>
                <div>
                    <p>Total Word : <?php if (isset($total_word)){echo $total_word;}?> </p>
                    <p>Total Chercter : <?php if (isset($total_character)){echo $total_character;}?></p>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>