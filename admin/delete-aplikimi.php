<?php
    include('connection/connection.php');

    class DeleteAplikimi {
        private $conn;
        
        public function __construct($conn) {
            $this->conn = $conn;
        }
        
        public function deleteAplikimi($id) {
            $stmt = $this->conn->prepare("DELETE FROM aplikimet WHERE id = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $stmt->close();
        }
    }

    session_start();
    $id = $_GET['id'];

    $deleter = new DeleteAplikimi($conn);
    $deleter->deleteAplikimi($id);

    $_SESSION['delete'] = "<div class='text1'>Aplikimi u fshi me sukses</div>";
    header('location:' . SITEURL . 'admin/manage-aplikimet.php');