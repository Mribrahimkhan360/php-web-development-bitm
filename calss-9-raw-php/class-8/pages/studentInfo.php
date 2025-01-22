<?php
require_once '../vendor/autoload.php';

use App\classes\studentInfo;

if (isset($_POST['btn'])) {
    $studnt = new studentInfo($_POST);
    $result = $studnt->index();
    extract($result);

}
?>

<?php
include 'include/header.php';
include 'include/footer.php';
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>student</title>
</head>
<body>


<div class="card-body mt-4">
    <form action="" method="post">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="table-responsive card">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>E-mail</th>
                                <th>Mobile</th>
                                <th>Subject</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><?php if (isset($_POST['btn'])) {
                                        echo $name;
                                    } ?></td>
                                <td><?php if (isset($_POST['btn'])) {
                                        echo $email;
                                    } ?></td>
                                <td><?php if (isset($_POST['btn'])) {
                                        echo $mobile;
                                    } ?></td>
                                <td>
                                    <?php
                                    if (isset($_POST['btn'])){
                                    foreach ($subject as $item) {
                                        echo $item . '<br/>';
                                    }}
                                    ?>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <form action="" method="post">
                    <div class="col-md-6 bg-light p-3">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="col-form-label">Student Name</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="name" placeholder="Name">
                            </div>
                        </div>
                        <div class="row mt-2 mb-2">
                            <div class="col-md-3">
                                <label for="" class="col-form-label">Email</label>
                            </div>
                            <div class="col-md-9">
                                <input type="email" class="form-control" name="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="row mt-2 mb-2">
                            <div class="col-md-3">
                                <label for="" class="col-form-label">Student NaMobile Number</label>
                            </div>
                            <div class="col-md-9">
                                <input type="number" name="mobile" class="form-control" placeholder="Mobile">
                            </div>
                        </div>
                        <div class="row mt-2 mb-2">
                            <div class="col-md-3">
                                <label for="" class="col-form-label">Subject Name</label>
                            </div>
                            <div class="col-md-9">
                                <input class="form-check-input" type="checkbox" name="subject[]" value="Bnagla"
                                       id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">Bnagla</label>

                                <input class="form-check-input" type="checkbox" name="subject[]" value="Chemistry"
                                       id="Chemistry">
                                <label class="form-check-label" for="Chemistry">Chemistry</label>

                                <input class="form-check-input" type="checkbox" name="subject[]" value="Physics"
                                       id="Physics">
                                <label class="form-check-label" for="Physics">Physics</label>

                                <input class="form-check-input" type="checkbox" name="subject[]" value="Math"
                                       id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">Math</label>

                                <input class="form-check-input" type="checkbox" name="subject[]" value="Physics"
                                       id="flexCheckDefault">
                                <label class="form-check-label" for="Zoology">Physics</label>

                                <input class="form-check-input" type="checkbox" name="subject[]" value="Zoology"
                                       id="Zoology">
                                <label class="form-check-label" for="Zoology">Zoology</label>
                            </div>
                        </div>
                        <div class="row mt-2 mb-2">
                            <div class="col-md-3"><label for="" class="col-form-label">Result</label>

                            </div>
                            <div class="col-md-9">
                                <div class="border-1 btn-secondary">
                                    01
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-outline-success" name="btn">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </form>
</div>
</body>
</html>