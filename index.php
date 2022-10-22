<?php include 'database.php'; ?>
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
                <div class="logOutArea">
                    <a href="./login.php">Log Out</a>
                    <p>You are logged in as User123<!-- php echo username here --></p>
                </div>
            </div>
        </header>
        <div id="everythingButHeader">
            <div id="mainArea">
                <div id="welcomeBox">
                    <div id="welcomeTitle"><p>Welcome to the Wiki of Things</p></div>
                    <!-- <hr> -->
                    <p>This wiki is about stuff and things, maybe even some whosits. I don't know.</p>
                    <p>You can edit articles by going to the article's page and clicking "Edit Article" at the top of the page.</p>
                    <p>You can also add articles to this wiki using <a href="./add.php">this</a> link.</p>
                </div>
                <h2>Recent Articles</h2>
                <ul>
                    <!-- for five or so most recent articles in db, print them here -->
                    <li>
                        <a href="wiki.php?short_title=">The Science of Stuff</a><!-- Article 1--> 
                        <div>Lorem ipsum blah blah blah</div><!-- Article 1 snippet -->
                    </li>
                    <li>
                        <a href="wiki.php?short_title=">What Are Things?</a>
                        <div>Lorem ipsum blah blah blah</div>
                    </li>
                    <li>
                        <a href="wiki.php?short_title=">The Origins of Whatchamacallits</a>
                        <div>Lorem ipsum blah blah blah</div>
                    </li>
                    <li>
                        <a href="wiki.php?short_title=">Thingimajigs and Their Place in History</a>
                        <div>Lorem ipsum blah blah blah</div>
                    </li>
                    <li>
                        <a href="wiki.php?short_title=">What In Tarnation Even is This Thing</a>
                        <div>Lorem ipsum blah blah blah</div>
                    </li>
                </ul>
                <a  href="wiki.php">Show all articles...</a>
                </div>
            </div>
            <footer>
                <p>Copyright 2022 &copy</p>
            </footer>
        </div>
    </body>
</html>