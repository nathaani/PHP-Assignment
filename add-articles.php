<!--HEADER-->
<?php include("header.php");//insert-person-form.php
//Form that users input their data into
//fName, lName, DOB
//and hit submit
if(!isset($_SESSION["loggedIn"]) || $_SESSION["loggedIn"] != true|| $_SESSION["member"] ){
	?><p>You are NOT an admin. This is secret info</p>
	<a href="login.php">Login here</a><?php
	exit();
}else{
?>
<form action="process-add-articles.php" method="POST">

    <p>Category: </p><input type="text" name="category">
          <p>Title: </p><input type="text" name="title">
          <p>Author: </p><input type="text" name="author">
          
          <p>Image Link:</p>

          <input type="text" name="image">
          
          <p>Featured Text: </p>
          <textarea name="featured" cols="50" rows="10"></textarea>
          
          <p>Text: </p>
          <textarea name="text" cols="100" rows="10"></textarea>

          <p>Article Link: </p><input type="text" name="link">
      

          <input type="hidden" name="id">
          <input type="submit">
</form>

<?php 
} 
?>