<?php 
    include('connection/connection.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>AdminDashboard</title>
</head>
<body>
    <div class="menu">
        <div class="outline">
        <div class="icon">
                <a href="../home.php"><img src="../img/logo.png" alt="logo"></a>
            </div> 
        
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="manage-admin.php">Admin</a></li>
                <li><a href="manage-aplikimet.php">Aplikimet</a></li>
                <li><a href="manage-sherbimet.php">Sherbimet</a></li>
                <li><a href="manage-users.php">Users</a></li>
                <li><a href="logout.php">Logout</a></li>


            </ul>
        </div>
    </div>