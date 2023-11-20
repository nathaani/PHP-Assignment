<?php session_start();

if(!isset($_SESSION["loggedIn"]) || $_SESSION["loggedIn"] != true){
    ?><header>
        <img src="img/logo.png" alt="3D Printing Logo">
        <a href="home.php">Home</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
        <a href="register.php">Register</a>
        <a href="login.php">Login</a>
    </header> <?php 
}else{
    ?><header>
        <img src="img/logo.png" alt="3D Printing Logo">
        <a href="home.php">Home</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
        <a href="register.php">Register</a>
        <a href="logout.php">Logout</a>
    </header> <?php 
}