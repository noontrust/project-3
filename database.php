<?php 
$db_host = 'localhost';
$db_name = 'wiki';
$db_user = 'root';
$db_password = '';

$mysqli = new mysqli($db_host, $db_user, $db_password, $db_name);

if($mysqli->connect_errno){
    printf("Connection failed: %s\n", $mysqli->connect_error);
    exit();
}
?>