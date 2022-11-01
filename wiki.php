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
      <title>Wiki of Pets</title>
      <meta charset="utf-8">
      <link href="style.css" type="text/css" rel="stylesheet">
    </head>
    <body>
      <div class="bigcontainer">
      <div class="container">
      <div class="sideBar">
        <?php
        //possible search bar
        //place links to each wiki page
        foreach ($wikiResult as $row){
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
                <a href="addArticle.php">Create New Article</a>
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
