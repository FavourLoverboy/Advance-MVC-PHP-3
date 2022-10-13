<?php include('./includes/userControlAccess.php') ?>

<h1>Dashboard</h1>
<p>This is the dashboard page</p>
<br>
<a href="<?php echo $url[0], '/dashboard';?>">Dashboard |</a>
<a href="<?php echo $url[0], '/profile';?>">Profile |</a>
<a href="logout.php">Logout</a>