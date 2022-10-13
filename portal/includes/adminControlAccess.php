<?php 

    if($_SESSION['role'] != 'admin'){
        echo '<script> window.location="user/dashboard"; </script>';
    }
?>