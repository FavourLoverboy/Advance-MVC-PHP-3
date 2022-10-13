<?php include('./includes/adminControlAccess.php') ?>

<h1>Admin Dashboard</h1>
<p>This is the admin dashboard page</p>
<br>
<a href="<?php echo $url[0], '/dashboard';?>">Dashboard |</a>
<a href="<?php echo $url[0], '/profile';?>">Profile |</a>
<a href="logout.php">Logout</a>