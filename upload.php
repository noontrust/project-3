<?php
/*
  Must add other updates to database from here.
*/
include_once "database.php";
if(isset($_POST["submit"])) {
  unset($_POST["submit"]);
  $query = "";
  //insert data into database
  $title = trim($_POST["title"]);
  $short_title = str_replace(' ', '', $title);
  $body = trim($_POST["body"]);
  $query .= "INSERT INTO `article` VALUES " . "(NULL, '$short_title', '$title', '$body'";

  //This adds the photo upload to the images folder
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
  if(isset($_POST["birthdate"])){
    $birthdate = $_POST["birthdate"];
    $query .= ", '$birthdate'";
  }
  else {
    $query .=", NULL";
  }
  $conn->query($query .");");
  echo $query.");";
  header("Location: wiki.php?shortTitle=".$short_title);
}
?>
