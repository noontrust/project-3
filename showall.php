<?php include 'database.php'; ?>

<!DOCTYPE html>
<html>
    <?php include 'header.php'; ?>
    <h1> All Articles </h1>

        <?php 
        $sql = "SELECT * FROM article";
        $run = mysqli_query($conn,$sql);
        $row = mysqli_num_rows($run);
        ?>
    <div class="container2">
        <div class="row">
            <div class="col-lg-5">
                <?php if ($row) {
                while($result=mysqli_fetch_assoc($run)) {
                ?>

                    <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="<?= $result['article_photo'] ?>" alt="Card image cap"> 
                        <div class="card-body">
                            <h5 class="card-title"> <?= $result['article_short_title'] ?> </h5>
                            <p class="card-text"> <?= $result['article_title'] ?> </p>
                            <p class="birthday"> <?= $result['article_birthdate'] ?> </p>
                            <a href="wiki.php" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                        <?php } } ?>
            </div>
        </div>
    </div>
