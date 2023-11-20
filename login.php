    <!--HEADER-->
    <?php include("header.php");
    if(!isset($_SESSION["loggedIn"]) || $_SESSION["loggedIn"] != true){
	    ?>
    <main>
        <h2>Login</h2>

        <form action="process-login.php" method="POST">

            <label for="username">Username:</label>
            <input name="username" required>

            <label for="password">Password:</label>
            <input name="password" required>

            <input type="submit">
        </form>
    </main>

    <?php
	    exit();
    }else{
        ?><p>you are already logged in</p>
        <section>
            <a href="logout.php">Logout</a>
        </section>
        <?php
    }