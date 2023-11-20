<!--HEADER-->
<?php include("header.php");

$id = $_GET["id"];
$dsn = "mysql:host=localhost;dbname=phpas;charset=utf8mb4";
$dbusername = "root";  
$dbpassword = "";

//connect
$pdo = new PDO($dsn, $dbusername, $dbpassword);

//prepare
$stmt = $pdo->prepare("UPDATE `articles`
	SET 
    `featuredArticles` = '0'
    WHERE
    `articles`.`id` = $id; ");

//execute
if($stmt->execute()){
	?><p>Article <?=$id ?> REMOVED</p><?php
}else{
	?><p>Could not REMOVE article</p><?php
}
?>
<a href="home.php">Back to all articles</a>