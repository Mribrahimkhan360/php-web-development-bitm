<?php session_start();?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<?php if(isset($_SESSION['id'])){ ?>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container mx-auto">
        <a href="#" class="navbar-brand">Logo</a>
        <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a href="home.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Prime Number</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Serise Number</a></li>
                <li class="nav-item"><a href="logout.php?status=logout" class="nav-link">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
<?php } ?>
