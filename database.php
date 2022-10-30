<?php
$HOST = "localhost";
$USERNAME = "root";
$PASSWORD = "";
$DB_NAME = "wiki";
$conn = new mysqli($HOST, $USERNAME, $PASSWORD, $DB_NAME);
$stmt = $conn->query("SELECT * FROM article");
$wikiResult = $stmt->fetch_all();
?>
