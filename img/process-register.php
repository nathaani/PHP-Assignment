<!--HEADER-->
<?php include("header.php");

	$username = $_POST["username"];
	$password = $_POST["password"];
	$role = 'member';

	//saves the user data to the database table

	$dsn = "mysql:host=localhost;dbname=phpas;charset=utf8mb4";
	$dbusername = "root";  
	$dbpassword = "";

	//connect
	$pdo = new PDO($dsn, $dbusername, $dbpassword);

	//prepare
	$stmt = $pdo->prepare("INSERT INTO `members` 
		(`personId`, `username`, `password`, `role`) 
		VALUES 
		(NULL, '$username', '$password','$role');");

	//execute

	if($stmt->execute()){ ?>
		<h1>Success!</h1>
		<p>You have created an account</p>
		<section>
			<a href="login.php">Login to your account</a>
		</section>
	<?php
	}else{ 
		?>
		<h1>Error</h1> <?php
	}
	?>
