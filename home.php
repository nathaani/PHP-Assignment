<!--HEADER-->
<?php include("header.php");

$dsn = "mysql:host=localhost;dbname=phpas;charset=utf8mb4";
$dbusername = "root";  
$dbpassword = "";

//connect
$pdo = new PDO($dsn, $dbusername, $dbpassword);

//prepare
$stmt = $pdo->prepare("SELECT * FROM `articles`;");

//execute
$stmt->execute();

//process results
$stmt2 = $pdo->prepare("SELECT * FROM `articles` WHERE `featuredArticles` = '1'");
$stmt2->execute();

if(!isset($_SESSION["loggedIn"]) || $_SESSION["loggedIn"] != true){

    while ($row = $stmt2->fetch()) {
        // Output each row data as needed
        ?>  
            <h2>Featured Article</h2>
            <h3><?=$row["title"] ?></h3>
            
            <p><?=$row["author"] ?></p>
        
            <a href="<?=$row["image"]?>">
                <img src="<?=$row["image"]?>" alt="<?=$row["title"]?>">
            </a>
            
            <p><?=$row["featured"] ?></p>
        
            <a href="articles.php?id=<?=$row["id"]?>" >Read More</a>

        <?php
    }


    while($row = $stmt->fetch()) {     
        
        ?><h2><?=$row["category"] ?></h2>

        <h3><?=$row["title"] ?></h3>
        
        <p><?=$row["author"] ?></p>
    
        <a href="<?=$row["image"]?>">
            <img src="<?=$row["image"]?>" alt="<?=$row["title"]?>">
        </a>
        
        <p><?=$row["featured"] ?></p>
    
        <a href="articles.php?id=<?=$row["id"]?>" >Read More</a>
        
        <?php
    }
}else if($_SESSION["admin"]){
    

    while ($row = $stmt2->fetch()) {
        // Output each row data as needed
        ?>  
           <h2>Featured Article</h2>

            <h3><?=$row["title"] ?></h3>
            
            <p><?=$row["author"] ?></p>
        
            <a href="<?=$row["image"]?>">
                <img src="<?=$row["image"]?>" alt="<?=$row["title"]?>">
            </a>
            
            <p><?=$row["featured"] ?></p>
        
            <a href="articles.php?id=<?=$row["id"]?>" >Read More</a>
            <a href="edit-articles.php?id=<?=$row["id"]?>" >Edit</a>

            <a href="delete-articles.php?id=<?=$row["id"]?>" >Delete</a>
            <a href="add-articles.php?id=<?=$row["id"]?>" >Add</a>
            <a href="remove-featuredarticle.php?id=<?=$row["id"]?>">Remove featured</a>


        <?php
    }
    while($row = $stmt->fetch()) {     
        ?><h3><?=$row["title"] ?></h3>
    
        <p><?=$row["author"] ?></p>
        
        <a href="<?=$row["image"]?>">
            <img src="<?=$row["image"]?>" alt="<?=$row["title"]?>">
        </a>
        
        <p><?=$row["featured"] ?></p>
    
        <a href="articles.php?id=<?=$row["id"]?>" >Read More</a>
        
        <a href="edit-articles.php?id=<?=$row["id"]?>" >Edit</a>

        <a href="delete-articles.php?id=<?=$row["id"]?>" >Delete</a>
        <a href="add-articles.php?id=<?=$row["id"]?>" >Add</a>
        <a href="update-featuredarticle.php?id=<?=$row["id"]?>">Set featured</a>


        <?php
    }

}else if($_SESSION["member"]){
    while ($row = $stmt2->fetch()) {
        // Output each row data as needed
        ?>  
            <h2>Featured Article</h2>

            <h3><?=$row["title"] ?></h3>
            
            <p><?=$row["author"] ?></p>
        
            <a href="<?=$row["image"]?>">
                <img src="<?=$row["image"]?>" alt="<?=$row["title"]?>">
            </a>
            
            <p><?=$row["featured"] ?></p>


            <a href="articles.php?id=<?=$row["id"]?>" >Read More</a>

        <?php
    }
    while($row = $stmt->fetch()) {     
        ?><h3><?=$row["title"] ?></h3>
    
        <p><?=$row["author"] ?></p>
    
        <a href="<?=$row["image"]?>">
            <img src="<?=$row["image"]?>" alt="<?=$row["title"]?>">
        </a>
        
        <p><?=$row["featured"] ?></p>
    
        <a href="articles.php?id=<?=$row["id"]?>" >Read More</a>
        
        <?php
    }
}

?>