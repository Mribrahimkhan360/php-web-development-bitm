<?php include 'includes/header.php';?>
<div class="container mt-2">
    <div class="row mb-4">
        <div class="col-md-10 mx-auto">
            <div class="card card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Name</th>
                        <th>Image</th>
                    </tr>
                    <tr>
                        <td><?php if(isset($name)){ echo $name;}?></td>
                        <td><img class="img-fluid" src="<?php if(isset($image)){ echo $image;}?>" alt=""></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center card-title">Image Upload</h4>
                </div>
            </div>
            <div class="card-body">
                <form action="action.php" method="post" enctype="multipart/form-data">
                    <div class="input-group mt-2">
                        <label for="" class="col-form-label col-md-3">Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="name">
                        </div>
                    </div>


                    <div class="input-group mt-2">
                        <label for="" class="col-form-label col-md-3">Image</label>
                        <div class="col-md-9">
                            <input type="file" class="form-control" name="image">
                        </div>
                    </div>
                    <div class="input-group mt-2">
                        <label for="" class="col-form-label col-md-3"></label>
                        <div class="col-md-9">
                            <input type="submit" class="form-control btn btn-outline-success" name="btn" value="submit">
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'includes/footer.php';?>