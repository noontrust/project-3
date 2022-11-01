<?php
  include "database.php";
  
  $error;
  if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $checkUsername = mysqli_query($conn, "SELECT username from usr WHERE username = '$username'");
    $hash = mysqli_fetch_assoc(mysqli_query($conn, "SELECT password FROM `usr` WHERE username = '$username'"));

    if ($checkUsername) {
      if (password_verify($password, $hash['password'])) {
        session_start();
        $_SESSION["isLoggedIn"] = true;
        $_SESSION["username"] = $username;
        header("Location: index.php");
        exit();
      }
      else {
        $error = "Incorrect Password.";
      }
    }
    else {
      $error = "Username does not exist.";
    }
  }
?>

<!DOCTYPE html>
<html>
    <!-- <head>
        <meta charset="utf-8" />
        <title>Wiki</title>
        <link rel="stylesheet" href="style.css" type="text/css"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sarabun:ital@0;1&display=swap" rel="stylesheet">
    </head>
  <body> -->
    <?php include "header.php";?>
    
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

    <?php include "footer.php";?>
  </body>
</html>
