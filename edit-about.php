 <!--HEADER-->
 <?php 
    include("header.php");

//edit-form.php
//Show form with user data

$id = $_GET["id"];

$dsn = "mysql:host=localhost;dbname=phpas;charset=utf8mb4";
$dbusername = "root";  
$dbpassword = "";

//connect
$pdo = new PDO($dsn, $dbusername, $dbpassword);

//prepare
$stmt = $pdo->prepare("SELECT * FROM `about` 
	WHERE `about`.`id` = $id;");

//execute
$stmt->execute();

//process results
$row = $stmt->fetch();

?>

<form action="update-about.php" method="POST">

    <h1>About Us</h1>

    <p>Edit text:</p>

    <textarea id="content" name="content" rows="20" cols="100">
    <?= $row["content"]?>
    </textarea>
	<input type="hidden" name="id" value="<?= $row["id"] ?>">

    <div>
	<input type="submit">
    </div>
</form>