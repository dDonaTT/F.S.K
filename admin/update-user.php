<?php 
    include('parts/menu.php');
?>

<?php

class UpdateUser {
    
    private $conn;
    private $id;
    private $emri;
    private $mbiemri;
    private $mosha;
    private $username;
    private $email;
    private $nrTel;

    public function __construct($conn, $id) {
        $this->conn = $conn;
        $this->id = $id;
    }

    public function getUser() {
        $sql = "SELECT * FROM  register WHERE id='$this->id'";
        $res = mysqli_query($this->conn, $sql);

        if ($res == true) {
            $count = mysqli_num_rows($res);

            if ($count == 1) {
                $row = mysqli_fetch_assoc($res);
                $this->emri = $row['Emri'];
                $this->mbiemri = $row['Mbiemri'];
                $this->mosha = $row['Mosha'];
                $this->username = $row['Username'];
                $this->email = $row['Email'];
                $this->nrTel = $row['NrTel'];
            } else {
                header('location: ' . SITEURL . 'admin/manage-admin.php');
            }
        }
    }

    public function updateUser() {
        if (isset($_POST['submit'])) {
            $this->emri = $_POST['emri'];
            $this->mbiemri = $_POST['mbiemri'];
            $this->username = $_POST['username'];

            $sql = "UPDATE register SET
                emri='$this->emri',
                mbiemri='$this->mbiemri',
                username='$this->username'
                WHERE id='$this->id'
            ";

            $res = mysqli_query($this->conn, $sql);

            if ($res == true) {
                $_SESSION['update'] = "";
                header("location: " . SITEURL . 'admin/manage-register.php');
            } else {
                // handle error
            }
        }
    }
}

$id = $_GET['id'];
$updateUser = new UpdateUser($conn, $id);
$updateUser->getUser();
$updateUser->updateUser();

?>

<div class="main-content">
    <div class="outline">
        <h1>Update User </h1>
        <br><br>

        <form action="" method="POST">
            <table>
                <tr>
                    <td>Emri:</td>
                    <td>
                        <input type="text" name="emri" value="">
                    </td>
                </tr>
                <br>
                <tr>
                    <td>Mbiemri:</td>
                    <td><input type="text" name="mbiemri" value=""></td>

                </tr>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" value=""></td>

                </tr>
                
                <tr>
                    <td coolspan="2">
                        <input type="submit" name="submit" value="Update Admin" class="btn-update">
                    </td>
                </tr>
            </table>
            </form>
    </div>
</div>
