<!--HEADER-->
<?php include("header.php");

$dsn = "mysql:host=localhost;dbname=phpas;charset=utf8mb4";
$dbusername = "root";  
$dbpassword = "";

// Connect to the database
$pdo = new PDO($dsn, $dbusername, $dbpassword);
$id = $_GET["id"];

// Prepare the SQL statement with a parameter
$stmt = $pdo->prepare("SELECT * FROM `articles` WHERE `id` = $id");

// Execute the query
$stmt->execute();

// Process the result

if(!isset($_SESSION["loggedIn"]) || $_SESSION["loggedIn"] != true ){
    
        if ($row = $stmt->fetch()) {     
            include("likes.php");

            ?><p>Likes: <?= $row['likes'] ?></p>
            
            <h3><?=$row["title"] ?></h3>
        
            <p><?=$row["author"] ?></p>
        
            <a href="<?=$row["image"]?>">
                <img src="<?=$row["image"]?>" alt="<?=$row["title"]?>">
            </a>
        
            <p><?=$row["text"] ?></p>
        
            <a href="<?=$row["link"] ?>">Link to original article</a>
            
            <a href="home.php">Go back to homepage</a>
            <?php
           
        
    }
}else if($_SESSION["admin"]){

       
    if ($row = $stmt->fetch()) {     
            
            ?>
            <h2>Hey Admin!</h2>
            <a href="edit-articles.php?id=<?=$row["id"]?>" >Edit</a>
            <a href="delete-articles.php?id=<?=$row["id"]?>" >Delete</a>
            <a href="add-articles.php?id=<?=$row["id"]?>" >Add</a>

            <?php include("likes.php");
            ?><p>Likes: <?= $row['likes'] ?></p>

            <h3><?=$row["title"] ?></h3>
            <p><?=$row["author"] ?></p>
        
            <a href="<?=$row["image"]?>">
                <img src="<?=$row["image"]?>" alt="<?=$row["title"]?>">
            </a>
        
            <p><?=$row["text"] ?></p>
        
            <a href="<?=$row["link"] ?>">Link to original article</a>
            
            <a href="home.php">Go back to homepage</a>
            <?php
              
    
        
}
}else if ($_SESSION["member"]) {

    if ($row = $stmt->fetch()) {     
       
        include("likes.php");
        
        ?>
        <form method='post'>
            <button type='submit' name='like'><?=$likeButtonText ?></button>
        </form>
        <p>Likes: <?= $row['likes'] ?></p>

        
        
        <h3><?=$row["title"] ?></h3>

        <p><?=$row["author"] ?></p>

        <a href="<?=$row["image"]?>">
            <img src="<?=$row["image"]?>" alt="<?=$row["title"]?>">
        </a>
    
        <p><?=$row["text"] ?></p>
    
        <a href="<?=$row["link"] ?>">Link to original article</a>
        
        <a href="home.php">Go back to homepage</a>
        <?php



        

    }

}

?>
