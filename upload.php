<?php
/*
  The following code is from https://www.w3schools.com/php/php_file_upload.asp
*/
$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["imageUpload"]["name"]);

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["imageUpload"]["tmp_name"]);
  move_uploaded_file($_FILES["imgUpload"]["tmp_name"], $target_file);
?>
