<?php
$HOST = "localhost";
$USERNAME = "INFX371";
$PASSWORD = "P*ssword";
$DB_NAME = "wiki";
$conn = new mysqli($HOST, $USERNAME, $PASSWORD, $DB_NAME);
$stmt = $conn->query("SELECT * FROM article");
$wikiResult = $stmt->fetch_all();
$stmtTwo = $conn->query("SELECT * FROM `article`ORDER BY `article_id`DESC LIMIT 5;");
$topArticle = $stmt->fetch_all();
?>
