  <?php
  include "header.php";
  include "database.php";
  //if session not created redirect to login
  if(!isset($_SESSION["isLoggedIn"])){
    header("Location: login.php");
  }
  ?>
<html lang="en">
<head>
  <title>Cool Facts Wiki</title>
  <meta charset="utf-8">
  <link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>
  <div class="sideBar">
    <?php
    //place links to newest 5 wiki page
     foreach ($topArticle as $row){
      echo "<a href=wiki.php?shortTitle=$row[1] title='$row[2]'>$row[2]</a>";
    }
    ?>
  </div>
  <div class="main">
    <?php
      if(isset($_GET["shortTitle"])){
        $shortTitle = $_GET["shortTitle"];
        unset($_GET["shortTitle"]);
        $articleQuery = "SELECT * FROM article WHERE article_short_title = '$shortTitle';";
        $stmt = $conn->query($articleQuery);
        $article = $stmt->fetch_row();
        echo "<h1>" . $article[2] ."</h1>";
        echo "<h4>This article is all about " . $article[2] ."!</h4>";
        $title = $article[1];
        $info = $article[2];
        echo $article[3];
        //add link to addArticle here
      }
      else{
        echo "<h1>Home</h1>";
        echo "<h4>Use the navigation bar to view wikis, or add you own below!</h4>";
        echo "<form action='addArticle.php' method='post'>
          <input type='submit' value='Upload Article' name='articleSubmit'>
        </form>";
      }
    ?>
  </div>
  <?php include "footer.php";?>
</body>
</html>
