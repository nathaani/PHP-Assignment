<?php 
include("header.php");

$content = $_POST["content"];
$id = $_POST["id"];

$dsn = "mysql:host=localhost;dbname=phpas;charset=utf8mb4";
$dbusername = "root";  
$dbpassword = "";

//connect
$pdo = new PDO($dsn, $dbusername, $dbpassword);

//prepare
$stmt = $pdo->prepare("UPDATE `about` 
	SET `content` = :content
	WHERE `about`.`id` = :id");

//bind parameters
$stmt->bindParam(':content', $content, PDO::PARAM_STR);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);

//execute
if ($stmt->execute()) {
    ?><p>You have updated the about page</p><?php
} else {
    ?><p>Could not UPDATE record</p><?php
}
?>
<a href="about.php">Return to page</a>

