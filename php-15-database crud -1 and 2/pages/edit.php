<?php include 'includes/header.php';?>
<div class="container mt-custom d-flex justify-content-center align-items-center vh-100">
    <div class="row w-100 justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Edit Registration Form</h4>
                </div>
                <div class="card-body">
                    <h4 class="text-center text-danger h4"></h4>
                    <form action="action.php" method="post">
                        <div class="input-group row mt-2 mb-2">
                            <label for="" class="col-md-3 col-form-label">Id</label>
                            <div class="col-md-9">
                                <input type="hidden" class="form-control" name="student_id" value="<?php echo $studentInfo['id'];?>">
                            </div>
                        </div>
                        <div class="input-group row mt-2 mb-2">
                            <label for="" class="col-md-3 col-form-label">Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="name" value="<?php echo $studentInfo['name'];?>">
                            </div>
                        </div>
                        <div class="input-group row mb-2">
                            <label for="" class="col-md-3 col-form-label">Email</label>
                            <div class="col-md-9">
                                <input type="email" class="form-control" name="email" value="<?php echo $studentInfo['email']?>">
                            </div>
                        </div>
                        <div class="input-group row mb-2">
                            <label for="" class="col-md-3 col-form-label">Password</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="password" value="<?php echo $studentInfo['password']?>">
                            </div>
                        </div>
                        <div class="input-group row mb-2">
                            <label for="" class="col-md-3 col-form-label">Mobile</label>
                            <div class="col-md-9">
                                <input type="number" class="form-control" name="mobile" value="<?php echo $studentInfo['mobile']?>">
                            </div>
                        </div>
                        <div class="input-group row mt-2">
                            <label for="" class="col-md-3 col-form-label"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success form-control" name="updateBtn" value="Save Info">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'includes/footer.php';?>
