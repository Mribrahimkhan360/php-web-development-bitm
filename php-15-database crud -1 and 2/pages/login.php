<?php include 'includes/header.php';?>
<div class="container mt-custom d-flex justify-content-center align-items-center vh-100">
    <div class="row w-100 justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Login Form</h4>
                </div>
                <div class="card-body">
                    <h4 class="text-center text-danger h4">
                        <?php
                        if (isset($_GET['message']) && $_GET['message'] == 'success') {
                            echo "<p style='color: green;'>Registration successful!</p>";
                        }
                        ?>
                    </h4>
                    <form action="action.php" method="post">
                        <div class="input-group row mt-2 mb-2">
                            <label for="" class="col-md-3 col-form-label">Email Address</label>
                            <div class="col-md-9">
                                <input type="email" class="form-control" name="email">
                            </div>
                        </div>
                        <div class="input-group row">
                            <label for="" class="col-md-3 col-form-label">Password</label>
                            <div class="col-md-9">
                                <input type="password" class="form-control" name="password" placeholder="*********">
                            </div>
                        </div>
                        <div class="input-group row mt-2">
                            <label for="" class="col-md-3 col-form-label"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success form-control" name="btn-login">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'includes/footer.php';?>
