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
        <?php include "header.php" ?>
        <div id="everythingButHeader">
            <div id="mainArea">
                <div id="welcomeBox">
                    <div id="welcomeTitle"><p>Welcome to the Wiki of Pets</p></div>
                    <!-- <hr> -->
                    <p>This wiki is about pets.</p>
                    <p>You can edit articles by going to the article's page and clicking "Edit Article" at the top of the page.</p>
                    <p>You can also add articles to this wiki using <a href="./add.php">this</a> link.</p>
                </div>
                <h2>Recent Articles</h2>
                <ul>
                    <!-- for five or so most recent articles in db, print them here -->
                    
                        <?php
                            foreach ($topArticle as $row){
                            echo "<li><a href=wiki.php?shortTitle=$row[1] title='$row[2]'>$row[2]</a></li>";
                            }
                        ?>
                    
                </ul>
                <a  href="showall.php">Show all articles...</a>
                </div>
            </div>
            <?php include "footer.php" ?>
        </div>
    </body>
</html>