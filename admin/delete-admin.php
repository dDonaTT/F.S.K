<?php
    include('connection/connection.php');

    class AdminDeleter {
        private $conn;
        
        public function __construct($conn) {
            $this->conn = $conn;
        }
        
        public function deleteAdmin($id) {
            $stmt = $this->conn->prepare("DELETE FROM admin WHERE id = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $stmt->close();
        }
    }

    session_start();
    $id = $_GET['id'];

    $deleter = new AdminDeleter($conn);
    $deleter->deleteAdmin($id);

    $_SESSION['delete'] = "<div class='text1'>Admini u fshi me sukses</div>";
    header('location:' . SITEURL . 'admin/manage-admin.php');
?>