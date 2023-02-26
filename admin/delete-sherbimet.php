<?php
    include('connection/connection.php');

    class DeleteSherbimet {
        private $conn;
        
        public function __construct($conn) {
            $this->conn = $conn;
        }
        
        public function deleteSherbimi($id) {
            $stmt = $this->conn->prepare("DELETE FROM produktet WHERE id = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $stmt->close();
        }
    }

    session_start();
    $id = $_GET['id'];

    $deleter = new DeleteSherbimet($conn);
    $deleter->deleteSherbimi($id);

    $_SESSION['delete'] = "<div class='text1'>Sherbimi u fshi me sukses</div>";
    header('location:' . SITEURL . 'admin/manage-sherbimet.php');