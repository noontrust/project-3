<?php
include_once "database.php";
if(isset($_POST["submit"])) {
  unset($_POST["submit"]);
  $query = "";
  //insert data into database
  $title = trim($_POST["title"]);
  $title = mysqli_real_escape_string($conn, $title);
  $short_title = str_replace(' ', '', $title);
  $body = trim($_POST["body"]);
  $body = mysqli_real_escape_string($conn, $body);
  $query .= "INSERT INTO `article` VALUES " . "(NULL, '$short_title', '$title', '$body'";

  //This adds the photo upload to the images folder and inserts url into db
  $target_dir = "images/";
  if(isset($_FILES["imageUpload"]) && file_exists($_FILES["imageUpload"]["tmp_name"])){
    $target_file = $target_dir . basename($_FILES["imageUpload"]["name"]);
    move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $target_file);
    unset($_FILES["imageUpload"]);
    $query .=", '$target_file'";
  }
  else {
    $query .= ", NULL";
  }
  //adds birthday into db
  if(isset($_POST["birthdate"])){
    $birthdate = $_POST["birthdate"];
    $query .= ", '$birthdate'";
  }
  else {
    $query .=", NULL";
  }
  $conn->query($query .");");//query once
  header("Location: wiki.php?shortTitle=".$short_title);//opens new article
}
?>
