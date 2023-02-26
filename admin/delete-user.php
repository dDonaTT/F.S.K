<?php
class DeleteUser
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function deleteUser($id)
    {
        $sql = "DELETE FROM register WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            $_SESSION['delete'] = "<div class='text1'>Useri u fshi me sukses</div>";
            header('location:' . SITEURL . 'admin/manage-register.php');
        } else {
            $_SESSION['delete'] = "Useri nuk u fshi. Ju lutem provoni me vone.";
            header('location:' . SITEURL . 'admin/manage-admin.php');
        }
    }
}


include('connection/connection.php');
$deleteUser = new DeleteUser($conn);
$id = $_GET['id'];
$deleteUser->deleteUser($id);
