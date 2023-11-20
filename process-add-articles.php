<!--HEADER-->
<?php include("header.php");
//process-insert-person-form.php
//receives user-submitted data
//fName, lName, DOB
if(!isset($_SESSION["loggedIn"]) || $_SESSION["loggedIn"] != true){
	?><p>You are NOT logged in. This is secret info</p>
	<a href="login.php">Login here</a><?php
	exit();
}else{

    $category = $_POST["category"];
    $title = $_POST["title"];
    $author = $_POST["author"];
    $image = $_POST["image"];
    $text = $_POST["text"];
    $featured = $_POST["featured"];
    $link = $_POST["link"];
    
    $id = $_POST["id"];

//saves the user data to the database table

$dsn = "mysql:host=localhost;dbname=phpas;charset=utf8mb4";
$dbusername = "root";  
$dbpassword = "";

//connect
$pdo = new PDO($dsn, $dbusername, $dbpassword);

//prepare
$stmt = $pdo->prepare("INSERT INTO `articles`
    (`id`, `category`, `title`, `author`, `image`, `text`, `featured`, `link`) 
	VALUES 
	(NULL, '$category', '$title', '$author','$image', '$text', '$featured','$link');");

//execute

if($stmt->execute()){ ?>
	<h1>Success!</h1>
<?php
}else{ 
	?>
	<h1>Error</h1> <?php
}
?>

<?php 
} ?>