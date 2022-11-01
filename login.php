<?php
  $db = mysqli_connect("localhost", "INFX371", "P*ssword", "wiki");
  if (!$db) {
    echo "Connection failed!";
  } 

  if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $hash = mysqli_fetch_assoc(mysqli_query($db, "SELECT password FROM `usr` WHERE username = '$username'"));

    if (password_verify($password, $hash['password'])) {
      session_start();
      header("Location: index.php");
      exit();
    }
    else {
      echo "Incorrect Username or Password";
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
          <p id="wikiTitle">Wiki of Pets</p>
          </div>
          <div id="filler"></div>
      </div>
    </header>
    <div class="loginBox">   
      <form action="login.php" method="post">
          <label for="username"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="username" required>
          <p></p>
          <label for="password"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" required>
          <p></p>
          <div id="logButtons">
          <a id="registerButton" href="./createuser.php">Register new account</a>
          <button id="loginButton" type="submit">Login</button>
          </div>
      </form>
    </div>
    <footer>Copyright 2022 &copy</footer>
  </body>
</html>
