
<!--HEADER-->
<?php include("header.php");


if(!isset($_SESSION["loggedIn"]) || $_SESSION["loggedIn"] != true || $_SESSION["member"]){

?>
<!--CONTACT FORM-->
<main>
    <h2>Contact Us</h2>
    <form action="insert-for-contact.php" method="post">
        <fieldset>
            <legend>Contact Information</legend>

            <label for="fname">First name:</label>
            <input name="fname" required>

            <label for="lname">Last name:</label>
            <input name="lname" required>

            <label for="email">Email:</label>
            <input type="mail" name="email" placeholder="johndoe.@gmail.com" required>

        </fieldset>
        <!--CHECKBOXES-->
        <fieldset>
            <legend>Your Interests</legend>

            <input type="checkbox" name="industry">
            <label for="industry">Industry</label>

            <input type="checkbox" name="technical">
            <label for="technical">Technical</label>

            <input type="checkbox" name="career">
            <label for="career">Career</label>
        </fieldset>

        <!--DROPDOWN-->
        <fieldset>
            <legend>Your Role</legend>

            <select name="role">
                <option value="Writer">Writer</option>
                <option value="Contributor">Contributor</option>
                <option value="Administrator">Administrator</option>
            </select>
        </fieldset>

        <input type="submit">

    </form>

</main>

<?php
}else if($_SESSION["admin"]){

    ?>
    <!--CONTACT FORM-->
    <main>
        <h2>Contact Us</h2>
        <form action="insert-for-contact.php" method="post">
            <fieldset>
                <legend>Contact Information</legend>

                <label for="fname">First name:</label>
                <input name="fname" required>

                <label for="lname">Last name:</label>
                <input name="lname" required>

                <label for="email">Email:</label>
                <input type="mail" name="email" placeholder="johndoe.@gmail.com" required>

            </fieldset>
            <!--CHECKBOXES-->
            <fieldset>
                <legend>Your Interests</legend>

                <input type="checkbox" name="industry">
                <label for="industry">Industry</label>

                <input type="checkbox" name="technical">
                <label for="technical">Technical</label>

                <input type="checkbox" name="career">
                <label for="career">Career</label>
            </fieldset>

            <!--DROPDOWN-->
            <fieldset>
                <legend>Your Role</legend>

                <select name="role">
                    <option value="Writer">Writer</option>
                    <option value="Contributor">Contributor</option>
                    <option value="Administrator">Administrator</option>
                </select>
            </fieldset>

            <input type="submit">

        </form>

    </main>
    <a href="view-contact-submissions.php">View all contact form submissions</a>
    
<?php

}