<?php include 'includes/header.php'?>
<div class="container mt-4">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Auto Password Generate</h4>
                </div>
                <div class="card-body">
                    <form action="action.php" method="POST">
                        <div class="card-group row">
                            <label for="" class="col-form-label col-md-3">Enter your password Length</label>
                            <div class="col-md-9">
                                <input type="number" name="givenNumber" placeholder="Enter password" class="form-control">
                            </div>
                        </div>




                        <div class="card-group row mt-2">
                            <label for="" class="col-form-label col-md-3">Your password</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="<?php echo isset($result) ? $result : '' ?>">
                            </div>
                        </div>



                        <div class="card-group row mt-2">
                            <label for="" class="col-form-label col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" name="btn" value="submit" class="btn btn-outline-success form-control">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'includes/footer.php'?>