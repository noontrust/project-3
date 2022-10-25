  <?php
  //include header and footer
  /*
  if session not created redirect to createUser
  session_start();
  if(!isset($_SESSION["sessionId"])){header("Location: createUser.php";
  include "database.php";}
*/
    session_start();
    //query the articles
    $HOST = "localhost";
    $USERNAME = "root";
    $PASSWORD = "";
    $DB_NAME = "wiki";
    $conn = new mysqli($HOST, $USERNAME, $PASSWORD, $DB_NAME);
    $stmt = $conn->query("SELECT * FROM article");
    $wikiResult = $stmt->fetch_all();
  ?>
<html lang="en">
<head>
  <title>Cool Facts Wiki</title>
  <meta charset="utf-8">
</head>
<body>
  <div class="sidebar">
    <?php
    //possible search bar
    //place links to each wiki page
     foreach ($wikiResult as $row){
      echo "<a href=wiki.php/?shortTitle='$row[1]' title='$row[2]'>$row[1]</a>";
    }
    ?>
      <a href="wiki.php?wikiPage=cats">Cats</a><?php=//"$wikiPage"?>
  </div>
  <div>
    <h1>Home</h1>
    <h4>Use the navigation bar to view wikis, or add your own below!</h4>
    <hr>
    <?php
      if(isset($_GET["shortTitle"])){
        $row = $_GET["shortTitle"];
        $articleQuery = "SELECT * FROM article WHERE short_title = '$row'";
        $article = $conn->query($articleQuery)->fetch();
        $title = $article[1];
        $info = $article[2];
        echo $article[3];
      }
    ?>
    <form action="addArticle.php" method="post"
      <input type="submit" value="Upload Article" name="articleSubmit">
    </form>
  </div>
</body>
</html>
