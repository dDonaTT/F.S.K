<?php 
    include('parts/menu.php');
?>

<?php

class UpdateAplikimi {
    
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

    public function getAplikimi() {
        $sql = "SELECT * FROM  aplikimet WHERE id='$this->id'";
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
                $this->nrTel = $row['NumriTelefonit'];
            } else {
                header('location: ' . SITEURL . 'admin/manage-aplikimet.php');
            }
        }
    }

    public function updateAplikimi() {
        if (isset($_POST['submit'])) {
            $this->emri = $_POST['emri'];
            $this->mbiemri = $_POST['mbiemri'];
            $this->mosha = $_POST['DOB'];
            $this->username = $_POST['username'];
            $this->email = $_POST['email'];
            $this->nrTel = $_POST['numritel'];
            $this->password = $_POST['pass'];

            $sql = "UPDATE aplikimet SET
                emri='$this->emri',
                mbiemri='$this->mbiemri',
                mosha='$this->mosha',
                username='$this->username',
                email='$this->email',
                numriTelefonit='$this->nrTel'   
                WHERE id='$this->id'
            ";

            $res = mysqli_query($this->conn, $sql);

            if ($res == true) {
                $_SESSION['update'] = "Aplikimi u Perditsua";
                header("location: " . SITEURL . 'admin/manage-aplikimet.php');
            } else {
                // handle error
            }
        }
    }
}

$id = $_GET['id'];
$updateAplikimi = new UpdateAplikimi($conn, $id);
$updateAplikimi->getAplikimi();
$updateAplikimi->updateAplikimi();

?>

<div class="main-content">
    <div class="outline">
        <h1>Update Aplikimi </h1>
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
                    <td>Mosha:</td>
                    <td><input type="text" name="DOB" value=""></td>

                </tr>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" value=""></td>

                </tr><tr>
                    <td>Email:</td>
                    <td><input type="text" name="email" value=""></td>

                </tr>
                <tr>
                    <td>NumriTelefonit:</td>
                    <td><input type="number" name="numritel" value=""></td>

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
