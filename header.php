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
            <div class="logOutArea">
              <?php
                if (isset($_SESSION["isLoggedIn"])){
                  echo "<a href='./logOut.php'>Log Out</a>";
                  echo "<a href='./index.php'>Home</a>";
                  echo "<p>You are logged in as " . $_SESSION["username"] . "</p>";
                }
              ?>
            </div>
        </div>
    </header>
