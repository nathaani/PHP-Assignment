    <!--HEADER-->
    <?php include("header.php");


if(!isset($_SESSION["loggedIn"]) || $_SESSION["loggedIn"] != true || $_SESSION["member"]){
      
      ?><p>You are NOT an admin. This is secret info</p>
      <a href="login.php">Login here</a><?php
      exit();
  
    }else {
      $id = $_GET["id"];

      $dsn = "mysql:host=localhost;dbname=phpas;charset=utf8mb4";
      $dbusername = "root";  
      $dbpassword = "";
  
      $pdo = new PDO($dsn, $dbusername, $dbpassword);
  
      $stmt = $pdo->prepare("SELECT * FROM `articles`
      WHERE `id` = $id;");
      $stmt->execute();

      $row = $stmt->fetch();


      ?>
        <form action="update-articles.php" method="POST">
          <p>Category: </p><input type="text" name="category" value="<?= $row["category"] ?>">
          <p>Title: </p><input type="text" name="title" value="<?= $row["title"] ?>">
          <p>Author: </p><input type="text" name="author" value="<?= $row["author"] ?>">
          
          <p>Image Link:</p>
          <input type="text" name="image" value="<?= $row["image"] ?>">

          <p>Featured Text: </p>
          <textarea name="featured" cols="100" rows="10"><?= $row["featured"] ?></textarea>

          <p>Text: </p>
          <textarea name="text" cols="100" rows="10"><?= $row["text"] ?></textarea>

          <p>Article Link: </p>
          <input type="text" name="link" value="<?= $row["link"] ?>">
      

          <input type="hidden" name="id" value="<?= $row["id"] ?>">
          <input type="submit">
        </form>
      <?php
      }
  
    