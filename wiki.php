  <?php
  
  include "database.php";
  session_start();
  //if session not created redirect to login
  if(!isset($_SESSION["isLoggedIn"])){
    header("Location: login.php");
  }
  ?>
<!DOCTYPE html lang="en">
<?php include "header.php" ?>
<div class="bigcontainer">
  <div class="container">
  <div class="sideBar">
    <?php
    //place links to newest 5 wiki page
     foreach ($topArticle as $row){
      echo "<a href=wiki.php?shortTitle=$row[1] title='$row[2]'>$row[2]</a>";
    }
    ?>
  </div>
  <div class="articleDivs">
    <?php
        $shortTitle = $_GET["shortTitle"];
        unset($_GET["shortTitle"]);
        $articleQuery = "SELECT * FROM article WHERE article_short_title = '$shortTitle';";
        $stmt = $conn->query($articleQuery);
        $article = $stmt->fetch_row();
        $title = $article[1];
        $info = $article[2];
        ?>
        <div class="articletitle">
            <!-- print article title -->
            <?php echo "<h1>" . $article[2] . "</h1>"; ?>
            <div class="addCreateLinks">
              <a href="editArticle.php">Edit Article</a>
              <a href="add.php">Create New Article</a>
            </div>
          </div>
          <div class="square">
            <div><img src="./noise.png"></div>
            <!-- print article body -->
            <?php echo "<p>" . $article[3] . "</p>"; ?>
          </div>
        </div>
    </div>
  </div>
  <?php include "footer.php";?>
</body>
</html>