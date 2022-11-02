<?php include 'database.php';
session_start();
if(!$_SESSION["isLoggedIn"]){
    header("Location: login.php");
  }
$query = "SELECT * FROM `article` WHERE article_id = '1'";
$result = $conn->query($query) or die($conn->error.__LINE__);
$article = $result->fetch_assoc();



?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Wiki</title>
        <link rel="stylesheet" href="style.css" type="text/css"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sarabun:ital@0;1&display=swap" rel="stylesheet">
    </head>
    <body>
        <?php include "header.php" ?>
        <div id="everythingButHeader">
            <div id="mainArea">
                <div id="welcomeBox">
                    <div id="welcomeTitle"><p>Welcome to the Wiki of Pets</p></div>
                    <!-- <hr> -->
                    <p>This wiki is about pets.</p>
                    <p>You can edit articles by going to the article's page and clicking "Edit Article" at the top of the page.</p>
                    <p>You can also add articles to this wiki using <a href="./add.php">this</a> link.</p>
                    <p><?php echo substr($article['article_body'], 0, 100) ?></p>
                </div>
                <h2>Recent Articles</h2>
                <ul>
                    <!-- for five or so most recent articles in db, print them here -->
                    <li>
                        <a href="wiki.php?shortTitle=<?php echo $article ['article_short_title'] ?>" ><?php echo $article ['article_title'] ?></a><!-- Article 1-->
                    </li>
                </ul>
                <a  href="wiki.php">Show all articles...</a>
                </div>
            </div>
            <?php include "footer.php" ?>
        </div>
    </body>
</html>