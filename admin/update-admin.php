<?php


include('parts/menu.php');

class UpdateAdmin {
    private $conn;
    private $id;
    private $emri;
    private $mbiemri;
    private $username;
    
   
    public function __construct($conn, $id) {
        $this->conn = $conn;
        $this->id = $id;
    }
    
    
    public function getAdminData() {
        $sql="SELECT * FROM  admin WHERE id=$this->id";
        $res=mysqli_query($this->conn,$sql);

        if($res==true){
            $count = mysqli_num_rows($res);

            if($count==1){
                $row=mysqli_fetch_assoc($res);
                $this->emri = $row['Emri'];
                $this->mbiemri = $row['Mbiemri'];
                $this->username = $row['Username'];
            }else{
                header('location'.SITEURL.'admin/manage-admin.php');
            }
        }
    }

    
    public function updateAdminData() {
        if(isset($_POST['submit'])){
            $this->emri = $_POST['emri'];
            $this->mbiemri = $_POST['mbiemri'];
            $this->username = $_POST['username'];
            
            $sql = "UPDATE admin SET
            emri='$this->emri',
            mbiemri='$this->mbiemri',
            username='$this->username'
            WHERE id='$this->id'
            ";
            $res=mysqli_query($this->conn,$sql);

            if($res==true){
                $_SESSION['update']="Admini u Perditsua";
                header("location:".SITEURL.'admin/manage-admin.php');
            } else {
                $_SESSION['add']= "Admini nuk u perditsua.Provoni me vone";
                header("location:".SITEURL.'admin/add-admin.php');
            }
        }
    }
}


$updateAdmin = new UpdateAdmin($conn, $_GET['id']);


$updateAdmin->getAdminData();
$updateAdmin->updateAdminData();

?>

<div class="main-content">
    <div class="outline">
        <h1>Update Admin</h1>
        <br><br>

        <form action="" method="POST">
            <table>
                <tr>
                    <td>Emri:</td>
                    <td><input type="text" name="emri" value=""></td>
                </tr>
                <tr>
                    <td>Mbiemri:</td>
                    <td><input type="text" name="mbiemri" value=""></td>
                </tr>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" value=""></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Update Admin" class="btn-update">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
