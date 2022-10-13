<?php 

    if($_SESSION['role'] != 'user'){
        echo '<script> window.location="admin/dashboard"; </script>';
    }

?>