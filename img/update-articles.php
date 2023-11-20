<!--HEADER-->
<?php include("header.php");

$category = $_POST["category"];
$title = $_POST["title"];
$author = $_POST["author"];
$image = $_POST["image"];
$text = $_POST["text"];
$featured = $_POST["featured"];
$link = $_POST["link"];

$id = $_POST["id"];

$dsn = "mysql:host=localhost;dbname=phpas;charset=utf8mb4";
$dbusername = "root";  
$dbpassword = "";

//connect
$pdo = new PDO($dsn, $dbusername, $dbpassword);

//prepare
$stmt = $pdo->prepare("UPDATE `articles`
	SET 
    `category` = '$category', 
	`title` = '$title', 
	`author` = '$author',
    `image` = '$image', 
	`text` = '$text',
    `featured` = '$featured',
    `link` = '$link' 

	WHERE `articles`.`id` = '$id';");

//execute
if($stmt->execute()){
	?><p>Record <?=$id ?> UPDATED</p><?php
}else{
	?><p>Could not UPDATE record</p><?php
}
?>
<a href="home.php">Back to all articles</a>