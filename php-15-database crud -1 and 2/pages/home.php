<?php include 'includes/header.php';?>

<?php
    if (!isset($_SESSION['id'])){
        header('Location: ../index.php');
    }
?>
<div class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Please all the fill carefully!</h4>
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="post">
                            <div class="input-group mb-2">
                                <label for="" class="col-form-label col-md-3">Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="givenNumber">
                                </div>
                            </div>
                            <div class="input-group mb-2">
                                <label for="" class="col-form-label col-md-3">Result</label>
                                <div class="col-md-9">
                                    <textarea name="" id="" class="form-control"><?php echo isset($result) ? $result : ''; ?></textarea>
                                </div>
                            </div>

                            <div class="input-group mb-2">
                                <label for="" class="col-form-label col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn  btn-success form-control" name="btn">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'includes/footer.php';?>