<?php
  include "database.php";
  session_start();
  if(!$_SESSION["isLoggedIn"]){
    header("Location: login.php");
  }
  $short_title = (isset($_POST["shortTitle"])) ? $_POST["shortTitle"] : $short_title= $_GET["shortTitle"];
  $articleQuery = "SELECT * FROM article WHERE article_short_title = '$short_title';";
  $stmt = $conn->query($articleQuery);
  $article = $stmt->fetch_row();

  //if update button pressed
  if(isset($_POST["update"])){
    $query = "";
    unset($_POST["update"]);
    $title = trim($_POST["titleUpdate"]);
    $short_title = str_replace(' ', '', $title);
    $body = trim($_POST["bodyUpdate"]);
    $query .= "UPDATE `article` SET `article_short_title`='$short_title', `article_title`='$title',`article_body`='$body'";
    //This adds the photo upload to the images folder
    $target_dir = "images/";
    if(file_exists($_FILES["imageUpdate"]["tmp_name"])){
      $target_file = $target_dir . basename($_FILES["imageUpdate"]["name"]);
      move_uploaded_file($_FILES["imageUpdate"]["tmp_name"], $target_file);
      unset($_FILES["imageUpdate"]);
      $query .= ", `article_photo`='$target_file'";
      unlink($article[4]);
    }
    //if birthday is set
    if(isset($_POST["birthdateUpdate"])){
      $birthdate = $_POST["birthdateUpdate"];
      unset($_POST["birthdateUpdate"]);
      $query .= ", `article_birthdate`='$birthdate'";
    }
    $conn->query($query . " WHERE `article_short_title`='$short_title'");//query once
    header("Location: wiki.php?shortTitle=".$short_title);//open the article
  }
 ?>
<!DOCTYPE html lang="en">
  <?php include 'header.php'; ?>
    <div class="square">
      <form action="update.php?shortTitle="<?=$short_title?> method="post" enctype="multipart/form-data">
        <p>
          <label for="title">Title</label>
          <input type="text" name="titleUpdate" maxlength="65" required="true" value=<?php echo "'$article[2]'";?>>
        </p>
        <p>
          <label for="body">Body</label>
          <textarea name="bodyUpdate" required="true"><?=$article[3]?></textarea>
        </p>
        <p>
          <label for="birthdate">Birthdate</label>
          <input type="date" name="birthdateUpdate" value=<?=$article[5]?>>
        </p>
        <p>
          Select image to upload:
          <input type="file" name="imageUpdate" id="imageUpdate" maxlength="64">
        </p>
        <input type="submit" value="Update Article" name="update">
        <input type="hidden" name="shortTitle" value=<?=$article[1]?>>
      </form>
    </div>
  </body>
  <?php include "footer.php";?>
</html>
