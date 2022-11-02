<?php include 'database.php'; ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>All Articles</title>
        <link rel="stylesheet" href="style1.css" type="text/css"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sarabun:ital@0;1&display=swap" rel="stylesheet">
    </head>
    <body>

    <?php include 'header.php'; ?>
    <h1> All Articles </h1>

        <?php 
        $sql = "SELECT * FROM article";
        $run = mysqli_query($mysqli,$sql);
        $row = mysqli_num_rows($run);
        ?>
    <div class="container2">
        <div class="row">
            <div class="col-lg-5">
                <?php if ($row) {
                while($result=mysqli_fetch_assoc($run)) {
                ?>

                    <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="noise.png" alt="Card image cap"> 
                        <div class="card-body">
                            <h5 class="card-title"> <?= $result['article_short_title'] ?> </h5>
                            <p class="card-text"> <?= $result['article_title'] ?> </p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>

                        <?php } } ?>
        
                </div>
            </div>
        </div>
    </div>
