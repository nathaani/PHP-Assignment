<!--HEADER-->
<?php include("header.php");
//process-insert-person-form.php
//receives user-submitted data


$username = $_POST["username"];
$password = $_POST["password"];

$dsn = "mysql:host=localhost;dbname=phpas;charset=utf8mb4";
$dbusername = "root";  
$dbpassword = "";  

//connect
$pdo = new PDO($dsn, $dbusername, $dbpassword); 

//prepare
$stmt = $pdo->prepare("SELECT `personId`, `username`, `role` 
	FROM `members` 
	WHERE `username` = '$username' AND `password` = '$password';");
$stmt->execute();

$row = $stmt->fetch(); // Fetch the row once
$role = $row['role'];

if ($row && $role == 'admin') {
    ?><p>Welcome Admin</p><?php

    $_SESSION["personId"] = $row['personId'];
    $_SESSION["username"] = $row['username'];
    $_SESSION["loggedIn"] = true;
    $_SESSION["member"] = false;
    $_SESSION["admin"] = true;

} elseif ($row && $role == 'member') {
    ?><p>Welcome Member</p><?php

    $_SESSION["personId"] = $row['personId'];
    $_SESSION["username"] = $row['username'];
    $_SESSION["loggedIn"] = true;
    $_SESSION["member"] = true;
    $_SESSION["admin"] = false;



} else {
    $role = false;
    ?><p>Error. <a href="login.php">Try login again</a></p><?php


}
?>