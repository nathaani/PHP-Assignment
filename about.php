 <!--HEADER-->
<?php 
    include("header.php");

    $dsn = "mysql:host=localhost;dbname=phpas;charset=utf8mb4";
    $dbusername = "root";  
    $dbpassword = "";

    $pdo = new PDO($dsn, $dbusername, $dbpassword);

    $stmt = $pdo->prepare("SELECT * FROM `about`;");

    $stmt->execute();


    if(!isset($_SESSION["loggedIn"]) || $_SESSION["loggedIn"] != true || $_SESSION["member"]){
      
        ?>

            <!--ABOUT-->
            <main>
                <?php 

                while($row = $stmt->fetch()) {   

                    ?>
                    <h1>About Us</h1>
                    <p><?=$row["content"] ?></p>
                    <?php 
                }
                ?>
            </main>
       <?php 
       
        exit();
    }else if ($_SESSION["admin"]) {
        ?>
            <!--ABOUT-->
            <main>
                <?php 
                while($row = $stmt->fetch()) {     
                    ?>
                    <h1>About Us</h1>
                    <p><?=$row["content"] ?></p>

                    <a href="edit-about.php?id=<?=$row["id"] ?>">Edit</a> 

                    
                    <?php 

                }
                ?>
            </main>
       <?php 

    }