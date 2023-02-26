<?php

class Logout {
    public static function logout() {
        include('connection/connection.php');
        session_destroy();
        header('location:'.SITEURL.'admin/login-admin.php');
    }
}

Logout::logout();

?>