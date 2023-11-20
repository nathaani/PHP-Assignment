<!--HEADER-->
<?php include("header.php");
//delete-confirmation.php
//show person record to be deleted

$id = $_GET["id"];

$dsn = "mysql:host=localhost;dbname=phpas;charset=utf8mb4";
$dbusername = "root";  
$dbpassword = "";

//connect
$pdo = new PDO($dsn, $dbusername, $dbpassword);

//prepare
$stmt = $pdo->prepare("SELECT * FROM `articles` 
	WHERE `articles`.`id` = $id;");

//execute
$stmt->execute();

//process results
$row = $stmt->fetch();


?>
<h1>Delete Confirmation</h1>
<p>Are you sure you want to delete this record?</p>
<div>
	<p>Article Title: <?= $row["title"] ?></p>
</div>

<a href="home.php">No</a>
<form action="delete.php" method="POST">
	<input type="hidden" 
	name="id" 
	value="<?= $row['id'] ?>"
	>
	<input type="submit" value="Yes">
</form>