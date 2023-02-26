<?php

include('parts/menu.php');

class AddAdmin {
    private $emri;
    private $mbiemri;
    private $username;
    private $password;
    private $conn;

    public function __construct($emri, $mbiemri, $username, $password, $conn) {
        $this->emri = $emri;
        $this->mbiemri = $mbiemri;
        $this->username = $username;
        $this->password = md5($password);
        $this->conn = $conn;
    }

    public function execute() {
        $sql = "INSERT INTO admin SET
                emri='" . $this->emri . "',
                mbiemri='" . $this->mbiemri . "',
                username='" . $this->username . "',
                password='" . $this->password . "'";

        $res = mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));

        if ($res == TRUE) {
            $_SESSION['add'] = "<div class='text1'>Admini u shtua me sukses</div>";
            header("location:".SITEURL.'admin/manage-admin.php');
        } else {
            $_SESSION['add'] = "<div class='text'>Admini nuk u shtua.Provoni me von</div>";
            header("location:".SITEURL.'admin/add-admin.php');
        }
    }
}

if(isset($_POST['submit'])){
    $emri = $_POST['emri'];
    $mbiemri = $_POST['mbiemri'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    $conn = mysqli_connect('localhost', 'root', '', 'fsk');
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $add_admin = new AddAdmin($emri, $mbiemri, $username, $password, $conn);
    $add_admin->execute();

    mysqli_close($conn);
}
?>

<div class="main-content">
    <div class="outline">
        <h1>Shto Admin</h1>
        <?php
            if(isset($_SESSION['add'])) {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }
        ?>

        <form action="" method="POST">
            <table>
                <tr>
                    <td>Emri:</td>
                    <td>
                        <input type="text" name="emri" placeholder="Shenoni emrin ">
                    </td>
                </tr>
                <br>
                <tr>
                    <td>Mbiemri:</td>
                    <td><input type="text" name="mbiemri" placeholder="Shenoni mbiemri "></td>
                </tr>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" placeholder="Shenoni username "></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" placeholder="Shenoni passwordin "></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Admin" class="btn-update">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
