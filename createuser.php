<?php
  include "database.php";
  
  if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password-retype'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $passwordRetype = $_POST['password-retype'];
    $checkUsername = mysqli_query($conn, "SELECT username from usr WHERE username = '$username'");
    
    if (!$checkUsername) {
      if ($password == $passwordRetype) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO usr (username, password) VALUES ('$username', '$hashedPassword')";
        $result = mysqli_query($conn, $sql);
        header("Location: index.php");
        exit();
      }
      else {
        $error = "Passwords do not match.";
      }
    }
    else {
      $error = "Username is already taken. Please choose a new username.";
    }
  }
?>

<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8" />
    <title>Wiki</title>

    <link rel="stylesheet" href="style.css" type="text/css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:ital@0;1&display=swap" rel="stylesheet">
  </head>

  <body>
    <header>
      <div class="topBar">
        <div class="logo">
          <p id="wikiTitle">Wiki of Things</p>
        </div>
        <div id="filler"></div>
      </div>
    </header>

    <a href="./login.php">< Back</a>

    <div class="loginBox">   
      <form action="createuser.php" method="post">
        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" required>
        <p></p>
          
        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>
        <p></p>
        
        <label for="password-retype"><b>Re-Type Password</b></label>
        <input type="password" placeholder="Re-enter Password" name="password-retype" required>
        <p></p>

        <div id="logButtons">
          <button id="createuser" type="submit">Create Account</button>
        </div>
        <p></p>

        <div class="error">
          <?php 
            if (isset($error)) {
              echo $error;
            }
          ?>
        </div>
      </form>
    </div>

    <footer>Copyright 2022 &copy</footer>
  </body>
</html>