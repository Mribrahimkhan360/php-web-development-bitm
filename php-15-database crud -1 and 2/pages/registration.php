<?php include 'includes/header.php';?>
<div class="container mt-custom d-flex justify-content-center align-items-center vh-100">
    <div class="row w-100 justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Registration Form</h4>
                </div>
                <div class="card-body">
                    <h4 class="text-center text-danger h4"><?php echo isset($message) ? $message: '';?></h4>
                    <form action="action.php" method="post">
                        <div class="input-group row mt-2 mb-2">
                            <label for="" class="col-md-3 col-form-label">Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="name" placeholder="Ibraim Khan">
                            </div>
                        </div>
                        <div class="input-group row mb-2">
                            <label for="" class="col-md-3 col-form-label">Email</label>
                            <div class="col-md-9">
                                <input type="email" class="form-control" name="email" placeholder="admin@admin.com">
                            </div>
                        </div>
                        <div class="input-group row mb-2">
                            <label for="" class="col-md-3 col-form-label">Password</label>
                            <div class="col-md-9">
                                <input type="password" class="form-control" name="password" placeholder="**********">
                            </div>
                        </div>
                        <div class="input-group row mb-2">
                            <label for="" class="col-md-3 col-form-label">Mobile</label>
                            <div class="col-md-9">
                                <input type="number" class="form-control" name="mobile" placeholder="0170000000">
                            </div>
                        </div>
                        <div class="input-group row mt-2">
                            <label for="" class="col-md-3 col-form-label"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success form-control" name="regSave" value="Save Info">
                            </div>
                        </div>
                        <div class="">
                            <a href="login.php" class="text-center">login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'includes/footer.php';?>
