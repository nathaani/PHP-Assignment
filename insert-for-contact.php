<!--HEADER-->
<?php include("header.php");

// process-insert-person-form.php
// receives user-submitted data
// fName, lName, DOB

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$industry = isset($_POST["industry"]) ? 1 : 0; // Check if checkbox is checked
$technical = isset($_POST["technical"]) ? 1 : 0; // Check if checkbox is checked
$career = isset($_POST["career"]) ? 1 : 0; // Check if checkbox is checked
$role = $_POST["role"];

$dsn = "mysql:host=localhost;dbname=phpas;charset=utf8mb4";
$dbusername = "root";
$dbpassword = "";

// connect
$pdo = new PDO($dsn, $dbusername, $dbpassword);

// prepare
$stmt = $pdo->prepare("INSERT INTO `contact` 
    (`personId`, `fname`, `lname`, `email`, `industry`, `technical`, `career`, `role`) 
    VALUES 
    (NULL, '$fname', '$lname', '$email', '$industry', '$technical', '$career', '$role')");

// execute
if ($stmt->execute()) { 

    ?>
    <h1>Thank you for reaching out!</h1>
    <p> We've received your message and will get back to you shortly. Your interest is appreciated!</p>
    <?php

} else {
    
    ?><h1>Error</h1> <?php
}
?>