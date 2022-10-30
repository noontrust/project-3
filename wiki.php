  <?php
  /*
  if session not created redirect to createUser
  if(!isset($_SESSION["sessionId"])){header("Location: createUser.php"};
*/
    include "header.php";
    include_once "database.php";
    session_start();
  ?>
<html lang="en">
<head>
  <title>Cool Pets Wiki</title>
  <meta charset="utf-8">
  <link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>
  <div class="sideBar">
    <?php
    //place links to each wiki page
     foreach ($wikiResult as $row){
      echo "<a href=wiki.php?shortTitle=$row[1] title='$row[2]'>$row[2]</a><br>";
    }
    ?>
  </div>
  <div class="main">
    <?php
      if(isset($_GET["shortTitle"])){
        $shortTitle = $_GET["shortTitle"];
        unset($_GET["shortTitle"]);
        //grab the article info and display it
        $articleQuery = "SELECT * FROM article WHERE article_short_title = '$shortTitle';";
        $stmt = $conn->query($articleQuery);
        $article = $stmt->fetch_row();
        $title = $article[2];
        echo "<h1>" . $title ."</h1>";//Title
        echo "<h4>This article is all about " . $article[2] ."!</h4>";//sub-title
        echo "<p>" . $article[3] . "</p>";//The body
        echo (isset($article[4])? "<img src=".$article[4]." alt=".$title." width='200' height='200'>" : "");//image
        echo (isset($article[5]) ? "<p>Birthday " . $article[5] . "</p>" : ""); //birthdate
        echo "<a href=update.php?shortTitle=$article[1]>Edit this article</a>";//edit link
      }
      else{
        echo "<h1>Home</h1>";
        echo "<h4>Use the navigation bar to view wikis, or add you own below!</h4>";
        echo "<form action='add.php' method='post'>
          <input type='submit' value='Upload Article' name='articleSubmit'>
        </form>";
      }
    ?>
  </div>
  <?php include "footer.php";?>
</body>
</html>
