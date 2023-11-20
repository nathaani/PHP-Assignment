<!--HEADER-->
<?php include("header.php");


$id = $_POST["id"];

//saves the user data to the database table

$dsn = "mysql:host=localhost;dbname=phpas;charset=utf8mb4";
$dbusername = "root";  
$dbpassword = "";

//connect
$pdo = new PDO($dsn, $dbusername, $dbpassword);

//prepare
$stmt = $pdo->prepare("DELETE FROM `articles` WHERE `articles`.`id` = '$id';");

//execute
if($stmt->execute()){
	?><p>Record <?=$id ?> deleted</p><?php
}else{
	?><p>Could not delete record</p><?php
}
?>
<a href="home.php">Back to all articles</a>