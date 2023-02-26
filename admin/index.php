<?php

// include the menu file
include('parts/menu.php');

class Dashboard {

    // define properties
    private $conn;

    // constructor
    public function __construct($db) {
        $this->conn = $db;
    }

    // count number of admins
    public function countAdmins() {
        $sql = "SELECT * FROM admin";
        $res = mysqli_query($this->conn, $sql);
        $count = mysqli_num_rows($res);
        return $count;
    }

    // count number of applications
    public function countApplications() {
        $sql = "SELECT * FROM aplikimet";
        $res = mysqli_query($this->conn, $sql);
        $count = mysqli_num_rows($res);
        return $count;
    }

    // count number of products
    public function countProducts() {
        $sql = "SELECT * FROM produktet";
        $res = mysqli_query($this->conn, $sql);
        $count = mysqli_num_rows($res);
        return $count;
    }

    // count number of users
    public function countUsers() {
        $sql = "SELECT * FROM register";
        $res = mysqli_query($this->conn, $sql);
        $count = mysqli_num_rows($res);
        return $count;
    }

    public function displayDashboard() {
        ?>
        <div class="main-content">
            <div class="outline">
                <h3>DASHBOARD</h3>
                <br>
                <?php 
                if(isset($_SESSION['login'])) {
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                }
                ?>
                <br>
                <div class="boxes text-center">
                    <h1><?php echo $this->countAdmins();?></h1>
                    <br>
                    Adminat
                </div>
                <div class="boxes text-center">
                    <h1><?php echo $this->countApplications();?></h1>
                    <br>
                    Aplikimet
                </div>
                <div class="boxes text-center">
                    <h1><?php echo $this->countProducts();?></h1>
                    <br>
                    Produktet
                </div>
                <div class="boxes text-center">
                    <h1><?php echo $this->countUsers();?></h1>
                    <br>
                   Userat
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        </div>
        <?php
    }
}


$dashboard = new Dashboard($conn);


$dashboard->displayDashboard();


mysqli_close($conn);

?>
