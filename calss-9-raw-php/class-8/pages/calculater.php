<?php
require_once '../vendor/autoload.php';
use App\classes\Example;

$result = '';
if (isset($_POST['btn'])){
    $calculater = new Example($_POST);
    $result = $calculater->index();
}

?>

<?php include 'include/header.php';?>
<form action="" method="post">
    <div class="container">
        <div class="row">
            <form action="" method="post">
                <div class="col-md-6">
                    <div class="input-group mt-2">
                        <label for="" class="form-label mx-2">First number</label>
                        <input type="number" name="staringNumber" class="form-control">
                    </div>
                    <div class="input-group mt-2 mb-2">
                        <label for="" class="form-label mx-2">Last number</label>
                        <input type="number" name="endingNumber" class="form-control">
                    </div>

                    <div>
                        <p><?php if($result){echo $result;}?></p>
                    </div>

                    <div class="input-group">
                        <label for="" class="form-label"></label>
                        <button type="submit" class="btn btn-success" name="btn">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</form>
<?php include 'include/footer.php';?>
