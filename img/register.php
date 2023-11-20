<!--HEADER-->
<?php include("header.php");
    if(!isset($_SESSION["loggedIn"]) || $_SESSION["loggedIn"] != true){
	    ?>
    <main>
        <h2>Login</h2>

        <form action="process-register.php" method="POST">

            <label for="username">Create Username:</label>
            <input name="username" required>

            <label for="password">Create Password:</label>
            <input name="password" required>

            <input type="submit">
        </form>
    </main>

    <?php
	    exit();
    }else{
        ?><p>you are already logged in</p>
        <section id="logout">
            <a href="logout.php">Logout</a>
        </section>
        <?php
    }