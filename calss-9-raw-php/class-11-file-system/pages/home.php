<?php include 'includes/header.php';?>
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto mt-4">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center"><?php if (isset($message)) { echo $message; } ?></h4>
                </div>
                <div class="card-body">
                    <form action="action.php" method="post">
                        <div class="input-group row">
                            <label for="" class="col-form-label">Name</label>
                            <div class="col-md-9">
                                <input type="text" name="name" class="form-control">
                            </div>
                        </div>
                        <div class="input-group row">
                            <label for="" class="col-form-label">Email</label>
                            <div class="col-md-9">
                                <input type="text" name="email" class="form-control">
                            </div>
                        </div>
                        <div class="input-group row">
                            <label for="" class="col-form-label">Mobile</label>
                            <div class="col-md-9">
                                <input type="text" name="mobile" class="form-control">
                            </div>
                        </div>
                        <div class="input-group row">
                            <label for="" class="col-form-label"></label>
                            <div class="col-md-9">
                                <input type="submit" name="btn" value="submit" class="btn btn-success form-control">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'includes/footer.php';?>