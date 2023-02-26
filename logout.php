<?php 
    include('./admin/connection/connection.php');
    session_destroy();

    header('location:'.SITEURL.'/index.php');

?>