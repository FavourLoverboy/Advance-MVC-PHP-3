<?php 
    include('includes/header.php');
    echo "<title>Reset Password | MVC Setup </title>";
?>
    <form action="resetpassword.php" method="POST">

        <h2>Reset Password</h2>

        <label for="email">Email</label>
        <input type="text" name="email" required>

        <input type="submit" name="login" class="button" value="Sign Up">
        <br>
        <p>Have an account? <a href="login.php">Sign In</a></p>
        <br>
        <p>Home? <a href="../">Home</a></p>
    </form>
<?php include('includes/footer.php'); ?>