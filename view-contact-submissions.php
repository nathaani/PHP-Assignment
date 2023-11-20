 <!--HEADER-->
 <?php 
    include("header.php");



if(!isset($_SESSION["loggedIn"]) || $_SESSION["loggedIn"] != true || $_SESSION["member"]){
      
    ?><p>You are NOT logged in. This is secret info</p>
	<a href="login.php">Login here</a><?php
	exit();

  }else if ($_SESSION["admin"]){
    $dsn = "mysql:host=localhost;dbname=phpas;charset=utf8mb4";
    $dbusername = "root";  
    $dbpassword = "";

    $pdo = new PDO($dsn, $dbusername, $dbpassword);

    $stmt = $pdo->prepare("SELECT * FROM `contact`;");

    $stmt->execute();
    ?><p>If the category equals 0, it means they did not select the category. 
        If the category equals 1, they selected the category</p><?php
    while($row = $stmt->fetch()) {   
        ?>
        
        <ul><?php  
            ?><li>
                <p>ID = <?=$row["personId"] ?> </p>
                <p>First Name = <?=$row["fname"] ?></p>
                <p>Last Name = <?=$row["lname"] ?> </p>
                <p>Industry = <?=$row["industry"] ?></p>
                <p>Technical = <?=$row["technical"] ?></p>
                <p>Career = <?=$row["career"] ?></p>
                <p>Role = <?=$row["role"] ?></p>
            </li><?php
        ?></ul><?php
    }

  }