<html>
  <body>
    <?php
    $db = mysqli_connect("localhost", "INFX371", "P*ssword", "wiki");
    ?>
    <form action="login.php" method="post">
      <div class="container">
        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" required>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <button type="submit">Login</button>
      </div>

      <div class="container">
        <button type="button">Create Profile</button>
      </div>
    </form>
  </body>
</html>