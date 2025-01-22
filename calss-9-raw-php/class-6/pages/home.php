<?php
require_once '../vendor/autoload.php';
use App\classes\WordCharacterCount;

$total_word = '';
$total_character ='';


if (isset($_POST['btn'])){
    $WordCharacterCount = new WordCharacterCount($_POST);
    $result = $WordCharacterCount->index();
    extract($result);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>class 9 raw php</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
<!--    <link rel="stylesheet" href="../assets/css/style.css">-->
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

<div class="container mt-2 mb-2">
    <div class="row">
        <div class="col-md-12">
            <form class="card" method="POST" action="">
                <div class="card-title text-center bg-white pt-2 jumbotron">
                    Please enter your text below. Your word count will be displayed as you type.
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <textarea type="text" class="form-control" id="name" name="name_string" placeholder="Enter your text" rows="6"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label" style="margin-left: 10px">Words Statistics</label>

                        <div class="alert alert-info" id="result">
                            <p>
                                <strong>Total Words:</strong>
                                <span id="wordCount">
                                    <?php if (isset($total_word)) { echo $total_word; } else { echo '0'; } ?>
                                </span></p>
                            <p>
                                <strong>Total Characters:</strong>
                                <span id="charCount">
                                    <?php if (isset($total_character)) { echo $total_character; } else { echo '0'; } ?>
                                </span>
                            </p>
                        </div>
                    </div>
                    <button type="submit" name="btn" class="btn btn-secondary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>