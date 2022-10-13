<?php 
    include('includes/header.php');
    echo "<title>Registration | MVC Setup </title>";
?>
    <form action="registration.php" method="POST">

        <h2>Sign up</h2>

        <label for="email">Email</label>
        <input type="text" name="email" required>

        <label for="password">Password</label>
        <input type="password" name="password" required>

        <input type="submit" name="register" class="button" value="Sign Up">
        <br>
        <p>Have an account? <a href="login.php">Sign In</a></p>
        <br>
        <p>Home? <a href="../">Home</a></p>
    </form>    
<?php include('includes/footer.php'); ?>

<?php 
     if($_POST['register']){

        extract($_POST);

        $encryptPassword = $collect->epass($password);
        $tblquery = "INSERT INTO tbl_login VALUES(:id, :email, :password, :role, :date)";
        $tblvalue = array(
            ':id' => NULL,
            ':email' => htmlspecialchars($email),
            ':password' => htmlspecialchars($encryptPassword),
            ':role' => htmlspecialchars('user'),
            ':date' => date('Y-m-d')
        );
        $insert = $collect->tbl_insert($tblquery, $tblvalue);
        if($insert){
            echo '<script> window.location="login"; </script>';
        }
    }
?>