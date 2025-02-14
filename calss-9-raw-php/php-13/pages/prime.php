<?php include 'includes/header.php';?>
    <div class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <?php
                        session_start();
                        echo $_SESSION['name'];
                        unset($_SESSION['name']);
                        echo session_id();
                    ?>
                    <form action="action.php" method="post">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="text-center">All data Inout carefully</h4>
                            </div>
                            <div class="card-body">
                                <div class="row input-group mb-4">
                                    <label for="inputNumber" class="col-form-label col-md-3">Starting Enter Number</label>
                                    <div class="col-md-9">
                                        <input type="text" id="inputNumber" class="form-control" name="startingsNumber">
                                    </div>
                                </div>
                                <div class="row input-group mb-4">
                                    <label for="inputShow" class="col-form-label col-md-3">Ending Your number</label>
                                    <div class="col-md-9">
                                        <input type="number" id="inputShow" name="endNumber" class="form-control">
                                    </div>
                                </div>
                                <div class="row input-group mb-4">
                                    <label for="inputShow" class="col-form-label col-md-3">Your Choicer</label>
                                    <div class="col-md-9">
                                        <input type="number" id="inputShow" name="endNumber" class="form-control">
                                    </div>
                                </div>
                                <div class="row input-group">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="form-control btn-success btn" name="btn">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php include 'includes/footer.php';?>