<?php
include('parts/menu.php');

class AddSherbimetPage {
    private $conn;

    public function __construct($db_conn) {
        $this->conn = $db_conn;
    }

    public function render() {
?>
        <div class="main-content">
            <div class="outline">
                <h1>Shto Sherbimet</h1>

                <br><br>
                <?php
                if(isset($_SESSION['upload'])){
                    echo $_SESSION['upload'];
                    unset ($_SESSION['upload']);
                }
                ?>
                <form action="" method="post" enctype="multipart/form-data">
                    <table class="tbl-full">
                        <tr>
                            <td>Fotografia:</td>
                            <td>
                                <input type="file" name="fotografia">
                            </td>
                        </tr>
                        <br>
                        <tr>
                            <td>Emri:</td>
                            <td><input type="text" name="emri" placeholder="Shenoni emrin "></td>
                        </tr>
                        <tr>
                            <td>Kalibri:</td>
                            <td><input type="text" name="kalibri" placeholder="Shenoni kalibrin "></td>
                        </tr>
                        <tr>
                            <td>Shenime:</td>
                            <td><textarea name="shenime" cols="30" rows="2"></textarea></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="submit" name="submit" value="Shto Sherbimin" class="btn-update">
                            </td>
                        </tr>
                    </table>
                </form>
                <?php 
                if(isset($_POST['submit'])){
                    $emri = $_POST['emri'];
                    $kalibri = $_POST['kalibri'];
                    $shenime = $_POST['shenime'];
                    if(isset($_FILES['fotografia']['name'])){
                        $fotografia = $_FILES['fotografia']['name'];
                        if($fotografia != ""){
                            $ext = end(explode('.',$fotografia));
                            $fotografia = "Arma".rand(0000,9999).".".$ext;
                            $src = $_FILES['fotografia']['tmp_name'];
                            $dst = "../img/armt/".$fotografia;
                            $upload = move_uploaded_file($src, $dst);
                            if($upload == false){
                                $_SESSION['upload'] = "Failed to upload the image";
                                header('location'.SITEURL.'admin/add-sherbimet.php');
                                die();
                            }
                        }
                    } else {
                        $fotografia = "";
                    }
                    $sql = "INSERT INTO produktet SET
                            fotografia='$fotografia',
                            emri='$emri',
                            kalibri='$kalibri',
                            shenime='$shenime' 
                            ";
                    $res = mysqli_query($this->conn, $sql);
                    if($res == true){
                        $_SESSION['add'] = "Produkti u shtua me sukses";
                        header('location:'.SITEURL.'admin/manage-sherbimet.php');
                    } else {
                        $_SESSION['add'] = "Produkti nuk u shtua ";
                        header('location:'.SITEURL.'admin/manage-sherbimet.php');
                    }
                }
                ?>
            </div>
        </div>
<?php
    }
}

$page = new AddSherbimetPage($conn);
$page->render();
