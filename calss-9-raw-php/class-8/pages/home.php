<?php
require_once '../vendor/autoload.php';
use App\classes\WordCountController;

$total_word = '';
$total_character = '';

if (isset($_POST['btn'])){
    $wordCount = new WordCountController($_POST);
    $result = $wordCount->index();
    extract($result);
}
?>





<?php include 'include/header.php'?>
<div class="container mt-2 mb-2">

    <div class="row">
        <div class="col-md-12">
            <form class="card" method="POST" action="">
                <div class="card-title text-center bg-white pt-2 jumbotron">
                    Please enter your text below. Your word count will be displayed as you type.
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <textarea type="text" class="form-control" id="name" name="givinString" placeholder="Enter your text" rows="6"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label" style="margin-left: 10px">Words Statistics</label>

                        <div class="alert alert-info" id="result">
                            <p>
                                <strong>Total Words:</strong>
                                <span id="wordCount">
                                    <?php if (isset($total_word)){
                                        echo $total_word;
                                    } ?>
                                </span></p>
                            <p>
                                <strong>Total Characters:</strong>
                                <span id="charCount">
                                    <?php if (isset($total_character)){
                                        echo $total_character;
                                    }?>
                                </span>
                            </p>
                        </div>
                    </div>
                    <input type="submit" name="btn" class="btn btn-secondary" value="submit">
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'include/footer.php'?>
