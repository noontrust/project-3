<?php
  include "header.php";
 ?>
<html lang="en">
  <head>
    <title>Cool Pets Wiki</title>
    <meta charset="utf-8">
    <link href="style.css" type="text/css" rel="stylesheet">
  </head>
  <body>
    <div class="main">
      <form action="upload.php" method="post" enctype="multipart/form-data">
        <p>
          <label for="title">Title</label>
          <input type="text" name="title" maxlength="32" required="true">
        </p>
        <p>
          <label for="body">Body</label>
          <textarea name="body" required="true"></textarea>
        </p>
        <p>
          <label for="birthdate">Birthdate</label>
          <input type="date" name="birthdate">
        </p>
        <p>
          Select image to upload:
          <input type="file" name="imageUpload" id="imageUpload" maxlength="64">
        </p>
        <input type="submit" value="Add Article" name="submit">
      </form>
    </div>
  </body>
  <?php include "footer.php";?>
</html>
