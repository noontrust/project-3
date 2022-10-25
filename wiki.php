  <?php
  //include header and footer
  /*
  if session not created redirect to createUser
  session_start();
  if(!isset($_SESSION["sessionId"])){header("Location: createUser.php";
  include "database.php";}
*/
    include "header.php";
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
  <link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>
  <div class="sideBar">
    <?php
    //possible search bar
    //place links to each wiki page
     foreach ($wikiResult as $row){
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
